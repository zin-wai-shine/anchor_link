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
        <div class="list__status bg-primary p-3 position-relative">
            <a href="{{ route('item.index') }}" class="back__page d-flex justify-content-center align-items-center fw-bold text-decoration-none">
                <i class="fa fa-angles-left text-light"></i><i class="fa fa-angles-left text-light"></i>
            </a>
            <div class="row h-100  p-5">

                <div class="w-100 text-center">
                    <h2 class=" text-light mb-0 text-uppercase fw-bold"> Create Anchor Item <i class="fa fa-link"></i></h2>
                </div>

                {{-- CREATER SIDE --}}
                <div class="col-6 d-flex flex-column justify-content-center h-100 ">
                    <form action="{{ route('item.update',$item->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put');
                        <div class="w-75">
                            <div class="d-flex align-items-center">
                                <select
                                    name="category"
                                    id=""
                                    class="form-control form-control-lg bg-primary text-light border-light @error('title') is-invalid @enderror"
                                >
                                    <option value="" class="text-black-50">Select Category . . . . </option>
                                    @foreach(\App\Models\Category::all() as $data)
                                        <option value="{{ $data->id }}" {{ old('category',$item->category_id)==$data->id ? "selected" : ''}}>{{ $data->title }}</option>
                                    @endforeach

                                </select>
                            </div>
                            @error('category')
                            <div class="text-danger h5 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="w-75 my-5">
                            <div class="d-flex align-items-center">
                                <input
                                    type="text"
                                    name="title"
                                    value="{{ old('title',$item->title) }}"
                                    class="form-control form-control-lg bg-primary text-light border-light @error('title') is-invalid @enderror"
                                    placeholder="Paste Link . . . ."
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

                        <div class="w-75 mb-4">
                            <img class="w-100" src="{{ asset('storage/images/'.$item->photo) }}" alt="">
                        </div>

                        <button class="btn btn-outline-light  w-25 mt-5"><i class="fa fa-plus"></i></button>
                    </form>
                </div>

                {{-- TRANSLATE SIDE --}}
                <div class="col-6 text-light h-100 d-flex flex-column align-items-center justify-content-center h5">
                    <div>
                       <h1>Edit Item</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
