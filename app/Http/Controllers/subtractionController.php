<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subtractionController extends Controller
{
    public function resta($num1, $num2){
        $resultado = $num1 - $num2;

        return "El resultado de tu resta es $resultado";

    }
}
