@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center mt-2">

        {{-- CURRENT PAGE STATUS --}}
        <div class="current__page bg-primary px-3 d-flex align-items-center h6 mb-2">
            <a href="{{ route('home') }}" class="text-light text-decoration-none">Home <i class="fa fa-home"></i></a>
            <div class="mx-3 text-light">/</div>
            <div  class="text-secondary text-decoration-none">Edit Active Email & Name <i class="fa fa-list-squares"></i></div>
        </div>

        {{-- CREATE STATUS --}}
        <div class="list__status bg-primary position-relative p-5">
            <a href="{{ route('active.index') }}" class="back__page d-flex justify-content-center align-items-center fw-bold text-decoration-none">
                <i class="fa fa-angles-left text-light"></i><i class="fa fa-angles-left text-light"></i>
            </a>
            <div class="row h-100  p-5">

                <div class="w-100 text-center">
                    <h3 class=" text-light mb-0 text-uppercase fw-bold"> Edit Active Client Email | Name <i class="fa fa-envelope-open-text text-danger"></i></h3>
                </div>

                {{-- CREATER SIDE --}}
                <div class="col-4 d-flex flex-column justify-content-center h-100 ">
                    <form action="{{ route('active.update',$active->id)  }}" method="post">
                        @csrf
                        @method('put')
                        <div class="w-100 my-5">
                            <div class="d-flex align-items-center">
                                <input
                                    type="text"
                                    name="name"
                                    value="{{ old('name',$active->name) }}"
                                    class="form-control form-control-lg bg-primary text-light border-light @error('name') is-invalid @enderror"
                                    placeholder=" client name | business name . . . ."
                                >
                            </div>
                            @error('name')
                            <div class="text-danger h5 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="w-100 my-5">
                            <div class="d-flex align-items-center">
                                <input
                                    type="text"
                                    name="email"
                                    value="{{ old('email',$active->email) }}"
                                    class="form-control form-control-lg bg-primary text-light border-light @error('email') is-invalid @enderror"
                                    placeholder=" client email . . . ."
                                >
                            </div>
                            @error('email')
                            <div class="text-danger h5 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <button class="btn btn-outline-light  w-25 mt-5"><i class="fa fa-clock-rotate-left"></i></button>
                    </form>
                </div>

                {{-- TRANSLATE SIDE --}}
                <div class="col-8 text-light h-100 d-flex flex-column justify-content-center p-5">
                    <div class="h5">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate nemo ratione recusandae? Aperiam, asperiores consequuntur et impedit labore modi molestiae nesciunt numquam omnis pariatur praesentium quia tempore temporibus voluptate voluptatem.
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
