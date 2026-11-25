@extends('layouts.deporco')
@section('title', 'Experiencias, Paquetes & Prensa')

@section('content')
<!-- Header Banner -->
<section class="py-5" style="background: linear-gradient(rgba(11, 27, 61, 0.8), rgba(11, 27, 61, 0.9)), url('https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?auto=format&fit=crop&w=1920&q=80') center center / cover no-repeat; color: white;">
  <div class="container py-5 text-center">
    <span class="badge badge-warning px-3 py-2 text-uppercase mb-3" style="background: #C5A880; color: #0B1B3D; font-weight: 700; letter-spacing: 1.5px;">Experiencias Únicas</span>
    <h1 class="display-4 font-weight-bold text-white mb-3">Paquetes Exclusivos &amp; Prensa Hotelera</h1>
    <p class="lead text-light mx-auto" style="max-width: 720px;">
      Diseñamos vivencias memorables para cada ocasión: celebraciones románticas, vacaciones en familia, retiros de bienestar y encuentros corporativos de alto nivel.
    </p>
  </div>
</section>

<!-- Packages Section -->
<section class="py-5">
  <div class="container py-4">
    <header class="section-header text-center mb-5">
      <span class="section-tag" style="color: #C5A880; font-weight: 700; text-transform: uppercase;">Promociones &amp; Experiencias</span>
      <h3 style="color: #0B1B3D; font-weight: 800;">Nuestros Paquetes Seleccionados</h3>
      <p class="text-muted">Aprovecha nuestras ofertas especiales con beneficios añadidos para tu próxima visita.</p>
    </header>

    <div class="row">
      <!-- Package 1 -->
      <div class="col-lg-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="card border-0 shadow-sm rounded-lg overflow-hidden h-100">
          <div class="row no-gutters h-100">
            <div class="col-md-5">
              <img src="https://images.unsplash.com/photo-1510414842594-a61c69b5ae57?auto=format&fit=crop&w=600&q=80" class="card-img h-100" style="object-fit: cover;" alt="Escapada Romántica">
            </div>
            <div class="col-md-7">
              <div class="card-body p-4 d-flex flex-direction-column flex-column justify-content-between h-100">
                <div>
                  <span class="badge badge-pill badge-primary mb-2" style="background: #C5A880; color: #0B1B3D; font-weight: 700;">Parejas</span>
                  <h4 class="card-title font-weight-bold mb-2" style="color: #0B1B3D;">Escapada Romántica &amp; Sunset</h4>
                  <p class="card-text text-muted small mb-3">
                    Incluye alojamiento en Suite Vista al Mar, champaña de cortesía, cena privada a la luz de las velas en la playa y masaje relajante en pareja.
                  </p>
                  <ul class="list-unstyled small text-muted mb-3">
                    <li><i class="fas fa-check text-success mr-2"></i>Desayuno gourmet a la cama</li>
                    <li><i class="fas fa-check text-success mr-2"></i>Circuito de hidroterapia incluido</li>
                    <li><i class="fas fa-check text-success mr-2"></i>Late check-out hasta las 16:00 hrs</li>
                  </ul>
                </div>
                <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                  <div><span class="text-muted small">Desde</span> <strong class="h5 font-weight-bold" style="color: #0B1B3D;">$320 USD</strong></div>
                  <a href="{{url('/#buscar-reserva')}}" class="btn btn-sm btn-dark" style="background: #0B1B3D; border-radius: 20px;">Reservar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Package 2 -->
      <div class="col-lg-6 mb-4 wow fadeInUp" data-wow-delay="0.2s">
        <div class="card border-0 shadow-sm rounded-lg overflow-hidden h-100">
          <div class="row no-gutters h-100">
            <div class="col-md-5">
              <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=600&q=80" class="card-img h-100" style="object-fit: cover;" alt="Paquete Familiar">
            </div>
            <div class="col-md-7">
              <div class="card-body p-4 d-flex flex-direction-column flex-column justify-content-between h-100">
                <div>
                  <span class="badge badge-pill badge-info mb-2">Familias</span>
                  <h4 class="card-title font-weight-bold mb-2" style="color: #0B1B3D;">Familiar Todo Incluido</h4>
                  <p class="card-text text-muted small mb-3">
                    Disfruta de habitaciones conectadas, buffet y bebidas ilimitadas en todos los restaurantes, acceso ilimitado al parque acuático y Kids Club.
                  </p>
                  <ul class="list-unstyled small text-muted mb-3">
                    <li><i class="fas fa-check text-success mr-2"></i>Niños menores de 6 años gratis</li>
                    <li><i class="fas fa-check text-success mr-2"></i>Actividades recreativas diarias</li>
                    <li><i class="fas fa-check text-success mr-2"></i>Tours ecológicos guiados</li>
                  </ul>
                </div>
                <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                  <div><span class="text-muted small">Desde</span> <strong class="h5 font-weight-bold" style="color: #0B1B3D;">$410 USD</strong></div>
                  <a href="{{url('/#buscar-reserva')}}" class="btn btn-sm btn-dark" style="background: #0B1B3D; border-radius: 20px;">Reservar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Package 3 -->
      <div class="col-lg-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="card border-0 shadow-sm rounded-lg overflow-hidden h-100">
          <div class="row no-gutters h-100">
            <div class="col-md-5">
              <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=600&q=80" class="card-img h-100" style="object-fit: cover;" alt="Wellness Spa">
            </div>
            <div class="col-md-7">
              <div class="card-body p-4 d-flex flex-direction-column flex-column justify-content-between h-100">
                <div>
                  <span class="badge badge-pill badge-success mb-2">Bienestar</span>
                  <h4 class="card-title font-weight-bold mb-2" style="color: #0B1B3D;">Retiro Wellness &amp; Detox</h4>
                  <p class="card-text text-muted small mb-3">
                    Tres noches de relajación y purificación integral con masajes descontracturantes, yoga al amanecer y menú détox preparado por chefs y nutricionistas.
                  </p>
                  <ul class="list-unstyled small text-muted mb-3">
                    <li><i class="fas fa-check text-success mr-2"></i>2 Masajes corporales completos</li>
                    <li><i class="fas fa-check text-success mr-2"></i>Clases personalizadas de meditación</li>
                    <li><i class="fas fa-check text-success mr-2"></i>Kit de aromaterapia de regalo</li>
                  </ul>
                </div>
                <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                  <div><span class="text-muted small">Desde</span> <strong class="h5 font-weight-bold" style="color: #0B1B3D;">$280 USD</strong></div>
                  <a href="{{url('/#buscar-reserva')}}" class="btn btn-sm btn-dark" style="background: #0B1B3D; border-radius: 20px;">Reservar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Package 4 -->
      <div class="col-lg-6 mb-4 wow fadeInUp" data-wow-delay="0.2s">
        <div class="card border-0 shadow-sm rounded-lg overflow-hidden h-100">
          <div class="row no-gutters h-100">
            <div class="col-md-5">
              <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?auto=format&fit=crop&w=600&q=80" class="card-img h-100" style="object-fit: cover;" alt="Eventos Corporativos">
            </div>
            <div class="col-md-7">
              <div class="card-body p-4 d-flex flex-direction-column flex-column justify-content-between h-100">
                <div>
                  <span class="badge badge-pill badge-dark mb-2">Corporativo</span>
                  <h4 class="card-title font-weight-bold mb-2" style="color: #0B1B3D;">Negocios &amp; Convenciones VIP</h4>
                  <p class="card-text text-muted small mb-3">
                    Salones modulables con conectividad ultra rápida para conferencias, banquetes ejecutivos, coffee breaks gourmet y traslados privados al aeropuerto.
                  </p>
                  <ul class="list-unstyled small text-muted mb-3">
                    <li><i class="fas fa-check text-success mr-2"></i>Tecnología audiovisual de punta</li>
                    <li><i class="fas fa-check text-success mr-2"></i>Tarifas de hospedaje corporativo</li>
                    <li><i class="fas fa-check text-success mr-2"></i>Coordinador de eventos dedicado</li>
                  </ul>
                </div>
                <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                  <div><span class="text-muted small">Desde</span> <strong class="h5 font-weight-bold" style="color: #0B1B3D;">Tarifa especial</strong></div>
                  <a href="{{route('deporco.contact')}}" class="btn btn-sm btn-dark" style="background: #0B1B3D; border-radius: 20px;">Cotizar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Press & Media Kit -->
<section class="py-5 bg-light">
  <div class="container py-4">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <span class="section-tag" style="color: #C5A880; font-weight: 700; text-transform: uppercase; font-size: 13px;">Sala de Prensa</span>
        <h3 class="font-weight-bold mb-3" style="color: #0B1B3D;">Relaciones Públicas &amp; Prensa Hotelera</h3>
        <p class="text-muted leading-relaxed">
          Si eres periodista, creador de contenido de viajes o representante de una agencia turística y deseas información corporativa, fotografías en alta definición o coordinar una visita de prensa, nuestro equipo de comunicaciones está a tu disposición.
        </p>
        <p class="text-muted leading-relaxed">
          Toda utilización de la marca, logotipos e imágenes de <strong>DEPORCO Hoteles &amp; Resorts</strong> debe cumplir con nuestras normativas de marca y políticas de difusión autorizada.
        </p>
        <a href="{{route('deporco.contact')}}" class="btn btn-outline-dark px-4 py-2 font-weight-bold" style="border-radius: 25px;">
          <i class="fas fa-envelope mr-2"></i> Contactar al Área de Prensa
        </a>
      </div>

      <div class="col-lg-6">
        <div class="card border-0 shadow-sm p-4 rounded-lg bg-white">
          <h5 class="font-weight-bold mb-3" style="color: #0B1B3D;"><i class="fas fa-award text-warning mr-2"></i> Reconocimientos Recientes</h5>
          <ul class="list-unstyled mb-0">
            <li class="py-2 border-bottom">
              <strong class="d-block" style="color: #0B1B3D;">World Luxury Hotel Awards</strong>
              <small class="text-muted">Ganador en la categoría Resort de Playa y Spa de Excelencia.</small>
            </li>
            <li class="py-2 border-bottom">
              <strong class="d-block" style="color: #0B1B3D;">TripAdvisor Travellers' Choice</strong>
              <small class="text-muted">Top 1% de los mejores alojamientos turísticos en el Caribe.</small>
            </li>
            <li class="py-2">
              <strong class="d-block" style="color: #0B1B3D;">Certificación Sostenible Green Key</strong>
              <small class="text-muted">Reconocimiento a nuestras prácticas de hotelería ecológica y ahorro hídrico.</small>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
