@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center h-100">

        {{-- CURRENT PAGE STATUS --}}
        <div class="current__page bg-primary px-3 d-flex align-items-center h6 mb-2">
            <a href="" class="text-light text-decoration-none">Home <i class="fa fa-home"></i></a>
            <div class="mx-3 text-light">/</div>
            <a href="" class="text-light text-decoration-none">Create Category <i class="fa fa-plus"></i></a>
            <div class="mx-3 text-light">/</div>
            <div  class="text-secondary text-decoration-none">Category List<i class="fa fa-list-squares"></i></div>
        </div>

        {{-- CREATE STATUS --}}
        <div class="list__status bg-primary p-3">

        </div>

    </div>

@endsection
