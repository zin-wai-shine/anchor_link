@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center h-100">

        {{-- CURRENT PAGE STATUS --}}
        <div class="current__page bg-primary px-3 d-flex align-items-center h6 mb-2">
            <a href="{{ route('home') }}" class="text-light text-decoration-none">Home <i class="fa fa-home"></i></a>
            <div class="mx-3 text-light">/</div>
            <a href="{{ route('web.index') }}" class="text-light text-decoration-none">Item List <i class="fa fa-plus"></i></a>
            <div class="mx-3 text-light">/</div>
            <div  class="text-secondary text-decoration-none">Show Item ( {{ $web->id }} ) <i class="fa fa-book-open-reader"></i></div>
        </div>

        {{-- CREATE STATUS --}}
        <div class="list__status bg-primary p-3 position-relative d-flex justify-content-center align-items-center position-relative">

            <a href="{{ route('web.index') }}" class="back__page d-flex justify-content-center align-items-center fw-bold text-decoration-none">
                <i class="fa fa-angles-left text-light"></i><i class="fa fa-angles-left text-light"></i>
            </a>

            <div class="w-50 text-center">
                <h3 class="text-light">{{$web->type->title}}</h3>

                <h4 class=" my-4"><a href="{{ $web->title }}" class="text-light">{{ $web->title }}></a></h4>

                <img class="w-100 show__web__logo rounded" src="{{ asset('storage/webs/'.$web->photo) }}" alt="">
            </div>
        </div>

    </div>

@endsection
