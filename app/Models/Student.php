<?php

// app/Models/Student.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'student_id';
    protected $fillable = ['name', 'schoolclass_id', 'date_of_birth', 'address'];


    public function Schoolclass()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }
    public function scores()
    {
        return $this->hasMany(Score::class, 'student_id');
    }
}