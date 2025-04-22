@extends('Frontend.Layouts.app')

@section('content')
<style>

ul {
  list-style-type: circle;
  margin-left: 35px;
}

ol {
  margin-left: 25px;
}

</style>

<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <!-- preloader end -->
   <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ url('Frontend/img/blog/'.$blogDetail->image) }}">
      <div class="container pt-18 pb-15 pt-md-20 pb-md-19 text-center">
        <div class="row">
          <div class="col-md-10 col-xl-8 mx-auto">
            <div class="post-header">
              <div class="post-category text-line text-white">
                <a href="#" class="text-reset" rel="category">Blog</a>
              </div>
              <!-- /.post-category -->
              <h1 class="display-1 mb-4 text-white">{{$blogDetail->judul}}</h1>
              <ul class="post-meta text-white">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ date('d/m/Y', strtotime($blogDetail->created_at))}}</span></li>
                <li class="post-author"><i class="uil uil-user"></i><a href="#" class="text-reset"><span>By {{$blogDetail->author}}</span></a></li>
              </ul>
              <!-- /.post-meta -->
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
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
          <div class="col-lg-8">
            <div class="blog single">
              <div class="card">
                <figure class="card-img-top"><img src="{{ url('Frontend/img/blog/'.$blogDetail->image) }}" alt="" /></figure>
                <div class="card-body">
                  <div class="classic-view">
                    <article class="post">
                      <div class="post-content mb-5">
                        <h2 class="h1 mb-4">{{$blogDetail->judul}}</h2>
                        <p>{!! $blogDetail->content !!}</p>
                        <div class="row g-6 mt-3 mb-10">
                            @foreach($gambarDetail as $galeri)
                          <div class="col-md-6">
                            <figure class="hover-scale rounded cursor-dark"><a href="{{url('assets/images/galeri/',$galeri->foto)}}" data-glightbox="title: {{$galeri->judul}} Pelnasindo;" data-gallery="post"> 
                                <img src="{{url('assets/images/galeri/',$galeri->foto)}}" alt="{{$galeri->judul}} Pelnasindo" /></a>
                            </figure>
                          </div>
                          <!--/column -->
                           @endforeach
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.post-content -->
                      <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                        <div class="mb-0 mb-md-2">
                          <div class="dropdown share-dropdown btn-group">
                            <button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="uil uil-share-alt"></i> Share </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#"><i class="uil uil-twitter"></i>Twitter</a>
                              <a class="dropdown-item" href="#"><i class="uil uil-facebook-f"></i>Facebook</a>
                              <a class="dropdown-item" href="#"><i class="uil uil-linkedin"></i>Linkedin</a>
                            </div>
                            <!--/.dropdown-menu -->
                          </div>
                          <!--/.share-dropdown -->
                        </div>
                      </div>
                      <!-- /.post-footer -->
                    </article>
                    <!-- /.post -->
                  </div>
                  <!-- /.classic-view -->
                  <hr />
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.blog -->
          </div>
          <!-- /column -->
          <aside class="col-lg-4 sidebar mt-11 mt-lg-6">
            <!--<div class="widget">-->
            <!--  <form class="search-form">-->
            <!--    <div class="form-floating mb-0">-->
            <!--      <input id="search-form" type="text" class="form-control" placeholder="Search">-->
            <!--      <label for="search-form">Search</label>-->
            <!--    </div>-->
            <!--  </form>-->
              <!-- /.search-form -->
            <!--</div>-->
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title mb-3">Tentang Kami</h4>
              <p style="text-align: justify;">Yayasan Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan. Ceruk pendidikan Indonesia begitu luas dan mendalam sehingga diperlukan partisipasi publik sebagai mitra pemerintah untuk berkontribusi secara langsung dalam dunia pendidikan. </p>
              <!-- /.social -->
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title mb-3">Popular Blog</h4>
              <ul class="image-list">
                @foreach($bacaJuga as $value)
                <li>
                  <figure class="rounded"><a href="{{ url('Frontend/img/blog/'.$value->image) }}"><img src="{{ url('Frontend/img/blog/'.$value->image) }}" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="{{route('fe-blog-details',$value->slug_judul)}}">{{$value->judul}}</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ date('d/m/Y', strtotime($blogDetail->created_at))}}</span></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
                @endforeach
              </ul>
              <!-- /.image-list -->
            </div>
            <!-- /.widget -->
          </aside>
          <!-- /column .sidebar -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
</body>
@endsection