<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectsController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('subjects', compact('subjects'));
    }
}