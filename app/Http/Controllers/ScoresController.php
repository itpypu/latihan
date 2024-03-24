<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;

class ScoresController extends Controller
{
    public function index()
    {
        $scores = Score::all();
        return view('scores', compact('scores'));
    }
}
