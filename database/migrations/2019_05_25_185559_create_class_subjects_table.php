<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("subject_id")->unsigned();
            $table->integer("classroom_id")->unsigned();

            $table->float("rate")->nullable();

            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('classroom_id')->references('id')->on('classrooms');
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
        Schema::dropIfExists('class_subjects');
    }
}
