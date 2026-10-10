<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    private static array $libros = [ ['id'=>1, 'titulo' => 'cien anos de soledad' 
        , 'autor' => 'Gabriel Garcia Marquez',
        'year' => 1976 , 'disponible' => true],
        ['id'=>2 , 'titulo' => 'Don Quijote de la Mancha' 
        , 'autor' => 'Miguel de Cervantes',
        'year' => 1605, 'disponible' => false],
        ['id' =>3 , 'titulo' => 'Rayuela' 
        , 'autor' => 'Juan Rulfo',
        'year' => 1955, 'disponible' => true]
        ];
    public static function todos() : array{return self::$libros;}

    public static function buscar(string $texto) : array
    {
        $texto = mb_strtolower(trim($texto));
        return array_filter(self::$libros , function ($libro) use ($texto){
            return str_contains(mb_strtolower($libro['titulo']) , $texto)
            || str_contains(mb_strtolower($libro['autor']), $texto);
        });
    }
}
