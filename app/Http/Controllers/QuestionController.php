<?php

namespace App\Http\Controllers;

use App\Question;
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
        if(count(Question::all())>0) {
            return Question::all("id");
        }else{
            return("there is no questions");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Whatever";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request,
//            [
//                'type'=>'required',
//                'text'=>'required'
//            ]
//        );

        $this->validate($request, [
            'type' => 'required',
            'text' => 'required'
        ]);

        $question = new Question($this["type"], $this["text"]);
        $question->type = $request->input('type');
        $question->text = $request->input('text');

        $question->save();

        return "123";//Question::where("type",'choose')->get();
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
    public function destroy(Question $question)
    {
        //
    }
}
