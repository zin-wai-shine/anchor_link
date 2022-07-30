@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center h-100">

        {{-- CURRENT PAGE STATUS --}}
        <div class="current__page bg-primary px-3 d-flex align-items-center h6 mb-2">
            <a href="{{ route('home') }}" class="text-light text-decoration-none">Home <i class="fa fa-home"></i></a>
            <div class="mx-3 text-light">/</div>
            <a href="{{ route('web.index') }}" class="text-light text-decoration-none">Web Item List <i class="fa fa-plus"></i></a>
            <div class="mx-3 text-light">/</div>
            <div  class="text-secondary text-decoration-none">Edit {{ $web->title }} Web Item  <i class="fa fa-list-squares"></i></div>
        </div>

        {{-- CREATE STATUS --}}
        <div class="list__status bg-primary p-3">
            <div class="row h-100  p-5">

                <div class="w-100 text-center">
                    <h2 class=" text-warning mb-0 text-uppercase fw-bold"> Edit Web Item <i class="fa fa-edit"></i></h2>
                </div>

                {{-- CREATER SIDE --}}
                <div class="col-6 d-flex flex-column justify-content-center h-100 ">
                    <form action="{{ route('web.update',$web->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
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
                                            @foreach(\App\Models\Type::all() as $data)
                                                <option value="{{ $data->id }}" {{ old('type',$web->type_id)==$data->id ? "selected" : ''}}>{{ $data->title }}</option>
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
                                            <option value="0" {{ old('level',$web->level)== "0" ? "selected" : ''}}>Elementary</option>
                                            <option value="1" {{ old('level',$web->level)== "1" ? "selected" : ''}}>Intermediate</option>
                                            <option value="2" {{ old('level',$web->level)== "2" ? "selected" : ''}}>Advanced</option>
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
                                    value="{{ old('title',$web->title) }}"
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

                        <button class="btn btn-outline-light  w-25 mt-5"><i class="fa fa-clock-rotate-left"></i></button>
                    </form>
                </div>

                {{-- TRANSLATE SIDE --}}
                <div class="col-6 text-light h-100 d-flex flex-column justify-content-center h5">
                    <div class="w-75 mb-4">
                        <img class="rounded shadow" width="100%" src="{{ asset('storage/webs/'.$web->photo ) }}" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
