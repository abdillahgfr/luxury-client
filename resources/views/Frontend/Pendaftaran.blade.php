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


                <div class="row y-gap-30">
                    <div class="col">
                      <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100" style="box-shadow: 10px 10px 0px 0px rgb(0 0 0 / 50%);">
                        <div class="tabs -active-purple-2 js-tabs pt-0">
    
                          <div class="tabs__content py-30 px-30 js-tabs-content">
                            <div>
                              <div class="row y-gap-20 x-gap-20 items-center">
    
                                <div class="col-auto">
                                  <div class="text-16 fw-500 text-dark-1"><h2>Formulir Pendaftaran Online</h2></div>
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
                                <form action="{{route('fe-pendaftarangroup-submit')}}" method="POST" class="contact-form row y-gap-30" enctype="multipart/form-data">
                                    @csrf
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Nama Koordinator</label>
    
                                    <input type="text" placeholder="Nama Lengkap (gelar)" name="nama" value="{{old('nama')}}">
                                  </div>
    
    
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Nomor HP</label>
    
                                    <input type="text" placeholder="Contoh: 081288727823" name="no_telp" value="{{old('no_telp')}}">
                                  </div>
    
    
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Alamat Email</label>
    
                                    <input type="text" placeholder="Alamat email jika ada" name="email" value="{{old('email')}}">
                                  </div>
    
    
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Jenis Kelamin</label>
    
                                    <select name="jk">
                                        <option>--Pilih Jenis Kelamin--</option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                  </div>
    
    
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Nama Instansi</label>
    
                                    <input type="text" placeholder="Contoh: Dinas Pekerjaan Umum" name="nama_instansi" value="{{ old('nama_instansi')}}">
                                  </div>
    
    
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Wilayah Instansi</label>
    
                                    <input type="text" placeholder="Prov./Kab./Kota" name="wilayah_instansi" value="{{ old('wilayah_instansi')}}">
                                  </div>
    
    
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Materi yang dikehendaki</label>
    
                                    <input type="text" placeholder="Contoh: Bimtek Transaksi Non Tunai" name="materi_bimtek" value="{{old('materi_bimtek')}}">
                                  </div>
    
    
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Kota Pelaksanaan</label>
    
                                    <input type="text" placeholder="Contoh: Jakarta" name="kota_pelaksanaan" value="{{ old('kota_pelaksanaan')}}">
                                  </div>
    
    
                                   <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Tanggal Pelaksanaan</label>
                                    <br>
                                     <input type="text" name="tgl_pelaksanaan" placeholder="Contoh : 2023-02-24" value="{{ old('tgl_pelaksanaan')}}" >
                                  </div>
                                  <div class="col-md-6">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Jumlah peserta yang didaftarkan </label>
    
                                     <input type="text" placeholder="Contoh: 7 Peserta" name="jml_peserta" value="{{old('jml_peserta')}}">
                                  </div>
                                  <div class="col-12">
    
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Pilih</label>
    
                                    <select name="paket">
                                        <option>--Pilih Paket Bimtek--</option>
                                        <option>Paket Inap</option>
                                        <option>Paket Tidak Inap</option>
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
                                    <button type="submit" class="button -md -purple-1 text-white">Kirim</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100" style="box-shadow: 10px 10px 0px 0px rgb(0 0 0 / 50%); background-color: #e3d69f;">
                        <div class="tabs -active-purple-2 js-tabs pt-0">
    
                          <div class="tabs__content py-30 px-30 js-tabs-content">
                            <div>
                              <div class="row y-gap-20 x-gap-20 items-center">
    
                                <div class="col-auto">
                                  <div class="text-16 fw-500 text-dark-1"><h1>Persyaratan Peserta</h1></div>
                                  <div class="text-14 lh-1 mt-10" style="text-align: justify;">Konfirmasi dengan menghubungi panitia melalui telp atau WA atau mengisi formulir daftar online yang tersedia Surat undangan resmi/proposal penawaran akan kami kirimkan melalui email atau WA. Mengirimkan Nama (Gelar), Jabatan dan Instansi (dapat berupa foto Surat Tugas atau daftar nama peserta atau mengisi formulir pendaftaran yang dapat didownload di sini), melalui WA atau Email. Konfirmasi selambat-lambatnya 5 hari sebelum pelaksanaan</div>
                                </div>
                                
                                 <div class="col-auto">
                                    <hr>
                                  <div class="text-16 fw-500 text-dark-1"><h2>Informasi Pendaftaran</h2></div>
                                  <div class="text-14 lh-1 mt-10" style="text-align: justify;">Jika Anda memiliki pertanyaan perihal pendaftaran bimtek, Anda bisa menghubungi contact person kami dengan cara klik tombol dibawah ini. ada bisa menghubungi melalui telephone ataupun whatsapp</div>
                                </div>
                                <div class="col-auto">
                                    <hr>
                                  <div class="text-16"><h3>Alamat dan Kontak PELNASINDO</h3></div>
                                  <div class="text-14 lh-1 mt-10" style="text-align: justify;"><i class="far fa-building"></i> Pelatihan Nasional Indonesia (PELNASINDO)</div>
                                  <div class="text-14 lh-1 mt-10" style="text-align: justify;"><i class="fas fa-map-marker-alt"></i>Jln. Manunggal 7 no.1 RT.03 RW.04 Kel. Kalibaru, Kec. Cilincing Jakarta Utara 14110</div>
                                  <div class="text-14 lh-1 mt-10" style="text-align: justify;"><i class="fas fa-phone"></i> 0812 9684 1207 / 0813 9852 2593</div>
                                  <div class="text-14 lh-1 mt-10" style="text-align: justify;"><i class="fas fa-envelope"></i> pelatihannasionalindonesia@gmail.com</div>
                                  <div class="text-14 lh-1 mt-10" style="text-align: justify;"><i class="fab fa-chrome"></i> bimtekpelatihannasional.com</div>
                                </div>
                                <div class="col-auto">
                                    <hr>
                                  <img style="background-color: #b5a674; border-radius: 15px;" src="/Frontend/img/general/header.png">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
    </main>
  </div>
  <!-- barba container end -->

</body>

@endsection