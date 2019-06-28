<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('class_subject_id')->unsigned()->nullable();
            $table->integer('teacher_id')->unsigned();

            $table->string('name',191);
            $table->text('description')->nullable();
            $table->dateTime('begin_at')->nullable();
            $table->dateTime('end_at')->nullable();

            $table->float('mark')->unsigned()->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('exams');
    }
}
