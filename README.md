# DEPORCO Hoteles & Resorts 🏨✨

Plataforma web de hospitalidad, reservaciones y catálogo de hoteles y suites de lujo. Este proyecto es una transformación completa y rediseño temático a partir del proyecto base **DEPORCO**.

---

## 👥 Créditos y Atribución al Autor Original

Este proyecto fue desarrollado tomando como base el repositorio de código abierto **DEPORCO**, creado originalmente como una plataforma para la gestión deportiva de torneos y ligas universitarias.

* **Repositorio Original en GitHub:** [https://github.com/cristianmarint/DEPORCO](https://github.com/cristianmarint/DEPORCO)
* **Autor Principal:** **Cristian Marín** ([@cristianmarint](https://github.com/cristianmarint))
* **Colaborador / Co-autor:** **Edwin López** ([@EdwinLopez12](https://github.com/EdwinLopez12))
* **Sitio Web Original:** [https://cristianmarint.github.io/DEPORCO/](https://cristianmarint.github.io/DEPORCO/)

> **Agradecimiento:** Nuestro total reconocimiento a los autores originales por la arquitectura base en Laravel, la integración de plantillas Bootstrap y el desarrollo inicial del sistema.

---

## 🔄 ¿Qué fue lo que se cambió? (Detalle de la Transformación)

El proyecto pasó de ser una plataforma orientada a competiciones deportivas (fútbol, baloncesto, voleibol y tablas de posiciones) a un **sitio web de hoteles, suites y hospitalidad 5 estrellas**.

A continuación se detalla cada componente modificado:

### 1. Página de Inicio (`resources/views/welcome.blade.php`)
* **Hero Section & Motor de Búsqueda:** Se sustituyó la temática deportiva por una bienvenida de hospitalidad con un motor interactivo de reserva con selección de Destino, fechas de Check-In y Check-Out, tipo de habitación y número de huéspedes.
* **Catálogo de Habitaciones y Suites:** Se integraron tarjetas interactivas de habitaciones con fotografías de alta definición, distintivos de estrellas, precios por noche, amenidades clave (WiFi, Jacuzzi, Balcón, Desayuno, A/C) y botón de reserva directa:
  * *Suite Presidencial Vista al Mar*
  * *Habitación Deluxe King*
  * *Villa de Lujo con Piscina Privada*
  * *Habitación Superior Doble Familiar*
  * *Suite Romántica & Sunset*
  * *Penthouse Panorámico Sky*
* **Servicios & Amenidades 5 Estrellas:** Sección con íconos y descripciones de alta gastronomía, spa y circuito de hidroterapia, piscinas infinity pool, salones para bodas/eventos, traslados VIP y centro de acondicionamiento físico.
* **Destinos Turísticos:** Exhibición de destinos de playa y ciudad (Cartagena de Indias, Cancún, Punta Cana y San Andrés Isla).
* **Contadores Dinámicos:** Las métricas de torneos y jugadores ahora representan *Habitaciones & Suites (480+)*, *Destinos & Resorts (25+)*, *Huéspedes Satisfechos (18,500+)* y *Recomendación Positiva (95%)*.
* **Reseñas & Testimonios:** Testimonios con puntuación de 5 estrellas de huéspedes reales.
* **Modal de Confirmación de Reserva:** Ventana modal nativa de Bootstrap con prellenado de datos y confirmación dinámica con SweetAlert2.

### 2. Estilos e Identidad Visual
* **Nueva Hoja de Estilos (`public/css/hotel.css`):** Paleta de colores sofisticada con azul marino profundo (`#0B1B3D`), dorados de lujo (`#C5A880`), fondos limpios y componentes responsivos.
* **Nuevo Logotipo SVG (`public/logo_hotel.svg` y `public/logo_deporco.svg`):** Escudo heráldico estilizado con corona, columnas de hotel, cinco estrellas y tipografía corporativa "DEPORCO HOTELS & RESORTS".

### 3. Layout General (`resources/views/layouts/deporco.blade.php`)
* Barra de navegación rediseñada con accesos rápidos a Habitaciones, Servicios, Destinos, Experiencias, Conócenos, Contacto y botón de *Reservar*.
* Pie de página enriquecido con horarios de *Check-In* (15:00 hrs) y *Check-Out* (12:00 hrs), líneas de Concierge 24/7 y políticas de reserva.

### 4. Páginas Secundarias (`resources/views/deporco/`)
* **Conócenos (`about.blade.php`):** Reescrita para narrar la historia de hospitalidad de la cadena, sus pilares de servicio, estándar 5 Diamantes y compromiso con el turismo sostenible.
* **Contacto (`contact.blade.php`):** Canales de atención al huésped, botón de WhatsApp directo (+57 315 888 9900), formulario de solicitudes para vacaciones, bodas o eventos corporativos con alerta de confirmación.
* **Experiencias & Prensa (`media.blade.php`):** Promociones y paquetes exclusivos (*Escapada Romántica*, *Familiar Todo Incluido*, *Retiro Wellness*, *Negocios & Convenciones VIP*) y sala de prensa.
* **Términos y Políticas (`terms.blade.php`):** Políticas de reserva, política de cancelación flexible (sin costo hasta 48 horas antes de la llegada), normas de convivencia, política *Pet-Friendly* y protección de datos del huésped.

### 5. Lógica del Backend (`app/Http/Controllers/DeporcoController.php` y `config/app.php`)
* En `DeporcoController@welcome`, se agregó un bloque `try/catch` con valores de respaldo (*fallbacks*) para que el portal cargue con todas las métricas hoteleras de manera fluida, incluso si el entorno local no cuenta con la base de datos configurada.
* Se actualizó el nombre predeterminado de la aplicación a `DEPORCO Hoteles & Resorts`.

---

## 📥 ¿Cómo Descargar e Instalar el Proyecto?

Sigue estos sencillos pasos para clonar y ejecutar el proyecto en tu entorno local:

### 📋 Prerrequisitos
Asegúrate de tener instaladas las siguientes herramientas en tu sistema:
* [Git](https://git-scm.com/)
* [PHP](https://www.php.net/) (Versión 7.2 o superior)
* [Composer](https://getcomposer.org/)
* [Node.js](https://nodejs.org/) (con NPM o Yarn)
* Servidor de base de datos MySQL (opcional si solo visualizas el frontend)

---

### ⚙️ Guía de Instalación Paso a Paso

#### 1. Clonar el Repositorio
Abre tu terminal o consola de comandos y clona el repositorio:
```bash
git clone https://github.com/cristianmarint/DEPORCO.git
cd DEPORCO
```

#### 2. Configurar el Archivo de Entorno
Copia el archivo `.env.example` para crear tu propio `.env`:
* **En Linux/macOS:**
  ```bash
  cp .env.example .env
  ```
* **En Windows (PowerShell):**
  ```powershell
  Copy-Item .env.example .env
  ```

*(Opcional: Si deseas conectar una base de datos MySQL, abre `.env` y configura tus credenciales de `DB_DATABASE`, `DB_USERNAME` y `DB_PASSWORD`).*

#### 3. Instalar Dependencias de PHP con Composer
Ejecuta el siguiente comando para descargar las librerías del framework Laravel:
```bash
composer install
```

#### 4. Generar la Clave de la Aplicación
Genera la clave criptográfica única para la sesión:
```bash
php artisan key:generate
```

#### 5. Instalar Dependencias de JavaScript y Compilar Activos
Instala los paquetes de Node.js y compila los archivos CSS y JS:
```bash
npm install
npm run dev
```

*(O si utilizas Yarn:)*
```bash
yarn install
yarn dev
```

#### 6. (Opcional) Migrar la Base de Datos
Si deseas habilitar el registro de usuarios y el panel administrativo Voyager:
```bash
php artisan migrate
```

#### 7. Iniciar el Servidor de Desarrollo
Inicia el servidor local de Laravel:
```bash
php artisan serve
```

El sistema estará disponible en tu navegador web en la siguiente dirección:
👉 **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

---

## 📂 Estructura Principal del Proyecto

```text
DEPORCO/
├── app/
│   └── Http/Controllers/
│       └── DeporcoController.php       # Controlador principal con datos hoteleros
├── config/
│   └── app.php                         # Configuración del nombre del hotel
├── public/
│   ├── css/
│   │   ├── deporco.blade.css           # Estilos base de la plantilla
│   │   └── hotel.css                   # Hoja de estilos personalizada de hoteles
│   ├── logo_hotel.svg                  # Imagotipo oficial del hotel
│   └── logo_deporco.svg                # Logotipo SVG sincronizado
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── deporco.blade.php       # Layout principal para páginas del hotel
│       ├── deporco/
│       │   ├── about.blade.php         # Conócenos e Historia
│       │   ├── contact.blade.php       # Contacto y Central de Reservas
│       │   ├── media.blade.php         # Paquetes y Prensa
│       │   └── terms.blade.php         # Políticas y Cancelación
│       └── welcome.blade.php           # Landing Page principal de hoteles
├── README.md                           # Documentación del proyecto
└── routes/
    └── web/
        └── web.php                     # Rutas públicas del sitio
```

---

## 📄 Licencia

El código fuente original cuenta con licencia libre bajo los términos definidos por sus creadores. Consulta el archivo [LICENSE.md](LICENSE.md) para más detalles.
