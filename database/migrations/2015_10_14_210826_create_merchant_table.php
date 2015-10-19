<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('merchant',function(Blueprint $table){
                 
                 $table->increments('id');
                 $table->string('shopname');
                 $table->string('contactnumber');
                 $table->string('address');
                 $table->string('bannerimage');
                 $table->string('category');
                 $table->string('bannermessage');
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
        Schema::drop('merchant');
    }
}
