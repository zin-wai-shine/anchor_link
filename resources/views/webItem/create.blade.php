@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center mt-2">

        {{-- CURRENT PAGE STATUS --}}
        <x-breadCrumb :route="route('web.index')" addName="Web Item List" arriveName="Create Web Item"/>

        {{-- CREATE STATUS --}}
        <div class="list__status bg-primary p-3">
            <div class="row h-100  p-5">

                <div class="w-100 text-center">
                    <h2 class=" text-warning mb-0 text-uppercase fw-bold"> Create Web Item <i class="fa fa-link"></i></h2>
                </div>

                {{-- CREATER SIDE --}}
                <div class="col-6 d-flex flex-column justify-content-center h-100 ">
                    <form action="{{ route('web.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="w-75">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <select
                                            name="type"
                                            id=""
                                            class="form-control form-control-lg bg-primary text-light border-light @error('type') is-invalid @enderror"
                                        >
                                            <option value="" class="text-black-50">Select Type . . . . </option>
                                            @foreach($shareType as $data)
                                                <option value="{{ $data->id }}" {{ old('type')==$data->id ? "selected" : ''}}>{{ $data->title }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    @error('type')
                                    <div class="text-danger h5 mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <select
                                            name="level"
                                            id=""
                                            class="form-control form-control-lg bg-primary text-light border-light @error('level') is-invalid @enderror"
                                        >
                                            <option value="" class="text-black-50">Select Level . . . . </option>
                                            <option value="0" {{ old('level')== "0" ? "selected" : ''}}>Elementary</option>
                                            <option value="1" {{ old('level')== "1" ? "selected" : ''}}>Intermediate</option>
                                            <option value="2" {{ old('level')== "2" ? "selected" : ''}}>Advanced</option>
                                            <option value="7" {{ old('level')== "7" ? "selected" : ''}}>Other</option>
                                        </select>
                                    </div>
                                    @error('level')
                                    <div class="text-danger h5 mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="w-75 my-5">
                            <div class="d-flex align-items-center">
                                <input
                                    type="text"
                                    name="title"
                                    value="{{ old('title') }}"
                                    class="form-control form-control-lg bg-primary text-light border-light @error('title') is-invalid @enderror"
                                    placeholder="Paste Web Item . . . ."
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
