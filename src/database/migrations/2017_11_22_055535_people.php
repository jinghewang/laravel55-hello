<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class People.
 *
 * @author  The scaffold-interface created at 2017-11-22 05:55:35am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class People extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('people',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->integer('age');
        
        $table->integer('country');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('people');
    }
}
