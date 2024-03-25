<?php

// app/Models/Student.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'student_id';
    protected $fillable = ['name', 'schoolclass_id', 'date_of_birth', 'address'];


    public function Schoolclass()
    {
        return $this->hasMany(SchoolClass::class, 'schoolclass_id');
    }
    public function scores()
    {
        return $this->hasMany(Score::class, 'student_id');
    }
}