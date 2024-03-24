<?php

// app/Models/Score.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $primaryKey = 'score_id';
    protected $fillable = ['student_id', 'subject_id', 'teacher_id', 'score', 'date'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
} 
