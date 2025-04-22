@extends('Backend.index')
@section('content')
    <div class="main-content">
        <div class="title">
            Form Lihat Pengguna
        </div>
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h4>Data Pengguna</h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="disableInput" class="form-label">Nama Lengkap</label>
                                <input type="text" disabled class="form-control" id="disableInput"
                                    value="{{ $dataPengguna->name }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="disableInput" class="form-label">Email</label>
                                <input type="email" disabled class="form-control" id="disableInput"
                                    value="{{ $dataPengguna->email }}">
                            </div>
                        </div>
                    </div>

                    <br />
                    <div class="text-center">

                        <a href="{{ route('adminPengguna') }}" class="btn mb-2 icon-left btn-primary"><i
                                class="ti-angle-double-left"></i> Kembali</a>
                    </div>

                </div>
            </div>
        </div>



    </div>
@endsection
