@extends('Frontend.Layouts.app')


@section('content')
<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <!-- preloader end -->


  <main class="main-content  ">

    <div class="content-wrapper  js-content-wrapper">


      <section data-anim="fade" class="breadcrumbs ">
        <div class="container">
          <div class="row">
            <div class="col-auto">
              <div class="breadcrumbs__content">

                <div class="breadcrumbs__item ">
                  <a href="{{ url('/') }}">Home</a>
                </div>

                <div class="breadcrumbs__item ">
                  <a href="{{ url('kota-pelaksanaan') }}">Kota Pelaksanaan</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="page-header -type-1">
        <div class="container">
          <div class="page-header__content">
            <div class="row justify-center text-center">
              <div class="col-auto">
                <div data-anim="slide-up delay-1">

                  <h1 class="page-header__title">Pilihan Kota Penyelenggara</h1>

                </div>

                <div data-anim="slide-up delay-2">

                  <p class="page-header__text">Silahkan memilih salah satu kota penyelenggara Bimtek berikut ini</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="layout-pb-lg">
        <div data-anim-wrap class="container">

          <div class="row y-gap-30 justify-between pt-90 lg:pt-50">

            <div class="col-lg-4 col-md-6">
              <a href="{{ url('kota-pelaksanaan/detail') }}">
                  <div class="py-40 px-45 rounded-16 bg-light-4" style="text-align: center;">
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 90px;">
                        <img src="/Frontend/img/bangunan.png">
                    </div>
                    <h4 class="text-25 lh-11 fw-500 mt-25">Jakarta</h4>
                  </div>
              </a>
            </div>
            <div class="col-lg-4 col-md-6">
              <a href="{{ url('kota-pelaksanaan/detail') }}">
                  <div class="py-40 px-45 rounded-16 bg-light-4" style="text-align: center;">
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 90px;">
                        <img src="/Frontend/img/bangunan.png">
                    </div>
                    <h4 class="text-25 lh-11 fw-500 mt-25">Bandung</h4>
                  </div>
              </a>
            </div>
            <div class="col-lg-4 col-md-6">
              <a href="{{ url('kota-pelaksanaan/detail') }}">
                  <div class="py-40 px-45 rounded-16 bg-light-4" style="text-align: center;">
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 90px;">
                        <img src="/Frontend/img/bangunan.png">
                    </div>
                    <h4 class="text-25 lh-11 fw-500 mt-25">Bali</h4>
                  </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-6">
              <a href="{{ url('kota-pelaksanaan/detail') }}">
                  <div class="py-40 px-45 rounded-16 bg-light-4" style="text-align: center;">
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 90px;">
                        <img src="/Frontend/img/bangunan.png">
                    </div>
                    <h4 class="text-25 lh-11 fw-500 mt-25">Yogyakarta</h4>
                  </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-6">
              <a href="{{ url('kota-pelaksanaan/detail') }}">
                  <div class="py-40 px-45 rounded-16 bg-light-4" style="text-align: center;">
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 90px;">
                        <img src="/Frontend/img/bangunan.png">
                    </div>
                    <h4 class="text-25 lh-11 fw-500 mt-25">Malang</h4>
                  </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-6">
              <a href="{{ url('kota-pelaksanaan/detail') }}">
                  <div class="py-40 px-45 rounded-16 bg-light-4" style="text-align: center;">
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 90px;">
                        <img src="/Frontend/img/bangunan.png">
                    </div>
                    <h4 class="text-25 lh-11 fw-500 mt-25">Surabaya</h4>
                  </div>
              </a>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <a href="{{ url('kota-pelaksanaan/detail') }}">
                  <div class="py-40 px-45 rounded-16 bg-light-4" style="text-align: center;">
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 90px;">
                        <img src="/Frontend/img/bangunan.png">
                    </div>
                    <h4 class="text-25 lh-11 fw-500 mt-25">Palembang</h4>
                  </div>
              </a>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <a href="{{ url('kota-pelaksanaan/detail') }}">
                  <div class="py-40 px-45 rounded-16 bg-light-4" style="text-align: center;">
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 90px;">
                        <img src="/Frontend/img/bangunan.png">
                    </div>
                    <h4 class="text-25 lh-11 fw-500 mt-25">Batam</h4>
                  </div>
              </a>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <a href="{{ url('kota-pelaksanaan/detail') }}">
                  <div class="py-40 px-45 rounded-16 bg-light-4" style="text-align: center;">
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 90px;">
                        <img src="/Frontend/img/bangunan.png">
                    </div>
                    <h4 class="text-25 lh-11 fw-500 mt-25">Balikpapan</h4>
                  </div>
              </a>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <a href="{{ url('kota-pelaksanaan/detail') }}">
                  <div class="py-40 px-45 rounded-16 bg-light-4" style="text-align: center;">
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 90px;">
                        <img src="/Frontend/img/bangunan.png">
                    </div>
                    <h4 class="text-25 lh-11 fw-500 mt-25">Samarinda</h4>
                  </div>
              </a>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <a href="{{ url('kota-pelaksanaan/detail') }}">
                  <div class="py-40 px-45 rounded-16 bg-light-4" style="text-align: center;">
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 90px;">
                        <img src="/Frontend/img/bangunan.png">
                    </div>
                    <h4 class="text-25 lh-11 fw-500 mt-25">Banjarmasin</h4>
                  </div>
              </a>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <a href="{{ url('kota-pelaksanaan/detail') }}">
                  <div class="py-40 px-45 rounded-16 bg-light-4" style="text-align: center;">
                    <div style=" display: block; margin-left: auto; margin-right: auto; width: 90px;">
                        <img src="/Frontend/img/bangunan.png">
                    </div>
                    <h4 class="text-25 lh-11 fw-500 mt-25">Makassar</h4>
                  </div>
              </a>
            </div>


          </div>
        </div>
      </section>
    </div>
  </main>
</body>
@endsection