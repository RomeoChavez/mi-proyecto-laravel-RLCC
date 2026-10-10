@extends('layout/plantilla')

@section('title', 'Detalle del libro')

@section('header')
    <h1>Detalle del libro</h1>
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card" style="max-width: 500px;">
            <div class="card-body">
                <h2 class="card-title">{{ $libro['titulo'] }}</h2>

                <p class="card-text">
                    <strong>Autor:</strong> {{ $libro['autor'] }}
                </p>

                <p class="card-text">
                    <strong>Year:</strong> {{ $libro['year'] }}
                </p>
                <p class="card-text">
                    <strong>Disponible:</strong>
                    {{ $libro['disponible'] ? 'yes' : 'no' }}
                </p>
                <a href="{{ route('libros.index') }}"
                   class="btn btn-secondary">
                    Volver a libros
                </a>
            </div>
        </div>
    </div>
@endsection