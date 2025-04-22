<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>
            Luxury Palace Tourism - Home
        </title>
        <meta name="author" content="Luxury Palace Tourism" />
        <meta name="application-name" content="Luxury Palace Tourism" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{ url('assets/icon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ url('assets/icon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ url('assets/icon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/icon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ url('assets/icon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ url('assets/icon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ url('assets/icon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ url('assets/icon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/icon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ url('assets/icon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/icon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ url('assets/icon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/icon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ url('assets/icon/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ url('assets/icon/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">
        <meta name="theme-color" content="#ffffff" />
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Manrope:wght@200..800&amp;family=Montez&amp;display=swap"
        rel="stylesheet"
        />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        {{-- Navbar --}}
        @include('Frontend.Template.navbar')


        {{-- Page Content --}}
        @yield('content')

        {{-- Footer --}}
        @include('Frontend.Template.footer')
               
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/gsap.min.js"></script>
        <script src="assets/js/circle-progress.js"></script>
        <script src="assets/js/matter.min.js"></script>
        <script src="assets/js/matterjs-custom.js"></script>
        <script src="assets/js/nice-select.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
