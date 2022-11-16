@extends('layouts.app')

@section("contenido")
    <h1>Crear un alumno</h1>

    <form action="{{route('alumnos.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" name="codigo" id="codigo" class="form-control" value="">
        </div>

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="f_nacimiento">Fecha de nacimiento</label>
            <input type="text" name="f_nacimiento" id="f_nacimiento" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="c_postal">Codigo postal</label>
            <input type="text" name="c_postal" id="c_postal" class="form-control" value="">
        </div>  



        <input type="submit" value="Crear alumno" class="btn btn-success">
        <input type="reset" value="Limpiar formulario" class="btn btn-warning">

</form>





@endsection




