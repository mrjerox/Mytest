<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pl_questions', function (Blueprint $table) {
            $table->id();
            $table->integer('majors_id')->unsigned();
//            $table->foreign('majors_id')->references('id')->on('pl_majors');
            $table->integer('user_id')->unsigned();
//            $table->foreign('user_id')->references('id')->on('pl_users');
            $table->string('title', 255);
            $table->text('content');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('pl_questions');
    }
}
