@extends('layouts.app')

@section("contenido")
    <h1>Actualizar alumno</h1>

    <form action="{{url('alumnos')}}/{{$alumno->id}}" method="POST">
        @csrf
        @method('PUT')


        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$alumno->nombre}}">
        </div>
        <div class="form-group">
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control" value="{{$alumno->apellidos}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="{{$alumno->email}}">
        </div>
        <div class="form-group">
            <label for="f_nacimiento">Fecha de nacimiento</label>
            <input type="text" name="f_nacimiento" id="f_nacimiento" class="form-control" value="{{$alumno->f_nacimiento}}">
        </div>
        <div class="form-group">
            <label for="c_postal">Codigo postal</label>
            <input type="text" name="c_postal" id="c_postal" class="form-control" value="{{$alumno->c_postal}}">
        </div>
        

        <input type="submit" value="Editar cliente" class="btn btn-success">
        <input type="reset" value="Limpiar formulario" class="btn btn-warning">

</form>





@endsection




