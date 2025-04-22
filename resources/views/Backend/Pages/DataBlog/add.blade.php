@extends('Backend.index')
@section('content')
    <div class="main-content">
        <div class="title">
            Tambah Blog
        </div>
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h4>Data Blog</h4>
                </div>
                <form method="post" action="{{ route('adminAddDataBlog') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                  <input type="hidden" name="author" value="{{Auth::user()->name}}">
                                    <div class="form-group">
                                        <label>Judul Blog</label>
                                        <input type="text" class="form-control  @error('judul') is-invalid @enderror"
                                            id="basicInput" placeholder="Judul Blog" name="judul"
                                            value="{{ old('judul') }}">
                                        @error('judul')
                                            <div class="alert alert-danger" role="alert" id="flashPesan">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="mb-3">
                                     <label>Image Blog</label>
                                        <input type="file" class="form-control  @error('image') is-invalid @enderror" id="basicInput"
                                            name="image" value="{{ old('image') }}">
                                        @error('image')
                                            <div class="alert alert-danger" role="alert" id="flashPesan">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                        
                            <div class="col-md-12">
                                <div class="mb-3">
                                     <label for="exampleFormControlTextarea1">Ringkasan Blog</label>
                                            <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" id="exampleFormControlTextarea1" rows="3">{{old('desc')}}</textarea>
                                        </div>
                                        @error('desc')
                                            <div class="alert alert-danger" role="alert" id="flashPesan">{{ $message }}</div>
                                        @enderror
                                </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1">Isi Konten Blog</label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content_blog" rows="3">{{ old('content') }}</textarea>
                                    @error('content')
                                        <div class="alert alert-danger" role="alert" id="flashPesan">{{ $message }}</div>
                                    @enderror

                                </div>

                                <br />
                                <div class="text-center">
                                    <button type="submit" class="btn mb-2 icon-left btn-success"><i
                                            class="ti-save"></i>Simpan
                                        Data</button>
                                    <a href="{{ route('be-blog') }}" class="btn mb-2 icon-left btn-danger"><i
                                            class="ti-close"></i>Batal</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </form
        </div>
    </div>

@endsection
