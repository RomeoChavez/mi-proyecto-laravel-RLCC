<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index() {
        $Estudiantes =[ ['Nombre' => 'Romeo Lancelot Chavez Cuellear' 
        , 'materia' => 'Tecnologia Web I',
        'edad' => 21 , 'lab' => 'A'],
        ['Nombre' => 'Juan Carlos Arramayo' 
        , 'materia' => 'Tecnologia Web I',
        'edad' => 22 , 'lab' => 'A'],
        ['Nombre' => 'Dante Chavez Cuellar' 
        , 'materia' => 'Programacion III',
        'edad' => 20 , 'lab' => 'B'],

        ];

        return view('Estudiantes/index' , compact('Estudiantes'));     
    }
}
