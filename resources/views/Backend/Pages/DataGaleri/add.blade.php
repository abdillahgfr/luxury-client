@extends('Backend.index')
@section('content')
    <div class="main-content">
        <div class="title">
            Form Add Gallery
        </div>
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h4>Data Gallery</h4>
                </div>
               <form action="{{ route('adminAddDataGaleri') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Caption Photo</label>
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                        id="basicInput" placeholder="Input Caption Photo" name="judul"
                                        value="{{ old('judul') }}">
                                    @error('judul')
                                        <div class="alert alert-danger" role="alert" id="flashmessage">{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        
                        


                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Upload Photo Gallery</label>
                                    <input type="file" class="form-control  @error('foto') is-invalid @enderror"  id="basicInput"  name="foto" value="{{old('foto')}}">
                                    @error('foto')
                                    <div class="alert alert-danger" role="alert" id="flashPesan">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                   

                            <div class="col-md-12">
                              

                                <br />
                                <div class="text-center">
                                    <button type="submit" class="btn mb-2 icon-left btn-success"><i
                                            class="ti-save"></i>Save Data</button>
                                    <a href="{{ route('adminGaleri') }}" class="btn mb-2 icon-left btn-danger"><i
                                            class="ti-close"></i>Cancel</a>
                                </div>

                            </div>
                </form>
               
            </div>
        </div>
    </div>
</div>
</div>
@endsection
