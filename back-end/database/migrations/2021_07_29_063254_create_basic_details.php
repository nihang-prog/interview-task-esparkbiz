<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_details', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('fname',50);
            $table->string('lname',50);
            $table->string('designation',50);
            $table->text('address1');
            $table->text('address2');
            $table->string('email',50);
            $table->string('phone',10);
            $table->string('city',20);
            $table->string('state',20);
            $table->string('zipcode',20);
            $table->string('gender',20);
            $table->string('relstatus',30);
            $table->date('dob');
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
        Schema::dropIfExists('basic_details');
    }
}
