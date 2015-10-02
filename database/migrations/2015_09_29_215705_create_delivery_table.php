<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery',function(Blueprint $table){
                 
                 $table->increments('id');
                 $table->string('companyname');
                 $table->string('contactnumber');
                 $table->string('address');
                 $table->string('registrationcode');
                 $table->string('insurancecompany');
                 $table->string('policynumber');
                 $table->string('email');
                 $table->string('registrationstatus');
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
        Schema::drop('delivery');
    }
}
