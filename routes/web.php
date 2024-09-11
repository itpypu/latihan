<?php


use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\SchoolClassesController;
use App\Http\Controllers\ScoresController;
use App\Http\Controllers\SubjectsController;
use App\Models\Subject;
use App\Models\Teacher;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [StudentsController::class, 'index']);
Route::get('/teacher', [TeachersController::class, 'index']);
Route::get('/schoolclass', [SchoolClassesController::class, 'index']);
Route::get('/subjects', [SubjectsController::class, 'index']);
Route::get('/scores', [ScoresController::class, 'index']);