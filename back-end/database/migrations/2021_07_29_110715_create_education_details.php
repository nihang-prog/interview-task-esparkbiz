<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_details', function (Blueprint $table) {
            $table->increments('edu_id');
            $table->bigInteger('user_id');
            $table->string('ssc_board_name',100);
            $table->string('ssc_passing_year',20);
            $table->string('ssc_percentage',20);
            $table->string('hsc_board_name',100);
            $table->string('hsc_passing_year',20);
            $table->string('hsc_percentage',20);
            $table->string('degree_course_name',100);
            $table->string('degree_university',50);
            $table->string('degree_passing_year',20);
            $table->string('degree_percentage',20);
            $table->string('master_course_name',100);
            $table->string('master_university',50);
            $table->string('master_passing_year',20);
            $table->string('master_percentage',20);
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
        Schema::dropIfExists('education_details');
    }
}
