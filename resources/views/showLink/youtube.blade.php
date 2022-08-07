@extends('layouts.app')

@section('content')
   {{-- <div class="text-light">
        @php
            echo "<pre>";
                var_dump($data->id);
            echo "</pre>";
        @endphp
    </div>--}}

        <div class="w-100 vh-100 show__youtube__item  "></div>
        <div class="w-100 vh-100 show__youtube__itemContainer">

            <div class="row">
                    <div class="col-4">
                        <div class="w-100 text-center text-light my-3">
                            <h4 class="m-0 fw-bold">Elementary</h4>
                        </div>
                        <div class="d-flex flex-wrap">
                            @forelse(\App\Models\Item::all() as $data)
                                @if($data->type_id == $link && $data->level == 0)
                                    <div class="  show__item__image p-0 shadow  m-2 position-relative">
                                        <a href="{{ route('favourite.store',$data->id) }}">
                                            <i class="fa fa-star text-light star__logo">
                                                <div class="add__favourite text-nowrap  px-2 py-1">
                                                    add favourite
                                                </div>
                                            </i>
                                        </a>
                                        @foreach(\App\Models\Favourite::all() as $favourite)
                                            @if(\Illuminate\Support\Facades\Auth::id() == $favourite->user_id)

                                                @if($favourite->item_id == $data->id)
                                                    <i class="fa fa-star text-light star__logo active__favourite">
                                                        <div class="add__favourite text-nowrap  px-2 py-1">
                                                            Added
                                                        </div>
                                                    </i>
                                                @endif

                                            @endif

                                        @endforeach
                                        <a href="{{ $data->title }}" target="_blank">
                                            <img src="{{ asset('storage/youtube/'.$data->photo) }}" class="rounded item__image" alt="" height="60">
                                        </a>
                                    </div>
                                @endif


                            @empty
                                <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                                    <h1 class="text-primary fw-bold">Not Found Link <i class="fa fa-link-slash"></i></h1>
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="w-100 text-center text-light my-3">
                            <h4 class="m-0 fw-bold">Intermediate</h4>
                        </div>
                        <div class="d-flex flex-wrap">
                            @forelse(\App\Models\Item::all() as $data)
                                @if($data->type_id == $link && $data->level == 1)
                                    <div class="  show__item__image p-0 shadow  m-2 position-relative">
                                        <a href="{{ route('favourite.store',$data->id) }}">
                                            <i class="fa fa-star text-light star__logo">
                                                <div class="add__favourite text-nowrap  px-2 py-1">
                                                    add favourite
                                                </div>
                                            </i>
                                        </a>
                                        @foreach(\App\Models\Favourite::all() as $favourite)
                                            @if(\Illuminate\Support\Facades\Auth::id() == $favourite->user_id)

                                                @if($favourite->item_id == $data->id)
                                                    <i class="fa fa-star text-light star__logo active__favourite">
                                                        <div class="add__favourite text-nowrap  px-2 py-1">
                                                            Added
                                                        </div>
                                                    </i>
                                                @endif

                                            @endif

                                        @endforeach

                                        <a href="{{ $data->title }}" target="_blank">
                                            <img src="{{ asset('storage/youtube/'.$data->photo) }}" class=" item__image" alt="">
                                        </a>
                                    </div>
                                @endif

                            @empty
                                <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                                    <h1 class="text-primary fw-bold">Not Found Link <i class="fa fa-link-slash"></i></h1>
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <div class="col-4">
                            <div class="w-100 text-center text-light my-3">
                                <h4 class="m-0 fw-bold">Advanced</h4>
                            </div>
                            <div class="d-flex flex-wrap">
                                @forelse(\App\Models\Item::all() as $data)
                                    @if($data->type_id == $link && $data->level == 2)

                                        <div class="  show__item__image p-0 shadow  m-2 position-relative">
                                            <a href="{{ route('favourite.store',$data->id) }}">
                                                <i class="fa fa-star text-light star__logo">
                                                    <div class="add__favourite text-nowrap  px-2 py-1">
                                                        add favourite
                                                    </div>
                                                </i>
                                            </a>
                                            @foreach(\App\Models\Favourite::all() as $favourite)
                                                @if(\Illuminate\Support\Facades\Auth::id() == $favourite->user_id)

                                                    @if($favourite->item_id == $data->id)
                                                        <i class="fa fa-star text-light star__logo active__favourite">
                                                            <div class="add__favourite text-nowrap  px-2 py-1">
                                                                Added
                                                            </div>
                                                        </i>
                                                    @endif

                                                @endif

                                            @endforeach

                                            <a href="{{ $data->title }}" target="_blank">
                                                <img src="{{ asset('storage/youtube/'.$data->photo) }}" class="rounded item__image" alt="">
                                            </a>
                                        </div>
                                    @endif

                                @empty
                                    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                                        <h1 class="text-primary fw-bold">Not Found Link <i class="fa fa-link-slash"></i></h1>
                                    </div>
                                @endforelse
                            </div>
                        </div>
            </div>

        </div>
@endsection
