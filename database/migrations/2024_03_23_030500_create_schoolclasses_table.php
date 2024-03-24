<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolClassesTable extends Migration
{
    public function up()
    {
        Schema::create('schoolclasses', function (Blueprint $table) {
            $table->id('schoolclass_id');
            $table->string('schoolclass_name');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('schoolclasses');
    }
}