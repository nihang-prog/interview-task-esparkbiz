<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnologies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technologies', function (Blueprint $table) {
            $table->increments('tech_id');
            $table->bigInteger('user_id');
            $table->boolean('php');
            $table->string('plevel',10);
            $table->boolean('mysql');
            $table->string('mlevel',10);
            $table->boolean('laravel');
            $table->string('llevel',10);
            $table->boolean('oracle');
            $table->string('olevel',10);
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
        Schema::dropIfExists('technologies');
    }
}
