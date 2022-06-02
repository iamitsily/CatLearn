@extends('usuarios.plantilla')
@section('title', 'Actividad')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Actividad</h2>
        <p>En esta seccion puedes revisar las actividades de tu lección<b></b></p>
    </div>
</div>
{{$leccion->actividad}}

@endsection