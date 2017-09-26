<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventtypesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('eventtypes', function(Blueprint $etypetab){
            $etypetab->increments('id');
            $etypetab->string('type');
            $etypetab->string('status');
             $etypetab->timestamps();
            $etypetab->softDeletes();
          
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
    }
}
