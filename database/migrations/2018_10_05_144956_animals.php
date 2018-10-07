<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Animals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->DateTime('birthday')->nullable();
            $table->DateTime('lastVisit')->nullable();
            $table->integer('owner_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('animals', function (Blueprint $table){
            $table->foreign('owner_id')->references('id')->on('owners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
