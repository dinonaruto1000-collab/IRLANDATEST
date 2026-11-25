@extends('layouts.deporco')
@section('title', 'Términos, Condiciones y Políticas del Hotel')

@section('content')
<!-- Header Banner -->
<section class="py-5" style="background: linear-gradient(rgba(11, 27, 61, 0.8), rgba(11, 27, 61, 0.9)), url('https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1920&q=80') center center / cover no-repeat; color: white;">
  <div class="container py-5 text-center">
    <span class="badge badge-warning px-3 py-2 text-uppercase mb-3" style="background: #C5A880; color: #0B1B3D; font-weight: 700; letter-spacing: 1.5px;">Normativa y Transparencia</span>
    <h1 class="display-4 font-weight-bold text-white mb-3">Políticas de Hospedaje y Términos de Servicio</h1>
    <p class="lead text-light mx-auto" style="max-width: 720px;">
      Garantizamos estancias seguras, transparentes y confortables. Conoce los términos, políticas de cancelación y privacidad de DEPORCO Hoteles &amp; Resorts.
    </p>
  </div>
</section>

<section class="py-5">
  <div class="container py-4">
    <div class="row">
      <!-- Sidebar Navigation for terms -->
      <div class="col-lg-4 mb-4">
        <div class="card border-0 shadow-sm p-4 rounded-lg sticky-top" style="top: 110px;">
          <h5 class="font-weight-bold mb-3" style="color: #0B1B3D;"><i class="fas fa-list-ul mr-2 text-warning"></i> Índice de Políticas</h5>
          <div class="list-group list-group-flush">
            <a href="#TerminosYCondiciones" class="list-group-item list-group-item-action border-0 px-0 py-2 font-weight-bold text-dark">
              1. Términos de Reserva y Pago
            </a>
            <a href="#HorariosEstancia" class="list-group-item list-group-item-action border-0 px-0 py-2 font-weight-bold text-dark">
              2. Horarios de Check-In y Check-Out
            </a>
            <a href="#PoliticaDeCancelacion" class="list-group-item list-group-item-action border-0 px-0 py-2 font-weight-bold text-dark">
              3. Cancelación Flexible y Reembolsos
            </a>
            <a href="#NormasConvivencia" class="list-group-item list-group-item-action border-0 px-0 py-2 font-weight-bold text-dark">
              4. Normas de Convivencia y Mascotas
            </a>
            <a href="#PoliticaDePrivacidad" class="list-group-item list-group-item-action border-0 px-0 py-2 font-weight-bold text-dark">
              5. Privacidad y Protección de Datos
            </a>
          </div>
        </div>
      </div>

      <!-- Content -->
      <div class="col-lg-8">
        <div class="card border-0 shadow-sm p-4 p-md-5 rounded-lg bg-white">
          
          <!-- 1. Terms -->
          <div id="TerminosYCondiciones" class="mb-5">
            <h3 class="font-weight-bold mb-3" style="color: #0B1B3D;">1. TÉRMINOS DE RESERVA Y PAGO</h3>
            <p class="text-muted leading-relaxed">
              Al realizar una reserva en cualquier propiedad o mediante el sitio web oficial de <strong>DEPORCO Hoteles &amp; Resorts</strong>, el huésped acepta expresamente los términos y condiciones aquí contemplados.
            </p>
            <ul class="text-muted leading-relaxed">
              <li>Para confirmar su reserva es necesario proveer una tarjeta de crédito o comprobante de pago válido que garantice la estancia.</li>
              <li>Las tarifas mostradas incluyen impuestos locales aplicables y desayuno buffet gourmet (salvo que la tarifa promocional indique lo contrario).</li>
              <li>Los huéspedes deben presentar un documento de identidad oficial vigente (Cédula o Pasaporte) al momento del registro en recepción.</li>
            </ul>
          </div>

          <hr class="my-4">

          <!-- 2. Check-in / Check-out -->
          <div id="HorariosEstancia" class="mb-5">
            <h3 class="font-weight-bold mb-3" style="color: #0B1B3D;">2. HORARIOS DE CHECK-IN Y CHECK-OUT</h3>
            <div class="row my-3">
              <div class="col-sm-6 mb-2">
                <div class="p-3 rounded bg-light border-left" style="border-left: 4px solid #C5A880 !important;">
                  <span class="text-muted small text-uppercase font-weight-bold">Hora de Entrada</span>
                  <h5 class="mb-0 font-weight-bold" style="color: #0B1B3D;">Check-In: 15:00 hrs</h5>
                </div>
              </div>
              <div class="col-sm-6 mb-2">
                <div class="p-3 rounded bg-light border-left" style="border-left: 4px solid #0B1B3D !important;">
                  <span class="text-muted small text-uppercase font-weight-bold">Hora de Salida</span>
                  <h5 class="mb-0 font-weight-bold" style="color: #0B1B3D;">Check-Out: 12:00 hrs</h5>
                </div>
              </div>
            </div>
            <p class="text-muted leading-relaxed">
              Si requiere un registro anticipado (<em>Early Check-in</em>) o una salida posterior (<em>Late Check-out</em>), favor de consultar con el equipo de recepción o concierge. Sujeto a disponibilidad y posibles tarifas adicionales.
            </p>
          </div>

          <hr class="my-4">

          <!-- 3. Cancellation Policy -->
          <div id="PoliticaDeCancelacion" class="mb-5">
            <h3 class="font-weight-bold mb-3" style="color: #0B1B3D;">3. POLÍTICA DE CANCELACIÓN Y REEMBOLSO</h3>
            <p class="text-muted leading-relaxed">
              En DEPORCO entendemos que los planes pueden cambiar. Por ello, brindamos opciones de reserva con flexibilidad garantizada:
            </p>
            <ul class="text-muted leading-relaxed">
              <li><strong>Cancelación Gratuita:</strong> Puede cancelar o modificar su reserva sin penalización hasta 48 horas antes de la fecha de entrada (check-in).</li>
              <li><strong>Cancelación Tardía o No-Show:</strong> Si la cancelación se realiza con menos de 48 horas de antelación o el huésped no se presenta al hotel, se cargará el equivalente a la primera noche de estancia.</li>
              <li><strong>Tarifas No Reembolsables:</strong> Ciertas promociones de venta anticipada de alta temporada no admiten reembolso, lo cual se especifica de forma clara al momento de la compra.</li>
            </ul>
          </div>

          <hr class="my-4">

          <!-- 4. Norms & Pets -->
          <div id="NormasConvivencia" class="mb-5">
            <h3 class="font-weight-bold mb-3" style="color: #0B1B3D;">4. NORMAS DE CONVIVENCIA Y MASCOTAS</h3>
            <p class="text-muted leading-relaxed">
              Para garantizar el descanso pacífico de todos nuestros visitantes:
            </p>
            <ul class="text-muted leading-relaxed">
              <li>Se solicita mantener un volumen moderado en áreas comunes y pasillos de habitaciones a partir de las 22:00 hrs.</li>
              <li>Todas nuestras habitaciones son 100% libres de humo de tabaco. Fumar en la habitación genera un cargo de desodorización e higienización.</li>
              <li><strong>Programa Pet-Friendly:</strong> Aceptamos mascotas de raza pequeña o mediana en suites designadas. Aplican normas de cuidado y cargo por limpieza profunda.</li>
            </ul>
          </div>

          <hr class="my-4">

          <!-- 5. Privacy Policy -->
          <div id="PoliticaDePrivacidad" class="mb-3">
            <h3 class="font-weight-bold mb-3" style="color: #0B1B3D;">5. PRIVACIDAD Y PROTECCIÓN DE DATOS</h3>
            <p class="text-muted leading-relaxed">
              <strong>DEPORCO Hoteles &amp; Resorts</strong> se compromete a salvaguardar rigurosamente la privacidad de sus huéspedes. La información personal solicitada (nombres, teléfonos, documentos y datos de facturación) se utiliza con el fin exclusivo de gestionar su estancia, coordinar servicios adicionales y brindar una experiencia personalizada.
            </p>
            <p class="text-muted leading-relaxed">
              En ningún caso comercializamos ni transferimos sus datos personales a terceros no autorizados. Implementamos cifrado SSL en todas las transacciones web para una reserva totalmente segura.
            </p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection
