@extends('layouts.app')

@section("contenido")
    <h1>Crear un libro</h1>

    <form action="{{route('libros.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control">
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor" class="form-control">
        </div>
        <div class="form-group">
            <label for="paginas">Páginas</label>
            <input type="number" name="paginas" id="paginas" class="form-control">
        </div>
        <div class="form-group">
            <label for="genero">Género</label>
            <input type="text" name="genero" id="genero" class="form-control">
        </div>
        <div class="form-group">
            <label for="f_publicacion">Fecha de publicación</label>
            <input type="date" name="f_publicacion" id="f_publicacion" class="form-control">
        </div>



        <input type="submit" value="Crear libro" class="btn btn-success">
        <input type="reset" value="Limpiar formulario" class="btn btn-warning">

</form>





@endsection




