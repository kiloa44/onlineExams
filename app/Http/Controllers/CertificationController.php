<?php

namespace App\Http\Controllers;

use App\Certification;
use App\Http\Requests\CertificationRequest;
use App\Student;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certifications = Certification::all();
        return view("certifications")->with(compact('certifications'));
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
    public function store(CertificationRequest $request)
    {
        try{
            $request->validated();
            $user = User::where('identity_number',$request->student_identity_number)->first();
            $student = Student::where("user_id",$user->id)->first();
            Certification::create([
                'student_id'=>$student->id,
                'student_name'=>$student->user->name,
                'student_dob'=>$student->user->dob,
                'notes'=>$request->notes,
                'student_class'=>$request->classroom
            ]);
            return $this->sendResponse("","تمت عملية الاضافة بنجاح");
        }
        catch (ModelNotFoundException $e)
        {
            return $e;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function show(Certification $certification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function edit(Certification $certification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certification $certification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $certification= Certification::findOrFail($id)->first()->delete();
//            $result =  Student::destroy($student->id);
            return $this->sendResponse($certification);
        }catch( ModelNotFoundException $e){
            return $this->sendError(  'هدا العنصر غير موجود');
        }
    }
}
