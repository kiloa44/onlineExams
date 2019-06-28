<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\ClassSubject;
use App\Exam;
use App\ExamQuestion;
use App\Http\Requests\ExamRequest;
use App\Subject;
use App\Teacher;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        $teachers = Teacher::all();
        $classrooms= Classroom::all();
        $exams = Exam::all();
        return view('exams')
            ->with(compact('exams'))
            ->with(compact('teachers'))
            ->with(compact('classrooms'))
            ->with(compact('subjects'));
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
    public function store(ExamRequest $request)
    {
        $request->validated();
        $classSubject = ClassSubject::create([
            'classroom_id'=>$request->classroom,
            'subject_id'=>$request->subject,
        ]);

        $exam = Exam::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'teacher_id'=>$request->teacher,
            'class_subject_id'=>$classSubject->id,
        ]);
        foreach ($request->questions as $question){
            ExamQuestion::create([
                "exam_id"=>$exam->id,
                "question_id"=>$question,
            ]);
        }
        return $this->sendResponse('','تمت عملية الإضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $exam = Exam::findOrFail($id)->first()->delete();
            return $this->sendResponse($exam);
        }catch( ModelNotFoundException $e){
            return $this->sendError(  'هدا العنصر غير موجود');
        }
    }
}
