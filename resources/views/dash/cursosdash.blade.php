@extends('adminlte::page')

@section('title', 'Cursos | Admin')

@section('content_header')
<h1>Cursos</h1>
@stop
@section('content')
<center>
    <h1>
        En esta sección puedes ver los cursos existentes, administrarlos y crear nuevos.
    </h1>
</center><br>
<a href="{{route('nuevocurso.create')}}" class="btn btn-primary">CREAR CURSO</a>
<br><br>
<table class="table table-striped table-bordered shadow-lg mt-4" id="cursos" style="width:100%">
    <thead class="bg-green text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Subtitulo</th>
            <th scope="col">Descripción</th>
            <th scope="col">Categoria</th>
            <th scope="col">Docente</th>
            <th scope="col">Participantes</th>
            <th scope="col">Likes</th>
            <th scope="col">Imagen</th>
            <th scope="col">Inicio</th>
            <th scope="col">Fin</th>
            <th scope="col">Opciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach($cursos as $curso)
        <tr>
            <td>{{$curso->id}}</td>
            <td>{{$curso->nombre}}</td>
            <td>{{$curso->subtitulo}}</td>
            <td>{{$curso->descripcion}}</td>
            <td>{{$curso->categoria}}</td>
            <td>{{$curso->docente}}</td>
            <td>{{$curso->participante}}</td>
            <td>{{$curso->gusta}}</td>
            <td>
                <img src="/img/cursos/{{$curso->imagen}}" width="100px" height="100px">
            </td>
            <td>{{$curso->fecha_inicio}}</td>
            <td>{{$curso->fecha_fin}}</td>
            
            <td>
                <form action="{{route ('nuevocurso.destroy',$curso->id)}}" method="POST" class="formEliminar">
                    <a class="btn btn-info" href="/admin/nuevocurso/{{$curso->id}}/edit">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
@stop
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script>
    (function() {
        'use strict'
        var forms = document.querySelectorAll('.formEliminar')
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    event.preventDefault()
                    event.stopPropagation()
                    Swal.fire({
                        title: '¿Confirma la eliminación del registro?',
                        showCancelButton: true,
                        confirmButtonColor: 'red',
                        confirmButtonText: 'Confirmar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                            Swal.fire('Eliminado', 'Se elimino el curso', 'success');
                        }else{
                            console.log('no jalo');
                        }
                    })
                }, false)
            })
    })()
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        $('#cursos').DataTable({
            "lengthMenu": [
                [5, 10, 50, -1],
                [5, 10, 50, "TODOS"]
            ]
        });
    });
</script>

@stop