@extends('usuarios.plantilla')

@section('title','Leccion')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Leccion Curso</h2>
        <p>Revisa la increible lección que tenemos para ti</p>
    </div>
</div>
<main id="main">
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{$leccion->nombre}}</h1>

                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        {{$leccion->informacion}}
                    </section>
                </article>

            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">

                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Tareas | Actividades</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    
                                    @foreach($leccion->tarea as $tare)
                                    <li><a href="#!">{{$tare->titulo}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    @foreach($leccion->actividad as $acti)
                                    <li><a href="#!">{{$acti->titulo}}</a></li>
                                   @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Examenes</div>
                    <div class="card-body">
                        @foreach($leccion->actividad as $acti)
                        <li><a href="#!">{{$acti->titulo}}</a></li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection