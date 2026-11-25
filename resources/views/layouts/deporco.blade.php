<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>{{ setting('site.title', 'DEPORCO Hoteles & Resorts') }} - @yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="hoteles, resorts, hospedaje de lujo, suites, reservas, turismo" name="keywords">
  <meta content="DEPORCO Hoteles & Resorts - Experiencias de hospitalidad de clase mundial, confort y relajación." name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700|Montserrat:300,400,500,600,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="{{url('assets/fontawesome-5.8.1/css/fontawesome.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/fontawesome-5.8.1/css/brands.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/fontawesome-5.8.1/css/solid.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/animate/animate.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/owlcarousel/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/lightbox/css/lightbox.min.css')}}">

  <!-- Main Stylesheet Files -->
  <link rel="stylesheet" href="{{url('css/deporco.blade.css')}}" id="theme-stylesheet">
  <link rel="stylesheet" href="{{url('css/hotel.css')}}">
</head>

<body>
  <!-- ==================== HEADER ==================== -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <a href="{{route('deporco.welcome')}}" class="scrollto">
          <img src="{{url('/logo_hotel.svg')}}" alt="DEPORCO Hotels & Resorts" class="img-fluid">
        </a>
      </div>

      <nav class="main-nav d-none d-lg-block">
        <ul>
          <li class="{{Request::is('/') ? 'active': ''}}"><a href="{{route('deporco.welcome')}}">Inicio</a></li>
          <li><a href="{{url('/#habitaciones')}}">Habitaciones &amp; Suites</a></li>
          <li><a href="{{url('/#servicios')}}">Servicios</a></li>
          <li><a href="{{url('/#destinos')}}">Destinos</a></li>
          <li class="{{Request::is('about') ? 'active': ''}}"><a href="{{route('deporco.about')}}">Conócenos</a></li>
          <li class="{{Request::is('media') ? 'active': ''}}"><a href="{{route('deporco.media')}}">Experiencias</a></li>
          <li class="{{Request::is('contact') ? 'active': ''}}"><a href="{{route('deporco.contact')}}">Contacto</a></li>
          <li><a href="{{url('/#buscar-reserva')}}" class="nav-cta-btn"><i class="fas fa-calendar-check mr-1"></i> Reservar</a></li>
          @auth
              <li><a href="{{route('home.index')}}" style="color:#C5A880 !important; font-weight: bold;"><i class="fas fa-user-circle"></i> {{Auth::user()->name}}</a></li>
          @endauth
          @guest
              <li class="{{Request::is('login') ? 'active': ''}}"><a href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i> Ingresar</a></li>
          @endguest
        </ul>
      </nav>
    </div>
  </header>

  <main id="main" style="margin-top: 90px;">
    @yield('content')
  </main>

  <!-- ==================== FOOTER ==================== -->
  <footer id="footer">
    <div class="footer-top pb-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="footer-info">
              <img src="{{url('/logo_hotel.svg')}}" class="img-fluid mb-3" style="max-height: 50px;" alt="DEPORCO Hotels">
              <p>
                DEPORCO Hotels &amp; Resorts es una cadena hotelera y plataforma de reservas líder en hospitalidad, ofreciendo estancias de lujo, diseño contemporáneo y descanso inigualable.
              </p>
              <div class="mt-3">
                <a href="#" class="mr-2 text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#" class="mr-2 text-white"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="#" class="mr-2 text-white"><i class="fab fa-tripadvisor fa-lg"></i></a>
                <a href="#" class="text-white"><i class="fab fa-whatsapp fa-lg"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 mb-4">
            <h4>Navegación</h4>
            <ul class="list-unstyled">
              <li><i class="fas fa-angle-right text-warning mr-2"></i><a href="{{route('deporco.welcome')}}">Inicio</a></li>
              <li><i class="fas fa-angle-right text-warning mr-2"></i><a href="{{url('/#habitaciones')}}">Habitaciones</a></li>
              <li><i class="fas fa-angle-right text-warning mr-2"></i><a href="{{url('/#servicios')}}">Servicios</a></li>
              <li><i class="fas fa-angle-right text-warning mr-2"></i><a href="{{url('/#destinos')}}">Destinos</a></li>
              <li><i class="fas fa-angle-right text-warning mr-2"></i><a href="{{route('deporco.about')}}">Conócenos</a></li>
              <li><i class="fas fa-angle-right text-warning mr-2"></i><a href="{{route('deporco.media')}}">Experiencias</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4">
            <h4>Políticas del Hotel</h4>
            <ul class="list-unstyled">
              <li><i class="fas fa-clock text-warning mr-2"></i><strong>Check-In:</strong> 15:00 hrs</li>
              <li><i class="fas fa-clock text-warning mr-2"></i><strong>Check-Out:</strong> 12:00 hrs</li>
              <li><i class="fas fa-angle-right text-warning mr-2"></i><a href="{{route('deporco.terms')}}#TerminosYCondiciones">Términos de Reserva</a></li>
              <li><i class="fas fa-angle-right text-warning mr-2"></i><a href="{{route('deporco.terms')}}#PoliticaDeCancelacion">Cancelación Gratuita</a></li>
              <li><i class="fas fa-angle-right text-warning mr-2"></i><a href="{{route('deporco.terms')}}#PoliticaDePrivacidad">Privacidad de Huéspedes</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4">
            <h4>Central de Reservas</h4>
            <p>
              <i class="fas fa-map-marker-alt text-warning mr-2"></i> Av. Malecón del Mar #12-88<br>
              Zona Hotelera &amp; Turística<br>
              <strong>Teléfono Recepción:</strong> +57 (602) 211 11 11<br>
              <strong>WhatsApp Concierge:</strong> +57 315 888 9900<br>
              <strong>Email:</strong> reservas@deporcohotels.com<br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container text-center">
        <p class="mb-0 text-muted">
          &copy; {{ date('Y') }} <strong>DEPORCO Hotels &amp; Resorts</strong>. Todos los derechos reservados. Experiencias de Hospitalidad y Confort.
        </p>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{url('assets/jquery/jquery.min.js')}}"></script>
  <script src="{{url('assets/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{url('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('assets/easing/easing.min.js')}}"></script>
  <script src="{{url('assets/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{url('assets/wow/wow.min.js')}}"></script>
  <script src="{{url('assets/waypoints/waypoints.min.js')}}"></script>
  <script src="{{url('assets/counterup/counterup.min.js')}}"></script>
  <script src="{{url('assets/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{url('assets/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('assets/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{url('js/deporco.blade.js')}}"></script>
</body>
</html>
