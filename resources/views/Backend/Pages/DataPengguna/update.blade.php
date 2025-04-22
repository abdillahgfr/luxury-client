@extends('Backend.index')
@section('content')
    <div class="main-content">
        <div class="title">
            Form Tambah Pengguna
        </div>
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h4>Data Pengguna</h4>
                </div>
                <form action="{{route('adminEditDataPengguna',$dataPengguna->id)}}" method="POST">
                    @csrf
                <div class="card-body">
                    <p class="form-text mb-2">Data pengguna ini adalah data pengguna yang bisa login ke sistem Raj
                        Education</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="basicInput" placeholder="Masukan Nama Lengkap" name="name" value="{{$dataPengguna->name}}">
                                    @error('name')
                                    <div class="alert alert-danger" role="alert" id="flashmessage">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Email</label>
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror"  id="basicInput" placeholder="Masukan Email" name="email" value="{{$dataPengguna->email}}">
                                    @error('email')
                                    <div class="alert alert-danger" role="alert" id="flashmessage">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Password</label>
                                    <div class="input-group input-group-join ">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password"
                                        placeholder="Masukan Password" >

                                        <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i
                                                class="fa fa-eye"></i>&nbsp</span>


                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger" role="alert" id="flashmessage">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Konfirmasi Password</label>
                                    <div class="input-group input-group-join ">
                                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation"
                                        placeholder="Konfirmasi Password" >

                                        <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i
                                                class="fa fa-eye"></i>&nbsp</span>


                                    </div>
                                    @error('password_confirmation')
                                    <div class="alert alert-danger" role="alert" id="flashmessage">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="text-center">
                            <button type="submit" class="btn mb-2 icon-left btn-success" ><i class="ti-save"></i>Simpan Data</button>
                            <a href="{{route('adminPengguna')}}" class="btn mb-2 icon-left btn-danger" ><i class="ti-close"></i>Batal</a>
                        </div>

                </div>
                </form>
            </div>
        </div>



    </div>
@endsection
