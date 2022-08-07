@extends('layouts.app')

@section('content')
    <div class="container-fluid  register__page">
        <div class="row d-flex  align-items-center justify-content-center vh-100 w-100">
            <div class="col-12 d-flex justify-content-center h-100 w-100">
                <div class="register__container px-3">
                    <div class="row h-100 p-3">
                        <div class="col-md-6 register__roundOne">

                        </div>

                        <div class="col-md-6 h-100 p-5 register__roundTwo">
                            <div class="row h-100 d-flex justify-content-center align-items-center">
                                <div class="col-12">
                                    @if (session('resent'))
                                        <div class="alert alert-success" role="alert">
                                            {{ __('A fresh verification link has been sent to your email address.') }}
                                        </div>
                                    @endif

                                    {{ __('Before proceeding, please check your email for a verification link.') }}
                                    {{ __('If you did not receive the email') }},
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
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
