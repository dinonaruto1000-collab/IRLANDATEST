<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>{{ setting('site.title', 'DEPORCO Hoteles & Resorts | Reserva tu Estancia de Lujo') }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="hoteles, resorts, hospedaje, reservas de hotel, suites de lujo, vacaciones, turismo, descanso" name="keywords">
  <meta content="Descubre los mejores hoteles y resorts con DEPORCO. Habitaciones de lujo, gastronomía de primer nivel, spa, piscinas y atención personalizada." name="description">

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
          <li><a href="#habitaciones" class="scrollto">Habitaciones &amp; Suites</a></li>
          <li><a href="#servicios" class="scrollto">Servicios</a></li>
          <li><a href="#destinos" class="scrollto">Destinos</a></li>
          <li class="{{Request::is('about') ? 'active': ''}}"><a href="{{route('deporco.about')}}">Conócenos</a></li>
          <li class="{{Request::is('media') ? 'active': ''}}"><a href="{{route('deporco.media')}}">Experiencias</a></li>
          <li class="{{Request::is('contact') ? 'active': ''}}"><a href="{{route('deporco.contact')}}">Contacto</a></li>
          <li><a href="#buscar-reserva" class="nav-cta-btn scrollto"><i class="fas fa-calendar-check mr-1"></i> Reservar</a></li>
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

  <main id="main">
    <!-- ==================== HERO SECTION & SEARCH ==================== -->
    <section id="intro" class="hotel-hero">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 text-center">
            <div class="hotel-hero-badge wow fadeInDown" data-wow-delay="0.1s">
              <i class="fas fa-crown mr-2"></i> Experiencias de Hospedaje 5 Estrellas
            </div>
            <h1 class="wow fadeInUp" data-wow-delay="0.2s">
              Tu Estancia Soñada en los Mejores <br><span>Hoteles &amp; Resorts</span>
            </h1>
            <p class="mx-auto wow fadeInUp" data-wow-delay="0.3s">
              Disfruta de suites de lujo, vistas paradisíacas al mar, gastronomía gourmet y un servicio de hospitalidad inigualable para tus vacaciones o viajes de negocios.
            </p>

            <div class="hero-highlights justify-content-center wow fadeInUp" data-wow-delay="0.4s">
              <div class="hero-highlight-item"><i class="fas fa-tag"></i> Mejor Tarifa Garantizada</div>
              <div class="hero-highlight-item"><i class="fas fa-shield-alt"></i> Cancelación Flexible</div>
              <div class="hero-highlight-item"><i class="fas fa-concierge-bell"></i> Servicio &amp; Concierge 24/7</div>
              <div class="hero-highlight-item"><i class="fas fa-coffee"></i> Desayuno Gourmet Incluido</div>
            </div>
          </div>

          <!-- BOOKING SEARCH ENGINE -->
          <div class="col-lg-10 offset-lg-1" id="buscar-reserva">
            <div class="hotel-search-box wow fadeInUp" data-wow-delay="0.5s">
              <form id="searchBookingForm" onsubmit="event.preventDefault(); openBookingModal();">
                <div class="row align-items-end">
                  <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                    <label class="form-label"><i class="fas fa-map-marker-alt"></i> Destino u Hotel</label>
                    <select class="custom-select" id="searchDestination" required>
                      <option value="Cartagena de Indias - Resort Bahía">Cartagena de Indias (Playa &amp; Resort)</option>
                      <option value="Cancún &amp; Riviera Maya - Luxury Grand">Cancún (Riviera Maya)</option>
                      <option value="Punta Cana - All Inclusive Paradise">Punta Cana (Todo Incluido)</option>
                      <option value="San Andrés - Cayo Azul Resort">San Andrés Islas (Vista al Mar)</option>
                      <option value="Medellín - Executive Sky Hotel">Medellín (Hotel Ejecutivo &amp; Spa)</option>
                    </select>
                  </div>

                  <div class="col-lg-2 col-md-6 mb-3 mb-lg-0">
                    <label class="form-label"><i class="fas fa-calendar-alt"></i> Llegada (Check-in)</label>
                    <input type="date" class="form-control" id="searchCheckIn" required>
                  </div>

                  <div class="col-lg-2 col-md-6 mb-3 mb-lg-0">
                    <label class="form-label"><i class="fas fa-calendar-alt"></i> Salida (Check-out)</label>
                    <input type="date" class="form-control" id="searchCheckOut" required>
                  </div>

                  <div class="col-lg-2 col-md-6 mb-3 mb-lg-0">
                    <label class="form-label"><i class="fas fa-users"></i> Huéspedes</label>
                    <select class="custom-select" id="searchGuests">
                      <option value="1 Adulto (Habitación Individual)">1 Huésped</option>
                      <option value="2 Adultos (Pareja)" selected>2 Huéspedes</option>
                      <option value="Familiar (2 Adultos + 2 Niños)">Familiar (3-4 personas)</option>
                      <option value="Grupo / Evento (5+ personas)">Grupo (5+ personas)</option>
                    </select>
                  </div>

                  <div class="col-lg-3 col-md-12">
                    <button type="submit" class="btn btn-hotel-search">
                      <i class="fas fa-search"></i> Buscar Disponibilidad
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==================== ROOMS & SUITES SECTION ==================== -->
    <section id="habitaciones" class="py-5" style="background-color: #FAFAFC;">
      <div class="container py-4">
        <header class="section-header wow fadeInUp">
          <span class="section-tag">Alojamiento Exclusivo</span>
          <h3>Nuestras Habitaciones &amp; Suites</h3>
          <p>Espacios pensados minuciosamente para el confort, la relajación y el descanso con acabados de alta gama y vistas panorámicas.</p>
        </header>

        <div class="row">
          <!-- Room 1 -->
          <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="room-card">
              <div class="room-img-wrapper">
                <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=800&q=80" alt="Suite Presidencial">
                <span class="room-badge"><i class="fas fa-crown text-warning mr-1"></i> Suite Imperial</span>
                <div class="room-rating"><i class="fas fa-star"></i><span>5.0</span></div>
                <div class="room-price-tag"><strong>$290</strong> / noche</div>
              </div>
              <div class="room-body">
                <h4 class="room-title">Suite Presidencial Vista al Mar</h4>
                <p class="room-desc">Cama King Size, amplia terraza privada con jacuzzi exterior, vista panorámica al océano y mayordomo privado.</p>
                <div class="room-amenities">
                  <span class="room-amenity"><i class="fas fa-wifi"></i> WiFi 5G</span>
                  <span class="room-amenity"><i class="fas fa-hot-tub"></i> Jacuzzi</span>
                  <span class="room-amenity"><i class="fas fa-water"></i> Vista Marina</span>
                  <span class="room-amenity"><i class="fas fa-utensils"></i> Desayuno</span>
                </div>
                <div class="room-card-footer">
                  <small class="text-muted"><i class="fas fa-user-friends mr-1"></i> Hasta 3 huéspedes</small>
                  <button type="button" class="btn btn-book-room" onclick="selectRoom('Suite Presidencial Vista al Mar', 290)">
                    <i class="fas fa-concierge-bell mr-1"></i> Reservar
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Room 2 -->
          <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="room-card">
              <div class="room-img-wrapper">
                <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=800&q=80" alt="Habitación Deluxe King">
                <span class="room-badge"><i class="fas fa-award mr-1"></i> Más Popular</span>
                <div class="room-rating"><i class="fas fa-star"></i><span>4.9</span></div>
                <div class="room-price-tag"><strong>$160</strong> / noche</div>
              </div>
              <div class="room-body">
                <h4 class="room-title">Habitación Deluxe King</h4>
                <p class="room-desc">Elegancia contemporánea, cama King con sábanas de algodón egipcio de 400 hilos, baño de mármol y balcón privado.</p>
                <div class="room-amenities">
                  <span class="room-amenity"><i class="fas fa-wifi"></i> WiFi</span>
                  <span class="room-amenity"><i class="fas fa-tv"></i> Smart TV 55"</span>
                  <span class="room-amenity"><i class="fas fa-wine-bottle"></i> Minibar</span>
                  <span class="room-amenity"><i class="fas fa-snowflake"></i> Climatizada</span>
                </div>
                <div class="room-card-footer">
                  <small class="text-muted"><i class="fas fa-user-friends mr-1"></i> 2 huéspedes</small>
                  <button type="button" class="btn btn-book-room" onclick="selectRoom('Habitación Deluxe King', 160)">
                    <i class="fas fa-concierge-bell mr-1"></i> Reservar
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Room 3 -->
          <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="room-card">
              <div class="room-img-wrapper">
                <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?auto=format&fit=crop&w=800&q=80" alt="Villa Privada Familiar">
                <span class="room-badge"><i class="fas fa-gem mr-1"></i> Exclusivo</span>
                <div class="room-rating"><i class="fas fa-star"></i><span>5.0</span></div>
                <div class="room-price-tag"><strong>$380</strong> / noche</div>
              </div>
              <div class="room-body">
                <h4 class="room-title">Villa de Lujo con Piscina Privada</h4>
                <p class="room-desc">Máxima privacidad para familias o grupos exclusivos. Dos habitaciones, piscina privada, jardines tropicales y acceso directo a la playa.</p>
                <div class="room-amenities">
                  <span class="room-amenity"><i class="fas fa-swimming-pool"></i> Piscina propia</span>
                  <span class="room-amenity"><i class="fas fa-umbrella-beach"></i> Playa</span>
                  <span class="room-amenity"><i class="fas fa-coffee"></i> Cocina Chef</span>
                  <span class="room-amenity"><i class="fas fa-car"></i> Parking VIP</span>
                </div>
                <div class="room-card-footer">
                  <small class="text-muted"><i class="fas fa-users mr-1"></i> Hasta 6 huéspedes</small>
                  <button type="button" class="btn btn-book-room" onclick="selectRoom('Villa de Lujo con Piscina Privada', 380)">
                    <i class="fas fa-concierge-bell mr-1"></i> Reservar
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Room 4 -->
          <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="room-card">
              <div class="room-img-wrapper">
                <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=800&q=80" alt="Habitación Superior Doble">
                <span class="room-badge"><i class="fas fa-heart mr-1"></i> Familiar</span>
                <div class="room-rating"><i class="fas fa-star"></i><span>4.8</span></div>
                <div class="room-price-tag"><strong>$130</strong> / noche</div>
              </div>
              <div class="room-body">
                <h4 class="room-title">Habitación Superior Doble</h4>
                <p class="room-desc">Ideal para familias o amigos. Cuenta con dos camas Queen Size, vistas al jardín, escritorio de trabajo y baño espacioso.</p>
                <div class="room-amenities">
                  <span class="room-amenity"><i class="fas fa-wifi"></i> WiFi</span>
                  <span class="room-amenity"><i class="fas fa-bed"></i> 2 Camas Queen</span>
                  <span class="room-amenity"><i class="fas fa-tree"></i> Vista Jardín</span>
                  <span class="room-amenity"><i class="fas fa-lock"></i> Caja Fuerte</span>
                </div>
                <div class="room-card-footer">
                  <small class="text-muted"><i class="fas fa-users mr-1"></i> Hasta 4 huéspedes</small>
                  <button type="button" class="btn btn-book-room" onclick="selectRoom('Habitación Superior Doble', 130)">
                    <i class="fas fa-concierge-bell mr-1"></i> Reservar
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Room 5 -->
          <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="room-card">
              <div class="room-img-wrapper">
                <img src="https://images.unsplash.com/photo-1591088398332-8a7791972843?auto=format&fit=crop&w=800&q=80" alt="Suite Romántica">
                <span class="room-badge"><i class="fas fa-glass-cheers mr-1"></i> Luna de Miel</span>
                <div class="room-rating"><i class="fas fa-star"></i><span>4.9</span></div>
                <div class="room-price-tag"><strong>$220</strong> / noche</div>
              </div>
              <div class="room-body">
                <h4 class="room-title">Suite Romántica &amp; Sunset</h4>
                <p class="room-desc">Pensada para parejas en escapadas inolvidables. Cama King con dosel, botella de champaña de bienvenida y balcón con vista al atardecer.</p>
                <div class="room-amenities">
                  <span class="room-amenity"><i class="fas fa-wine-glass-alt"></i> Champaña</span>
                  <span class="room-amenity"><i class="fas fa-bath"></i> Tina de Baño</span>
                  <span class="room-amenity"><i class="fas fa-sun"></i> Atardecer</span>
                  <span class="room-amenity"><i class="fas fa-spa"></i> Amenidades Spa</span>
                </div>
                <div class="room-card-footer">
                  <small class="text-muted"><i class="fas fa-heart text-danger mr-1"></i> 2 personas</small>
                  <button type="button" class="btn btn-book-room" onclick="selectRoom('Suite Romántica &amp; Sunset', 220)">
                    <i class="fas fa-concierge-bell mr-1"></i> Reservar
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Room 6 -->
          <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="room-card">
              <div class="room-img-wrapper">
                <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?auto=format&fit=crop&w=800&q=80" alt="Penthouse Ejecutivo">
                <span class="room-badge"><i class="fas fa-building mr-1"></i> Penthouse</span>
                <div class="room-rating"><i class="fas fa-star"></i><span>5.0</span></div>
                <div class="room-price-tag"><strong>$320</strong> / noche</div>
              </div>
              <div class="room-body">
                <h4 class="room-title">Penthouse Panorámico Sky</h4>
                <p class="room-desc">Ubicado en el último piso con terraza de 360 grados, sala de estar independiente, bar privado y centro de entretenimiento de vanguardia.</p>
                <div class="room-amenities">
                  <span class="room-amenity"><i class="fas fa-eye"></i> Vista 360°</span>
                  <span class="room-amenity"><i class="fas fa-cocktail"></i> Bar Privado</span>
                  <span class="room-amenity"><i class="fas fa-laptop"></i> Zona Trabajo</span>
                  <span class="room-amenity"><i class="fas fa-concierge-bell"></i> Mayordomo</span>
                </div>
                <div class="room-card-footer">
                  <small class="text-muted"><i class="fas fa-user-friends mr-1"></i> 2-3 huéspedes</small>
                  <button type="button" class="btn btn-book-room" onclick="selectRoom('Penthouse Panorámico Sky', 320)">
                    <i class="fas fa-concierge-bell mr-1"></i> Reservar
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==================== HOTEL SERVICES & AMENITIES ==================== -->
    <section id="servicios" class="py-5">
      <div class="container py-4">
        <header class="section-header wow fadeInUp">
          <span class="section-tag">Hospitalidad de Vanguardia</span>
          <h3>Servicios &amp; Amenidades 5 Estrellas</h3>
          <p>Ofrecemos una gama integral de comodidades de clase mundial para garantizar una estancia extraordinaria.</p>
        </header>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 wow bounceInUp" data-wow-delay="0.1s">
            <div class="hotel-service-card">
              <div class="hotel-service-icon"><i class="fas fa-utensils"></i></div>
              <h4>Gastronomía Gourmet</h4>
              <p>Restaurantes galardonados con reconocidos chefs internacionales, cocina fusión, ingredientes frescos y room service las 24 horas.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4 wow bounceInUp" data-wow-delay="0.2s">
            <div class="hotel-service-card">
              <div class="hotel-service-icon"><i class="fas fa-spa"></i></div>
              <h4>Spa &amp; Bienestar Holístico</h4>
              <p>Circuito de hidroterapia, sauna finlandés, masajes terapéuticos en pareja y rituales faciales con esencias naturales.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4 wow bounceInUp" data-wow-delay="0.3s">
            <div class="hotel-service-card">
              <div class="hotel-service-icon"><i class="fas fa-swimming-pool"></i></div>
              <h4>Piscinas &amp; Infinity Pool</h4>
              <p>Piscina climatizada con borde infinito mirando al océano, camas balinesas, toallas de felpa y servicio de coctelería al sol.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4 wow bounceInUp" data-wow-delay="0.1s">
            <div class="hotel-service-card">
              <div class="hotel-service-icon"><i class="fas fa-glass-cheers"></i></div>
              <h4>Eventos, Bodas &amp; Convenciones</h4>
              <p>Salones de banquetes modulables con tecnología audiovisual de última generación y wedding planners especializados.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4 wow bounceInUp" data-wow-delay="0.2s">
            <div class="hotel-service-card">
              <div class="hotel-service-icon"><i class="fas fa-shuttle-van"></i></div>
              <h4>Traslado VIP &amp; Tours Privados</h4>
              <p>Transporte privado y seguro desde y hacia el aeropuerto, así como excursiones guiadas en yate y paseos históricos.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4 wow bounceInUp" data-wow-delay="0.3s">
            <div class="hotel-service-card">
              <div class="hotel-service-icon"><i class="fas fa-dumbbell"></i></div>
              <h4>Fitness Center &amp; Deportes</h4>
              <p>Gimnasio abierto 24/7 con equipamiento de fuerza y cardiovascular Technogym, clases de yoga y deportes acuáticos en la playa.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==================== POPULAR DESTINATIONS ==================== -->
    <section id="destinos" class="py-5" style="background-color: #F8F9FA;">
      <div class="container py-4">
        <header class="section-header wow fadeInUp">
          <span class="section-tag">Destinos de Ensueño</span>
          <h3>Explora Nuestros Hoteles en los Mejores Destinos</h3>
          <p>Ubicaciones privilegiadas en las playas más hermosas y centros metropolitanos más vibrantes.</p>
        </header>

        <div class="row">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="dest-card">
              <img src="https://images.unsplash.com/photo-1583200424558-8b9a25b1580f?auto=format&fit=crop&w=600&q=80" alt="Cartagena de Indias">
              <div class="dest-overlay">
                <span class="dest-tag">Caribe Colombiano</span>
                <h4 class="dest-title">Cartagena de Indias</h4>
                <div class="dest-count"><i class="fas fa-hotel mr-1"></i> 8 Hoteles &amp; Resorts</div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="dest-card">
              <img src="https://images.unsplash.com/photo-1510414842594-a61c69b5ae57?auto=format&fit=crop&w=600&q=80" alt="Cancún">
              <div class="dest-overlay">
                <span class="dest-tag">México</span>
                <h4 class="dest-title">Cancún &amp; Riviera</h4>
                <div class="dest-count"><i class="fas fa-hotel mr-1"></i> 12 Resorts All-Inclusive</div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="dest-card">
              <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=600&q=80" alt="Punta Cana">
              <div class="dest-overlay">
                <span class="dest-tag">República Dominicana</span>
                <h4 class="dest-title">Punta Cana</h4>
                <div class="dest-count"><i class="fas fa-hotel mr-1"></i> 6 Hoteles de Playa</div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="dest-card">
              <img src="https://images.unsplash.com/photo-1582650625119-3a31f8418365?auto=format&fit=crop&w=600&q=80" alt="San Andrés Islas">
              <div class="dest-overlay">
                <span class="dest-tag">Mar de 7 Colores</span>
                <h4 class="dest-title">San Andrés Isla</h4>
                <div class="dest-count"><i class="fas fa-hotel mr-1"></i> 5 Hoteles Boutique</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==================== STATS / COUNTERS ==================== -->
    <section id="counters-section" class="wow fadeIn">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-6 hotel-counter-item">
            <div class="counter-number"><span data-toggle="counter-up">{{ $habitaciones ?? 480 }}</span>+</div>
            <p>Habitaciones &amp; Suites</p>
          </div>
          <div class="col-lg-3 col-6 hotel-counter-item">
            <div class="counter-number"><span data-toggle="counter-up">{{ $destinos ?? 25 }}</span>+</div>
            <p>Destinos &amp; Resorts</p>
          </div>
          <div class="col-lg-3 col-6 hotel-counter-item">
            <div class="counter-number"><span data-toggle="counter-up">{{ $huespedes ?? 18500 }}</span>+</div>
            <p>Huéspedes Felices</p>
          </div>
          <div class="col-lg-3 col-6 hotel-counter-item">
            <div class="counter-number"><span data-toggle="counter-up">{{ $hoteles ?? 95 }}</span>%</div>
            <p>Recomendación Positiva</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ==================== GUEST REVIEWS / TESTIMONIALS ==================== -->
    <section id="testimonios" class="py-5">
      <div class="container py-4">
        <header class="section-header wow fadeInUp">
          <span class="section-tag">Testimonios Reales</span>
          <h3>Lo que Dicen Nuestros Huéspedes</h3>
          <p>Descubre las vivencias de viajeros de todo el mundo que han disfrutado de la hospitalidad de DEPORCO Hotels &amp; Resorts.</p>
        </header>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-card">
              <div class="testimonial-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
              <p class="testimonial-quote">
                "La Suite Imperial superó con creces lo que esperábamos. La vista al mar al despertar y el servicio de desayuno en la terraza privada fueron simplemente insuperables. ¡Volveremos todos los años!"
              </p>
              <div class="testimonial-author">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80" alt="Valentina Soto" class="testimonial-avatar">
                <div>
                  <h5 class="testimonial-name">Valentina Soto</h5>
                  <p class="testimonial-stay"><i class="fas fa-map-marker-alt text-muted mr-1"></i> Huésped en Cartagena</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="testimonial-card">
              <div class="testimonial-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
              <p class="testimonial-quote">
                "Viajo constantemente por negocios y DEPORCO Executive es mi elección indiscutible. WiFi de ultra alta velocidad, cama comodísima, gimnasio de primer nivel y un trato de recepción impecable."
              </p>
              <div class="testimonial-author">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=120&q=80" alt="Alejandro Mendoza" class="testimonial-avatar">
                <div>
                  <h5 class="testimonial-name">Alejandro Mendoza</h5>
                  <p class="testimonial-stay"><i class="fas fa-map-marker-alt text-muted mr-1"></i> Huésped Corporativo</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="testimonial-card">
              <div class="testimonial-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
              <p class="testimonial-quote">
                "Celebramos nuestra luna de miel en la Villa Privada de Cancún. Las atenciones con champaña, el spa y la piscina privada nos dieron los días más memorables de nuestras vidas. 100% recomendado."
              </p>
              <div class="testimonial-author">
                <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=120&q=80" alt="Camila & Esteban" class="testimonial-avatar">
                <div>
                  <h5 class="testimonial-name">Camila &amp; Esteban</h5>
                  <p class="testimonial-stay"><i class="fas fa-map-marker-alt text-muted mr-1"></i> Luna de Miel en Cancún</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- QUALITY BANNER -->
        <div class="quality-banner wow fadeInUp" data-wow-delay="0.2s">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h2>¿Planeas tus próximas vacaciones o evento?</h2>
              <p>Suscríbete a nuestro club de huéspedes exclusivos y obtén hasta un <strong>20% de descuento directo</strong> en tu primera reserva, además de check-out tardío de cortesía.</p>
            </div>
            <div class="col-lg-4 text-lg-right text-left">
              <a href="#buscar-reserva" class="btn btn-warning btn-lg font-weight-bold px-4 py-3 scrollto" style="border-radius: 30px; background:#C5A880; border:none; color:#0B1B3D;">
                <i class="fas fa-calendar-check mr-2"></i> Reservar con Descuento
              </a>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ==================== CERTIFICATIONS & BRANDS ==================== -->
    <section id="clients" class="py-4 bg-light wow fadeInUp">
      <div class="container text-center">
        <p class="text-uppercase text-muted font-weight-bold mb-3" style="letter-spacing: 2px; font-size: 13px;">
          Certificaciones de Calidad y Alianzas Turísticas Internacionales
        </p>
        <div class="d-flex flex-wrap justify-content-center align-items-center" style="gap: 40px; opacity: 0.75;">
          <div class="font-weight-bold text-secondary"><i class="fas fa-certificate text-warning mr-1"></i> Forbes Travel Guide</div>
          <div class="font-weight-bold text-secondary"><i class="fas fa-award text-warning mr-1"></i> TripAdvisor Travellers' Choice</div>
          <div class="font-weight-bold text-secondary"><i class="fas fa-shield-virus text-info mr-1"></i> SafeTravels Certified</div>
          <div class="font-weight-bold text-secondary"><i class="fas fa-leaf text-success mr-1"></i> Green Globe Eco-Resort</div>
          <div class="font-weight-bold text-secondary"><i class="fas fa-star text-warning mr-1"></i> 5 Diamond Hospitality</div>
        </div>
      </div>
    </section>
  </main>

  <!-- ==================== RESERVATION MODAL ==================== -->
  <div class="modal fade modal-hotel" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-bold text-white" id="bookingModalLabel">
            <i class="fas fa-concierge-bell text-warning mr-2"></i> Confirmar Solicitud de Reserva
          </h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-4">
          <div class="alert alert-light border mb-3">
            <h6 class="font-weight-bold mb-1" id="modalRoomName" style="color: #0B1B3D;">Suite Presidencial</h6>
            <small class="text-muted" id="modalDestination">Cartagena de Indias</small>
            <div class="font-weight-bold text-primary mt-1" id="modalPrice">$290 USD / noche</div>
          </div>

          <form id="finalBookingForm" onsubmit="event.preventDefault(); submitBooking();">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="font-weight-bold text-dark small">Nombre Completo</label>
                <input type="text" class="form-control" id="guestName" placeholder="Ej. Carlos Mendoza" required>
              </div>
              <div class="form-group col-md-6">
                <label class="font-weight-bold text-dark small">Teléfono / WhatsApp</label>
                <input type="tel" class="form-control" id="guestPhone" placeholder="+57 300 000 0000" required>
              </div>
            </div>

            <div class="form-group">
              <label class="font-weight-bold text-dark small">Correo Electrónico</label>
              <input type="email" class="form-control" id="guestEmail" placeholder="tucorreo@ejemplo.com" required>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="font-weight-bold text-dark small">Fecha de Entrada</label>
                <input type="date" class="form-control" id="modalCheckIn" required>
              </div>
              <div class="form-group col-md-6">
                <label class="font-weight-bold text-dark small">Fecha de Salida</label>
                <input type="date" class="form-control" id="modalCheckOut" required>
              </div>
            </div>

            <div class="form-group">
              <label class="font-weight-bold text-dark small">Peticiones Especiales (Opcional)</label>
              <textarea class="form-control" rows="2" id="guestNotes" placeholder="Piso alto, cama adicional, traslado desde el aeropuerto..."></textarea>
            </div>

            <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" class="custom-control-input" id="termsCheck" required checked>
              <label class="custom-control-label small text-muted" for="termsCheck">
                Acepto los <a href="{{route('deporco.terms')}}" target="_blank">Términos del Hotel</a> y la Política de Cancelación Flexible.
              </label>
            </div>

            <button type="submit" class="btn btn-block btn-hotel-search py-2 font-weight-bold">
              <i class="fas fa-check-circle mr-1"></i> Confirmar Pre-Reserva
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- ==================== FOOTER ==================== -->
  <footer id="footer">
    <div class="footer-top pb-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="footer-info">
              <img src="{{url('/logo_hotel.svg')}}" class="img-fluid mb-3" style="max-height: 50px;" alt="DEPORCO Hotels">
              <p>
                DEPORCO Hotels &amp; Resorts es una cadena hotelera y plataforma de reservas líder en hospitalidad, ofreciendo estancias de lujo, diseño sofisticado y descanso inigualable en los destinos más cotizados.
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
              <li><i class="fas fa-angle-right text-warning mr-2"></i><a href="#habitaciones">Habitaciones &amp; Suites</a></li>
              <li><i class="fas fa-angle-right text-warning mr-2"></i><a href="#servicios">Servicios &amp; Spa</a></li>
              <li><i class="fas fa-angle-right text-warning mr-2"></i><a href="#destinos">Destinos</a></li>
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

  <!-- SweetAlert for Booking Confirmation -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    // Initialize dates in search bar
    document.addEventListener("DOMContentLoaded", function() {
      const today = new Date();
      const tomorrow = new Date(today);
      tomorrow.setDate(tomorrow.getDate() + 3);

      const todayStr = today.toISOString().split('T')[0];
      const tomorrowStr = tomorrow.toISOString().split('T')[0];

      if (document.getElementById('searchCheckIn')) {
        document.getElementById('searchCheckIn').value = todayStr;
        document.getElementById('searchCheckIn').min = todayStr;
      }
      if (document.getElementById('searchCheckOut')) {
        document.getElementById('searchCheckOut').value = tomorrowStr;
        document.getElementById('searchCheckOut').min = todayStr;
      }
    });

    let selectedRoomName = 'Suite Presidencial Vista al Mar';
    let selectedRoomPrice = 290;

    function selectRoom(name, price) {
      selectedRoomName = name;
      selectedRoomPrice = price;
      openBookingModal();
    }

    function openBookingModal() {
      const dest = document.getElementById('searchDestination') ? document.getElementById('searchDestination').value : 'Cartagena de Indias';
      const checkIn = document.getElementById('searchCheckIn') ? document.getElementById('searchCheckIn').value : '';
      const checkOut = document.getElementById('searchCheckOut') ? document.getElementById('searchCheckOut').value : '';

      document.getElementById('modalRoomName').innerText = selectedRoomName;
      document.getElementById('modalDestination').innerText = dest;
      document.getElementById('modalPrice').innerText = '$' + selectedRoomPrice + ' USD / noche';

      if (checkIn) document.getElementById('modalCheckIn').value = checkIn;
      if (checkOut) document.getElementById('modalCheckOut').value = checkOut;

      $('#bookingModal').modal('show');
    }

    function submitBooking() {
      const name = document.getElementById('guestName').value;
      const phone = document.getElementById('guestPhone').value;
      const email = document.getElementById('guestEmail').value;
      const room = selectedRoomName;

      $('#bookingModal').modal('hide');

      Swal.fire({
        title: '¡Solicitud de Reserva Recibida!',
        html: `Estimado/a <strong>${name}</strong>,<br><br>Hemos reservado provisionalmente tu <strong>${room}</strong>.<br>Hemos enviado los detalles de confirmación y pase de bienvenida a <strong>${email}</strong>.<br><br>Nuestro equipo de Concierge te contactará en breve al <strong>${phone}</strong>.`,
        icon: 'success',
        confirmButtonColor: '#C5A880',
        confirmButtonText: 'Excelente, gracias'
      });
    }
  </script>
</body>
</html>
