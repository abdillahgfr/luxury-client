@extends('Frontend.Layouts.app')

@section('content')

<style>
  /* Base styles for tabs */
  .tabs__controls {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  
  .tabs__button {
    margin: 5px;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
  }
  
  /* Additional styles for active tab */
  .is-active {
    /*background-color: #fff;*/
    color: #000000;
  }
  
  /* Media queries for responsiveness */
  @media screen and (max-width: 600px) {
    .tabs__controls {
      flex-direction: column;
      align-items: center;
    }
    
    .tabs__button {
      width: 100%;
    }
  }
</style>

<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <!-- preloader end -->


  <main class="main-content  
  bg-light-4
">

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

@foreach($dataDetailMateri as $dataMateri)
      <div class="js-pin-container">
        <section class="page-header -type-5">
          <div class="page-header__bg">
            <div class="bg-image js-lazy" data-bg="/Frontend/img/event-single/bg.png"></div>
          </div>

          <div class="container">
            <div class="page-header__content pt-60">
              <div class="row y-gap-30 relative">
                <div class="col-xl-12 col-lg-8">
                  <div class="d-flex x-gap-15 y-gap-10 pb-20">
                    <div>
                      <div class="badge px-15 py-8 text-11 bg-green-1 text-dark-1 fw-400">BEST SELLER</div>
                    </div>
                  </div>

                      <div data-anim="slide-up delay-1">
                        <h1 class="text-30 lh-14 pr-60 lg:pr-0">Materi {{ $dataMateri->kategori}}</h1>
                      </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-auto">
                      <div class="relative pt-40">
                        <img style="border-radius: 15px;" src="/Frontend/img/foto-materi.png" alt="image">
                      </div>
                    </div>
                    <div class="col-auto">
                        <div class="relative pt-40">
                            <div class="pt-25 pb-30 px-30 mb-15 bg-white shadow-2 rounded-8 border-light">
                              <div class="tabs -active-purple-2 js-tabs pt-0">
                                  <div>
                                    <h4 class="text-18 fw-500">Deskripsi</h4>
            
                                    <div class="show-more mt-30 js-show-more">
                                      <div class="show-more__content">
                                        <p style="text-align: justify; text-justify: inter-word;">
                                            {!! $dataMateri->content !!}
                                          </p>
                                      </div>
            
                                      <button class="show-more__button text-purple-1 fw-500 underline mt-30">Show more</button>
                                    </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row y-gap-30 relative">
                    <div class="col-xl-12 col-lg-8">
                        <div class="pt-25 pb-30 px-30 mb-15 bg-white shadow-2 rounded-8 border-light">
                              <div class="tabs -active-purple-2 js-tabs pt-0">
                                  <div>
                                    <h4 class="text-25 fw-500" style="text-align: center;">MATERI BIMTEK</h4>
            
                                    <div class="show-more mt-30 js-show-more">
                                      <div class="show-more__content">
                                        <p style="text-align: justify; text-justify: inter-word;">
                                            {!! $dataMateri->pilihan_materi !!}
                                          </p>
                                      </div>
            
                                      <button class="show-more__button text-purple-1 fw-500 underline mt-30">Show more</button>
                                    </div>
                                  </div>
                              </div>
                            </div>
                      </div>
                </div>
                  
                <section class="layout-pt-sm layout-pb-md">
                <div data-anim-wrap class="container">
                  <div class="row y-gap-30 justify-between pt-60 lg:pt-40">
                    <div class="col-lg-6 col-md-6">
                      <div class="priceCard -type-1 rounded-16 bg-white shadow-2">
                        <div class="priceCard__content py-45 px-60 text-center">
                          <div class="priceCard__type text-18 lh-11 fw-500 text-dark-1">Paket Tidak Menginap</div>
                          <div class="priceCard__price text-45 lh-11 fw-700 text-dark-1 mt-15">Rp. 3.500.000</div>
                          <div class="priceCard__period">/ peserta</div>
                          <img class="mt-30" src="/Frontend/img/pricing/user-icon.webp" style="width: 100px;" alt="icon">
                          <div class="text-left y-gap-15 mt-35">
        
                            <div>
                              <i class="text-purple-1 pr-8" data-feather="check"></i>
                              Pelatihan selama 2 hari
                            </div>
        
                            <div>
                              <i class="text-red-1 pr-8" data-feather="x"></i>
                               Tidak ada Penginapan
                            </div>
        
                            <div>
                              <i class="text-purple-1 pr-8" data-feather="check"></i>
                              Coffee Break & Makan Siang selama kegiatan di kelas
                            </div>
        
                            <div>
                              <i class="text-purple-1 pr-8" data-feather="check"></i>
                              Seminar KIT (Tas Eksklusif, Flashdisk (softcopy materi), Pena/Pensil, Note Book dan Modul)
                            </div>
        
                            <div>
                              <i class="text-purple-1 pr-8" data-feather="check"></i>
                              Sertifikat Bimtek
                            </div>
                            <div>
                              <i class="text-purple-1 pr-8" data-feather="check"></i>
                              Penjemputan di bandara, stasiun, terminal dalam kota
                            </div>
                            <div>
                              <i class="text-purple-1 pr-8" data-feather="check"></i>
                              City Tour
                            </div>
        
                          </div>
        
                          <div class="d-inline-block mt-30">
                            <a class="button -md -purple-3 text-purple-1" href="{{ route('fe-pendaftaran') }}">Pilih Paket</a>
                          </div>
                        </div>
                      </div>
                    </div>
        
                    <div class="col-lg-6 col-md-6">
                      <div class="priceCard -type-1 rounded-16 bg-white shadow-2">
                        <div class="priceCard__content py-45 px-60 text-center">
                          <div class="priceCard__type text-18 lh-11 fw-500 text-dark-1">Paket Menginap</div>
                          <div class="priceCard__price text-45 lh-11 fw-700 text-dark-1 mt-15">Rp. 4.500.000 </div>
                          <div class="priceCard__period">/ peserta</div>
                          <img class="mt-30" src="/Frontend/img/pricing/house-icon.png" style="width: 100px;" alt="icon">
                          <div class="text-left y-gap-15 mt-35">
        
                            <div>
                              <i class="text-purple-1 pr-8" data-feather="check"></i>
                              Pelatihan selama 2 hari
                            </div>
        
                            <div style="font-size: 13px;">
                              <i class="text-purple-1 pr-8" data-feather="check"></i>
                                Fasilitas Menginap dari penyelenggara selama 4 hari 3 Malam Twin Share
                            </div>
        
                            <div>
                              <i class="text-purple-1 pr-8" data-feather="check"></i>
                              Coffee Break & Makan Siang selama kegiatan di kelas
                            </div>
        
                            <div>
                              <i class="text-purple-1 pr-8" data-feather="check"></i>
                              Seminar KIT (Tas Eksklusif, Flashdisk (softcopy materi), Pena/Pensil, Note Book dan Modul)
                            </div>
        
                            <div>
                              <i class="text-purple-1 pr-8" data-feather="check"></i>
                              Sertifikat Bimtek
                            </div>
                            <div>
                              <i class="text-purple-1 pr-8" data-feather="check"></i>
                              Penjemputan di bandara, stasiun, terminal dalam kota
                            </div>
                            <div>
                              <i class="text-purple-1 pr-8" data-feather="check"></i>
                              City Tour
                            </div>
        
                          </div>
        
                          <div class="d-inline-block mt-30">
                            <a class="button -md -purple-3 text-purple-1" href="{{ route('fe-pendaftaran') }}">Pilih Paket</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              
                <section class="layout-pt-md layout-pb-md">
                    <div class="container">
                        <div class="col-lg-12">
                        <h1 class="page-header__title">Jadwal Bimtek 2023</h1><hr>
                          <div class="tabs -pills js-tabs">
                            <div class="tabs__controls d-flex x-gap-10 js-tabs-controls">
                              <div><button class="tabs__button px-20 py-8 rounded-8 text-light-1 js-tabs-button is-active" data-tab-target=".-tab-item-5" type="button">September</button></div>
                              
                              <div><button class="tabs__button px-20 py-8 rounded-8 text-light-1 js-tabs-button " data-tab-target=".-tab-item-6" type="button">Oktober</button></div>
                              
                              <div><button class="tabs__button px-20 py-8 rounded-8 text-light-1 js-tabs-button " data-tab-target=".-tab-item-7" type="button">November</button></div>
                              
                              <div><button class="tabs__button px-20 py-8 rounded-8 text-light-1 js-tabs-button " data-tab-target=".-tab-item-8" type="button">Desember</button></div>
                            </div>
            
                            <div class="tabs__content mt-20 js-tabs-content">
                              
                              <div class="tabs__pane -tab-item-5 is-active">
                                <div class="row justify-end">
                                    <h3 class="page-header__title" style="text-align: center; border-style: groove; border-color: #FFFFFF; box-shadow: 5px 3px 1px 1px rgb(0 0 0 / 50%);">JADWAL KEGIATAN</h3>
                                    <div class="card-body">
                                    <div class="table-responsive">
                                        <table cellspacing="0" class="table table-bordered text-nowrap border-bottom">
                                    <thead>
                                    <tr class="row-1 odd">
                                    	<th class="column-1"><p style="text-align: left;"><span style="color: #339966;"><strong>WAKTU PELAKSANAAN</strong></span></p></th><th class="column-2"><p style="text-align: left;"><span style="color: #339966;"><strong>TEMPAT PELAKSANAAN</strong></span></p></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="row-2 even">
                                    	<td class="column-1">
                                    04 – 05 September 2023<br>
                                    07 – 08 September 2023<br>
                                    <br>
                                    <br>
                                    <br>
                                    11 – 12 September 2023<br>
                                    14 – 15 September 2023<br>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    18 – 19 September 2023<br>
                                    21 – 22 September 2023<br>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    25 – 26 September 2023<br></td>
                                    <td class="column-2">·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jakarta  Hotel Hi Senen Jl. Senen Raya Jakarta Pusat<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bandung Hotel Santika Jl. Pasir Kaliki Bandung  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bali  Hotel  J4. Jln Legian No.74, Br Pengabetan, Kuta, Bali  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Makassar  Hotel Fave Daeng Tompo Jl. Daeng Tompo Makassar  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Surabaya  Hotel Yelow Jl. Raya Jemursari No.176 Surabaya <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotel Fave Malioboro : Jl. I Dewa Nyoman Oka No.30 Yogjakarta  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MEDAN  Hotel Fave Jl. S. Parman No.313a  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Malang  Hotel Max One  Jl. Jaksa Agung Suprapto<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Samarinda  Hotel Amaris Jl. Dr. Sutomo No.75  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotel Ibis  Balipapan Jl. Brigjen Ery Suparjan No.2<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Manado  Hotel Wizz Jl. Piere Tendean, <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ternante  Hotel Sahid Bela Jalan Jati Raya No. 500 <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sorong  Hotel Fave Jl. Basuki Rahmat <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Palembang  Hotel Fave Jl. Jendral Basuki Rachmat No.1681 <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pekanbaru  Hotel Grand Zuri Jl. Teuku Umar No.7<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Banjarmasin  Hotel Fave Jl. Ahmad Yani No.Km.2 No.35, <br>
                                    <br>
                                    </td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                                    <br>
                                      <h4 class="page-header__title">Lokasi Kegiatan : Jakarta, Bandung, Bali, Surabaya, Yogyakarta, Medan, Palembang, Malang, dan Kota Lainnya </h4>
                                </div>
                                </div>
                              </div>
                              
                              <div class="tabs__pane -tab-item-6 ">
                                <div class="row justify-end">
                                    <h3 class="page-header__title" style="text-align: center; border-style: groove; border-color: #FFFFFF; box-shadow: 5px 3px 1px 1px rgb(0 0 0 / 50%);">JADWAL KEGIATAN</h3>
                                    <div class="card-body">
                                    <div class="table-responsive">
                                        <table cellspacing="0" class="table table-bordered text-nowrap border-bottom">
                                    <thead>
                                    <tr class="row-1 odd">
                                    	<th class="column-1"><p style="text-align: left;"><span style="color: #339966;"><strong>WAKTU PELAKSANAAN</strong></span></p></th><th class="column-2"><p style="text-align: left;"><span style="color: #339966;"><strong>TEMPAT PELAKSANAAN</strong></span></p></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="row-2 even">
                                    	<td class="column-1">
                                    02 – 03 Oktober 2023<br>
                                    05 – 06 Oktober 2023<br>
                                    <br>
                                    <br>
                                    <br>
                                    09 – 10 Oktober 2023<br>
                                    12 – 13 Oktober 2023<br>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    16 – 17 Oktober 2023<br>
                                    19 – 20 Oktober 2023<br>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    23 – 24 Oktober 2023<br>
                                    26 – 27 Oktober 2023<br>
                                    30 – 31 Oktober 2023</td>
                                    <td class="column-2">·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jakarta  Hotel Hi Senen Jl. Senen Raya Jakarta Pusat<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bandung Hotel Santika Jl. Pasir Kaliki Bandung  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bali  Hotel  J4. Jln Legian No.74, Br Pengabetan, Kuta, Bali  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Makassar  Hotel Fave Daeng Tompo Jl. Daeng Tompo Makassar  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Surabaya  Hotel Yelow Jl. Raya Jemursari No.176 Surabaya <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotel Fave Malioboro : Jl. I Dewa Nyoman Oka No.30 Yogjakarta  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MEDAN  Hotel Fave Jl. S. Parman No.313a  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Malang  Hotel Max One  Jl. Jaksa Agung Suprapto<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Samarinda  Hotel Amaris Jl. Dr. Sutomo No.75  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotel Ibis  Balipapan Jl. Brigjen Ery Suparjan No.2<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Manado  Hotel Wizz Jl. Piere Tendean, <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ternante  Hotel Sahid Bela Jalan Jati Raya No. 500 <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sorong  Hotel Fave Jl. Basuki Rahmat <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Palembang  Hotel Fave Jl. Jendral Basuki Rachmat No.1681 <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pekanbaru  Hotel Grand Zuri Jl. Teuku Umar No.7<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Banjarmasin  Hotel Fave Jl. Ahmad Yani No.Km.2 No.35, <br>
                                    <br>
                                    </td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                                    <br>
                                      <h4 class="page-header__title">Lokasi Kegiatan : Jakarta, Bandung, Bali, Surabaya, Yogyakarta, Medan, Palembang, Malang, dan Kota Lainnya </h4>
                                </div>
                                </div>
                              </div>
                              
                              <div class="tabs__pane -tab-item-7 ">
                                <div class="row justify-end">
                                    <h3 class="page-header__title" style="text-align: center; border-style: groove; border-color: #FFFFFF; box-shadow: 5px 3px 1px 1px rgb(0 0 0 / 50%);">JADWAL KEGIATAN</h3>
                                    <div class="card-body">
                                    <div class="table-responsive">
                                        <table cellspacing="0" class="table table-bordered text-nowrap border-bottom">
                                    <thead>
                                    <tr class="row-1 odd">
                                    	<th class="column-1"><p style="text-align: left;"><span style="color: #339966;"><strong>WAKTU PELAKSANAAN</strong></span></p></th><th class="column-2"><p style="text-align: left;"><span style="color: #339966;"><strong>TEMPAT PELAKSANAAN</strong></span></p></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="row-2 even">
                                    	<td class="column-1">
                                    02 – 03 November 2023<br>
                                    06 – 07 November 2023<br>
                                    <br>
                                    <br>
                                    <br>
                                    09 – 10 November 2023<br>
                                    13 – 14 November 2023<br>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    16 – 17 November 2023<br>
                                    20 – 21 November 2023<br>
                                    
                                    <br>
                                    <br>
                                    23 – 24 November 2023<br>
                                    27 – 28 November 2023<br>
                                    31 Nov – 01 Des 2023</td>
                                    <td class="column-2">·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jakarta  Hotel Hi Senen Jl. Senen Raya Jakarta Pusat<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bandung Hotel Santika Jl. Pasir Kaliki Bandung  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bali  Hotel  J4. Jln Legian No.74, Br Pengabetan, Kuta, Bali  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Makassar  Hotel Fave Daeng Tompo Jl. Daeng Tompo Makassar  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Surabaya  Hotel Yelow Jl. Raya Jemursari No.176 Surabaya <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotel Fave Malioboro : Jl. I Dewa Nyoman Oka No.30 Yogjakarta  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MEDAN  Hotel Fave Jl. S. Parman No.313a  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Malang  Hotel Max One  Jl. Jaksa Agung Suprapto<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Samarinda  Hotel Amaris Jl. Dr. Sutomo No.75  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotel Ibis  Balipapan Jl. Brigjen Ery Suparjan No.2<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Manado  Hotel Wizz Jl. Piere Tendean, <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ternante  Hotel Sahid Bela Jalan Jati Raya No. 500 <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sorong  Hotel Fave Jl. Basuki Rahmat <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Palembang  Hotel Fave Jl. Jendral Basuki Rachmat No.1681 <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pekanbaru  Hotel Grand Zuri Jl. Teuku Umar No.7<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Banjarmasin  Hotel Fave Jl. Ahmad Yani No.Km.2 No.35, <br>
                                    <br>
                                    </td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                                    <br>
                                      <h4 class="page-header__title">Lokasi Kegiatan : Jakarta, Bandung, Bali, Surabaya, Yogyakarta, Medan, Palembang, Malang, dan Kota Lainnya </h4>
                                </div>
                                </div>
                              </div>
                              
                              <div class="tabs__pane -tab-item-8 ">
                                <div class="row justify-end">
                                    <h3 class="page-header__title" style="text-align: center; border-style: groove; border-color: #FFFFFF; box-shadow: 5px 3px 1px 1px rgb(0 0 0 / 50%);">JADWAL KEGIATAN</h3>
                                    <div class="card-body">
                                    <div class="table-responsive">
                                        <table cellspacing="0" class="table table-bordered text-nowrap border-bottom">
                                    <thead>
                                    <tr class="row-1 odd">
                                    	<th class="column-1"><p style="text-align: left;"><span style="color: #339966;"><strong>WAKTU PELAKSANAAN</strong></span></p></th><th class="column-2"><p style="text-align: left;"><span style="color: #339966;"><strong>TEMPAT PELAKSANAAN</strong></span></p></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="row-2 even">
                                    	<td class="column-1">
                                    04 – 05 Desember 2023<br>
                                    07 – 08 Desember 2023<br>
                                    <br>
                                    <br>
                                    <br>
                                    11 – 12 Desember 2023<br>
                                    14 – 15 Desember 2023<br>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    18 – 19 Desember 2023<br>
                                    21 – 22 Desember 2023<br>
                                    
                                    <br>
                                    <br>
                                    28 – 29 Desember 2023</td>
                                    <td class="column-2">·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jakarta  Hotel Hi Senen Jl. Senen Raya Jakarta Pusat<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bandung Hotel Santika Jl. Pasir Kaliki Bandung  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bali  Hotel  J4. Jln Legian No.74, Br Pengabetan, Kuta, Bali  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Makassar  Hotel Fave Daeng Tompo Jl. Daeng Tompo Makassar  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Surabaya  Hotel Yelow Jl. Raya Jemursari No.176 Surabaya <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotel Fave Malioboro : Jl. I Dewa Nyoman Oka No.30 Yogjakarta  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MEDAN  Hotel Fave Jl. S. Parman No.313a  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Malang  Hotel Max One  Jl. Jaksa Agung Suprapto<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Samarinda  Hotel Amaris Jl. Dr. Sutomo No.75  <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotel Ibis  Balipapan Jl. Brigjen Ery Suparjan No.2<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Manado  Hotel Wizz Jl. Piere Tendean, <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ternante  Hotel Sahid Bela Jalan Jati Raya No. 500 <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sorong  Hotel Fave Jl. Basuki Rahmat <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Palembang  Hotel Fave Jl. Jendral Basuki Rachmat No.1681 <br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pekanbaru  Hotel Grand Zuri Jl. Teuku Umar No.7<br>
                                    ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Banjarmasin  Hotel Fave Jl. Ahmad Yani No.Km.2 No.35, <br>
                                    <br>
                                    </td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                                    <br>
                                      <h4 class="page-header__title">Lokasi Kegiatan : Jakarta, Bandung, Bali, Surabaya, Yogyakarta, Medan, Palembang, Malang, dan Kota Lainnya </h4>
                                </div>
                                </div>
                              </div>
            
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="container">
                          <div class="row pt-60 lg:pt-40">
                            <div class="col-lg-12">
                              <h1 class="page-header__title">Fasilitas Peserta</h1><hr>
                              <div class="row x-gap-100 justfiy-between">
                                <div class="col-md-auto">
                                  <div class="y-gap-20">
                
                                    <div class="d-flex items-center">
                                      <div class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                        <i class="icon-check text-6"></i>
                                      </div>
                                      <p>Pelatihan Selama 2 Hari</p>
                                    </div>
                
                                    <div class="d-flex items-center">
                                      <div class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                        <i class="icon-check text-6"></i>
                                      </div>
                                      <p>Fasilitas Menginap dari penyelenggara 4 hari 3 Malam Twin Share (Khusus Paket Menginap)</p>
                                    </div>
                
                                    <div class="d-flex items-center">
                                      <div class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                        <i class="icon-check text-6"></i>
                                      </div>
                                      <p>Coffee Break & Makan Siang selama kegiatan di kelas</p>
                                    </div>
                
                                    <div class="d-flex items-center">
                                      <div class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                        <i class="icon-check text-6"></i>
                                      </div>
                                      <p>Seminar KIT (Tas Eksklusif, Flashdisk (softcopy materi), Pena/Pensil, Note Book dan Modul)</p>
                                    </div>
                
                                    <div class="d-flex items-center">
                                      <div class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                        <i class="icon-check text-6"></i>
                                      </div>
                                      <p>Sertifikat Bimtek</p>
                                    </div>
                
                                    <div class="d-flex items-center">
                                      <div class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                        <i class="icon-check text-6"></i>
                                      </div>
                                      <p>Penjemputan di bandara, stasiun, terminal dalam kota</p>
                                    </div>
                                    
                                    <div class="d-flex items-center">
                                      <div class="d-flex justify-center items-center border-light rounded-full size-20 mr-10">
                                        <i class="icon-check text-6"></i>
                                      </div>
                                      <p>City Tour</p>
                                    </div>
                
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                    </div>
                  </section>
                  
                
               

                <div class="courses-single-info js-pin-content">
                </div>
              </div>
            </div>
          </div>
        </section>
        
         
                  <section class="layout-pt-md layout-pb-md"  style=" margin-top: 25px; background-color: #462a93;">
                    <div class="container">
                      <div class="row y-gap-20 justify-between items-center">
                        <div class="col-xl-7 col-lg-5">
                          <h2 class="text-30 lh-15 text-white">
                            Untuk informasi mengenai Bimtek <span style="color: #e2bd22;">PELNASINDO</span>, Silahkan Hubungi Kami		
                          </h2>
                        </div>
            
                        <div class="col-auto">
                          <a href="{{ url('pendaftaran-bimtek') }}" class="button -md -green-1 text-dark-1">Klik Disini</a>
                        </div>
                      </div>
                    </div>
                </section>
      </div>
      
@endforeach
    </div>
  </main>
</body>

@endsection