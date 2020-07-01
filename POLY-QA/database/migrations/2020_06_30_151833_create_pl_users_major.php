<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlUsersMajor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pl_users_major', function (Blueprint $table) {
            $table->id();
            $table->integer('majors_id')->unsigned();
//            $table->foreign('majors_id')->references('id')->on('pl_majors');
            $table->integer('user_id')->unsigned();
//            $table->foreign('user_id')->references('id')->on('pl_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pl_users_major');
    }
}
