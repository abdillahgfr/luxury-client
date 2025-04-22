@extends('Frontend.Layouts.app')
@section('content')

<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <!-- preloader end -->


 <div class="content-wrapper">
    <section class="wrapper bg-light">
      <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-9 col-xl-8 mx-auto">
            <figure class="mb-10"><img class="img-fluid" src="/Frontend/assets/img/illustrations/404.png" srcset="/Frontend/assets/img/illustrations/404@2x.png 2x" alt=""></figure>
          </div>
          <!-- /column -->
          <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
            <h1 class="mb-3">Oops! Halaman Tidak di Temukan.</h1>
            <a href="{{ route('fe-home') }}" class="btn btn-primary rounded-pill">Go to Home</a>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  
</body>
@endsection