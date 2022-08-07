@extends('layouts.app')

@section('content')
<div class="container-fluid  register__page rl__page">
    <div class="row d-flex  align-items-center justify-content-center vh-100 w-100">
        <div class="col-12 d-flex justify-content-center h-100 w-100">
            <div class="register__container rl__container px-3">
                <div class="row h-100 p-1 p-lg-3">
                    <div class="col-12 col-lg-6 register__roundOne">

                    </div>

                    <div class=" col-12 col-lg-6 h-100 p-3 p-lg-5 register__roundTwo">

                        <div class="w-100 text-center">
                            <h2 class="text-success fw-bold">Register 🚀</h2>
                        </div>

                        <div class="row h-100 d-flex justify-content-center align-items-center">
                            <div class="col-12">
                                <form method="POST" action="{{ route('register') }}" class="">
                                    @csrf
                                    <div class= " mb-3">
                                        <label for="name" class="register__text mb-2 text-md-end"><i class="fa fa-lock mx-2"></i> {{ __('Name') }} </label>
                                        <br>

                                        <input id="name" form-control-lg bg-primary bg-opacity-10 text-light type="text" class="form-control register__input form-control-lg bg-primary bg-opacity-10 text-light @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="register__text mb-2 text-md-end"><i class="fa fa-lock mx-2"></i> {{ __('Email Address') }} </label>
                                        <br>

                                        <input id="email" type="email" class="form-control register__input form-control-lg bg-primary bg-opacity-10 text-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="register__text mb-2 text-md-end"> <i class="fa fa-lock mx-2"></i> {{ __('Password') }}</label>
                                        <br>

                                        <input id="password" type="password" class="form-control register__input form-control-lg bg-primary bg-opacity-10 text-light @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>

                                    <div class="mb-3">
                                        <label for="password-confirm" class="register__text mb-2 text-md-end"><i class="fa fa-lock mx-2"></i> {{ __('Confirm Password') }} </label>
                                        <br>
                                        <input id="password-confirm" type="password" class="form-control register__input form-control-lg bg-primary bg-opacity-10 text-light" name="password_confirmation" required autocomplete="new-password">
                                    </div>

                                    <div class="mb-0 w-100">
                                        <div class="w-100 mt-5">
                                            <button type="submit" class="btn btn-lg btn-outline-success fw-bold">
                                                {{ __('Register') }} <i class="fa fa-anchor-lock mx-2"></i>
                                            </button>
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
