<?php

// app/Models/SchoolClass.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;
    protected $primaryKey = 'schoolclass_id';
    protected $fillable = ['schoolclass_name', 'schoolclass_grade'];

    public function students()
    {
        return $this->hasMany(Student::class, 'schoolclass_id');
    }
}
