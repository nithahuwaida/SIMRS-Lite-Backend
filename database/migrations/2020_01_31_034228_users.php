<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id',5);
            $table->string('nip',16);
            $table->string('name',50);
            $table->text('address');
            $table->string('phone_number',12);
            $table->string('username',25);
            $table->text('password');
            $table->timestamps();
        });
        Schema::table('users', function(Blueprint $table){ 
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade');
            $table->integer('polyclinic_id')->unsigned();
            $table->foreign('polyclinic_id')->references('id')->on('polyclinics')->onUpdate('cascade');
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
