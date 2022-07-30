@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center h-100">

        {{-- CURRENT PAGE STATUS --}}
        <div class="current__page bg-primary px-3 d-flex align-items-center h6 mb-2">
            <a href="{{ route('home') }}" class="text-light text-decoration-none">Home <i class="fa fa-home"></i></a>
            <div class="mx-3 text-light">/</div>
            <a href="{{ route('type.index') }}" class="text-light text-decoration-none">Typeof List <i class="fa fa-plus"></i></a>
            <div class="mx-3 text-light">/</div>
            <div  class="text-secondary text-decoration-none">Edit Typeof {{ $type->title }} <i class="fa fa-list-squares"></i></div>
        </div>

        {{-- CREATE STATUS --}}
        <div class="list__status bg-primary p-3 position-relative">
            <a href="{{ route('type.index') }}" class="back__page d-flex justify-content-center align-items-center fw-bold text-decoration-none">
                <i class="fa fa-angles-left text-light"></i><i class="fa fa-angles-left text-light"></i>
            </a>
            <div class="row h-100  p-5">

                <div class="w-100 text-center">
                    <h2 class=" text-light mb-0 text-uppercase fw-bold"> Edit Typeof <i class="fa fa-layer-group"></i></h2>
                </div>

                {{-- CREATER SIDE --}}
                <div class="col-6 d-flex flex-column justify-content-center h-100 ">
                    <form action="{{ route('type.update',$type->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="w-75">
                            <div class="d-flex align-items-center">
                                <select
                                    name="category"
                                    id=""
                                    class="form-control form-control-lg bg-primary text-light border-light @error('title') is-invalid @enderror"
                                >
                                    <option value="" class="text-black-50">Select Category . . . . </option>
                                    @foreach(\App\Models\Category::all() as $category)
                                        <option value="{{ $category->id }}" {{ old('category',$type->category_id)==$category->id ? "selected" : ''}}>{{ $category->title }}</option>
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
                                    value="{{ old('title',$type->title) }}"
                                    class="form-control form-control-lg bg-primary text-light border-light @error('title') is-invalid @enderror"
                                    placeholder="Text Typeof . . . ."
                                >
                            </div>
                            @error('title')
                            <div class="text-danger h5 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <button class="btn btn-outline-light  w-25 mt-5"><i class="fa fa-clock-rotate-left"></i></button>
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
