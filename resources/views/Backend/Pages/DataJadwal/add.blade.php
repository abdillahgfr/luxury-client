@extends('Backend.index')
@section('content')
    <div class="main-content">
        <div class="title">
            Form Tambah Jadwal
        </div>
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h4>Data Jadwal</h4>
                </div>
                <form action="{{ route('adminAddDataJadwal') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <p class="form-text mb-2">Data Jadwal</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Judul Jadwal</label>
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                        id="basicInput" placeholder="Masukan Judul Jadwal" name="judul"
                                        value="{{ old('judul') }}">
                                    @error('judul')
                                        <div class="alert alert-danger" role="alert" id="flashmessage">{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        
                        


                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Foto Jadwal</label>
                                    <input type="file" class="form-control  @error('foto') is-invalid @enderror"  id="basicInput"  name="foto" value="{{old('foto')}}">
                                    @error('foto')
                                    <div class="alert alert-danger" role="alert" id="flashPesan">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                   

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Konten Jadwal</label>


                                    <textarea id="ckeditor" name="content">{{old('content')}}</textarea>
                                    @error('content')
                                    <div class="alert alert-danger" role="alert" id="flashmessage">{{ $message }}
                                    </div>
                                @enderror

                                </div>

                                <br />
                                <div class="text-center">
                                    <button type="submit" class="btn mb-2 icon-left btn-success"><i
                                            class="ti-save"></i>Simpan
                                        Data</button>
                                    <a href="{{ route('adminPengguna') }}" class="btn mb-2 icon-left btn-danger"><i
                                            class="ti-close"></i>Batal</a>
                                </div>

                            </div>
                </form>
            </div>
        </div>
    </div>

@endsection
