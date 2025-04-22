@extends('Backend.index')
@section('content')
<div class="main-content">
    <div class="title">
        Data Kontak
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Kontak</h4>
                    </div>
                    <div class="card-body">
                           
                        <div class="table-responsive">
                            <table id="example" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No Telp</th>
                                         <th>Tanggal</th>
                                        <th>Aksi</th>
                                  
                                    </tr>
                                </thead>
                               
                                <tbody>
                                     @foreach($dataKontak as $key => $kontak)
                                    <tr> 
                                        <td>{{$key+1}}</td>
                                        <td>{{$kontak->nama}}</td>
                                      <td>{{$kontak->no_telp}}</td>
                                       <td>{{ date('d-M-Y', strtotime($kontak->created_at))}}</td>
                                       <td>
                                         
                                                    <button  type="button"
                                                        class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#Modal{{$kontak->id}}"
                                                        data-bs-original-title="Lihat Data"><i class="ti-eye"></i></button>

                                                    <button id="swall-delete-data{{ $kontak->id }}" type="button"
                                                        class="btn btn-danger mb-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-bs-original-title="Hapus Data"><i
                                                            class="ti-trash"></i></button>
                                                </td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>


       

        @foreach ($dataKontak as $data)
        
         <div class="modal fade" id="Modal{{$data->id}}" tabindex="-1"
                            aria-labelledby="extraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="extraLargeModalLabel">Detail Kontak Pesan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center">
                                        
                                         <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h4>Kontak Pesan</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="basicInput" class="form-label"><b>Nama Pengirim</b></label>
                            <input type="text"  class="form-control" id="basicInput" value="{{$data->nama}}" disabled>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                            <label for="basicInput" class="form-label">Email</label>
                            <input type="text"  class="form-control" id="basicInput" value="{{$data->email}}" disabled >
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                            <label for="basicInput" class="form-label">No Telp</label>
                            <input type="text"  class="form-control" id="basicInput" value="{{$data->no_telp}}" disabled>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                            <label for="basicInput" class="form-label">Perihal</label>
                            <input type="text"  class="form-control" id="basicInput" value="{{$data->perihal}}" disabled>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">PESAN</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>{{$data->pesan}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
            
            
        <script>
            const confirmationDelete{{ $data->id }} = document.getElementById('swall-delete-data{{ $data->id }}')
            confirmationDelete{{ $data->id}}.addEventListener('click', function() {
                Swal.fire({
                    title: 'Delete Pesan {{ $data->nama }} ?',
                    text: "{{ $data->nama }}",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('adminDeleteKontak',$data->id) }}";
                    }
                })
            })
        </script>
    @endforeach
    
</div>


@endsection