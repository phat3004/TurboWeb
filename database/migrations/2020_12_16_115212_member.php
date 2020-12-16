<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Member extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table){          
            $table->bigIncrements('ID');
            $table->string('Avarta',100);
            $table->string('Name');
            $table->string('Password'); 
            $table->string('Story');
            $table->boolean('Status');
            $table->timestamps();
            $table->boolean('Deleted');
            $table->softDeletes();
        }
        );
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
