<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>
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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ url('Backend/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('Backend/vendor/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('Backend/vendor/perfect-scrollbar/css/perfect-scrollbar.css') }}">

    <!-- CSS for this page only -->
    <link href="{{ url('Backend/vendor/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ url('Backend/vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}"
        rel="stylesheet" />


    <!-- End CSS  -->

    <link rel="stylesheet" href="{{ url('Backend/assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ url('Backend/assets/css/bootstrap-override.min.css') }}">
    <link rel="stylesheet" id="theme-color" href="{{ url('Backend/assets/css/dark.min.css') }}">
</head>

<body>
    <div id="app">
        <div class="shadow-header"></div>
        @include('Backend.Components.Header')
        @include('Backend.Components.Navbar')

        @yield('content')

        @include('Backend.Components.Footer')
    </div>

    <script src="{{ url('Backend/vendor/bootstrap/dist/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ url('Backend/vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>

    <!-- js for sweetalert -->
    <script src="{{ url('Backend/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

    <script src="{{ url('Backend/assets/js/main.js') }}"></script>
    <script>
        Main.init()
    </script>
    <!-- js for datatables -->
    <script src="{{ url('Backend/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('Backend/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('Backend/vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('Backend/assets/js/page/datatables.js') }}"></script>
    <!-- ======= -->
    <script>
        DataTable.init()
    </script>

    <script>
        setTimeout(function() {
            $(".alert").hide();
        }, 5000);
    </script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    @if (Request::is(
            'admin/data-materi/add',
            'admin/data-materi/edit/*',
            'admin/data-blog/add',
            'admin/data-blog/edit/*',
            'admin/data-jadwal/add',
            'admin/data-jadwal/edit/*',
            'admin/data-po/edit/*',))
        <script type="text/javascript">
            CKEDITOR.replace('content', {
                filebrowserUploadUrl: 'ckeditor/ck_upload.php',
                filebrowserUploadMethod: 'form'

            });
        </script>
    @endif
    @if (Request::is('admin/data-materi/show/*', 'admin/data-jadwal/show/*',))
        <script type="text/javascript">
            CKEDITOR.replace('content', {
                readOnly: true
            });
        </script>
    @endif


</body>

</html>
