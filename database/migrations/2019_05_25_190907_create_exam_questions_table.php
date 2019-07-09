<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("question_id")->unsigned();
            $table->integer("exam_id")->unsigned();
            
            $table->integer("student_id")->unsigned()->nullable();

            $table->float("question_mark")->unsigned()->nullable();
            $table->float("deserved_mark")->unsigned()->nullable();

            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('exam_id')->references('id')->on('exams');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_questions');
    }
}
