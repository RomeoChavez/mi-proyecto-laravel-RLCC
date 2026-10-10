@extends ('layout/plantilla')
@section('title' , 'Inicio')
@section('header')
   <h1>Welcome to my web</h1>
@endsection
@section('content')
<div>
    <div>
        <h1>libros</h1>
        <a href="{{ route('libros.create') }}">+ Nuevo Libro</a>
    </div>
    <form action="{{ route('libros.buscar') }}" method="GET">
        <input type="text" name="buscar" value="{{ $buscar }}" placeholder="Titulo o autor">
        <button type="submit">buscar</button>
        @if ($buscar)
            <a href="{{ route('libros.index') }}">Limpiar</a>
        @endif
    </form>
        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Year</th>
                    <th>Disponible</th>
                </tr>
            </thead>
            <tbody>
                @forelse($libros as $libro)
                    <tr>
                        <td>
                        <a href="{{ route('libros.show', $libro['id']) }}">
                          {{ $libro['titulo'] }}
                        </a>
                        </td>
                        <td>{{$libro['autor'] }}</td>
                        <td>{{$libro['year'] }}</td>
                        <!-- <td>{{$libro['disponible'] }}</td> -->
                        <td><span class="{{ $libro['disponible'] ? 'text-green-500' : 'text-red-500' }}">
                          {{ $libro['disponible'] ? 'Yes' : 'No' }}
                        </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td> no hay libros disponibles</td>
                    </tr>
                @endforelse
            </tbody>

        </table>
     </div>
   
@endsection

@push('scripts')
    <script>
        console.log('Pagina de incio loading')
    </script>
@endpush
