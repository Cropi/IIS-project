<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Treatments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table){
            $table->increments('id');
            $table->string('diagnosis');
            $table->DateTime('startDate');
            $table->string('state');
            $table->unsignedInteger('price');

            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('animal_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('treatments', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('animal_id')->references('id')->on('animals')->onDelete('SET NULL');
            // TODO another table for medicines
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treatments');
    }
}
