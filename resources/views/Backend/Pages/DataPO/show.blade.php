@extends('Backend.index')
@section('content')
    <div class="main-content">
        <div class="title">
            Data Booking Customer
        </div>
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h4>Data Booking Customer</h4>
                </div>
                    <div class="card-body">
                        <p class="form-text mb-2">Data Booking Customer</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Customer Name</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{ $dataPO->nama }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{ $dataPO->no_telp }}" disabled>
                                </div>
                            </div>
                            </div>
                            
                            <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Email</label>
                                    <input type="text" class="form-control"
                                        id="basicInput" value="{{ $dataPO->email }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Origin</label>
                                    <input type="text" class="form-control"
                                        id="basicInput" value="{{ $dataPO->origin }}" disabled>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Package</label>
                                    <input type="text" class="form-control"
                                        id="basicInput" value="{{ $dataPO->paket }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Date</label>
                                    <input type="text" class="form-control"
                                        id="basicInput" value="{{ $dataPO->tgl_pelaksanaan }}" disabled>
                                </div>
                            </div>
                            </div>
                            
                            <!--<div class="col-md-12">-->
                            <!--    <a href="{{ url('assets/file-berkas',$dataPO->berkas_po ) }}" class="btn mb-2 icon-left btn-success"><i class="ti-file"></i>Download Berkas</a>-->
                            <!--</div>-->
                            <div class="col-md-12">
                              <br/>
                                <div class="text-center">
                                    <a href="{{ route('adminPO') }}" class="btn mb-2 icon-left btn-danger"><i class="ti-back"></i>Kembali</a>
                                </div>
                            </div>
            </div>
        </div>
    </div>
@endsection
