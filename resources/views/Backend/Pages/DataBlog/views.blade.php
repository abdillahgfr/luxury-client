@extends('Backend.index')
@section('content')
<div class="main-content">
    <div class="title">
        Data Blog
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Blog</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('be-blog-add') }}" class="btn btn-primary mb-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="" data-bs-original-title="Tambah Data"><i
                                    class="ti-plus"></i> Tambah Artikel</a>
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
                                        <th>Judul Artikel</th>
                                        <th>Deskripsi Artikel</th>
                                        <th>Images</th>
                                        <th>Aksi</th>
                                  
                                    </tr>
                                </thead>
                               
                                <tbody>
                                     @foreach($dataBlog as $key => $blog)
                                    <tr> 
                                            <td>{{$key+1}}</td>
                                            <td>{{$blog->judul}}</td>
                                            <td>{{$blog->desc}}</td>
                                            <td>{{$blog->image}}</td>
                                            <td>
                                                    <!--<button id="swall-show-data{{ $blog->id }}" type="button"-->
                                                    <!--    class="btn btn-primary mb-2" data-bs-toggle="tooltip"-->
                                                    <!--    data-bs-placement="top" title=""-->
                                                    <!--    data-bs-original-title="Lihat Data"><i class="ti-eye"></i></button>-->

                                                    <button id="swall-update-data{{ $blog->id }}" type="button"
                                                        class="btn btn-warning mb-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-bs-original-title="Edit Data"><i
                                                            class="ti-pencil"></i></button>
                                                    <button id="swall-delete-data{{ $blog->id }}" type="button"
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
    
    @foreach ($dataBlog as $data)
            <script>
                const confirmationEdit{{ $data->id }} = document.getElementById('swall-update-data{{ $data->id }}')
                confirmationEdit{{ $data->id}}.addEventListener('click', function() {
                    Swal.fire({
                        title: 'Edit Blog {{ $data->judul }} ?',
                        text: "{{ $data->name }}",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('be-blog-edit',$data->id) }}";
                        }
                    })
                })
            </script>
        @endforeach

        @foreach ($dataBlog as $data)
            <script>
                const confirmationDelete{{ $data->id }} = document.getElementById('swall-delete-data{{ $data->id }}')
                confirmationDelete{{ $data->id}}.addEventListener('click', function() {
                    Swal.fire({
                        title: 'Delete Blog {{ $data->judul_blog }} ?',
                        text: "{{ $data->name }}",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('be-blog-delete',$data->id) }}";
                        }
                    })
                })
            </script>
        @endforeach
</div>
@endsection