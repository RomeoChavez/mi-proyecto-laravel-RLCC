@extends ('layout/plantilla')
@section('title' , 'Inicio')
@section('header')
   <h1>Welcome to my web</h1>
@endsection
@section('content')
   <div>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Materia</th>
                    <th>Edad</th>
                    <th>Laboratorio</th>
                </tr>
            </thead>
            <tbody>
                @forelse($Estudiantes as $Estudiante)
                    <tr>
                        <td>{{$Estudiante['Nombre']}}</td>
                        <td>{{$Estudiante['materia'] }}</td>
                        <td>{{$Estudiante['edad'] }}</td>
                        <td>{{$Estudiante['lab'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td> no hay estudiantes disponibles</td>
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


