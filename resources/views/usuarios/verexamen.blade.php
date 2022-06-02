@extends('usuarios.plantilla')

@section('title','Examen')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Examen</h2>
        <p>Aqui puedes ver tu examen asignada</p>
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
                        <h1 class="fw-bolder mb-1">{{$examen->titulo}}</h1>

                    </header>
                   
                    <section class="mb-5">
                        PREGUNTAS
                    </section>
                </article>

            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">

                
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Calificacion</div>
                    <div class="card-body">
                        
                            <li>{{$examen->calificacion}}</li>
                           
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection