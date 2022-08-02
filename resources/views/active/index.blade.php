@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center mt-2">

        {{-- CURRENT PAGE STATUS --}}
        <div class="current__page bg-primary px-3 d-flex align-items-center h6 mb-2">
            <a href="{{ route('home') }}" class="text-light text-decoration-none">Home <i class="fa fa-home"></i></a>
            <div class="mx-3 text-light">/</div>
            <a href="{{ route('client.index') }}" class="text-light text-decoration-none">Emails List <i class="fa fa-plus"></i></a>
            <div class="mx-3 text-light">/</div>
            <div  class="text-secondary text-decoration-none">Add Client Email <i class="fa fa-list-squares"></i></div>
        </div>

        {{-- CREATE STATUS --}}
        <div class="list__status bg-primary position-relative">
            <div class="row h-100  p-4">

                <div class="w-100 text-center">
                    <h3 class=" text-light mb-0 text-uppercase fw-bold"> Active Client Create & List | Email & Name <i class="fa fa-envelope-open-text text-danger"></i></h3>
                </div>

                {{-- CREATER SIDE --}}
                <div class="col-4 d-flex flex-column justify-content-center h-100 ">
                    <form action="{{ route('active.store')  }}" method="post">
                        @csrf
                        <div class="w-100 my-5">
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

                        <div class="w-100 my-5">
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
                <div class="col-8 text-light h-100 d-flex flex-column justify-content-center">
                    <div class="list__status bg-primary ">
                        <div class="w-100 mt-5">

                            {{-- SEARCH CATEGORY BAR --}}
                            <div class="w-100 d-flex {{ request('keyword') ? ' justify-content-between' : 'justify-content-end'  }} mb-2">
                                @if(request('keyword'))
                                    <div>
                                        <span class="text-light">Search By : {{ request('keyword') }}</span>
                                    </div>

                                    <div>
                                        <a href="{{ route('active.index') }}" class="badge bg-light text-primary px-3 py-1 text-decoration-none">
                                            all emails <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                @endif
                                <div class="w-25">
                                    <form action="{{ route('active.index') }}" method="get">
                                        @csrf
                                        <div class="d-flex align-items-center">
                                            <input
                                                type="text"
                                                name="keyword"
                                                class="form-control bg-primary border-light text-light"
                                                value="{{ request('keyword') }}"
                                                placeholder="search category. . . ."
                                            >
                                            <div class=" mx-1"></div>
                                            <button class="btn btn-outline-light"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            {{-- CATEGORY TABLE --}}
                            <table class="table table-hover bg-primary table-bordered border-light text-light">
                                <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>Client Name</th>
                                    <th>Management</th>
                                    <th>Dates & Times</th>
                                </tr>
                                </thead>

                                <tbody>
                                @forelse($actives as $active)
                                    <tr class="align-middle text-center">
                                        <td>{{ $active->id }}</td>
                                        <td>{{ $active->email }}</td>
                                        <td>{{ $active->name }}</td>
                                        <td>
                                            <a href="{{ route('active.edit',$active->id) }}" class="btn btn-outline-success"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('active.destroy',$active->id) }}" class="d-inline-block" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-outline-danger"><i class="fa fa-trash-can"></i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <div>
                                                {{ $active->created_at->format('d / m / Y') }}
                                                <br>
                                                {{ $active->created_at->format('h : i : s A') }}
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="text-center">
                                        <td class="" colspan="5">client email is empty 🚀</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>

                            <div>
                                {{ $actives->onEachSide(1)->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
