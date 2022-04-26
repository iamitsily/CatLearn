@extends('layouts.plantilladash.vacia')

@section('content')

     <!-- ======= Breadcrumbs ======= -->
     <div class="breadcrumbs">
      <div class="container">
        <h2>Docentes</h2>
        <p>Presentamos los docentes mas activos y con mejores resultados de la plataforma, un gusto contar con ellos en CatLearn</p>
      </div>
    </div><!-- End Breadcrumbs -->

   <!-- ======= Trainers Section ======= -->
   <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('img/trainers/trainer-1.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Walter White</h4>
                <span>Desarrollo Web</span>
                <p>
                  Master en Desarrollo Web, especialidad en JS y CSS.
                </p>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('img/trainers/trainer-2.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Especialidad en marketing digital, mediante uso de redes sociales
                </p>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('img/trainers/trainer-3.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Contenidos</span>
                <p>
                  Doctorado en creación de contenido para web.
                </p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

@endsection