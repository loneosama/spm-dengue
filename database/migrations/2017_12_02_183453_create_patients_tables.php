<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('patients_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->text('email');           
            $table->string('dob');
            $table->string('address');
            $table->string('bloodgroup');
            $table->string('city');
            $table->string('district');
            $table->text('diagnosed');
            $table->boolean('is_diagnosed_before');   
           
            
        });
   

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop("patients");
        
    }
}
