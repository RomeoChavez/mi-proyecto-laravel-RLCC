<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Probando Laravel</h1>
        <p>activada numero 1</p>
        <br><hr>
        <h2>Estudiante: Romeo Lancelot Chavez Cuellar</h2>
        <br>
        <h3>Materia: Tecnologia Web I</h3>
    </center>
     
</body>
</html> -->

@extends ('layout/plantilla')
@section('title' , 'Inicio')
@section('header')
   <h1>Welcome to my web</h1>
@endsection
@section('content')
   <p>Este es el contenido de la pagina principal</p>
@endsection

@push('scripts')
    <script>
        console.log('Pagina de incio loading')
    </script>
@endpush