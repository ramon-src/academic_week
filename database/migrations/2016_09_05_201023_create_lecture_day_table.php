<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLectureDayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture_day', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('local');
            $table->time('init_hour');
            $table->time('end_hour');
            $table->smallInteger('max_people');
            $table->timestamps();
            $table->bigInteger('event_schedule_id')->unsigned();
            $table->bigInteger('lecture_id')->unsigned();

            $table->foreign('event_schedule_id')->references('id')->on('event_schedule');
            $table->foreign('lecture_id')->references('id')->on('lectures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lecture_day');
    }
}
