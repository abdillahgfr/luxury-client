@extends('Backend.index')
@section('content')
    <div class="main-content">
        <div class="title">
            Dashboard
        </div>


        <div class="content-wrapper">
            <div class="row same-height">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{$dataPO}}</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Data Booking</h5>
                            <p class="card-text"></p>
                            <a href="{{route('adminPO')}}" class="btn btn-primary">See Data</a>
                        </div>
                    </div>
                </div>
                
                    <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{$dataPengguna}}</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Data User</h5>
                            <p class="card-text"></p>
                            <a href="{{route('adminPengguna')}}" class="btn btn-primary">See Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
