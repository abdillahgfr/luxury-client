@extends('Frontend.Layouts.app')


@section('content')

<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <!-- preloader end -->
@foreach($dataDetailJadwal as $dataJadwal)
 <section class="wrapper bg-light">
      <div class="container pt-10 pb-9 pt-md-14 pb-md-11 text-center">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="post-header">
              <div class="post-category text-line">
                <a href="#" class="hover" rel="category">Info</a>
              </div>
              <!-- /.post-category -->
              <h1 class="display-1 mb-3">{{ $dataJadwal->judul}}</h1>
            </div>
            <!-- /.post-header -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    
    <section class="wrapper bg-light wrapper-border">
      <div class="container pb-14 pb-md-16">
        <article>
          <div class="post-slider mb-8 mb-md-12">
            <div class="swiper-container dots-over" data-margin="5" data-dots="true" data-nav="true" data-autoheight="true">
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide rounded">
                    <img src="{{url('assets/images/jadwal', $dataJadwal->foto)}}" alt="" />
                    <div class="caption-wrapper p-12">
                      <div class="caption bg-white rounded px-4 py-3 ms-auto mt-auto animate__animated animate__slideInDown animate__delay-1s">
                        <h5 class="mb-0">{{ $dataJadwal->judul}}</h5>
                      </div>
                      <!--/.caption -->
                    </div>
                    <!--/.caption-wrapper -->
                  </div>
                </div>
                <!--/.swiper-wrapper -->
              </div>
              <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
          </div>
          <!-- /.post-slider -->
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <h2 class="display-6 mb-4">{{ $dataJadwal->judul}}</h2>
              <div class="row gx-0">
                <div class="col-md-9 text-justify">
                  <p>{!! $dataJadwal->content !!}</p>
                </div>
                <!--/column -->
                <div class="col-md-2 ms-auto">
                  <ul class="list-unstyled">
                    <li>
                      <h5 class="mb-1">Tanggal</h5>
                      <p>{{ date('d/m/Y', strtotime($dataJadwal->created_at))}}</p>
                    </li>
                    <li>
                        <input value="{{ url('jadwal/' . $dataJadwal->slug_judul) }}" id="copyText" type="text" name="name" class="form-control" readonly>
                    </li>
                  </ul>
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!-- /column -->
          </div>
          <!--/.row -->
        </article>
        <!-- /.project -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-10">
        <div class="row gx-md-6 gy-3 gy-md-0">
          <div class="col-md-8 align-self-center text-center text-md-start navigation">
              
          </div>
          <!--/column -->
          <aside class="col-md-4 sidebar text-center text-md-end">
            <div class="dropdown share-dropdown btn-group">
                <input type="text" value="URL to copy" id="copyText" style="display: none;">
                <button class="btn btn-red rounded-pill btn-icon btn-icon-start mb-0 me-0" id="shareButton">
                    <i class="uil uil-share-alt"></i> Share / Copy
                </button>

              <!--/.dropdown-menu -->
            </div>
            <!--/.share-dropdown -->
          </aside>
          <!-- /column .sidebar -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    @endforeach
</body>

@endsection
