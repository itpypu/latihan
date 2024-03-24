<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('teacher_id');
            $table->string('name');
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('subject_id')->on('subjects');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}