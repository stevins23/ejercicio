@extends('layouts.app')

@section("contenido")
    <h1>Actualizar receta</h1>

    <form action="{{url('recetas')}}/{{$receta->id}}" method="POST">
        @csrf
        @method('PUT')


        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$receta->nombre}}">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$receta->descripcion}}">
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" class="form-control" value="{{$receta->precio}}">
        </div>
        <div class="form-group">
            <label for="calorias">Calorías</label>
            <input type="number" name="calorias" id="calorias" class="form-control" value="{{$receta->calorias}}">
        </div>
        <div class="form-group">
            <label for="f_alta">Fecha de alta</label>
            <input type="text" name="f_alta" id="f_alta" class="form-control" value="{{$receta->f_alta}}">
        </div>
        

        <input type="submit" value="Editar receta" class="btn btn-success">
        <input type="reset" value="Limpiar formulario" class="btn btn-warning">

</form>





@endsection




