@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center h-100">

        {{-- CURRENT PAGE STATUS --}}
        <div class="current__page bg-primary px-3 d-flex align-items-center h6 mb-2">
            <a href="{{ route('home') }}" class="text-light text-decoration-none">Home <i class="fa fa-home"></i></a>
            <div class="mx-3 text-light">/</div>
            <a href="{{ route('item.index') }}" class="text-light text-decoration-none">Item List <i class="fa fa-plus"></i></a>
            <div class="mx-3 text-light">/</div>
            <div  class="text-secondary text-decoration-none">Create Item  <i class="fa fa-list-squares"></i></div>
        </div>

        {{-- CREATE STATUS --}}
        <div class="list__status bg-primary p-3">
            <div class="row h-100  p-5">

                <div class="w-100 text-center">
                    <h2 class=" text-light mb-0 text-uppercase fw-bold"> Create Anchor Item <i class="fa fa-link"></i></h2>
                </div>

           {{-- CREATER SIDE --}}
                <div class="col-6 d-flex flex-column justify-content-center h-100 ">
                        <form action="{{ route('item.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="w-75">
                                <div class="d-flex align-items-center">
                                    <select
                                        name="type"
                                        id=""
                                        class="form-control form-control-lg bg-primary text-light border-light @error('type') is-invalid @enderror"
                                    >
                                        <option value="" class="text-black-50">Select Category . . . . </option>
                                        @foreach(\App\Models\Type::all() as $data)
                                            <option value="{{ $data->id }}" {{ old('type')==$data->id ? "selected" : ''}}>{{ $data->title }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                @error('type')
                                <div class="text-danger h5 mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="w-75 my-5">
                                <div class="d-flex align-items-center">
                                    <input
                                        type="text"
                                        name="title"
                                        value="{{ old('title') }}"
                                        class="form-control form-control-lg bg-primary text-light border-light @error('title') is-invalid @enderror"
                                        placeholder="Create Youtube Item . . . ."
                                    >
                                </div>
                                @error('title')
                                <div class="text-danger h5 mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="w-75 mb-5">
                                <div>
                                    <h5 class="text-light">Select Upload Logo</h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <input
                                        type="file"
                                        name="photo"
                                        class="form-control form-control-lg bg-primary text-light border-light"
                                    >
                                </div>
                                @error('photo')
                                    <div class="text-danger h5 mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <button class="btn btn-outline-light  w-25 mt-5"><i class="fa fa-plus"></i></button>
                        </form>
                </div>

            {{-- TRANSLATE SIDE --}}
                <div class="col-6 text-light h-100 d-flex flex-column justify-content-center h5">
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci
                            aperiam architecto atque, blanditiis deserunt eius mollitia nostrum odit,
                            officiis quis reiciendis rem saepe sint voluptas. Laudantium officia pariatur porro!
                        </div>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci
                            aperiam architecto atque, blanditiis deserunt eius mollitia nostrum odit,
                            officiis quis reiciendis rem saepe sint voluptas. Laudantium officia pariatur porro!
                        </div>

                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci
                            aperiam architecto atque, blanditiis deserunt eius mollitia nostrum odit,
                            officiis quis reiciendis rem saepe sint voluptas. Laudantium officia pariatur porro!
                        </div>

                </div>
            </div>
        </div>

    </div>

@endsection
