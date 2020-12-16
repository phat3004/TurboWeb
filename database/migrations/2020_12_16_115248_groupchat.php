<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Groupchat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatgroups', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('IdGroup');
            $table->string('TextInbox'); 
            $table->unsignedBigInteger('IdUser');
            $table->timestamps();
            $table->boolean('Deleted');
            $table->softDeletes();
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
