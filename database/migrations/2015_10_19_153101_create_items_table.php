<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('items',function(Blueprint $table){
             
            $table->increments('id');
            $table->string('merchant_id'); 
            $table->string('itemname');
            $table->string('price');
            $table->string('description');
            $table->string('thumbnailimage');
            $table->string('category');
            $table->string('status');
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
         Schema::drop('items');
        
    }
}
