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
                  <a href="{{ url('materi-bimtek') }}">Materi Bimtek</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="page-header -type-1">
        <div class="container">
          <div class="page-header__content">
            <div class="row">
              <div class="col-auto">
                <div data-anim="slide-up delay-1">

                  <h1 class="page-header__title">Materi BIMTEK</h1>

                </div>

                <div data-anim="slide-up delay-2">

                  <p class="page-header__text">Pilihan Materi Bimtek</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="layout-pt-md layout-pb-md">
        <div data-anim="slide-up delay-2" class="container">
          <div class="row y-gap-60">
@foreach($dataMateri as $materi)
            <div class="col-12 border-bottom-light">
              <a href="{{route('fe-singlemateri',$materi->slug_judul)}}" class="coursesCard -type-1 row y-gap-20 flex-row items-center">
                <div class="col">
                  <div class="col-xl-12 text-17 lh-15 fw-500 text-dark-1 mt-10"><p style="font-size: 30px; text-align: center;">{{$materi->judul}}</p></div>
                  <div class="mt-8"></div>
                </div>

              </a>
            </div>
     @endforeach       
            
            
          </div>

          
        </div>
      </section>
        <ul class="pagination justify-content-center">
            <li class="page-item">{{$dataMateri }}</li>
          </ul>
          <br>
    </div>
  </main>
</body>

@endsection