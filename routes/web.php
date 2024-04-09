<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\subtractionController;
/*
Route::get('suma/{dato1}/{dato2}', [CursoController::class, 'sum']);
Route::get('suma/resta/{dato1}/{dato2}', [subtractionController::class, 'resta']);
*/
Route::get('formulario', [CursoController::class, 'create']);
Route::post('formulario', [CursoController::class, 'store'])->name('curso.store');