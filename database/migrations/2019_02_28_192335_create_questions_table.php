<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exam_question_id')->unsigned()->nullable();
            $table->integer("subject_id")->unsigned()->nullable();

            $table->text('text');
            $table->boolean('is_correct')->nullable();
            $table->string('correct_answer')->nullable();
            $table->string('type',10);
            $table->text('choices')->nullable();

            $table->softDeletes();
            $table->timestamps();
            //$table->foreign('exam_id')->references('id')->on('exams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
