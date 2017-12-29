<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Invoices.
 *
 * @author  The scaffold-interface created at 2017-12-29 02:29:45am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Invoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('invoices',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('no');
        
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
        Schema::drop('invoices');
    }
}
