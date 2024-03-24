<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('name');
            $table->unsignedBigInteger('schoolclass_id');
            $table->foreign('schoolclass_id')->references('schoolclass_id')->on('schoolclasses');
            $table->date('date_of_birth');
            $table->string('address');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('students');
    }
}