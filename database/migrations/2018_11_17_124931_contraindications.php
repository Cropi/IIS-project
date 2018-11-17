<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contraindications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contraindications', function (Blueprint $table){
            $table->integer('medicine_id')->unsigned()->nullable();
            $table->string('disease');
            $table->timestamps();
        });

        Schema::table('contraindications', function (Blueprint $table){
            $table->foreign('medicine_id')->references('id')->on('medicines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contraindications');
    }
}
