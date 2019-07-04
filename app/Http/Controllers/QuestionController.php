<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Http\Resources\QuestionResources;
use App\Question;
use App\Subject;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use Illuminate\Validation;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        $subjects= Subject::all();
        return view('questions')
            ->with(compact('subjects'))
            ->with(compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
        $request->validated();
        Question::create($request->all());
        return $this->sendResponse("","تمت عملية الاضافة بنجاح");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $question = Question::findOrFail($id)->delete();
            return $this->sendResponse($question);
        }catch( ModelNotFoundException $e) {
            return $this->sendError('هدا العنصر غير موجود');
        }
    }


    public function GetForExam($id){
        try {
            $question = Question::where('id',$id)->first();
            return new QuestionResources($question);
        }catch( ModelNotFoundException $e) {
            return $this->sendError('هدا العنصر غير موجود');
        }
    }
}
