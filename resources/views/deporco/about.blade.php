@extends('layouts.deporco')
@section('title', 'Conócenos | Tradición y Hospitalidad Exclusiva')

@section('content')
<!-- Hero About -->
<section class="py-5" style="background: linear-gradient(rgba(11, 27, 61, 0.8), rgba(11, 27, 61, 0.9)), url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1920&q=80') center center / cover no-repeat; color: white;">
  <div class="container py-5 text-center">
    <span class="badge badge-warning px-3 py-2 text-uppercase mb-3" style="background: #C5A880; color: #0B1B3D; font-weight: 700; letter-spacing: 1.5px;">Sobre Nosotros</span>
    <h1 class="display-4 font-weight-bold text-white mb-3">Pasión por la Hospitalidad de Lujo</h1>
    <p class="lead text-light mx-auto" style="max-width: 750px;">
      Más que un hospedaje, creamos refugios de descanso y memorias entrañables para viajeros que aprecian los más altos estándares de servicio.
    </p>
  </div>
</section>

<!-- About Story Section -->
<section id="about" class="py-5">
  <div class="container py-4">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0 wow fadeInLeft">
        <div class="position-relative">
          <img class="img-fluid rounded shadow-lg" src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800&q=80" alt="Resort DEPORCO">
          <div class="position-absolute bg-white p-3 rounded shadow" style="bottom: -20px; right: 20px; border-left: 5px solid #C5A880;">
            <h5 class="mb-0 font-weight-bold" style="color: #0B1B3D;">+10 Años de Trayectoria</h5>
            <small class="text-muted">Liderando el confort y el buen vivir</small>
          </div>
        </div>
      </div>

      <div class="col-lg-6 pl-lg-5 wow fadeInRight">
        <span class="section-tag" style="color: #C5A880; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; font-size: 13px;">Nuestra Historia</span>
        <h2 class="font-weight-bold mb-4" style="color: #0B1B3D;">Creamos Experiencias que Perduran en la Memoria</h2>
        <p class="text-muted leading-relaxed">
          Nacimos con la visión de transformar el concepto del descanso vacacional y ejecutivo. Desde nuestra fundación, nos hemos dedicado a consolidar una red de hoteles y resorts caracterizados por su calidez humana, diseño arquitectónico sofisticado y respeto absoluto por el entorno natural de cada destino.
        </p>
        <p class="text-muted leading-relaxed">
          Cada detalle en nuestras propiedades —desde la selección de la lencería de cama hasta el saludo de bienvenida de nuestro personal— está diseñado para superar las expectativas de nuestros huéspedes.
        </p>

        <div class="row mt-4">
          <div class="col-sm-6 mb-3">
            <div class="d-flex align-items-center">
              <div class="mr-3" style="width: 48px; height: 48px; background: rgba(197,168,128,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #C5A880; font-size: 20px;">
                <i class="fas fa-check-circle"></i>
              </div>
              <div>
                <h6 class="mb-0 font-weight-bold">Estándar 5 Diamantes</h6>
                <small class="text-muted">Servicio galardonado</small>
              </div>
            </div>
          </div>

          <div class="col-sm-6 mb-3">
            <div class="d-flex align-items-center">
              <div class="mr-3" style="width: 48px; height: 48px; background: rgba(197,168,128,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #C5A880; font-size: 20px;">
                <i class="fas fa-leaf"></i>
              </div>
              <div>
                <h6 class="mb-0 font-weight-bold">Sustentabilidad Verde</h6>
                <small class="text-muted">Prácticas ecológicas</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Values & Pillars -->
<section class="py-5 bg-light">
  <div class="container py-4">
    <header class="section-header text-center mb-5">
      <span class="section-tag" style="color: #C5A880; font-weight: 700; text-transform: uppercase;">Nuestros Pilares</span>
      <h3 style="color: #0B1B3D; font-weight: 800;">Los Valores que Nos Guían</h3>
      <p class="text-muted">La columna vertebral que garantiza la excelencia en cada uno de nuestros complejos hoteleros.</p>
    </header>

    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card border-0 shadow-sm h-100 p-4 rounded-lg">
          <div class="mb-3 text-warning font-weight-bold" style="font-size: 32px; color: #C5A880 !important;">
            <i class="fas fa-heart"></i>
          </div>
          <h4 class="font-weight-bold mb-3" style="color: #0B1B3D;">Hospitalidad Auténtica</h4>
          <p class="text-muted mb-0">
            Tratamos a cada huésped como a un invitado de honor en nuestra propia casa, anticipándonos a sus deseos con amabilidad genuina.
          </p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card border-0 shadow-sm h-100 p-4 rounded-lg">
          <div class="mb-3 text-warning font-weight-bold" style="font-size: 32px; color: #C5A880 !important;">
            <i class="fas fa-gem"></i>
          </div>
          <h4 class="font-weight-bold mb-3" style="color: #0B1B3D;">Excelencia &amp; Calidad</h4>
          <p class="text-muted mb-0">
            No escatimamos en acabados, confort ni gastronomía. Mantenemos auditorías rigurosas para asegurar una calidad insuperable.
          </p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card border-0 shadow-sm h-100 p-4 rounded-lg">
          <div class="mb-3 text-warning font-weight-bold" style="font-size: 32px; color: #C5A880 !important;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h4 class="font-weight-bold mb-3" style="color: #0B1B3D;">Seguridad &amp; Tranquilidad</h4>
          <p class="text-muted mb-0">
            Protocolos de bioseguridad, privacidad absoluta y vigilancia profesional para que disfrutes de tu estadía con total tranquilidad.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Direct CTA -->
<section class="py-5" style="background: #0B1B3D; color: white;">
  <div class="container py-4 text-center">
    <h2 class="font-weight-bold text-white mb-3">¿Listo para vivir la experiencia DEPORCO?</h2>
    <p class="lead text-light mb-4 mx-auto" style="max-width: 650px;">
      Reserva tu habitación hoy mismo y permítenos brindarte el descanso y la atención que mereces.
    </p>
    <a href="{{url('/#buscar-reserva')}}" class="btn btn-warning btn-lg px-4 py-3 font-weight-bold" style="background: #C5A880; border: none; color: #0B1B3D; border-radius: 30px;">
      <i class="fas fa-calendar-check mr-2"></i> Reservar Ahora
    </a>
  </div>
</section>
@endsection
