<?php

// app/Models/SchoolClass.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    protected $primaryKey = 'schoolclass_id';
    protected $fillable = ['schoolclass_name'];

    public function students()
    {
        return $this->hasMany(Student::class, 'schoolclass_id');
    }
}
