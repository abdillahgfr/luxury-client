@extends('Backend.index')
@section('content')
    <div class="main-content">
        <div class="title">
            Form Tambah Materi
        </div>
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h4>Data Materi</h4>
                </div>
            
                  
                    <div class="card-body">
                        <p class="form-text mb-2">Data Materi</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Judul Materi</label>
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                        id="basicInput" placeholder="Masukan Judul Materi" name="judul"
                                        value="{{ $dataMateri->judul }}" disabled>
                                    @error('judul')
                                        <div class="alert alert-danger" role="alert" id="flashmessage">{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="col-md-4">
                                        <div class="card mb-3">
                                            <img src="{{ url('assets/images/materi/', $dataMateri->foto) }}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <p class="card-text">Foto Materi Saat ini</p>

                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Konten Materi</label>
                                    <textarea id="ckeditor" name="content">{{ $dataMateri->content }}</textarea>
                                    @error('content')
                                        <div class="alert alert-danger" role="alert" id="flashmessage">{{ $message }}
                                        </div>
                                    @enderror

                                </div>
                                <br />
                                <div class="text-center">
                                    
                                    <a href="{{ route('adminMateri') }}" class="btn mb-2 icon-left btn-danger"><i
                                            class="ti-back"></i>Kembali</a>
                                </div>
                            </div>
               
            </div>
        </div>
    </div>
@endsection
