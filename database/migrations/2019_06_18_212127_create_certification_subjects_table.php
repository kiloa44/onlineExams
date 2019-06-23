<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificationSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certification_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("certification_id")->unsigned();
            $table->integer("subject_id")->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('certification_id')->references('id')->on('certifications');
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
        Schema::dropIfExists('certification_subjects');
    }
}
