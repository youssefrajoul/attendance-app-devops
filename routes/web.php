<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\StudentController;
use App\Http\Controllers\RestStudentController;

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

Route::get('/', [StudentController::class, 'home'])->name('home');
Route::post('/student/', [StudentController::class, 'store']);
Route::delete('/students/delete/{matricule}', [StudentController::class, 'delete']);
Route::get('/lessons', [StudentController::class, 'showLessons']);
