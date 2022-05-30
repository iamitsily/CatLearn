@extends('adminlte::page')

@section('title', 'Encuestas')

@section('content_header')
<h1>Encuestas</h1>
@stop

@section('content')
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">

    <iframe src="{{$encuesta->link}}" width="100%" height="1500px" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>

    </div>
</section><!-- End Courses Section -->
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop