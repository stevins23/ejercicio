<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<h1>Listado de recetas</h1>
<table class="table table-bordered table-bordered table-striped">
<tr>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Precio</th>
    <th>Calorías</th>
    <th>Fecha de alta</th>
</tr>
@foreach ($recetas as $receta)
    <tr>
        <td>{{$receta->nombre}}</td>
        <td>{{$receta->descripcion}}</td>
        <td>{{$receta->precio}}</td>
        <td>{{$receta->calorias}}</td>
        <td>{{$receta->f_alta}}</td>
    </tr>
@endforeach

</table>