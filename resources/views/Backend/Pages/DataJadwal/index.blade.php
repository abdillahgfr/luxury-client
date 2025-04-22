@extends('Backend.index')
@section('content')
<div class="main-content">
    <div class="title">
        Data Jadwal
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Jadwal</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('adminAddJadwal') }}" class="btn btn-primary mb-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="" data-bs-original-title="Tambah Data"><i
                                    class="ti-plus"></i> Tambah Data</a>
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
                                        <th>Judul Jadwal</th>
                                    <th>Judul Jadwal</th>
                                        <th>Aksi</th>
                                  
                                    </tr>
                                </thead>
                               
                                <tbody>
                                     @foreach($dataJadwal as $key => $jadwal)
                                    <tr> 
                                        <td>{{$key+1}}</td>
                                        <td>{{$jadwal->judul}}</td>
                                       <td>{{$jadwal->foto}}</td>
                                       <td>
                                                    <button id="swall-show-data{{ $jadwal->id }}" type="button"
                                                        class="btn btn-primary mb-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-bs-original-title="Lihat Data"><i class="ti-eye"></i></button>

                                                    <button id="swall-update-data{{ $jadwal->id }}" type="button"
                                                        class="btn btn-warning mb-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-bs-original-title="Edit Data"><i
                                                            class="ti-pencil"></i></button>
                                                    <button id="swall-delete-data{{ $jadwal->id }}" type="button"
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
@foreach ($dataJadwal as $data)
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
                            window.location.href = "{{ route('adminShowJadwal', $data->id) }}";
                        }
                    })
                })
            </script>
        @endforeach

        @foreach ($dataJadwal as $data)
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
                            window.location.href = "{{ route('adminEditJadwal',$data->id) }}";
                        }
                    })
                })
            </script>
        @endforeach

        @foreach ($dataJadwal as $data)
        <script>
            const confirmationDelete{{ $data->id }} = document.getElementById('swall-delete-data{{ $data->id }}')
            confirmationDelete{{ $data->id}}.addEventListener('click', function() {
                Swal.fire({
                    title: 'Delete Jadwal {{ $data->judul }} ?',
                    text: "{{ $data->name }}",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('adminDeleteJadwal',$data->id) }}";
                    }
                })
            })
        </script>
    @endforeach
</div>


@endsection