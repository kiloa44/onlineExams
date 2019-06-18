<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinuteMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minute_meetings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('day');
            $table->date('date');
            $table->time('starting');
            $table->time('ending');
            $table->integer('number');
            $table->text('attendees');
            $table->text('absentees');
            $table->longText('content');
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
        Schema::dropIfExists('minute_meetings');
    }
}
