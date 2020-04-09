<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
          $table->increments('id');
          $table->string('code');
          $table->string('title');
          $table->string('credit');
          $table->date('start_date');
          $table->date('end_date');
          $table->string('open_seats');
          $table->string('capacity');
          $table->string('waitlist');
          $table->string('comments');
          $table->integer('instructor_id')->unsigned();
          $table->integer('location_id')->unsigned();
          $table->foreign('instructor_id')->references('id')->on('instructor');
          $table->foreign('location_id')->references('id')->on('location');
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
        Schema::dropIfExists('class');
    }
}
