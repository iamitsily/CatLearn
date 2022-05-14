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

      <a href="{{url('/sesion')}}" class="get-started-btn">Iniciar Sesion</a>
      <a href="{{url('/registro')}}" class="get-started-btn">Registro</a>
    </div>
  </header><!-- End Header -->

    <main id="main">

        @yield('content')

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