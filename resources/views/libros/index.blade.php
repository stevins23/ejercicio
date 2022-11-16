@extends('layouts.app')

@section("contenido")
    <h1>Esto es un listado de libros buenos</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('libros.create')}}" class="btn btn-success mb-3">Crear libro</a>
                <a target='_blank' href="{{route('libros.listado_pdf')}}" class="btn btn-warning mb-3">Listado pdf</a>

            </div>
        </div>
        <table id="tabla" class="table table-striped table-bordered">
           <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Páginas</th>
                    <th>Género</th>
                    <th>Fecha-Publicación</th>
                    <th>Mes</th>
                    <th>Borrar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                <tr data-id='{{$libro->id}}'>
                    <td>{{$libro->titulo}}</td>
                    <td>{{$libro->autor}}</td>
                    <td>{{$libro->paginas}}</td>
                    <td>{{$libro->genero}}</td>
                    <td>{{$libro->f_publicacion->format('d/m/Y')}}</td>
                    <td>{{$libro->mes()}}</td>
                    <td><a href="" class="btn_borrar"><img src="{!! asset('images/borrar.png') !!}" width="50px"></a></td>
                    <td><a href="{{url('/libros')}}/{{$libro->id}}/edit" class="btn_editar"><img src="{!! asset('images/editar.png') !!}" width="50px"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

<script>
    $(document).ready(function(){

        $('#tabla').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Nada encontrado - lo siento",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "first":      "Primero",
                    "last":       "Último",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
            }
        });


        $("#tabla").on("click",".btn_borrar",function(e){
            e.preventDefault();
           
            //confirmar con sweetalert
            Swal.fire({
                title: '¿Estas seguro?',
                text: "No podras revertir esta accion",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    //redireccionar a la url
                    //borrar con ajax
                    const tr=$(this).closest("tr"); //tr más cercano al botón, o sea el tr que contiene al botón
                    const id=tr.data("id"); //obtener el id del tr
                    $.ajax({
                        url: "{{url('/libros')}}/"+id,
                        method: "DELETE",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(){
                            tr.fadeOut();
                        }
                    })
                }
            })    
        });
    });

    
</script>










@endsection