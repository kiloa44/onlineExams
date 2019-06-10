<?php

namespace App\Http\Controllers;

use App\ClassStudent;
use App\Http\Requests\StudentRequest;
use App\Http\Resources\UserResources;
use App\Student;
use App\User;
use App\Http\Resources\StudentResources;
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
        $users = UserResources::collection(User::all());
        $students=StudentResources::collection(Student::all());



        return view('students')
            ->with(compact('students'))
            ->with(compact('users'));
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
            "name"=>$request->data->name,
            "password"=>$request->data->guardian_mobile_number,
            "identity_number"=>$request->data->identity_number,
            "notes"=>$request->data->notes,
            "dob"=>$request->data->dob,
        ]);
        $student = Student::create([
            "user_id"=>$user->id,
            "guardian_data"=>json_encode(
                array(
                    "guardian_identity_number"=>$request->data->guardian_identity_number,
                    "guardian_mobile_number"=>$request->data->guardian_mobile_number,
                    "guardian_name"=>$request->data->guardian_name,
                )
            ),
        ]);
        ClassStudent::create([
            'student_id'=>$student->id,
            'classroom_id'=>$request->data->classroom
        ]);
        return $this->sendResponse("","تمت عملية الاضافة بنجاح");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
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
    public function destroy(Student $student)
    {
        //
    }
}
