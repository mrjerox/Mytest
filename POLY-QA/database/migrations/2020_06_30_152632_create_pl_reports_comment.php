<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlReportsComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pl_reports_comment', function (Blueprint $table) {
            $table->id();
            $table->integer('question_id')->unsigned();
        //    $table->foreign('question_id')->references('id')->on('pl_questions_table');
            $table->integer('user_id')->unsigned();
        //    $table->foreign('user_id')->references('id')->on('pl_users');    
            $table->string('content', 255);
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
        Schema::dropIfExists('pl_reports_comment');
    }
}
