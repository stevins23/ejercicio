<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<h1>Listado de alumnos</h1>
<table class="table table-bordered table-bordered table-striped">
<tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Email</th>
    <th>Fecha de nacimiento</th>
    <th>Codigo postal</th>
</tr>
@foreach ($alumnos as $alumno)
    <tr>
        <td>{{$alumno->nombre}}</td>
        <td>{{$alumno->apellidos}}</td>
        <td>{{$alumno->email}}</td>
        <td>{{$alumno->f_nacimiento}}</td>
        <td>{{$alumno->c_postal}}</td>
    </tr>
@endforeach

</table>