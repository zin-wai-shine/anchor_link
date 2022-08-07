@extends('layouts.app')

@section('content')
    <div class="container-fluid  login__page rl__page">
        <div class="row d-flex  align-items-center justify-content-center vh-100 w-100">
            <div class="col-12 d-flex justify-content-center h-100 w-100">
                <div class="login__container rl__container px-3">
                    <div class="row h-100 p-3">
                        <div class="col-12 col-lg-6 register__roundOne">

                        </div>

                        <div class=" col-12 col-lg-6 h-100 p-2 p-lg-3 register__roundTwo">

                            <div class="w-100 text-center mt-5">
                                <h2 class="text-success fw-bold mb-0">Login 🚀</h2>
                            </div>

                            <div class="row h-100 d-flex justify-content-center align-items-center">
                                <div class="col-12">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="email" class="register__text col-form-label text-md-end"><i class="fa fa-lock mx-2"></i> {{ __('Email Address') }}</label>

                                            <div class="">
                                                <input id="email"
                                                       type="email"
                                                       class="bg-primary bg-opacity-10 register__input text-light form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="register__text col-form-label text-md-end"><i class="fa fa-lock mx-2"></i> {{ __('Password') }}</label>

                                            <div class="">
                                                <input id="password"
                                                       type="password"
                                                       class="bg-primary bg-opacity-10 register__input text-light form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="">
                                                <div class="">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label text-success" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0">
                                            <div class="mt-5">
                                                <button type="submit" class="btn btn-lg btn-outline-success">
                                                    {{ __('Login') }} <i class="fa fa-anchor-lock mx-2"></i>
                                                </button>

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link text-light" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
