@extends('layouts.app')

@section('content')

        <div class="w-100 vh-100 show__youtube__item  "></div>
        <div class="w-100 vh-100 overflow-hidden show__youtube__itemContainer">

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

                                  <a href="{{ $data->title }}" target="_blank">
                                      <img src="{{ asset('storage/youtube/'.$data->photo) }}" class="rounded" alt="" height="60">
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

                                    <a href="{{ $data->title }}" target="_blank">
                                        <img src="{{ asset('storage/youtube/'.$data->photo) }}" class="rounded" alt="" height="60">
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
                                <div class="show__item__image p-0 shadow  m-2 position-relative">
                               {{--     @forelse(\App\Models\Favourite::all() as $favourite)

                                        @if(\Illuminate\Support\Facades\Auth::id() == $favourite->user_id)

                                            @if($favourite->item_id == $data->id)
                                                <i class="fa fa-star active__favourite added__color__favourite star__logo star__added">
                                                    <div class="add__favourite text-nowrap">
                                                        added
                                                    </div>
                                                </i>
                                            @else

                                                <a href="{{ route('favourite.store',$data->id) }}">
                                                    <i class="fa fa-star text-light star__logo">
                                                        <div class="add__favourite text-nowrap">
                                                            add favourite
                                                        </div>
                                                    </i>
                                                </a>
                                            @endif

                                        @endif

                                    @empty

                                        <a href="{{ route('favourite.store',$data->id) }}">
                                            <i class="fa fa-star text-light star__logo">
                                                <div class="add__favourite text-nowrap">
                                                    add favourite
                                                </div>
                                            </i>
                                        </a>
                                    @endforelse--}}
                                    {{-- FAVOURITE STATUS --}}
                                    <a href="{{ route('favourite.store',$data->id) }}">
                                        <i class="fa fa-star text-light star__logo">
                                            <div class="add__favourite text-nowrap  px-2 py-1">
                                                add to favourite
                                            </div>
                                        </i>
                                    </a>
                                    <a href="{{ $data->title }}" target="_blank">
                                        <img src="{{ asset('storage/youtube/'.$data->photo) }}" class="rounded" alt="" height="60">
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
