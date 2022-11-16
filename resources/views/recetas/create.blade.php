@extends('layouts.app')

@section("contenido")
    <h1>Crear una receta</h1>

    <form action="{{route('recetas.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="">
        </div>

        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="calorias">Calorías</label>
            <input type="number" name="calorias" id="calorias" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="f_alta">Fecha de alta</label>
            <input type="date" name="f_alta" id="f_alta" class="form-control" value="">
        </div>



        <input type="submit" value="Crear receta" class="btn btn-success">
        <input type="reset" value="Limpiar formulario" class="btn btn-warning">

</form>





@endsection




