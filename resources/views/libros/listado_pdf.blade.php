<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<h1>Listado de libros</h1>
<table class="table table-bordered table-bordered table-striped">
<tr>
    <th>Título</th>
    <th>Autor</th>
    <th>Páginas</th>
    <th>Género</th>
    <th>Fecha de publicación</th>
</tr>
@foreach ($libros as $libro)
    <tr>
        <td>{{$libro->titulo}}</td>
        <td>{{$libro->autor}}</td>
        <td>{{$libro->paginas}}</td>
        <td>{{$libro->genero}}</td>
        <td>{{$libro->f_publicacion}}</td>
    </tr>
@endforeach

</table>