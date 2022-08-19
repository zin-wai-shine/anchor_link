@extends('manage.manage')

@section('manage')

    <div class="py-2 d-flex flex-column justify-content-center align-items-center mt-2">

        {{-- CURRENT PAGE STATUS --}}
        <x-breadCrumb :route="route('category.index')" addName="Category" arriveName="Edit Category "/>

        {{-- CURRENT STATUS --}}
        <div class="current__status bg-primary my-2 d-flex p-4 flex-wrap overflow-auto">
            @foreach(\App\Models\Category::all() as $data)
                <div class="current__category bg-light text-primary text-center mb-2">{{ $data->title }}</div>
            @endforeach
        </div>

        {{-- CREATE STATUS --}}
        <div class="create__status bg-primary position-relative">
            <a href="{{ route('category.index') }}" class="back__page d-flex justify-content-center align-items-center fw-bold text-decoration-none">
                <i class="fa fa-angles-left text-light"></i><i class="fa fa-angles-left text-light"></i>
            </a>
            <div class="row p-4 h-100">
                <div class="col-6 h-100 d-flex flex-column justify-content-center px-5">
                    <form action="{{ route('category.update',$category->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="">
                            <div class="d-flex align-items-center">
                                <input
                                    type="text"
                                    name="title"
                                    value="{{ old('title',$category->title) }}"
                                    class="form-control form-control-lg bg-primary border-light text-light @error('title') is-invalid @enderror"
                                    placeholder="text category . . . ."
                                >
                            </div>
                            @error('title')
                                <div class="text-danger h5 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="my-3">
                            <div class="d-flex align-items-center">
                                <input
                                    type="text"
                                    name="icon"
                                    value="{{ old('icon',$category->icon) }}"
                                    class="form-control form-control-lg bg-primary border-light text-light @error('icon') is-invalid @enderror"
                                    placeholder="text icon . . . . "
                                >
                            </div>
                            @error('icon')
                            <div class="text-danger h5 mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-outline-light btn-lg w-25 mt-5"><i class="fa fa-clock-rotate-left text-light fw-bold"></i></button>
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
