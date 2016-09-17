<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject');
            $table->string('description');
            $table->string('local');
            $table->time('init_hour');
            $table->time('end_hour');
            $table->smallInteger('max_people');
            $table->bigInteger('lecture_category_id')->unsigned();
            $table->bigInteger('event_schedule_id')->unsigned();
            $table->timestamps();
            $table->foreign('lecture_category_id')->references('id')->on('lectures_category');
            $table->foreign('event_schedule_id')->references('id')->on('event_schedule');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lectures');
    }
}
