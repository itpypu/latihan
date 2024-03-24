<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id('score_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->foreign('subject_id')->references('subject_id')->on('subjects');
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');
            $table->decimal('score', 5, 2); // Angka 5 dan 2 menunjukkan total digit dan digit desimal
            $table->date('date');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
