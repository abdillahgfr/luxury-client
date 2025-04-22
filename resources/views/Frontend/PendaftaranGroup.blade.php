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
        <div class="dashboard__content bg-light-4">
              <div class="row pb-50 mb-10">
                <div class="col-auto">
                </div>
              </div>

                <div class="row">
                    <div class="col" style="margin-top: 25px;">
                        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100" style="box-shadow: 10px 10px 0px 0px rgb(0 0 0 / 50%); background-color: #e3d69f;">
                        <div class="tabs -active-purple-2 js-tabs pt-0">
    
                          <div class="tabs__content py-30 px-30 js-tabs-content">
                            <div>
                              <div class="row y-gap-20 x-gap-20 items-center">
                                
                                <div class="col-12">
                                  <div class="text-16 fw-500 text-dark-1" style="text-align: center;"><h1>Permintaan Kegiatan (Khusus Group)</h1></div>
                                </div>
                                
                                 <div class="col-auto">
                                        <div class="text-16 lh-1 mt-10" style="text-align: justify;">Anda dapat menentukan sendiri tema materi, jadwal kegiatan, tempat pelaksanaan, menggabungkan dua materi dalam satu kegiatan dan merubah durasi pelatihan.</div>
                                        <div class="text-16 lh-1 mt-10" style="text-align: justify;">Silahkan melengkapi formulir pendaftaran di halaman ini, dan setelahnya Anda akan dihubungi oleh Customer Service kami untuk memberikan penjelasan mengenai langkah dan tata cara selanjutnya.</div>
                                        <div class="text-16 lh-1 mt-10" style="text-align: justify;">Untuk Informasi lebih lengkap mengenai proses, syarat dan mekanisme pendaftaran Bimtek Group Anda bisa menghubungi kami melalui whatsapp dengan cara klik tombol di bawah ini.</div>
                                </div>
                                
                                <div class="col-auto">
                                    <hr>
                                  <div class="text-15"><h4>Informasi dan Pertanyaan Seputar Bimtek</h4></div>
                                  <div class="text-14 lh-1 mt-10" style="text-align: justify;">Kami dengan senang hati akan berusaha melayani setiap pertanyaan yang Anda ajukan. Informasi lengkap bisa menghubungi kami melalui telephone ataupun whatsapp dengan cara klik tombol dibawah ini.</div>
                                  <div class="text-14 lh-1 mt-10" style="text-align: justify;"><button class="button -sm -green-1 text-white" style="font-size:15px">Chat Via Whatsapp <i style="font-size:30px; margin-left: 5px;" class="fab fa-whatsapp"></i></button></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto" style="margin-top: 25px;">
                        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100" style="box-shadow: 10px 10px 0px 0px rgb(0 0 0 / 50%); background-color: #e3d69f;">
                        <div class="tabs -active-purple-2 js-tabs pt-0">
    
                          <div class="tabs__content py-30 px-30 js-tabs-content">
                            <div>
                              <div class="row y-gap-20 x-gap-20 items-center">
                                
                                    <img style="display: block; margin-left: auto; margin-right: auto; border-radius: 15px; width: 400px;" src="/Frontend/img/general/pendaftaran-img.jpg">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row y-gap-30 mt-5">
                    <div class="col">
                      <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100" style="margin-top: 25px; box-shadow: 10px 10px 0px 0px rgb(0 0 0 / 50%);">
                        <div class="tabs -active-purple-2 js-tabs pt-0">
    
                          <div class="tabs__content py-30 px-30 js-tabs-content">
                            <div>
                              <div class="row y-gap-20 x-gap-20 items-center">
    
                                <div class="col-auto">
                                  <div class="text-16 fw-500 text-dark-1"><h2>Formulir Pendaftaran Group</h2></div>
                                  <div class="text-14 lh-1 mt-10">Silahkan mengisi formulir pendaftaran berikut ini :</div>
    
                                  <div class="d-flex x-gap-10 y-gap-10 flex-wrap pt-15">
                                    <div>
                                      <div class="d-flex justify-center items-center size-40 rounded-8 bg-light-3">
                                       <i class="fas fa-arrow-down"></i>
                                      </div>
                                    </div>
                                    <div>
                                      <div class="d-flex justify-center items-center size-40 rounded-8 bg-light-3">
                                       <i class="fas fa-arrow-down"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
    
                              <div class="border-top-light pt-30 mt-30">
                                <form action="{{route('fe-pendaftarangroup-submit')}}" method="POST" enctype="multipart/form-data" class="contact-form row y-gap-30">
                                    @csrf
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Nama Koordinator</label>
    
                                    <input type="text" placeholder="Nama Lengkap" name="nama" value="{{old('nama')}}" >
                                  </div>
    
    
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Nomor HP</label>
    
                                    <input type="text" placeholder="628xxxxxxxxxxx" name="no_telp" value="{{old('no_telp')}}">
                                  </div>
    
    
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Alamat Email</label>
    
                                    <input type="text" placeholder="Alamaat Email" name="email" value="{{ old('email')}}">
                                  </div>
    
    
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Jenis Kelamin</label>
    
                                   <select name="jk">
                                        <option>--Pilih Jenis Kelamin--</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                  </div>
    
    
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Nama Instansi</label>
    
                                    <input type="text" placeholder="Nama Dinas" name="nama_instansi" value="{{old('nama_instansi')}}">
                                  </div>
    
    
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Wilayah Instansi</label>
    
                                    <input type="text" placeholder="Jakarta" name="wilayah_instansi" value="{{old('wilayah_instansi')}}">
                                  </div>
    
    
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Materi Bimtek yang Diinginkan</label>
    
                                    <input type="text" placeholder="Tulis Materi Bimtek" name="materi_bimtek" value="{{ old('materi_bimtek')}}">
                                  </div>
    
    
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Kota Pelaksanaan</label>
    
                                    <input type="text" placeholder= "Jakarta" name="kota_pelaksanaan" value="{{old('kota_pelaksanaan')}}">
                                  </div>
    
    
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Tanggal Pelaksanaan</label>
                                    <br>
                                     <input type="text" name="tgl_pelaksanaan" placeholder="Contoh : 2023-02-24" value="{{ old('tgl_pelaksanaan')}}" >
                                  </div>
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Jumlah peserta yang didaftarkan </label>
                                    <br>
                                     <input type="text" placeholder="1" name="jml_peserta" value="{{old('jml_peserta')}}">
                                  </div>
                                  <div class="col-12">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Pilih</label>
    
                                    <select name="paket">
                                        <option>--Pilih Paket Bimtek--</option>
                                        <option >Paket Menginap</option>
                                        <option>Paket Tidak Menginap</option>
                                        <option>Belum Menentukan</option>
                                    </select>
                                  </div>
                                  <div class="col-12">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Upload Data Peserta</label>
                                    <br>
                                    <input type="file" name="berkas_po" class="custom-file-input form-control ">
                                     <p style="font-size: 12px;">Jika sudah ada, silahkan upload poto/file Surat Tugas atau Daftar Nama Peserta Group, dapat berupa file PDF, Word, Excel atau JPG</p>
                                  </div>
    
                                  <div class="col-12">
                                    <button type="submit" class="button -md -purple-1 text-white">Kirim Formulir</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                

            </div>
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