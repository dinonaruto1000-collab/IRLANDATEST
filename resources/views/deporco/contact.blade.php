@extends('layouts.deporco')
@section('title', 'Contacto & Central de Reservas')

@section('content')
<!-- Header Banner -->
<section class="py-5" style="background: linear-gradient(rgba(11, 27, 61, 0.8), rgba(11, 27, 61, 0.9)), url('https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=1920&q=80') center center / cover no-repeat; color: white;">
  <div class="container py-5 text-center">
    <span class="badge badge-warning px-3 py-2 text-uppercase mb-3" style="background: #C5A880; color: #0B1B3D; font-weight: 700; letter-spacing: 1.5px;">Atención al Huésped</span>
    <h1 class="display-4 font-weight-bold text-white mb-3">Contáctanos &amp; Central de Reservas</h1>
    <p class="lead text-light mx-auto" style="max-width: 700px;">
      Nuestro equipo de Concierge y atención personalizada está disponible las 24 horas para resolver tus dudas, gestionar reservas especiales y organizar eventos.
    </p>
  </div>
</section>

<section id="contact" class="py-5">
  <div class="container py-4">
    <div class="row">
      <!-- Contact Info Cards -->
      <div class="col-lg-5 mb-5 mb-lg-0 wow fadeInLeft">
        <h3 class="font-weight-bold mb-4" style="color: #0B1B3D;">Canales de Atención Directa</h3>
        
        <div class="card border-0 shadow-sm p-4 rounded-lg mb-3">
          <div class="d-flex align-items-center">
            <div class="mr-3" style="width: 52px; height: 52px; background: rgba(197,168,128,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #A48358; font-size: 22px;">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div>
              <h6 class="font-weight-bold mb-1" style="color: #0B1B3D;">Teléfono Recepción / Central</h6>
              <p class="text-muted mb-0">+57 (602) 211 11 11 | Línea gratuita nacional</p>
            </div>
          </div>
        </div>

        <div class="card border-0 shadow-sm p-4 rounded-lg mb-3">
          <div class="d-flex align-items-center">
            <div class="mr-3" style="width: 52px; height: 52px; background: rgba(37,211,102,0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #25D366; font-size: 24px;">
              <i class="fab fa-whatsapp"></i>
            </div>
            <div>
              <h6 class="font-weight-bold mb-1" style="color: #0B1B3D;">WhatsApp Concierge 24/7</h6>
              <p class="text-muted mb-0">+57 315 888 9900 (Atención inmediata)</p>
            </div>
          </div>
        </div>

        <div class="card border-0 shadow-sm p-4 rounded-lg mb-3">
          <div class="d-flex align-items-center">
            <div class="mr-3" style="width: 52px; height: 52px; background: rgba(197,168,128,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #A48358; font-size: 22px;">
              <i class="fas fa-envelope"></i>
            </div>
            <div>
              <h6 class="font-weight-bold mb-1" style="color: #0B1B3D;">Correo Electrónico de Reservas</h6>
              <p class="text-muted mb-0">reservas@deporcohotels.com</p>
            </div>
          </div>
        </div>

        <div class="card border-0 shadow-sm p-4 rounded-lg">
          <div class="d-flex align-items-center">
            <div class="mr-3" style="width: 52px; height: 52px; background: rgba(197,168,128,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #A48358; font-size: 22px;">
              <i class="fas fa-clock"></i>
            </div>
            <div>
              <h6 class="font-weight-bold mb-1" style="color: #0B1B3D;">Horarios de Estancia</h6>
              <p class="text-muted mb-0"><strong>Check-In:</strong> 15:00 hrs | <strong>Check-Out:</strong> 12:00 hrs</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact / Reservation Form -->
      <div class="col-lg-7 wow fadeInRight">
        <div class="card border-0 shadow-lg p-4 p-md-5 rounded-lg">
          <h3 class="font-weight-bold mb-2" style="color: #0B1B3D;">Envíanos tu Consulta o Solicitud</h3>
          <p class="text-muted mb-4">Completa el formulario y un asesor de hospitalidad te responderá en menos de 1 hora.</p>

          <form id="hotelContactForm" onsubmit="event.preventDefault(); handleContactSubmit();">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="font-weight-bold small text-dark"><i class="fas fa-user mr-1 text-muted"></i> Nombre y Apellidos</label>
                <input type="text" class="form-control" id="contactName" placeholder="Ej. Mariana Gómez" required>
              </div>
              <div class="form-group col-md-6">
                <label class="font-weight-bold small text-dark"><i class="fas fa-envelope mr-1 text-muted"></i> Correo Electrónico</label>
                <input type="email" class="form-control" id="contactEmail" placeholder="correo@ejemplo.com" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="font-weight-bold small text-dark"><i class="fas fa-phone mr-1 text-muted"></i> Teléfono / WhatsApp</label>
                <input type="tel" class="form-control" id="contactPhone" placeholder="+57 300 123 4567" required>
              </div>
              <div class="form-group col-md-6">
                <label class="font-weight-bold small text-dark"><i class="fas fa-concierge-bell mr-1 text-muted"></i> Tipo de Solicitud</label>
                <select class="custom-select" id="contactSubject">
                  <option value="Reservación de Habitaciones / Vacaciones">Reservación de Habitaciones</option>
                  <option value="Eventos Corporativos o Conferencias">Eventos Corporativos o Conferencias</option>
                  <option value="Bodas de Destino o Celebraciones">Bodas de Destino o Celebraciones</option>
                  <option value="Tours, Spa y Servicios Especiales">Tours, Spa y Servicios Especiales</option>
                  <option value="Atención al Huésped / Sugerencias">Atención al Huésped / Sugerencias</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="font-weight-bold small text-dark"><i class="fas fa-comment-alt mr-1 text-muted"></i> Mensaje o Detalles de tu Estancia</label>
              <textarea class="form-control" id="contactMessage" rows="4" placeholder="Indícanos fechas tentativas, cantidad de personas o cualquier requerimiento especial..." required></textarea>
            </div>

            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" id="contactPrivacy" checked required>
              <label class="custom-control-label small text-muted" for="contactPrivacy">
                He leído y acepto los <a href="{{route('deporco.terms')}}">términos de privacidad</a> y tratamiento de datos del hotel.
              </label>
            </div>

            <button type="submit" class="btn btn-block btn-hotel-search py-3 font-weight-bold">
              <i class="fas fa-paper-plane mr-2"></i> Enviar Mensaje / Solicitar Cotización
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SweetAlert Script for confirmation -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function handleContactSubmit() {
    const name = document.getElementById('contactName').value;
    const email = document.getElementById('contactEmail').value;

    Swal.fire({
      title: '¡Mensaje Enviado con Éxito!',
      html: `Gracias <strong>${name}</strong> por comunicarte con <strong>DEPORCO Hoteles & Resorts</strong>.<br><br>Hemos recibido tu consulta y un asesor de reservaciones te responderá a <strong>${email}</strong> en el menor tiempo posible.`,
      icon: 'success',
      confirmButtonColor: '#C5A880',
      confirmButtonText: 'Aceptar'
    });

    document.getElementById('hotelContactForm').reset();
  }
</script>
@endsection
