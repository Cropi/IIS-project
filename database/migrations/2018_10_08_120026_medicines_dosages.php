<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MedicinesDosages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosages', function (Blueprint $table){
            $table->integer('medicine_id')->unsigned()->nullable();
            $table->integer('treatment_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('user_id_given_by')->unsigned()->nullable();
            $table->string('disease');
            $table->integer('amount1')->nullable();
            $table->string('amount2')->nullable();
            $table->integer('timeToConsume1')->nullable();
            $table->string('timeToConsume2')->nullable();
            $table->timestamps();

        });

        Schema::table('dosages', function (Blueprint $table){
            $table->foreign('medicine_id')->references('id')->on('medicines')->onDelete('cascade');
            $table->foreign('treatment_id')->references('id')->on('treatments')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_id_given_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosages');
    }
}
