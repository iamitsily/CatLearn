@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<h1>Editar Usuario</h1>
@stop

@section('content')
<center>
    <h3>
        En esta sección puedes modificar los usuarios existentes.
    </h3>
</center><br>
<form action="{{route('usuarios.update',$user->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$user->name}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="number" class="form-control" tabindex="2" value="{{$user->number}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Roles</label>
        <table class="table table-bordered border-dark" id="cursos" style="width:30%">
            <thead class="bg-green text-white">
            </thead>
            <tbody>
                @foreach ($roles as $id => $role)
                <tr>
                    <td>
                        <input class="" type="checkbox" name="roles[]" value="{{ $id }}" {{ $user->roles->contains($id) ? 'checked' : ''}}
                        >
                        <span class="form-check-sign">
                     <span class="check"></span>
                    </td>
                    <td>
                        {{ $role }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input id="email" name="email" type="email" class="form-control" tabindex="4" value="{{$user->email}}">
    </div>
    <div class="mb-3">
  
    <div>
        <label for="" class="form-label">Foto de Perfil</label><br>
        <img id="imgSelect" style="max-height: 300px;" src="/img/usuarios/{{$user->profile_photo_path}}"><br><br>
    </div>
    <div class="mb-3">
        <input name="imagen_curso" id="img" type="file" class="hidden">
    </div>
    <br>
    <a href="{{url('admin/usuarios')}}" class="btn btn-secondary" tabindex="5">CANCELAR</a>
    <button type="submit" class="btn btn-primary" tabindex="4">GUARDAR</button><br><br>
</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(document).ready(function(e) {
        $('#img').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imgSelect').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
@stop