<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlMajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pl_majors', function (Blueprint $table) {
            $table->id('id');
            $table->integer('parent_id');
            $table->string('name', 255);
            $table->text('description');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->tinyInteger('created_by');
            $table->tinyInteger('deleted_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pl_majors');
    }
}
