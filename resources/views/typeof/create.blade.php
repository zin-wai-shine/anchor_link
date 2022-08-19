@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center mt-2">

        {{-- CURRENT PAGE STATUS --}}
        <x-breadCrumb :route="route('type.index')" addName="Typeof List" arriveName="Add Typeof"/>

        {{-- CREATE STATUS --}}
        <div class="list__status bg-primary p-3">
            <div class="row h-100  p-5">

                <div class="w-100 text-center">
                    <h2 class=" text-light mb-0 text-uppercase fw-bold"> Create Typeof <i class="fa fa-layer-group"></i></h2>
                </div>

                {{-- CREATER SIDE --}}
                <div class="col-6 d-flex flex-column justify-content-center h-100 ">
                    <form action="{{ route('type.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="w-75">
                            <div class="d-flex align-items-center">
                                <select
                                    name="category"
                                    id=""
                                    class="form-control form-control-lg bg-primary text-light border-light @error('title') is-invalid @enderror"
                                >
                                    <option value="" class="text-black-50">Select Category . . . . </option>
                                    @foreach($shareCategory as $category)
                                        <option value="{{ $category->id }}" {{ old('category')==$category->id ? "selected" : ''}}>{{ $category->title }}</option>
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
                                    value="{{ old('title') }}"
                                    class="form-control form-control-lg bg-primary text-light border-light @error('title') is-invalid @enderror"
                                    placeholder="Text Typeof . . . ."
                                >
                            </div>
                            @error('title')
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
