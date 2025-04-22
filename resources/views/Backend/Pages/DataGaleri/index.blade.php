@extends('Backend.index')
@section('content')
<div class="main-content">
    <div class="title">
        Data Gallery
    </div>
    <div class="col-md-3">
      <a href="{{ route('adminAddGaleri') }}" class="btn btn-primary mb-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="" data-bs-original-title="Tambah Data"><i
                                    class="ti-plus"></i> Add Data</a>

                            </div>
                              <hr>
                               @if (session('pesan'))
                                <div id="flashPesan" class="alert alert-success" role="alert">
                                    {{ session('pesan') }}
                                </div>
                            @endif
     <div class="content-wrapper">
        <div class="row same-height">
            
      
            @foreach($dataGaleri as $galeri)
            <div class="col-md-3">
                  <div class="card mb-3">
                    <img src="{{ url('assets/images/galeri',$galeri->foto)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">{{$galeri->judul}}.</p>
                       
                         <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal{{$galeri->id}}">Show</button>
                          <button id="swall-delete-data{{ $galeri->id }}" type="button"
                                                        class="btn btn-danger" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-bs-original-title="Hapus Data">Delete</button>
                    </div>
                </div>
            </div>
            
           <div class="modal fade" id="Modal{{$galeri->id}}" tabindex="-1"
                            aria-labelledby="extraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="extraLargeModalLabel">{{$galeri->judul}}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center">
                                        <img class="img-fluid" src="{{url('assets/images/galeri/',$galeri->foto)}}" >
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
            
            @endforeach
            
            
            {{$dataGaleri }}
        </div>
    </div>
</div>


  @foreach ($dataGaleri as $data)
        <script>
            const confirmationDelete{{ $data->id }} = document.getElementById('swall-delete-data{{ $data->id }}')
            confirmationDelete{{ $data->id}}.addEventListener('click', function() {
                Swal.fire({
                    title: 'Delete Jadwal {{ $data->judul }} ?',
                    text: "{{ $data->judul}}",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('adminDeleteGaleri',$data->id) }}";
                    }
                })
            })
        </script>
    @endforeach

@endsection