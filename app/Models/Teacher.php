<?php

// app/Models/Teacher.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    
    use HasFactory;
    protected $primaryKey = 'teacher_id';
    protected $fillable = ['teacher_name', 'subject_id'];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
    public function scores()
    {
        return $this->hasMany(Score::class, 'teacher_id');
    }
}
 
