@extends('Frontend.Layouts.app')

@section('content')
<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  
      <section class="wrapper" style="background-color: #edf2fc;">
      <div class="container pt-10 pb-10 pt-md-14 pb-md-13 text-center">
        <div class="row">
          <div class="col-xl-5 mx-auto mb-6">
            <h1 class="display-1 mb-3">Struktur Organisasi Yayasan</h1>
            <p class="lead mb-0">Struktur Organisasi Yayasan Insan Tera Semenjana</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper" style="background-color: #97a9ad;">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-16 align-items-center">
          <div class="col-lg-6">
            <figure><img class="w-auto" src="/Frontend/assets/img/Logo Yayasan Insan Tera Semenjana Fix 2.png" srcset="/Frontend/assets/img/Logo Yayasan Insan Tera Semenjana Fix 2.png" alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h2 class="fs-15 text-uppercase text-line text-white mb-3">Tentang</h2>
            <h3 class="display-5 mb-7 pe-xxl-5">Yayasan Insan Tera Semenjana</h3>
            <div class="d-flex flex-row mb-4">
              <div>
                <img src="/Frontend/assets/img/icons/lineal/light-bulb.svg" class="svg-inject icon-svg icon-svg-sm text-blue me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1"></h4>
                <p class="mb-1" style="text-align: justify;"><b>Insan Tera Semenjana</b> merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan. Ceruk pendidikan Indonesia begitu luas dan mendalam sehingga diperlukan partisipasi publik sebagai mitra pemerintah untuk berkontribusi secara langsung dalam dunia pendidikan. <br> Dengan demikian, sinergi masyarakat sebagai mitra pemerintah untuk mewujudkan tujuan pendidikan sebagaimana diamanatkan dalam undang- undang merupakan wujud konkret dari pendirian yayasan ini.</p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-4 order-lg-2">
            <figure><img class="w-auto" src="/Frontend/assets/img/struktur-organisasi.png" srcset="/Frontend/assets/img/struktur-organisasi.png" alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-8">
            <h3 class="display-5 mb-7">Struktur Organisasi Yayasan Insan Tera Semenjana</h3>
            <h5>Pembina Yayasan</h5>
            <ol class="text-white">
                <li>Teguh Sarmudjianto, S.Pd.</li>
                <li>Muqowim, S.Pd.I.</li>
                <li>A. Razak Walad Purwadina, M.Pd.</li>
            </ol>
            <br>
            <h5>Pengawas Yayasan</h5>
            <ol class="text-white">
                <li>Eli Widayati, M.Pd.</li>
                <li>Suranti, A.Md.</li>
                <li>Maulana Afnandito</li>
            </ol>
            <br>
            <h5>Pendiri Yayasan</h5>
            <ul class="text-white">
                <li>A. Razak Walad Purwadina, M.Pd.</li>
            </ul>
            <br>
            <h5>Ketua Yayasan</h5>
            <ul class="text-white">
                <li>Faiqotul Munawwaroh, S.Pd.</li>
            </ul>
            <br>
            <h5>Sekretaris Yayasan</h5>
            <ol class="text-white">
                <li>Desti Dwi Rahmawati</li>
                <li>Gusmi Ilham Ramadhan</li>
            </ol>
             <br>
            <h5>Bendahara Yayasan</h5>
            <ul class="text-white">
                <li>Endah Lestari, S.Pd.</li>
            </ul>
            <!--/.accordion -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-7">
            <figure><img class="w-auto" src="/Frontend/assets/img/illustrations/i5.png" srcset="/Frontend/assets/img/illustrations/i5@2x.png 2x" alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h3 class="display-5 mb-7">Ada Pertanyaan ? Harap Hubungi Kontak dibawah.</h3>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">Address</h5>
                <address>Dk. Bodeh Wetan, RT 002/RW 001, Desa Wonorejo, Kec. Karanganyar, Kab. Kebumen, Jawa Tengah</address>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">Phone</h5>
                <p>+62 877-1717-3410</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">E-mail</h5>
                <p class="mb-0"><a href="mailto:insanterasemenjana@gmail.com" class="link-body">insanterasemenjana@gmail.com</a></p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
</body>
@endsection