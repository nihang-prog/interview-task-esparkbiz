<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferanceContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referance_contacts', function (Blueprint $table) {
            $table->increments('refcon_id');
            $table->bigInteger('user_id');
            $table->string('ref_name1',50);
            $table->string('ref_mobile1',10);
            $table->string('ref_reloation1',50);
            $table->string('ref_name2',50);
            $table->string('ref_mobile2',10);
            $table->string('ref_reloation2',50);
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
        Schema::dropIfExists('referance_contacts');
    }
}
