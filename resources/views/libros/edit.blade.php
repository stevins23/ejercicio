@extends('layouts.app')

@section("contenido")
    <h1>Actualizar libro</h1>

    <form action="{{url('libros')}}/{{$libro->id}}" method="POST">
        @csrf
        @method('PUT')


        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{$libro->titulo}}">
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor" class="form-control" value="{{$libro->autor}}">
        </div>
        <div class="form-group">
            <label for="paginas">Páginas</label>
            <input type="number" name="paginas" id="paginas" class="form-control" value="{{$libro->paginas}}">
        </div>
        <div class="form-group">
            <label for="genero">Género</label>
            <input type="text" name="genero" id="genero" class="form-control" value="{{$libro->genero}}">
        </div>
        <div class="form-group">
            <label for="f_publicacion">Fecha de publicación</label>
            <input type="date" name="f_publicacion" id="f_publicacion" class="form-control" value="{{$libro->f_publicacion}}">
        </div>

        

        <input type="submit" value="Editar libro" class="btn btn-success">
        <input type="reset" value="Limpiar formulario" class="btn btn-warning">

</form>





@endsection




