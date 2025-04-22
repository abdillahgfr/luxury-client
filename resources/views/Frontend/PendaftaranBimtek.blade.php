@extends('Frontend.Layouts.app')


@section('content')
<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <!-- preloader end -->

  <!-- barba container start -->
  <div class="barba-container" data-barba="container">

    <main class="main-content">
          <section data-anim="fade" class="breadcrumbs ">
                <div class="container">
                  <div class="row">
                    <div class="col-auto">
                      <div class="breadcrumbs__content">
        
                        <div class="breadcrumbs__item ">
                          <a href="{{ url('/') }}">Home</a>
                        </div>
        
                        <div class="breadcrumbs__item ">
                          <a href="{{ url('pendaftaran-bimtek') }}">Pendaftaran Bimtek</a>
                        </div>
        
                      </div>
                    </div>
                  </div>
                </div>
              </section>
        
        <div class="dashboard__content bg-light-4">
              <div class="row pb-50 mb-10">
                <div class="col-auto">
                </div>
              </div>

                <div class="row">
                    <div class="col" style="margin-top: 15px;">
                        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100" style="box-shadow: 10px 10px 0px 0px rgb(0 0 0 / 50%); background-color: #e3d69f;">
                        <div class="tabs -active-purple-2 js-tabs pt-0">
    
                          <div class="tabs__content py-30 px-30 js-tabs-content">
                            <div>
                              <div class="row y-gap-20 x-gap-20 items-center">
                                
                                <div class="col-12">
                                  <div class="text-16 fw-500 text-dark-1"><h1>Pendaftaran Bimtek</h1></div>
                                </div>
                                
                                 <div class="col-auto">
                                        <div class="text-16 lh-1 mt-10" style="text-align: justify;">Untuk pendaftaran Bimtek ataupun peserta silahkan memilih salah satu dari pilihan pendaftaran berikut ini.</div>
                                        <div class="text-16 lh-1 mt-10" style="text-align: justify;">Setelahnya Anda akan diarahkan ke halaman khusus untuk pendaftaran dan mohon diisikan dengan data yang lengkap untuk dapat segera kami proses pendaftaran Anda tersebut.</div>
                                        <div class="row">
                                            <div class="col-auto mt-5">
                                                <a href="{{ route('fe-pendaftaran') }}"><button class="button -sm -green-1 text-white">Daftar Online</button></a>
                                            </div>
                                            <div class="col-auto mt-5">
                                                <a href="{{ route('fe-pendaftarangroup') }}"><button class="button -sm -blue-1 text-white">Daftar Group</button></a>
                                            </div>
                                        </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto" style="margin-top: 25px;">
                        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                        <div class="tabs -active-purple-2 js-tabs pt-0">
    
                          <div class="tabs__content py-30 px-30 js-tabs-content">
                            <div>
                              <div class="row y-gap-20 x-gap-20 items-center">
                                
                                    <img style="display: block; margin-left: auto; margin-right: auto; border-radius: 15px; width: 400px;" src="/Frontend/img/general/gambar-cs.png">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        
              <section class="page-header -type-1">
                <div class="container">
                  <div class="page-header__content">
                    <div class="row justify-center text-center">
                      <div class="col-auto">
                        <div data-anim="slide-up delay-1">
        
                          <h1 class="page-header__title">Pilihan Paket Bimtek</h1>
        
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
        
        
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
            
                              <div><button class="tabs__button px-20 py-8 rounded-8 text-light-1 js-tabs-button is-active" data-tab-target=".-tab-item-1" type="button">Ferbruari</button></div>
            
                              <div><button class="tabs__button px-20 py-8 rounded-8 text-light-1 js-tabs-button " data-tab-target=".-tab-item-2" type="button">Maret</button></div>
            
                              <div><button class="tabs__button px-20 py-8 rounded-8 text-light-1 js-tabs-button " data-tab-target=".-tab-item-3" type="button">April</button></div>
            
                            </div>
            
                            <div class="tabs__content mt-20 js-tabs-content">
            
                              <div class="tabs__pane -tab-item-1 is-active">
                               <div class="row justify-end">
                            <h3 class="page-header__title" style="text-align: center; border-style: groove; border-color: #FFFFFF; box-shadow: 5px 3px 1px 1px rgb(0 0 0 / 50%);">JADWAL KEGIATAN</h3><hr>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table cellspacing="0" class="table table-bordered text-nowrap border-bottom">
                                    <thead>
                                        <tr>
                                            <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Minggu</th>
                                            <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Senin<br></th>
                                            <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Selasa<br></th>
                                            <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Rabu<br></th>
                                            <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Kamis<br></th>
                                            <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Jumat<br></th>
                                            <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Sabtu<br></th>
                                                
                                        </tr>
                                    </thead>
                                    <tbody>        
                                    <tr>
                                        <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">1</td>
                                        <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">2</td>
                                        <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">3</td>
                                        <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">4</td>
                                     </tr>
                                     <tr>
                                        <td style="text-align: center; border: 1px solid #000000; ">5</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">6</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">7</td>
                                        <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">8</td>
                                        <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">9</td>
                                        <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">10</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">11</td>
                                     </tr>
                                     <tr>
                                        <td style="text-align: center; border: 1px solid #000000; ">12</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">13</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">14</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">15</td>
                                        <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">16</td>
                                        <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">17</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">18</td>
                                     </tr>
                                     <tr>
                                        <td style="text-align: center; border: 1px solid #000000; ">19</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">20</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">21</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">22</td>
                                        <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">23</td>
                                        <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">24</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">25</td>
                                     </tr>
                                     <tr>
                                        <td style="text-align: center; border: 1px solid #000000; ">26</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">27</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">28</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                        <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                     </tr>
                                  </tbody>
                                </table>
                                <i style="color: #e2bd22;" class="fas fa-square"></i> Jadwal Bimtek Aktif
                            </div>
                            <br>
                              <h4 class="page-header__title">Lokasi Kegiatan : Jakarta, Bandung, Bali, Surabaya, Yogyakarta, Medan, Palembang, Malang, dan Kota Lainnya </h4>
                        </div>
                        </div>
                              </div>
            
                              <div class="tabs__pane -tab-item-2 ">
                                <div class="row justify-end">
                                    <h3 class="page-header__title" style="text-align: center; border-style: groove; border-color: #FFFFFF; box-shadow: 5px 3px 1px 1px rgb(0 0 0 / 50%);">JADWAL KEGIATAN</h3>
                                    <div class="card-body">
                                    <div class="table-responsive">
                                        <table cellspacing="0" class="table table-bordered text-nowrap border-bottom">
                                            <thead>
                                                <tr>
                                                    <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Minggu</th>
                                                    <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Senin<br></th>
                                                    <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Selasa<br></th>
                                                    <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Rabu<br></th>
                                                    <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Kamis<br></th>
                                                    <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Jumat<br></th>
                                                    <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Sabtu<br></th>
                                                        
                                                </tr>
                                            </thead>
                                            <tbody>        
                                            <tr>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">1</td>
                                                <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">2</td>
                                                <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">3</td>
                                                <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">4</td>
                                             </tr>
                                             <tr>
                                                <td style="text-align: center; border: 1px solid #000000; ">5</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">6</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">7</td>
                                                <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">8</td>
                                                <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">9</td>
                                                <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">10</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">11</td>
                                             </tr>
                                             <tr>
                                                <td style="text-align: center; border: 1px solid #000000; ">12</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">13</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">14</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">15</td>
                                                <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">16</td>
                                                <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">17</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">18</td>
                                             </tr>
                                             <tr>
                                                <td style="text-align: center; border: 1px solid #000000; ">19</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">20</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">21</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">22</td>
                                                <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">23</td>
                                                <td style="text-align: center; border: 1px solid #000000;  background-color: #e2bd22;">24</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">25</td>
                                             </tr>
                                             <tr>
                                                <td style="text-align: center; border: 1px solid #000000; ">26</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">27</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">28</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">29</td>
                                                <td style="text-align: center; border: 1px solid #000000; background-color: #e2bd22;">30</td>
                                                <td style="text-align: center; border: 1px solid #000000; background-color: #e2bd22; ">31</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                             </tr>
                                          </tbody>
                                        </table>
                                        <i style="color: #e2bd22;" class="fas fa-square"></i> Jadwal Bimtek Aktif
                                    </div>
                                    <br>
                                      <h4 class="page-header__title">Lokasi Kegiatan : Jakarta, Bandung, Bali, Surabaya, Yogyakarta, Medan, Palembang, Malang, dan Kota Lainnya </h4>
                                </div>
                                </div>
                              </div>
            
                              <div class="tabs__pane -tab-item-3 ">
                                <div class="row justify-end">
                                    <h3 class="page-header__title" style="text-align: center; border-style: groove; border-color: #FFFFFF; box-shadow: 5px 3px 1px 1px rgb(0 0 0 / 50%);">JADWAL KEGIATAN</h3>
                                    <div class="card-body">
                                    <div class="table-responsive">
                                        <table cellspacing="0" class="table table-bordered text-nowrap border-bottom">
                                            <thead>
                                                <tr>
                                                    <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Minggu</th>
                                                    <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Senin<br></th>
                                                    <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Selasa<br></th>
                                                    <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Rabu<br></th>
                                                    <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Kamis<br></th>
                                                    <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Jumat<br></th>
                                                    <th style="font-weight: bold; text-align: center; border: 1px solid #000000;" class="wd-5p border-bottom-0">Sabtu<br></th>
                                                        
                                                </tr>
                                            </thead>
                                            <tbody>        
                                            <tr>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">1</td>
                                             </tr>
                                             <tr>
                                                <td style="text-align: center; border: 1px solid #000000; ">2</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">3</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">4</td>
                                                <td style="text-align: center; border: 1px solid #000000; background-color: #e2bd22;">5</td>
                                                <td style="text-align: center; border: 1px solid #000000; background-color: #e2bd22;">6</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">7</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">8</td>
                                             </tr>
                                             <tr>
                                                <td style="text-align: center; border: 1px solid #000000; ">9</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">10</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">11</td>
                                                <td style="text-align: center; border: 1px solid #000000; background-color: #e2bd22;">12</td>
                                                <td style="text-align: center; border: 1px solid #000000; background-color: #e2bd22;">13</td>
                                                <td style="text-align: center; border: 1px solid #000000; background-color: #e2bd22;">14</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">15</td>
                                             </tr>
                                             <tr>
                                                <td style="text-align: center; border: 1px solid #000000; ">16</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">17</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">18</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">19</td>
                                                <td style="text-align: center; border: 1px solid #000000; background-color: #e2bd22;">20</td>
                                                <td style="text-align: center; border: 1px solid #000000; background-color: #e2bd22;">21</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">22</td>
                                             </tr>
                                             <tr>
                                                
                                                <td style="text-align: center; border: 1px solid #000000; ">23</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">24</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">25</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">26</td>
                                                <td style="text-align: center; border: 1px solid #000000; background-color: #e2bd22;">27</td>
                                                <td style="text-align: center; border: 1px solid #000000; background-color: #e2bd22;">28</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">29</td>
                                             </tr>
                                             <tr>
                                                <td style="text-align: center; border: 1px solid #000000; ">30</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                                <td style="text-align: center; border: 1px solid #000000; ">-</td>
                                             </tr>
                                          </tbody>
                                        </table>
                                        <i style="color: #e2bd22;" class="fas fa-square"></i> Jadwal Bimtek Aktif
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
              
                <section class="layout-pt-md layout-pb-md"  style=" margin-top: 25px; background-color: #462a93;">
                    <div class="container">
                      <div class="row y-gap-20 justify-between items-center">
                        <div class="col-xl-7 col-lg-5">
                          <h2 class="text-30 lh-15 text-white">
                            Untuk informasi mengenai Bimtek <span style="color: #e2bd22;">PELNASINDO</span>, Silahkan Hubungi Kami		
                          </h2>
                        </div>
            
                        <div class="col-auto">
                          <a href="#" class="button -md -green-1 text-dark-1">Klik Disini</a>
                        </div>
                      </div>
                    </div>
                </section>
    </main>
  </div>
  <!-- barba container end -->

</body>

@endsection