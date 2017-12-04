<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('treatments', function (Blueprint $table) {
            $table->increments('treatments_id');
            $table->string('treatment_name');
            $table->string('treatment_type');
            $table->text('description');                       
            $table->text('origin');
            $table->bool('is_foreign_doctor');

            $table->timestamps();
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
        Schema::drop("treatments");
        
    }
}
