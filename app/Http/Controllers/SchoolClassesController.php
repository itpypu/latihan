<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolClass;

class SchoolClassesController extends Controller
{
    public function index()
    {
        $schoolclasses = SchoolClass::all();
        return view('schoolclasses', compact('schoolclasses'));
    }
}