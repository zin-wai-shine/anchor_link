@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center mt-2">

        {{-- CURRENT PAGE STATUS --}}
        <x-breadCrumb :route="route('user.index')" addName="Users List" arriveName="Edit User"/>

        {{-- CREATE STATUS --}}
        <div class="list__status bg-primary p-3 position-relative">
            <a href="{{ route('user.index') }}" class="back__page d-flex justify-content-center align-items-center fw-bold text-decoration-none">
                <i class="fa fa-angles-left text-light"></i><i class="fa fa-angles-left text-light"></i>
            </a>
            <div class="row h-100  p-5">

                <div class="w-100 text-center">
                    <h2 class=" text-light mb-0 text-uppercase fw-bold"> Edit ( {{ $user->name }} ) <i class="fa fa-user-edit"></i></h2>
                </div>

                {{-- CREATER SIDE --}}
                <div class="col-6 d-flex flex-column justify-content-center h-100 ">
                    <form action="{{ route('user.update',$user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="w-75 my-5">
                            <div>
                                <h5 class="text-secondary">User Name ...</h5>
                            </div>
                            <div class="d-flex align-items-center">
                                <input
                                    type="text"
                                    name="userName"
                                    value="{{ old('userName',$user->name) }}"
                                    class="form-control form-control-lg bg-primary text-light border-light @error('userName') is-invalid @enderror"
                                    placeholder="Text User Name . . . ."
                                >
                            </div>
                            @error('userName')
                            <div class="text-danger h5 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="w-75 my-5">
                            <div>
                                <h5 class="text-secondary">User Email ...</h5>
                            </div>
                            <div class="d-flex align-items-center">
                                <input
                                    type="text"
                                    name="email"
                                    value="{{ old('email',$user->email) }}"
                                    class="form-control form-control-lg bg-primary text-light border-light @error('email') is-invalid @enderror"
                                    placeholder="Text User Email . . . ."
                                >
                            </div>
                            @error('email')
                            <div class="text-danger h5 mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="w-75 my-5">
                            <div class="row">

                                <div class="col-2">
                                    <div>
                                        <h5 class="text-secondary">Role ...</h5>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <select
                                            name="role"
                                            id=""
                                            class="form-control text-center form-control-lg bg-primary text-light border-light @error('role') is-invalid @enderror"
                                        >
                                            <option value="0" {{ old('role',$user->role)== "0" ? "selected" : ''}}>0</option>
                                            <option value="1" {{ old('role',$user->role)== "1" ? "selected" : ''}}>1</option>
                                            <option value="2" {{ old('role',$user->role)== "2" ? "selected" : ''}}>2</option>
                                            <option value="3" {{ old('role',$user->role)== "3" ? "selected" : ''}}>3</option>
                                        </select>
                                    </div>
                                    @error('role')
                                    <div class="text-danger h5 mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-10">
                                    <div>
                                        <h5 class="text-secondary">Select Upload Logo ...</h5>
                                    </div>
                                        <div class="d-flex align-items-center">
                                            <input
                                                type="file"
                                                name="userPhoto"
                                                class="form-control form-control-lg bg-primary text-light border-light"
                                            >
                                        </div>
                                        @error('userPhoto')
                                            <div class="text-danger h5 mt-2">{{ $message }}</div>
                                        @enderror
                                </div>

                            </div>
                        </div>

                        <button class="btn btn-outline-light  w-25 mt-5"><i class="fa fa-clock-rotate-left"></i></button>
                    </form>
                </div>

                {{-- TRANSLATE SIDE --}}
                <div class="col-6 text-light h-100 d-flex flex-column justify-content-center h5">

                    <div class="w-75 mb-4">
                        <img  width="100%" class="rounded shadow" src="{{ asset('storage/profiles/'.$user->logo) }}" alt="">
                    </div>


                </div>
            </div>
        </div>

    </div>

@endsection
