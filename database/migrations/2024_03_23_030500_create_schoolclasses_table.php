<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolClassesTable extends Migration
{
    public function up()
    {
        Schema::create('school_classes', function (Blueprint $table) {
            $table->id('schoolclass_id');
            $table->string('schoolclass_name');
            $table->integer('schoolclass_grade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('school_classes');
    }
}