<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pl_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id');
            $table->integer('question_id')->unsigned();
//            $table->foreign('question_id')->references('id')->on('pl_questions');
            $table->integer('user_id')->unsigned();
//            $table->foreign('user_id')->references('id')->on('pl_users');
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
        Schema::dropIfExists('pl_comments');
    }
}
