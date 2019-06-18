<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\ClassStudent;
use App\Guardian;
use App\Http\Requests\StudentRequest;
use App\Http\Resources\ClassroomResources;
use App\Http\Resources\UserResources;
use App\Student;
use App\User;
use App\Http\Resources\StudentResources;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Validator;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $users = UserResources::collection(User::all());

        $students=Student::all();
       $classrooms=Classroom::all();


        return view('students')
            ->with(compact('students'))
            ->with(compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $request->validated();

        $user = User::create([
            "name"=>$request->name,
            "password"=>$request->guardian_mobile_number,
            "username"=>$request->name.$request->identity_number,
            "email"=>'t'.$request->identity_number.'@gg.com',
            "identity_number"=>$request->identity_number,
           // "phone_number"=>$request->guardian_mobile_number,
            "notes"=>$request->notes,
            "dob"=>$request->dob,
        ]);
        $guardian = Guardian::create([
            "name"=>$request->guardian_name,
            "identity_number"=>$request->guardian_identity_number,
            "phone_number"=>$request->guardian_mobile_number,
        ]);
        $student = Student::create([
            "user_id"=>$user->id,
            "guardian"=>$guardian->id,
//            "guardian_data"=>json_encode(
//                array(
//                    "guardian_identity_number"=>$request->guardian_identity_number,
//                    "guardian_mobile_number"=>$request->guardian_mobile_number,
//                    "guardian_name"=>$request->guardian_name,
//                )
//            ),
        ]);
        ClassStudent::create([
            'student_id'=>$student->id,
            'classroom_id'=>$request->classroom
        ]);
        return $this->sendResponse("","تمت عملية الاضافة بنجاح");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($identity_number)
    {
        try {
            $user = User::where('identity_number',$identity_number)->get()->first();
            return new StudentResources(Student::where('user_id',$user->id)->get()->first());

//            return view('students')
//                ->with(compact('student'));
        }catch( ModelNotFoundException $e){
            return $this->sendError(  'هدا العنصر غير موجود');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($identity_number)
    {
        try {
            $user = User::where('identity_number', $identity_number)->first();
            $student = Student::where('user_id',$user->id)->first()->delete();
//            $result =  Student::destroy($student->id);
            return $this->sendResponse($student);
        }catch( ModelNotFoundException $e){
            return $this->sendError(  'هدا العنصر غير موجود');
        }
    }
}

