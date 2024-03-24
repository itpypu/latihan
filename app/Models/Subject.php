<?php

// app/Models/Subject.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $primaryKey = 'subject_id';
    protected $fillable = ['subject_name'];
    public function teachers()
    {
        return $this->hasMany(Teacher::class, 'subject_id');
    }
    public function scores()
    {
        return $this->hasMany(Score::class, 'subject_id');
    }
}