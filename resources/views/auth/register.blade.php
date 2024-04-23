<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap JavaScript (Popper.js and jQuery also required) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.14.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<style>
    .bg-image-vertical {
        position: relative;
        overflow: hidden;
        background-repeat: no-repeat;
        background-position: right center;
        background-size: auto 100%;
    }

    @media (min-width: 1025px) {
        .h-custom-2 {
            height: 100%;
        }
    }
</style>

<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="{{ asset('images/register.png')}}"
                     alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5 text-black mt-5">
                <div class="d-flex align-items-center h-custom-2 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                    <form method="POST" style="width: 23rem;" action="{{ route('register') }}">
                        @csrf
                        <h3 style="font-size: 18px;" class="fw-normal  mt-5" style="letter-spacing: 1px;">
                            Sign Up to April’Studio
                        </h3>
                        <!-- Name Input -->
                        <div class="form-outline mb-2 mt-4">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <div>
                                <input style="font-size: 14px;" id="name" type="text"
                                       class="form-control form-control-lg form-control-sm @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Email Input -->
                        <div class="form-outline mb-2">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <div>
                                <input style="font-size: 14px;" id="email" type="email"
                                       class="form-control form-control-lg form-control-sm @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Number Phone Input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="telp">{{ __('Number Phone') }}</label>
                            <div>
                                <input style="font-size: 14px;" id="telp" type="text"
                                       class="form-control form-control-lg form-control-sm @error('telp') is-invalid @enderror"
                                       name="telp" value="{{ old('telp') }}" required autocomplete="telp">
                                @error('telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Password Input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="password">{{ __('Password') }}</label>
                            <div class="input-group">
                                <input style="font-size: 14px;" id="password" type="password"
                                       class="form-control form-control-lg form-control-sm @error('password') is-invalid @enderror"
                                       name="password" required autocomplete="new-password">
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!-- Confirm Password Input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                            <div class="input-group">
                                <input style="font-size: 14px;" id="password-confirm" type="password"
                                       class="form-control form-control-lg form-control-sm" name="password_confirmation"
                                       required autocomplete="new-password">
                            </div>
                        </div>
                        <!-- Register Button -->
                        <div class="pt-1 mt-4">
                            <button class="btn btn-info btn-lg btn-block" type="submit"
                                    style="font-size: 16px;">{{ __('Register') }}</button>
                        </div>
                        <!-- Login Link -->
                        <p class="pt-1">Do you have an account? <a href="{{ route('login') }}"
                                                                   class="link-info">Login Now</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
