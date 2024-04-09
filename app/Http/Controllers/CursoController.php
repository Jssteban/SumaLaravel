<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function create(){
        return view('cursos.formulario');
    }

    public function store(Request $request){
        $num1=$request->num1;
        $num2=$request->num2;

    }
}
