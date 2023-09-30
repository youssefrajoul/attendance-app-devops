<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RestStudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/students/post/{matricule}/{nom}/{prenom}/{groupe}', [RestStudentController::class, 'createStudent']);
Route::get('/students/get/{matricule}', [RestStudentController::class, 'readStudent']);
Route::get('/students/get', [RestStudentController::class, 'readAllStudent']);
Route::patch('/students/patch/{matricule}/{groupe}', [RestStudentController::class, 'updateStudent']);
Route::delete('/students/delete/{matricule}', [RestStudentController::class, 'deleteStudent']);
