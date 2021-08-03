<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('language_id');
            $table->bigInteger('user_id');
            $table->boolean('hindi');
            $table->boolean('hread');
            $table->boolean('hwrite');
            $table->boolean('hspeak');
            $table->boolean('english');
            $table->boolean('eread');
            $table->boolean('ewrite');
            $table->boolean('espeak');
            $table->boolean('gujarati');
            $table->boolean('gread');
            $table->boolean('gwrite');
            $table->boolean('gspeak');
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
        Schema::dropIfExists('languages');
    }
}
