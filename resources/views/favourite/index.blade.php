@extends('layouts.app')

@section('content')

    <div class="w-100 vh-100 show__youtube__item "></div>
    <div class="w-100 vh-100 overflow-hidden show__youtube__itemContainer p-5">

        <div class="row">

            <div class="col-12 mt-2">
                <div class="d-flex flex-wrap">
                    @forelse($favourites as $favourite)
                            @if(\Illuminate\Support\Facades\Auth::id() == $favourite->user_id)
                                <div class="show__item__image p-0 shadow  m-2 position-relative">
                                    <a href="{{ route('favourite.destroy',$favourite->id) }}">
                                        <i class="fa fa-window-close text-danger star__logo">
                                            <div class="add__favourite text-nowrap px-2 py-1">
                                                Remove From Favourite
                                            </div>
                                        </i>
                                    </a>

                                    <a href="{{ $favourite->title }}" target="_blank">
                                        <img src="{{ asset('storage/youtube/'.$favourite->photo) }}" class="rounded" alt="" height="60">
                                    </a>
                                </div>
                            @endif
                    @empty
                        <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
                            <h1 class="text-light fw-bold empty__text">Empty Favourite Link <i class="fa fa-link-slash"></i></h1>
                        </div>
                    @endforelse
                </div>
            </div>

        </div>

    </div>
@endsection
