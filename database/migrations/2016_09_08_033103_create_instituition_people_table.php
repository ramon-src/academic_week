<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituitionPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituition_people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('instituition_id')->unsigned();
            $table->bigInteger('person_id')->unsigned();
            $table->string('registry_number');
            $table->timestamps();
            $table->foreign('instituition_id')->references('id')->on('instituitions');
            $table->foreign('person_id')->references('id')->on('people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('instituition_people');
    }
}
