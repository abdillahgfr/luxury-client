@extends('Frontend.Layouts.app')


@section('content')

<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <!-- preloader end -->

 <section class="wrapper" style="background-color: #6EC5E0;">
      <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
          <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
            <h1 class="display-1 mb-3">Blog</h1>
            <p class="lead px-lg-5 px-xxl-8">Blog Seputar Yayasan Insan Tera Semenjana</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="blog grid grid-view mt-n17">
              <div class="row isotope gx-md-8 gy-8 mb-8">
                @foreach($dataBlog as $blog)
                <article class="item post col-md-6">
                  <div class="card">
                    <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="{{ url('Frontend/img/blog/'.$blog->image) }}" style="max-height: 350px;" alt="" /></a>
                      <figcaption>
                        <h5 class="from-top mb-0">{{ $blog->judul }}</h5>
                      </figcaption>
                    </figure>
                    <div class="card-body">
                      <div class="post-header">
                        <div class="post-category text-line">
                          <a href="#" class="hover" rel="category">{{ $blog->author }}</a>
                        </div>
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route('fe-blog-details',$blog->slug_judul)}}">{{ $blog->judul }}</a></h2>
                      </div>
                      <!-- /.post-header -->
                      <div class="post-content">
                        <p>{{ $blog->desc }}</p>
                      </div>
                      <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                      <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ date('d/m/Y', strtotime($blog->created_at))}}</span></li>
                      </ul>
                      <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </article>
                <!-- /.post -->
                @endforeach
              </div>
              <!-- /.row -->
            </div>
            <!-- /.blog -->
             <nav class="d-flex mt-5" aria-label="pagination">
                  <ul class="pagination">
                    {{ $dataBlog }}
                  </ul>
                  <!-- /.pagination -->
                </nav>
            <!-- /nav -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

</body>
@endsection