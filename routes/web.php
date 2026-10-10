<?php

use App\Http\Controllers\LibroController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/w', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/libros',[LibroController::class,'index'])->name('libros.index');
Route::get('/libros/crear',[LibroController::class,'create'])->name('libros.create');
Route::post('/libros',[LibroController::class,'insertar'])->name('libros.insertar');
Route::get('/libros/buscar',[LibroController::class,'buscar'])->name('libros.buscar');
Route::get('/libros/{id}', [LibroController::class, 'show']) ->name('libros.show');
Route::get('/Estudiantes',[EstudianteController::class,'index'])->name('index');
