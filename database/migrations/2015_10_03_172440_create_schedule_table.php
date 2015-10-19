<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //
         Schema::create('schedule',function(Blueprint $table){
             
            $table->increments('id');
            $table->string('deliverycompany_id'); 
            $table->string('day');
            $table->string('starttime');
            $table->string('endtime');
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
         Schema::drop('schedule');
    }
}
