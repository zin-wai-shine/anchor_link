@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center mt-2">


       {{-- CURRENT PAGE STATUS --}}
        <x-breadCrumb :route="route('category.index')" addName="Category" arriveName="Create Category "/>

       {{-- CURRENT STATUS --}}
        <div class="current__status bg-primary my-2 d-flex p-4 flex-wrap overflow-auto">
            @foreach(\App\Models\Category::all() as $category)
                <div class="current__category bg-primary text-light text-center mb-2">{{ $category->title }}</div>
            @endforeach
        </div>

       {{-- CREATE STATUS --}}
        <div class="create__status bg-primary">
            <div class="row p-4 h-100">
                <div class="w-100 d-flex justify-content-center">
                    <h2 class="mb-0 text-light fw-bold text-uppercase">Create Category <i class="fa fa-layer-group"></i></h2>
                </div>
                <div class="col-6 h-100 d-flex flex-column justify-content-center px-5">
                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="">
                            <div class="d-flex align-items-center">
                                <input
                                    type="text"
                                    name="title"
                                    value="{{ old('title') }}"
                                    class="form-control form-control-lg bg-primary text-light border-light @error('title') is-invalid @enderror"
                                    placeholder="text category . . . ."
                                >
                            </div>
                            @error('title')
                            <div class="text-danger h5 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="my-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="d-flex align-items-center">
                                        <input
                                            type="text"
                                            name="icon"
                                            value="{{ old('icon') }}"
                                            class="form-control form-control-lg bg-primary border-light text-light @error('icon') is-invalid @enderror"
                                            placeholder="text icon . . . . "
                                        >
                                    </div>
                                    @error('icon')
                                    <div class="text-danger h5 mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <div class="d-flex align-items-center">
                                        <select
                                            name="column"
                                            id=""
                                            class="form-control form-control-lg bg-primary text-light border-light @error('title') is-invalid @enderror"
                                        >
                                            <option value="" class="text-black-50">Select Column . . . . </option>
                                            <option value="1" {{ old('column')== 1 ? "selected" : ''}}>First Column</option>
                                            <option value="2" {{ old('column')== 2 ? "selected" : ''}}>Second Column</option>
                                        </select>
                                    </div>
                                    @error('column')
                                    <div class="text-danger h5 mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary border-light btn-lg w-25 mt-5"><i class="fa fa-plus text-light fw-bold"></i></button>
                    </form>
                </div>

                <div class="col-6 text-light h-100 d-flex flex-column justify-content-center px-5 h5">
                    <div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium,
                        debitis delectus dignissimos inventore laboriosam nam nobis numquam quisquam
                        repellat ullam unde vero? Et excepturi expedita molestiae nostrum recusandae sint voluptatem.
                    </div>

                    <div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium,
                        debitis delectus dignissimos inventore laboriosam nam nobis numquam quisquam
                        repellat ullam unde vero? Et excepturi expedita molestiae nostrum recusandae sint voluptatem.
                        <i class="fa fa-language"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
