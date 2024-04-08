<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function show($num1, $num2){
        
        $resultado = $num1 + $num2;
        return "El numero 1 es $num1 y el numero 2 es $num2 y el resultado es: $resultado";
        
    }
}
