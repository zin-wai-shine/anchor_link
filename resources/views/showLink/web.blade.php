@extends('layouts.app')

@section('content')

    <div class="w-100 vh-100 show__web__item  "></div>
        <div class="w-100 vh-100 overflow-hidden show__web__itemContainer">

            <div class="row">

                <div class="col-4">
                    <div class="w-100 text-center text-light my-3">
                        <h4 class="m-0 fw-bold">Elementary</h4>
                    </div>
                    <div class="d-flex flex-wrap">
                        @forelse(\App\Models\Web::all() as $data)
                            @if($data->type_id == $link && $data->level == 0)
                                <div class="  show__item__image p-0 shadow  m-2 position-relative">
                                    <a href="{{ route('wFavourite.store',$data->id) }}">
                                        <i class="fa fa-star text-light  star__logo bg__star">
                                            <div class="add__favourite text-nowrap  px-2 py-1">
                                                add favourite
                                            </div>
                                        </i>
                                    </a>
                                    @foreach(\App\Models\Wfavourite::all() as $favourite)
                                        @if(\Illuminate\Support\Facades\Auth::id() == $favourite->user_id)

                                            @if($favourite->item_id == $data->id)
                                                <i class="fa fa-star text-light star__logo active__favourite bg__star">
                                                    <div class="add__favourite text-nowrap  px-2 py-1">
                                                        Added
                                                    </div>
                                                </i>
                                            @endif

                                        @endif

                                    @endforeach
                                    <a href="{{ $data->title }}" target="_blank">
                                        <img src="{{ asset('storage/webs/'.$data->photo) }}" class=" w__item__image" alt="" height="50">
                                    </a>
                                </div>
                            @endif

                        @empty
                            <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
                                <h2 class="text-success fw-bold">links are empty in this case <i class="fa fa-link-slash"></i></h2>
                            </div>
                        @endforelse
                    </div>
                </div>
                <div class="col-4">
                    <div class="w-100 text-center text-light my-3">
                        <h4 class="m-0 fw-bold">Intermediate</h4>
                    </div>
                    <div class="d-flex flex-wrap">
                        @forelse(\App\Models\Web::all() as $data)
                            @if($data->type_id == $link && $data->level == 1)
                                <div class="  show__item__image p-0 shadow  m-2 position-relative">
                                    <a href="{{ route('wFavourite.store',$data->id) }}">
                                        <i class="fa fa-star text-light  star__logo bg__star">
                                            <div class="add__favourite text-nowrap  px-2 py-1">
                                                add favourite
                                            </div>
                                        </i>
                                    </a>
                                    @foreach(\App\Models\Wfavourite::all() as $favourite)
                                        @if(\Illuminate\Support\Facades\Auth::id() == $favourite->user_id)

                                            @if($favourite->item_id == $data->id)
                                                <i class="fa fa-star text-light star__logo active__favourite bg__star">
                                                    <div class="add__favourite text-nowrap  px-2 py-1">
                                                        Added
                                                    </div>
                                                </i>
                                            @endif

                                        @endif

                                    @endforeach
                                    <a href="{{ $data->title }}" target="_blank">
                                        <img src="{{ asset('storage/webs/'.$data->photo) }}" class=" w__item__image" alt="" height="50">
                                    </a>
                                </div>
                            @endif

                        @empty
                            <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
                                <h2 class="text-success fw-bold">links are empty in this case <i class="fa fa-link-slash"></i></h2>
                            </div>
                        @endforelse
                    </div>
                </div>
                <div class="col-4">
                    <div class="w-100 text-center text-light my-3">
                        <h4 class="m-0 fw-bold">Advanced</h4>
                    </div>
                    <div class="d-flex flex-wrap">
                        @forelse(\App\Models\Web::all() as $data)
                            @if($data->type_id == $link && $data->level == 2)
                                <div class="  show__item__image p-0 shadow  m-2 position-relative">
                                    <a href="{{ route('wFavourite.store',$data->id) }}">
                                        <i class="fa fa-star text-light  star__logo bg__star">
                                            <div class="add__favourite text-nowrap  px-2 py-1">
                                                add favourite
                                            </div>
                                        </i>
                                    </a>
                                    @foreach(\App\Models\Wfavourite::all() as $favourite)
                                        @if(\Illuminate\Support\Facades\Auth::id() == $favourite->user_id)

                                            @if($favourite->item_id == $data->id)
                                                <i class="fa fa-star text-light star__logo active__favourite bg__star">
                                                    <div class="add__favourite text-nowrap  px-2 py-1">
                                                        Added
                                                    </div>
                                                </i>
                                            @endif

                                        @endif

                                    @endforeach
                                    <a href="{{ $data->title }}" target="_blank">
                                        <img src="{{ asset('storage/webs/'.$data->photo) }}" class=" w__item__image" alt="" height="50">
                                    </a>
                                </div>
                            @endif

                        @empty
                            <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
                                <h2 class="text-success fw-bold">links are empty in this case <i class="fa fa-link-slash"></i></h2>
                            </div>
                        @endforelse
                    </div>
                </div>


            </div>

        </div>
@endsection


