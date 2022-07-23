@extends('manage.manage')

@section('manage')

    <div class="py-2 d-flex flex-column justify-content-center align-items-center h-100">

       {{-- CURRENT PAGE STATUS --}}
        <div class="current__page bg-primary px-3 d-flex align-items-center h5 mb-0">
            <a href="{{ route('home') }}" class="text-light text-decoration-none">Home <i class="fa fa-home"></i></a>
            <div class="mx-3 text-light">/</div>
            <a href="{{ route('category.index') }}" class="text-light text-decoration-none">Category <i class="fa fa-list-squares"></i></a>
            <div class="mx-3 text-light">/</div>
            <div  class="text-secondary text-decoration-none">Create Category <i class="fa fa-plus"></i></div>
        </div>

       {{-- CURRENT STATUS --}}
        <div class="current__status bg-primary my-2 d-flex p-4 flex-wrap overflow-auto">
            @foreach(\App\Models\Category::all() as $category)
                <div class="current__category bg-light text-primary text-center mb-2">{{ $category->title }}</div>
            @endforeach
        </div>

       {{-- CREATE STATUS --}}
        <div class="create__status bg-primary">
            <div class="row p-4 h-100">
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
