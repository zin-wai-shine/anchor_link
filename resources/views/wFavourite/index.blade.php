@extends('layouts.app')

@section('content')

    <div class="w-100 vh-100 show__web__item  "></div>
    <div class="w-100 vh-100 overflow-hidden show__web__itemContainer p-5">

            <div class="row">

                <div class="col-12 mt-4">
                    <div class="d-flex flex-wrap">
                        @forelse($favourites as $favourite)
                            @if(\Illuminate\Support\Facades\Auth::id() == $favourite->user_id)
                                @if(strlen($favourite) != 0)
                                    <div class="show__item__image p-0 shadow  m-1 position-relative">
                                        <a href="{{ route('wFavourite.destroy',$favourite->id) }}">
                                            <i class="fa fa-window-close text-danger star__logo">
                                                <div class="add__favourite text-nowrap px-2 py-1">
                                                    Remove From Favourite
                                                </div>
                                            </i>
                                        </a>

                                        <a href="{{ $favourite->title }}" target="_blank">
                                            <img src="{{ asset('storage/webs/'.$favourite->photo) }}" class="" alt="" height="37">
                                        </a>
                                    </div>
                                @else
                                    <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
                                        <h3 class="text-light fw-bold empty__text">Empty Favourite Link <i class="fa fa-link-slash"></i></h3>
                                    </div>
                                @endif

                            @endif

                        @empty
                            <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
                                <h3 class="text-light fw-bold empty__text">Empty Favourite Link <i class="fa fa-link-slash"></i></h3>
                            </div>
                        @endforelse
                    </div>
                </div>

            </div>

    </div>
@endsection
