@extends('Backend.index')
@section('content')
<div class="main-content">
    <div class="title">
        Data Materi
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Materi</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('adminAddMateri') }}" class="btn btn-primary mb-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="" data-bs-original-title="Tambah Data"><i
                                    class="ti-plus"></i> Tambah Data</a>
                        <p class="form-text mb-2">Data Materi Bimtek</p>
                            @if (session('pesan'))
                                <div id="flashPesan" class="alert alert-success" role="alert">
                                    {{ session('pesan') }}
                                </div>
                            @endif
                        <div class="table-responsive">
                            <table id="example" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Materi</th>
                                   
                                        <th>Aksi</th>
                                  
                                    </tr>
                                </thead>
                               
                                <tbody>
                                     @foreach($dataMateri as $key => $materi)
                                    <tr> 
                                        <td>{{$key+1}}</td>
                                        <td>{{$materi->judul}}</td>
                                     
                                       <td>
                                                    <button id="swall-show-data{{ $materi->id }}" type="button"
                                                        class="btn btn-primary mb-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-bs-original-title="Lihat Data"><i class="ti-eye"></i></button>

                                                    <button id="swall-update-data{{ $materi->id }}" type="button"
                                                        class="btn btn-warning mb-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-bs-original-title="Edit Data"><i
                                                            class="ti-pencil"></i></button>
                                                    <button id="swall-delete-data{{ $materi->id }}" type="button"
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
@foreach ($dataMateri as $data)
            <script>
                const confirmationShow{{ $data->id }} = document.getElementById('swall-show-data{{ $data->id }}')
                confirmationShow{{ $data->id }}.addEventListener('click', function() {
                    Swal.fire({
                        title: 'Lihat Data {{ $data->judul }} ?',
                        text: "{{ $data->name }}",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('adminShowMateri', $data->id) }}";
                        }
                    })
                })
            </script>
        @endforeach

        @foreach ($dataMateri as $data)
            <script>
                const confirmationUpdate{{ $data->id }} = document.getElementById('swall-update-data{{ $data->id }}')
                confirmationUpdate{{ $data->id }}.addEventListener('click', function() {
                    Swal.fire({
                        title: 'Update Data {{ $data->judul }} ?',
                        text: "{{ $data->name }}",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('adminEditMateri',$data->id) }}";
                        }
                    })
                })
            </script>
        @endforeach

        @foreach ($dataMateri as $data)
        <script>
            const confirmationDelete{{ $data->id }} = document.getElementById('swall-delete-data{{ $data->id }}')
            confirmationDelete{{ $data->id}}.addEventListener('click', function() {
                Swal.fire({
                    title: 'Delete Materi {{ $data->judul }} ?',
                    text: "{{ $data->name }}",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('adminDeleteMateri',$data->id) }}";
                    }
                })
            })
        </script>
    @endforeach
</div>


@endsection