<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolClass;

class SchoolClassesController extends Controller
{
    public function index()
    {
        $classes = SchoolClass::all();
        return view('classes', compact('schoolclasses'));
    }
}
