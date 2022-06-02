@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<h1>Usuarios</h1>
@stop

@section('content')

<center>
    <h3>
        En esta sección puedes ver los usuarios existentes, administrarlos y crear nuevos.
    </h3>
</center><br>
<a href="{{route('usuarios.create')}}" class="btn btn-primary">CREAR USUARIO</a>
<br><br>
<table class="table table-striped table-bordered shadow-lg mt-4" id="cursos" style="width:100%">
    <thead class="bg-green text-white">
        <tr>
            <th scope="col"style="display: none;">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Roles</th>
            <th scope="col">email</th>
            <th scope="col">Foto de Perfil</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Users as $user)
        <tr>
            <td style="display: none;">{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->number}}</td>
            <td>
                @forelse($user->roles as $role)
                    <span class="badge badge-info">{{ $role->name }}</span>
                @empty
                    <span class="badge badge-danger">No roles</span>
                @endforelse
            </td>
            <td>{{$user->email}}</td>
            <td>
                <img src="/img/usuarios/{{$user->profile_photo_path}}" width="100px" height="100px">
            </td>
            <td>
                <form action="{{route ('usuarios.destroy',$user->id)}}" method="POST" class="formEliminar">
                    <a class="btn btn-info" href="{{route('usuarios.edit',$user->id)}}">Editar</a><br>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
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