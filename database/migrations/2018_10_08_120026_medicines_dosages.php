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
            $table->string('disease');
            $table->integer('amount1');
            $table->string('amount2');
            $table->integer('timeToConsume1');
            $table->string('timeToConsume2');
            $table->timestamps();
        });

        Schema::table('dosages', function (Blueprint $table){
            $table->foreign('medicine_id')->references('id')->on('medicines');
            $table->foreign('treatment_id')->references('id')->on('treatments');
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
