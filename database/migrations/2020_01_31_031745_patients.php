<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Patients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id',11);
            $table->string('name',50);
            $table->text('address');
            $table->string('phone_number',12);
            $table->timestamps();
        });
        Schema::table('patients', function(Blueprint $table){ 
            $table->integer('polyclinic_id')->unsigned();
            $table->foreign('polyclinic_id')->references('id')->on('polyclinics')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
