@extends('Frontend.Layouts.app')


@section('content')
<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <!-- preloader end -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row mt-6">
          <div class="col-xl-10 mx-auto">
            <div class="projects-tiles">
                @foreach($dataJadwal as $jadwal)
                <div class="project grid grid-view">
                    <div class="row g-6 isotope">
                      <div class="item col-md-6">
                        <div class="project-details d-flex justify-content-center flex-column">
                          <div class="post-header">
                            <div class="post-category text-red mb-3">{{ date('d/m/Y', strtotime($jadwal->created_at))}}</div>
                            <h2 class="post-title mb-3">{{$jadwal->judul}}</h2>
                          </div>
                          <!-- /.post-header -->
                          <div class="post-content">
                            <a href="{{ route('fe-singlejadwal',$jadwal->slug_judul) }}" class="more hover link-red">Read More</a>
                          </div>
                          <!-- /.post-content -->
                        </div>
                        <!-- /.project-details -->
                      </div>
                      <!-- /.item -->
                      <div class="item col-md-6">
                        <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">{{$jadwal->judul}}</h5>'><a href="{{ url('assets/images/jadwal/'.$jadwal->foto) }}" data-glightbox="title: {{$jadwal->judul}}" data-gallery="project-1"> <img src="{{ url('assets/images/jadwal/'.$jadwal->foto) }}" alt="" /></a>
                        </figure>
                      </div>
                      <!-- /.item -->
                      <div class="item col-md-6">
                        <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">{{$jadwal->judul}}</h5>'><a href="{{ url('assets/images/jadwal/'.$jadwal->foto) }}" data-glightbox="title: {{$jadwal->judul}}" data-gallery="project-1"> <img src="{{ url('assets/images/jadwal/'.$jadwal->foto) }}" alt="" /></a>
                        </figure>
                      </div>
                      <!-- /.item -->
                    </div>
                    <!-- /.row -->
                  </div>
                @endforeach
              <!-- /.project -->
            </div>
            <!-- /.projects-tiles -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        
         <nav class="d-flex mt-5" aria-label="pagination">
          <ul class="pagination">
            {{$dataJadwal}}
          </ul>
          <!-- /.pagination -->
        </nav>
        <!-- /nav -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
</body>
@endsection