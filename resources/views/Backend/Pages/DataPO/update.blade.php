@extends('Backend.index')
@section('content')
    <div class="main-content">
        <div class="title">
            Edit Data Booking Customer
        </div>
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Booking Customer</h4>
                </div>
                <form action="{{route('adminEditDataBooking', $dataPO->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                          <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Discount</label>
                                     <input type="number" class="form-control" name="discount" id="basicInput" value="" >
                                </div>
                            </div>
                            </div>
                          <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Description</label>
                                    <textarea id="ckeditor" name="content"></textarea>
                                </div>
                            </div>
                            </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Person</label>
                                    <input type="text" class="form-control" name="person"
                                        id="basicInput" value="{{ $dataPO->person }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Price</label>
                                    <input type="text" class="form-control" name="item"
                                        id="basicInput" value="{{ $dataPO->item }}">
                                </div>
                            </div>
                            </div>
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
                                    <label for="basicInput" class="form-label">Services</label>
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
                            <br/>
                        <div class="text-center">
                            <button type="submit" class="btn mb-2 icon-left btn-success" ><i class="ti-save"></i>Simpan Data</button>
                            <a href="{{route('adminPO')}}" class="btn mb-2 icon-left btn-danger" ><i class="ti-close"></i>Batal</a>
                        </div>
                        </div>
                </form>
        </div>
    </div>
@endsection
