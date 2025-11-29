<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Clínica Familiar - Sistema de Reserva de Citas Médicas</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('favicon.svg') }}" rel="icon" type="image/svg+xml">
    <link href="{{ asset('favicon.svg') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- =======================================================
    * Template Name: Medilab
    * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">

<header id="header" class="header sticky-top">

    <div class="branding d-flex align-items-center">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Clínica Familiar</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Inicio<br></a></li>
                    <li><a href="#about">Acerca de Nosotros</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#departments">Especialidades</a></li>
                    <li><a href="#doctors">Médicos</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="cta-btn d-none d-sm-block" href="{{ url('login') }}">Ingresar</a>

        </div>

    </div>

</header>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container position-relative">

            <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                <h2>BIENVENIDOS A CLÍNICA FAMILIAR</h2>
                <p>Bienvenido a nuestro sistema de reserva de citas médicas</p>
            </div><!-- End Welcome -->

            <div class="content row gy-4">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                        <h3>Reserva tu cita medica</h3>
                        <div class="text-center">
                            <a href="{{ url('/admin') }}" class="more-btn"><span>Reservar ahora</span> <i
                                    class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Why Box -->

                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="row gy-4">

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                                    <i class="bi bi-clipboard-data"></i>
                                    <h4>Atención Médica Completa</h4>
                                    <p>Ofrecemos una amplia gama de servicios de atención médica para toda la
                                        familia</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                                    <i class="bi bi-gem"></i>
                                    <h4>Profesionales Calificados</h4>
                                    <p>Nuestro equipo médico cuenta con amplia experiencia y certificaciones
                                        profesionales</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                                    <i class="bi bi-inboxes"></i>
                                    <h4>Reservas Fáciles</h4>
                                    <p>Acceso rápido y fácil para agendar tus citas médicas desde cualquier lugar</p>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>
                    </div>
                </div>
            </div><!-- End  Content-->

        </div>

    </section><!-- /Hero Section -->

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="card-title">Calendario de atención de doctores</h3>
                            </div>
                            <div class="col-md-4">
                                <div style="float: right">
                                    <label for="">Consultorios</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select name="consultorio_id" id="consultorio_select" class="form-control">
                                    <option value="">Selecciona consultorio</option>
                                    @foreach($consultorios as $consultorio)
                                        <option
                                            value="{{ $consultorio->id }}">{{ $consultorio->nombre." - ".$consultorio->ubicacion }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-body">
                        <script>
                            // Función para cargar el calendario
                            function cargarCalendario(consultorio_id) {
                                $.ajax({
                                    url: "{{ url('/consultorios/') }}" + '/' + consultorio_id,
                                    type: 'GET',
                                    success: function (data) {
                                        $('#consultorio_info').html(data);
                                    },
                                    error: function () {
                                        alert('Error al obtener los datos del consultorio.')
                                    }
                                });
                            }

                            // Manejar el cambio de consultorio
                            $('#consultorio_select').on('change', function () {
                                var consultorio_id = $('#consultorio_select').val();
                                if (consultorio_id) {
                                    cargarCalendario(consultorio_id);
                                } else {
                                    $('#consultorio_info').html('');
                                }
                            });
                        </script>
                        <hr>
                        <div class="table-responsive">
                            <div id="consultorio_info">

                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>


    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4 gx-5">

                <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="Clínica Familiar">
                </div>

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <h3>Sobre Nosotros</h3>
                    <p>
                        Clínica Familiar es una institución de salud dedicada a proporcionar servicios médicos de
                        calidad con un trato cálido y profesional. Nos comprometemos a ser tu partner en el cuidado de
                        la salud de tu familia.
                    </p>
                    <ul>
                        <li>
                            <i class="fa-solid fa-vial-circle-check"></i>
                            <div>
                                <h5>Profesionales Médicos Certificados</h5>
                                <p>Nuestros doctores cuentan con las certificaciones y experiencia necesaria</p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-pump-medical"></i>
                            <div>
                                <h5>Equipamiento Moderno</h5>
                                <p>Contamos con tecnología médica de punta para un diagnóstico preciso</p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-heart-circle-xmark"></i>
                            <div>
                                <h5>Atención Integral</h5>
                                <p>Brindamos atención médica completa desde consulta hasta seguimiento</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->


    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Servicios</h2>
            <p>Ofrecemos una amplia variedad de servicios médicos para toda tu familia</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Consultas Médicas Generales</h3>
                        </a>
                        <p>Atención integral de medicina general para el diagnóstico y tratamiento de enfermedades comunes en todas las edades.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Control y Seguimiento Cardiaco</h3>
                        </a>
                        <p>Evaluación cardiovascular completa, electrocardiogramas y seguimiento de la salud del corazón.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Atención Pediátrica</h3>
                        </a>
                        <p>Cuidado especializado para niños, desde revisiones de desarrollo hasta tratamiento de enfermedades infantiles.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-syringe"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Vacunación y Inmunización</h3>
                        </a>
                        <p>Programa completo de vacunación para bebés, niños y adultos según calendarios de salud recomendados.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-flask-vial"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Análisis de Laboratorio</h3>
                        </a>
                        <p>Exámenes clínicos y laboratorios con tecnología moderna para diagnósticos precisos y confiables.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Telemedicina</h3>
                        </a>
                        <p>Consultas remotas con nuestros especialistas para tu comodidad y acceso rápido a atención médica.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->


    <!-- Departments Section -->
    <section id="departments" class="departments section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Especialidades</h2>
            <p>Contamos con especialistas en diversas áreas de la medicina</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        @if($especialidades->count() > 0)
                            @foreach($especialidades as $index => $especialidad)
                                <li class="nav-item">
                                    <a class="nav-link {{ $index === 0 ? 'active show' : '' }}"
                                       data-bs-toggle="tab"
                                       href="#departments-tab-{{ $index + 1 }}">
                                        {{ $especialidad }}
                                    </a>
                                </li>
                            @endforeach
                        @else
                            <li class="nav-item">
                                <p class="text-muted">No hay especialidades disponibles</p>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        @if($especialidades->count() > 0)
                            @foreach($especialidades as $index => $especialidad)
                                @php
                                    $doctoresEspecialidad = \App\Models\Doctor::where('especialidad', $especialidad)->get();
                                @endphp
                                <div class="tab-pane {{ $index === 0 ? 'active show' : '' }}" id="departments-tab-{{ $index + 1 }}">
                                    <div class="row">
                                        <div class="col-lg-8 details order-2 order-lg-1">
                                            <h3>{{ $especialidad }}</h3>
                                            <p class="fst-italic">
                                                @switch($especialidad)
                                                    @case('Medicina General')
                                                        Especialidad fundamental que proporciona atención médica integral y preventiva para toda la familia
                                                        @break
                                                    @case('Cardiología')
                                                        Especialidad dedicada al diagnóstico y tratamiento de enfermedades del corazón y del sistema circulatorio
                                                        @break
                                                    @case('Neurología')
                                                        Especialidad que se ocupa del diagnóstico y tratamiento de enfermedades del sistema nervioso
                                                        @break
                                                    @case('Gastroenterología')
                                                        Especialidad dedicada a la salud del aparato digestivo y sus enfermedades
                                                        @break
                                                    @case('Pediatría')
                                                        Especialidad médica dedicada a la salud de los niños desde el nacimiento hasta la adolescencia
                                                        @break
                                                    @case('Oftalmología')
                                                        Especialidad dedicada a la salud de los ojos y la visión
                                                        @break
                                                    @default
                                                        Contamos con profesionales especializados en {{ $especialidad }}
                                                @endswitch
                                            </p>
                                            <p>
                                                @switch($especialidad)
                                                    @case('Medicina General')
                                                        Nuestros médicos generales están capacitados para diagnosticar y tratar una amplia variedad de condiciones de salud. Brindamos atención preventiva, promoción de la salud y tratamiento de enfermedades agudas y crónicas para pacientes de todas las edades
                                                        @break
                                                    @case('Cardiología')
                                                        Nuestro equipo de cardiólogos cuenta con amplia experiencia en el manejo de patologías cardiovasculares, realizando evaluaciones completas, electrocardiogramas, ecocardiogramas y seguimiento integral de pacientes con enfermedades del corazón
                                                        @break
                                                    @case('Neurología')
                                                        Tratamos patologías neurológicas como migrañas, epilepsia, accidentes cerebrovasculares, párkinson y otras alteraciones del sistema nervioso. Contamos con tecnología moderna para diagnósticos precisos y planes de tratamiento personalizados
                                                        @break
                                                    @case('Gastroenterología')
                                                        Nuestros gastroenterólogos brindan atención integral de problemas digestivos, realizando estudios endoscópicos, colonoscopias y tratamientos especializados. Atendemos desde molestias simples hasta patologías complejas del sistema digestivo
                                                        @break
                                                    @case('Pediatría')
                                                        Contamos con pediatras certificados que brindan atención integral a niños, desde controles de crecimiento y desarrollo, vacunaciones, hasta tratamiento de enfermedades agudas y crónicas. Nos especializamos en crear un ambiente cálido y seguro para los pequeños pacientes
                                                        @break
                                                    @case('Oftalmología')
                                                        Nuestros oftalmólogos ofrecen atención completa en salud visual, desde exámenes de refracción, diagnóstico y tratamiento de cataratas, glaucoma y otras enfermedades oculares. Utilizamos equipamiento moderno para garantizar diagnósticos precisos y tratamientos efectivos
                                                        @break
                                                    @default
                                                        Contamos con un equipo de profesionales altamente capacitados para brindarte la mejor atención en {{ $especialidad }}
                                                @endswitch
                                            </p>
                                            @if($doctoresEspecialidad->count() > 0)
                                                <p><strong>Médicos en esta especialidad:</strong></p>
                                                <ul>
                                                    @foreach($doctoresEspecialidad as $doc)
                                                        <li>{{ $doc->nombres }} {{ $doc->apellidos }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="col-lg-4 text-center order-1 order-lg-2">
                                            <img src="assets/img/departments-{{ ($index % 5) + 1 }}.jpg" alt="{{ $especialidad }}" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Departments Section -->

    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Médicos</h2>
            <p>Conoce a nuestro equipo de profesionales certificados</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @if($doctores->count() > 0)
                    @foreach($doctores as $doctor)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{ ($loop->index + 1) * 100 }}">
                            <div class="team-member d-flex align-items-start">
                                <div class="pic"><img src="assets/img/doctors/doctors-{{ $loop->index + 1 }}.jpg" class="img-fluid" alt="{{ $doctor->nombres }}"></div>
                                <div class="member-info">
                                    <h4>Dr{{ $doctor->nombres != substr($doctor->nombres, 0, 1) || $doctor->nombres[0] === 'D' ? '.' : 'a.' }} {{ $doctor->nombres }} {{ $doctor->apellidos }}</h4>
                                    <span>{{ $doctor->especialidad ?? 'Médico' }}</span>
                                    <p>{{ $doctor->licencia_medica ?? 'Profesional certificado' }}</p>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""> <i class="bi bi-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                    @endforeach
                @else
                    <div class="col-lg-12 text-center">
                        <p>No hay doctores disponibles en este momento.</p>
                    </div>
                @endif

            </div>

        </div>

    </section><!-- /Doctors Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Preguntas Frecuentes</h2>
            <p>Resuelve tus dudas sobre nuestros servicios y atención</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                    <div class="faq-container">

                        <div class="faq-item faq-active">
                            <h3>¿Cuál es la diferencia entre una consulta de medicina general y una de cardiología?</h3>
                            <div class="faq-content">
                                <p>La medicina general atiende problemas de salud comunes y brinda evaluación inicial. Si detectamos problemas cardiacos, te referiremos a nuestro especialista en cardiología para evaluaciones más específicas como electrocardiogramas y ecocardiogramas. Ambas especialidades trabajan de forma coordinada para tu bienestar.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>¿Desde qué edad puede un niño asistir a consultas pediátricas?</h3>
                            <div class="faq-content">
                                <p>Atendemos a niños desde el nacimiento. Nuestros pediatras están especializados en recién nacidos, lactantes, preescolares y escolares. Realizamos controles de crecimiento y desarrollo, aplicación de vacunas según calendario oficial, y tratamiento de enfermedades infantiles.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>¿Necesito derivación médica para agendar una cita con especialista?</h3>
                            <div class="faq-content">
                                <p>No es obligatorio, pero es recomendable. Puedes agendar directamente con nuestro cardióplogo o pediatra. Sin embargo, si vienes del médico general de la clínica, la derivación facilita la coordinación del tratamiento. Si tienes seguro médico, verifica si requiere derivación.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>¿Qué debo hacer si tengo síntomas de problemas cardiacos?</h3>
                            <div class="faq-content">
                                <p>Si experimentas dolor en el pecho, dificultad para respirar, o palpitaciones, es importante que busques atención médica. Puedes agendar con medicina general como primer paso, o directamente con nuestro cardiólogo. Para emergencias cardiacas, acude a la sala de emergencias más cercana.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>¿Están al día las vacunas según el calendario oficial de salud?</h3>
                            <div class="faq-content">
                                <p>Sí, nuestro departamento de pediatría mantiene actualizado el calendario de vacunación oficial. Realizamos vacunación desde el nacimiento con todas las vacunas recomendadas: BCG, polio, pentavalente, rotavirus, neumo 13, influenza, MMR y otras según edad. Consulta con nuestro pediatra sobre el esquema personalizado.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>¿Realizan análisis de laboratorio en consulta?</h3>
                            <div class="faq-content">
                                <p>Contamos con laboratorio in situ donde realizamos análisis clínicos. El médico puede solicitar exámenes de sangre durante la consulta. Los resultados están disponibles en 24-48 horas según el tipo de análisis. Es importante presentarte en ayunas para algunos estudios.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>¿Ofrecen telemedicina para consultas de seguimiento?</h3>
                            <div class="faq-content">
                                <p>Sí, ofrecemos telemedicina para consultas de seguimiento y revisión de resultados. Es ideal para pacientes con control de salud establecido o consultas no urgentes. Para primera consulta o evaluaciones que requieran examen físico completo, recomendamos atención presencial.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>¿Cuál es el protocolo para pacientes con antecedentes de problemas cardiacos?</h3>
                            <div class="faq-content">
                                <p>Realizamos evaluación integral con nuestro cardiólogo incluyendo historia clínica detallada, examen físico, electrocardiograma y posiblemente ecocardiograma. Establecemos un plan de seguimiento periódico y controles según tus necesidades específicas. La prevención y el monitoreo constante son clave.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div><!-- End Faq Column-->

            </div>

        </div>

    </section><!-- /Faq Section -->


</main>

<footer id="footer" class="footer light-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                    <span class="sitename">Clínica Familiar</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>Calle Principal 123</p>
                    <p>Ciudad, País</p>
                    <p class="mt-3"><strong>Teléfono:</strong> <span>+34 555 123 456</span></p>
                    <p><strong>Correo:</strong> <span>info@clinicafamiliar.com</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Enlaces Útiles</h4>
                <ul>
                    <li><a href="#hero">Inicio</a></li>
                    <li><a href="#about">Acerca de Nosotros</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#">Términos de Servicio</a></li>
                    <li><a href="#">Política de Privacidad</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Nuestros Servicios</h4>
                <ul>
                    <li><a href="#services">Consultas Médicas Generales</a></li>
                    <li><a href="#services">Control y Seguimiento Cardiaco</a></li>
                    <li><a href="#services">Atención Pediátrica</a></li>
                    <li><a href="#services">Vacunación y Inmunización</a></li>
                    <li><a href="#services">Análisis de Laboratorio</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Especialidades</h4>
                <ul>
                    @if($especialidades->count() > 0)
                        @foreach($especialidades as $especialidad)
                            <li><a href="#departments">{{ $especialidad }}</a></li>
                        @endforeach
                    @else
                        <li><a href="#departments">Sin especialidades</a></li>
                    @endif
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Nuestros Médicos</h4>
                <ul>
                    @if($doctores->count() > 0)
                        @foreach($doctores as $doctor)
                            <li><a href="#doctors">{{ $doctor->nombres }} {{ $doctor->apellidos }}</a></li>
                        @endforeach
                    @else
                        <li><a href="#doctors">Sin médicos disponibles</a></li>
                    @endif
                </ul>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Clínica Familiar</strong> <span>Todos los Derechos Reservados</span>
        </p>
        <!--<div class="credits">-->
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            <!--Diseñado por <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
        <!--</div>-->
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>


</body>

</html>

