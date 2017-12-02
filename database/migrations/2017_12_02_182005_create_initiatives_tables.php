<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitiativesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initiatives', function (Blueprint $table) {
            $table->increments('initiative_id');
            $table->string('name');
            $table->text('location');
            $table->text('description');
            $table->boolean('is_pre');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('conducted_by');
            $table->integer('donation_amount');
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
        Schema::drop("initiatives");
    }
}
