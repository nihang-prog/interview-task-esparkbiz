<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferances', function (Blueprint $table) {
            $table->increments('pref_id');
            $table->bigInteger('user_id');
            $table->string('prefered_location',100);
            $table->string('notice_period',50);
            $table->string('expexted_ctc',50);
            $table->string('current_ctc',50);
            $table->string('department',100);
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
        Schema::dropIfExists('preferances');
    }
}
