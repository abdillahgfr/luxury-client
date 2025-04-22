<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | Luxury Palace Oman</title>
    <meta name="author" content="Luxury Palace Tourism" />
    <meta name="application-name" content="Luxury Palace Tourism" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('assets/icon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('assets/icon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('assets/icon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/icon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('assets/icon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('assets/icon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('assets/icon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('assets/icon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/icon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ url('assets/icon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('assets/icon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/icon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('assets/icon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ url('assets/icon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ url('Backend/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('Backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('Backend/assets/css/bootstrap-override.css') }}">
</head>

<body>
    <section class="container h-100">
        <div class="row justify-content-sm-center h-100 align-items-center">
            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <h1 class="fs-4 text-center fw-bold mb-4">Login</h1>
                        <h1 class="fs-6 mb-3">Please enter your email and password to log in.</h1>
                        
                        <form method="POST" action="{{ route('login') }}" class="needs-validation">
                            @csrf
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                <div class="input-group input-group-join mb-3">
                                    <input id="email" type="email" placeholder="Masukan Email Anda" class="form-control @error('email') is-invalid @enderror"
                                         name="email" value="{{ old('email') }}" required autofocus>
                                    <span class="input-group-text rounded-end">&nbsp<i
                                            class="fa fa-envelope"></i>&nbsp</span>
                                                @error('email')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                        @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                {{-- <div class="mb-2 w-100">
                                    <label class="text-muted" for="password">Password</label>
                                    <a href="forgot.html" class="float-end">
                                        Forgot Password?
                                    </a>
                                </div> --}}
                                <div class="input-group input-group-join mb-3">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Your password" required>
                                    <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i
                                            class="fa fa-eye"></i>&nbsp</span>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" class="form-check-label">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-primary ms-auto">
                                    Login
                                </button>
                            </div>
                        </form>

                    </div>

                </div>
                <div class="text-center mt-5 text-muted">
                    Copyright &copy; 2023 &mdash; Luxury Palace Oman
                </div>
            </div>
        </div>
    </section>
    <script src="{{ url('Backend/assets/js/login.js') }}"></script>
</body>

</html>
