@extends('layouts.app')

@section('content')
    <div class="container-fluid w-100 h-100 manage__container">
        <div class="row h-100">
            {{-- MANAGE STATUS --}}
            <div class="col-2 bg-primary manage__sidebar manage px-0 py-5" >
                @include('manage.sidebar')
            </div>

            <div class="col-10">
                @yield('manage')
            </div>

        </div>
    </div>
@endsection
