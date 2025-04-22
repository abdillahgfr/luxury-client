@extends('Backend.index')
@section('content')
    <div class="main-content">
        <div class="title">
            Form Add User
        </div>
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h4>Data User</h4>
                </div>
                <form action="{{route('adminAddDataPengguna')}}" method="POST">
                    @csrf
                <div class="card-body">
                    <p class="form-text mb-2">This Data Can Login in System Admin of Luxury Palace Oman Website</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="basicInput" placeholder="Input Name" name="name" value="{{old('name')}}">
                                    @error('name')
                                    <div class="alert alert-danger" role="alert" id="flashPesan">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Email</label>
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror"  id="basicInput" placeholder="Input Email" name="email" value="{{old('email')}}">
                                    @error('email')
                                    <div class="alert alert-danger" role="alert" id="flashPesan">{{ $message }}</div>
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
                                        placeholder="Input Password" required>

                                        <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i
                                                class="fa fa-eye"></i>&nbsp</span>


                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger" role="alert" id="flashPesan">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="basicInput" class="form-label">Confirm Password</label>
                                    <div class="input-group input-group-join ">
                                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation"
                                        placeholder="Confirm Password" required>

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
                            <button type="submit" class="btn mb-2 icon-left btn-success" ><i class="ti-save"></i>Save Data</button>
                            <a href="{{route('adminPengguna')}}" class="btn mb-2 icon-left btn-danger" ><i class="ti-close"></i>Cancel</a>
                        </div>

                </div>
                </form>
            </div>
        </div>



    </div>
@endsection
