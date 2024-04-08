<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('cursos/{dato1}/{dato2}', [CursoController::class, 'show']);