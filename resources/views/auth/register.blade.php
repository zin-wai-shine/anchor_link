@extends('layouts.app')

@section('content')
<div class="container-fluid w-100 h-100 register__page">
    <div class="row d-flex  align-items-center justify-content-center h-100 w-100">
        <div class="col-12 d-flex justify-content-center w-100">
            <div class="register__container">
                <form method="POST" action="{{ route('register') }}" class="w-100">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="text-light text-md-end">{{ __('Name') }}</label>
                        <br>

                            <input id="name" form-control-lg bg-primary text-light type="text" class="form-control form-control-lg bg-primary text-light @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>

                    <div class="row mb-3">
                        <label for="email" class="text-light text-md-end">{{ __('Email Address') }}</label>
                        <br>

                            <input id="email" type="email" class="form-control form-control-lg bg-primary text-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>

                    <div class="row mb-3">
                        <label for="password" class="text-light text-md-end">{{ __('Password') }}</label>
                        <br>

                            <input id="password" type="password" class="form-control form-control-lg bg-primary text-light @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        <
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="text-light text-md-end">{{ __('Confirm Password') }}</label>
                        <br>
                        <input id="password-confirm" type="password" class="form-control form-control-lg bg-primary text-light" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="row mb-0 w-100">
                        <div class="w-100 d-flex justify-content-center">
                            <button type="submit" class="btn btn-lg btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
