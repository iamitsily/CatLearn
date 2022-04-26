<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CatLearn</title>

  <!-- Favicons -->
  <link href="{ asset('!! asset('img/favicon.png') !!) }" rel="icon" type="image/x-icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  </title>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">CatLearn</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{url('/')}}">INICIO</a></li>
          <li><a href="{{url('/contacto')}}">Nosotros</a></li> <!-- PENDIENTE -->
          <li><a href="{{url('/cursos')}}">Cursos</a></li>
          <li><a href="{{url('/docentes')}}">Profesores</a></li> <!-- PENDIENTE -->
          <li><a href="{{url('/soporte')}}">Soporte</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="courses.html" class="get-started-btn">Iniciar Sesion</a>
      <a href="courses.html" class="get-started-btn">Registro</a>
    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Por aprender mejor,<br>Para aprender más!</h1>
      <h2>Somos una plataforma de aprendizaje, dedicada a prestar información de calidad para ti y todos nuestros usuarios.</h2>
      <a href="courses.html" class="btn-get-started">Iniciemos!</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>¿Qué es CatLearn?</h3>
            <p class="fst-italic">
              CatLearn es una plataforma educativa desarrollada para el ambito educativo y tiene como objetivo
              ayudar al desarrollo academico de alumnos universitarios.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Disponible 24/7 los 365 días del año.</li>
              <li><i class="bi bi-check-circle"></i> Por cada lección terminada, nosotros plantamos un arbolito.</li>
              <li><i class="bi bi-check-circle"></i> Una plataforma sin fines de lucro.</li>
            </ul>
            <p>
              CatLearn te ayudara en distintas materias, con material didactico, ya sea tutoriales, material de lectura,Mapas,Infogrfias etc.
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>¿Por Que deberias elegirnos?</h3>
              <p>
                Como ya has visto al ser una plataforma educativa contamos con un monton de recursos educativos de distintas materias, tambien podras descargar nuestro material para cuando no tengas conexion a
                internet, contamos tambien con actividades para reforzar lo aprendido. Puedes ingresar como estudiante o como maestro.
              </p>
              <div class="text-center">
                <a href="{{url('/contacto')}}" class="more-btn">Para mas informacion <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Para Estudiantes</h4>
                    <p>Contamos con cursos de los cuales podras inscribirte a ellos y obtener miles de datos con respectos a ellas,esta y mas funciones podras explorar a unirte a nosotros.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Para Docentes</h4>
                    <p>Podras crear cursos, agrgar material, actividades entre otros recursos didacticos para ayudarte a complementar tus temarios academicos.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Sobre Nosotros</h4>
                    <p>Somos un grupo de estudiantes interesados en ayudar a las futuras generaciones para facilitar su comprension en las materias que a ellos se les dificulte.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Cursos</h2>
          <p>Cursos Populares</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{asset('img/course-1.jpg')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Programacion Declarativa</h4>
                  <p class="price">Part1</p>
                </div>

                <h3><a href="course-details.html">Introduccion</a></h3>
                <p>¿Que es?¿Caracteristicas?¿En que entornos funciona?¿Como podemos emepezar?¿Que son los condicionales?¿Como funciona un condicional?¿Leyes Logicas? etc. </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{asset('img/trainers/trainer-1.jpg')}}" class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="{{asset('img/course-2.jpg')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Formacion Democratica</h4>
                  <p class="price">Nuevo</p>
                </div>

                <h3><a href="course-details.html">Politicas Publicas</a></h3>
                <p>Las politicas publicas siempre llevan acabo un analisis de un problema de un entorno social, teniendo como respuesta un analisis de soluciones y cuantas de estas son factibles en sectores politicos,sociales,legales,ambientales y sobretodo presupuestal.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{asset('img/trainers/trainer-2.jpg')}}" class="img-fluid" alt="">
                    <span>Lana</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="{{asset('img/course-3.jpg')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Algebra Abstracta</h4>
                  <p class="price">Bloque 1</p>
                </div>

                <h3><a href="course-details.html">Matriz Inversa</a></h3>
                <p>Podraz ver ejemplos de matrices unversas ya sea de 2x2 o 3x3, ver videos tutoriales y temas de lectura actualizados sobre mejores metodos de resolucion.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{asset('img/trainers/trainer-3.jpg')}}" class="img-fluid" alt="">
                    <span>Brandon</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

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
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>CatLearn</h3>
            <p>
              UATx <br>
              Ingenieria en Computación<br>
              Mexico <br><br>
              <strong>Phone:</strong> S/N<br>
              <strong>Email:</strong> contact@catlearn.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links Utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/contacto')}}"></a>Contacto</li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/soporte')}}">Soporte</a></li>
             </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Quizá quieras ver</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Diseño web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Desarrollo web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gestion de productos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Diseño grafio</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Suscribete a nuestro servicio de correo</h4>
            <p>Para recibir notificaciones de nuevos cursos o avisos importantes.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Suscribete">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>CatLearn</span></strong>.Todos los Derechos Reservados.
        </div>
        <div class="credits">
         
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/purecounter/purecounter.js')}}" defer></script>
  <script src="{{asset('vendor/aos/aos.js')}}" defer></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}" defer></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}" defer></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}" defer></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}" defer></script>
</body>

</html>