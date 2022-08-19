@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center mt-2">

        {{-- CURRENT PAGE STATUS --}}
        <x-breadCrumb :route="route('client.index')" addName="Emails List" arriveName="Add Client Email "/>

        {{-- CREATE STATUS --}}
        <div class="list__status bg-primary p-3">
            <div class="row h-100  p-5">

                <div class="w-100 text-center">
                    <h2 class=" text-light mb-0 text-uppercase fw-bold"> Add Client Email & Name <i class="fa fa-envelope-open-text text-danger"></i></h2>
                </div>

                {{-- CREATER SIDE --}}
                <div class="col-6 d-flex flex-column justify-content-center h-100 ">
                    <form action="{{ route('client.store') }}" method="post">
                        @csrf

                        <div class="w-75 my-5">
                            <div class="d-flex align-items-center">
                                <input
                                    type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    class="form-control form-control-lg bg-primary text-light border-light @error('name') is-invalid @enderror"
                                    placeholder=" client name | business name . . . ."
                                >
                            </div>
                            @error('name')
                            <div class="text-danger h5 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="w-75 my-5">
                            <div class="d-flex align-items-center">
                                <input
                                    type="text"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control form-control-lg bg-primary text-light border-light @error('email') is-invalid @enderror"
                                    placeholder=" client email . . . ."
                                >
                            </div>
                            @error('email')
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
