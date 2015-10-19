<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryvehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('deliveryvehicle',function(Blueprint $table){
             
            $table->increments('id');
            $table->string('vehicle_id'); 
            $table->string('delivercompany_id'); 
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
        Schema::drop('deliveryvehicle');
    }
}
