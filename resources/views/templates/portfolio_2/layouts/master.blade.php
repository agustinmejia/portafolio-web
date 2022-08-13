<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ setting('datos-personales.full_name') }} | Portafolio</title>
        <meta name="description" content="{{ setting('datos-personales.profession') ?? setting('datos-personales.skills') ?? setting('datos-personales.about') }}">
        <meta name="keywords" content="ideacreativa, idea, creativa, portafolio, {{ setting('sitio.title') }}">

        <!-- Favicon -->
        <?php $admin_favicon = Voyager::setting('sitio.logo', ''); ?>
        @if($admin_favicon == '')
            <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/png">
        @else
            <link rel="shortcut icon" href="{{ Voyager::image($admin_favicon) }}" type="image/png">
        @endif

        {{-- SEO --}}
        @php
            $image = setting('datos-personales.photo') ? asset('storage/'.setting('datos-personales.photo')) : asset('templates/portfolio_1/img/profile-img.jpg');
        @endphp

        <meta property="og:url"           content="{{url('')}}" />
        <meta property="og:type"          content="Portafolio" />
        <meta property="og:title"         content="{{ setting('datos-personales.full_name') }}" />
        <meta property="og:description"   content="{{ setting('datos-personales.profession') ?? setting('datos-personales.skills') ?? setting('datos-personales.about') }}" />
        <meta property="og:image"         content="{{ $image }}" />

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('templates/'.setting('sitio.template').'/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('templates/'.setting('sitio.template').'/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('templates/'.setting('sitio.template').'/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('templates/'.setting('sitio.template').'/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('templates/'.setting('sitio.template').'/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('templates/'.setting('sitio.template').'/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('templates/'.setting('sitio.template').'/css/style.css') }}" rel="stylesheet">

        @yield('css')

        <style>
            @media (max-width: 575px) {
              #hero {
                background: url("templates/{{ setting('sitio.template') }}/img/hero-bg.jpg") top right -100px;
              }
            }
        </style>

        <!-- =======================================================
        * Template Name: MyResume - v4.8.1
        * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>
    <body>
        <!-- ======= Mobile nav toggle button ======= -->
        <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
        <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
        <!-- ======= Header ======= -->
        <header id="header" class="d-flex flex-column justify-content-center">

            <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Acerca de mi</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>CV</span></a></li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Proyectos</span></a></li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Servicios</span></a></li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contacto</span></a></li>
            </ul>
            </nav><!-- .nav-menu -->

        </header><!-- End Header -->

        @yield('content')

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
            <h3>{{ setting('datos-personales.full_name') }}</h3>
            <p>{{ setting('datos-personales.profession') ?? setting('datos-personales.skills') ?? setting('datos-personales.about') }}</p>
            <div class="social-links">
                @if (setting('redes-sociales.facebook'))
                <a href="{{ setting('redes-sociales.facebook') }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                @endif
                @if (setting('redes-sociales.whatsapp'))
                <a href="{{ setting('redes-sociales.whatsapp') }}" target="_blank" class="instagram"><i class="bx bxl-whatsapp"></i></a>
                @endif
                @if (setting('redes-sociales.instagram'))
                <a href="{{ setting('redes-sociales.instagram') }}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                @endif
                @if (setting('redes-sociales.twitter'))
                <a href="{{ setting('redes-sociales.twitter') }}" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
                @endif
                @if (setting('redes-sociales.youtube'))
                <a href="{{ setting('redes-sociales.youtube') }}" target="_blank" class="google-plus"><i class="bx bxl-youtube"></i></a>
                @endif
                @if (setting('redes-sociales.github'))
                <a href="{{ setting('redes-sociales.github') }}" target="_blank" class="linkedin"><i class="bx bxl-github"></i></a>
                @endif
                @if (setting('redes-sociales.linkedin'))
                <a href="{{ setting('redes-sociales.linkedin') }}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                @endif
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>AgustinMejia</span></strong>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: [license-url] -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
                Diseñado por <a href="{{ env('APP_URL_DEV', 'https://ideacreativa.dev') }}" target="_blank">IdeaCreativa</a>
            </div>
            </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('templates/'.setting('sitio.template').'/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('templates/'.setting('sitio.template').'/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('templates/'.setting('sitio.template').'/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('templates/'.setting('sitio.template').'/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('templates/'.setting('sitio.template').'/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('templates/'.setting('sitio.template').'/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('templates/'.setting('sitio.template').'/vendor/typed.js/typed.min.js') }}"></script>
        <script src="{{ asset('templates/'.setting('sitio.template').'/vendor/waypoints/noframework.waypoints.js') }}"></script>
        <script src="{{ asset('templates/'.setting('sitio.template').'/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('templates/'.setting('sitio.template').'/js/main.js') }}"></script>
    </body>
</html>