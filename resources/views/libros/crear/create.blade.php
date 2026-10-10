@extends ('layout/plantilla')
@section('title' , 'Inicio')
@section('header')
   <h1>Welcome to my web</h1>
@endsection
@section('content')
    <form action="{{ route('libros.insertar') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Titulo: </label>
            <input type="text" name="titulo">
        </div>
        <div>
            <label>Autor: </label>
            <input type="text" name="autor">
        </div>
        <div>
            <label>Year: </label>
            <input type="number" name="year">
        </div>
        <div>
            <label>
                <input type="checkbox" name="disponible">Disponible
            </label>
        </div>
        <div class="mt-3">
           <a href={{ route("libros.index") }} class="btn btn-secondary">Cancelar</a>
           <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        console.log('Pagina de incio loading')
    </script>
@endpush
