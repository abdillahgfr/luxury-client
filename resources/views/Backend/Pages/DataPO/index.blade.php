@extends('Backend.index')
@section('content')
<div class="main-content">
    <div class="title">
        Data Booking Online
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Booking Online</h4>
                    </div>
                    <div class="card-body">
                   
                        <p class="form-text mb-2">Data Booking</p>
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
                                        <th>Customer Name</th>
                                        <th>Booking Date</th>
                                        <th>Phone Number</th>
                                        <th>Action</th>
                                  
                                    </tr>
                                </thead>
                               
                                <tbody>
                                     @foreach($dataPO as $key => $po)
                                    <tr> 
                                        <td>{{$key+1}}</td>
                                        <td>{{$po->nama}}</td>
                                         <td>{{date('d F-Y', strtotime($po->created_at))}}</td>
                                         <td>{{$po->no_telp}}</td>
                                       <td>
                                                    
                                                    <button id="swall-update-data{{ $po->id }}" type="button"
                                                        class="btn btn-warning mb-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-bs-original-title="Edit Data">Edit Data<i
                                                            class="ti-pencil"></i></button>
                                                <button id="swall-print-data{{ $po->id }}" type="button"
                                                        class="btn btn-success mb-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-bs-original-title="Edit Data">Print Data<i
                                                            class="ti-file"></i></button>
                                                    <!--<button id="swall-delete-data{{ $po->id }}" type="button"-->
                                                    <!--    class="btn btn-danger mb-2" data-bs-toggle="tooltip"-->
                                                    <!--    data-bs-placement="top" title=""-->
                                                    <!--    data-bs-original-title="Hapus Data">Hapus Data <i-->
                                                    <!--        class="ti-trash"></i></button>-->
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
@foreach ($dataPO as $data)
            <script>
                const confirmationShow{{ $data->id }} = document.getElementById('swall-show-data{{ $data->id }}')
                confirmationShow{{ $data->id }}.addEventListener('click', function() {
                    Swal.fire({
                        title: 'Lihat Data {{ $data->nama }} ?',
                        text: "{{ $data->nama }}",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('adminShowPO', Crypt::encryptString($data->id)) }}";
                        }
                    })
                })
            </script>
        @endforeach
        
        @foreach ($dataPO as $data)
            <script>
                const confirmationPrint{{ $data->id }} = document.getElementById('swall-print-data{{ $data->id }}')
                confirmationPrint{{ $data->id }}.addEventListener('click', function() {
                    Swal.fire({
                        title: 'Print Data {{ $data->nama }} ?',
                        text: "{{ $data->nama }}",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('report-print', $data->id) }}";
                        }
                    })
                })
            </script>
        @endforeach
        
        @foreach ($dataPO as $data)
            <script>
                const confirmationUpdate{{ $data->id }} = document.getElementById('swall-update-data{{ $data->id }}')
                confirmationUpdate{{ $data->id }}.addEventListener('click', function() {
                    Swal.fire({
                        title: 'Update Data {{ $data->nama }} ?',
                        text: "{{ $data->nama }}",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('adminEditBooking', $data->id) }}";
                        }
                    })
                })
            </script>
        @endforeach


        @foreach ($dataPO as $data)
        <script>
            const confirmationDelete{{ $data->id }} = document.getElementById('swall-delete-data{{ $data->id }}')
            confirmationDelete{{ $data->id}}.addEventListener('click', function() {
                Swal.fire({
                    title: 'Delete Data Pendaftaran {{ $data->nama }} ?',
                    text: "{{ $data->nama }}",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('adminDeletePO',Crypt::encryptString($data->id)) }}";
                    }
                })
            })
        </script>
    @endforeach
</div>


@endsection