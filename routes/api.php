<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ApprenticeController;
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

//registro de asistencia
Route::post('/registrar_asistencia/{usuarioId}', [AsistenciaController::class, 'create'])->name('registrar_asistencia');
Route::post('/instructores_store', [InstructorController::class, 'create'])->name('instructores_store');
Route::get('/asistencia-filtro', [App\Http\Controllers\InstructorController::class,'filter'])->name('filter');
Route::post('/materias_store', [App\Http\Controllers\SubjectsController::class, 'create'])->name('materias_store');
Route::post('/apprentice_store', [App\Http\Controllers\ApprenticeController::class, 'create'])->name('apprentice_store');