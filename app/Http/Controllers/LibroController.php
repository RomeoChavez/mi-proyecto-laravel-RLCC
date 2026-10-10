<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use Symfony\Contracts\Service\ServiceCollectionInterface;

class LibroController extends Controller
{
    public function index() {
        // $librosBase = [ ['titulo' => 'cien anos de soledad' 
        // , 'autor' => 'Gabriel Garcia Marquez',
        // 'year' => 1976 , 'disponible' => true],
        // ['titulo' => 'Don Quijote de la Mancha' 
        // , 'autor' => 'Miguel de Cervantes',
        // 'year' => 1605, 'disponible' => false],
        // ['titulo' => 'Rayuela' 
        // , 'autor' => 'Juan Rulfo',
        // 'year' => 1955, 'disponible' => true]
        // ];
        // $librosCreados = session('libros' , []);
        // $libros = array_merge($librosBase,$librosCreados);

        // $generos = ['realismo magico' , 'Novela clasica' , 'literatura latinomericana'];

        // return view('libros.index' , compact('libros' , 'generos'));        
        $libros = Libro::todos();
        $buscar = '';
        return view('libros.index' , compact('libros' , 'buscar'));
    }

    public function create() {return view('libros.crear.create');}
    public function insertar(Request $request) {
    $libros = session('libros', []);

    $nuevoLibro = [
        'id' => max(array_column(array_merge(Libro::todos(), $libros), 'id')) + 1,        'titulo' => $request->titulo,
        'autor' => $request->autor,
        'year' => $request->year,
        'disponible' => $request->has('disponible')
    ];

    $libros[] = $nuevoLibro;
    session(['libros' => $libros]);

    return redirect()->route('libros.index');
    }

    public function buscar(Request $request){
        $buscar = trim($request->query('buscar' , ''));
        if($buscar === ''){return redirect()->route('libros.index');}
        $libros = Libro::buscar($buscar);
        return view('libros.index' , compact('libros' , 'buscar'));
    }   

    public function mostrar(Request $request){
        return view('libros.index');
    }

    public function show($id) {
    $libros = Libro::todos();
    foreach ($libros as $libro) {
        if ($libro['id'] == $id) {return view('libros.show', compact('libro')); }
    }
    }
}
