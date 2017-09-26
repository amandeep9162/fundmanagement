<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableOfEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function(Blueprint $tab){
            $tab->longText('description');
            $tab->string('video')->nullable();
            $tab->string('images')->nullable();
            $tab->string('phone');
            $tab->text('address');
            $tab->text('pin_code')->nullable();
            $tab->text('account');
            $tab->text('amount');
            $tab->text('user_id');
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
