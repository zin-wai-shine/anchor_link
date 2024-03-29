@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center mt-2">

        {{-- CURRENT PAGE STATUS --}}
        <x-breadCrumb route=" " addName="" arriveName="Edit User"/>

        {{-- CREATE STATUS --}}
        <div class="list__status bg-primary p-3">
            <div class="w-100 p-5">

                {{-- SEARCH CATEGORY BAR --}}
                <div class="w-100 d-flex {{ request('keyword') ? ' justify-content-between' : 'justify-content-end'  }} mb-2">
                    @if(request('keyword'))
                        <div>
                            <span class="text-light">Search By : {{ request('keyword') }}</span>
                        </div>

                        <div>
                            <a href="{{ route('user.index') }}" class="badge bg-light text-primary px-3 py-1 text-decoration-none">
                                all users <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    @endif
                    <div class="w-25">
                        <form action="{{ route('user.index') }}" method="get">
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
                        <th>Name <i class="fa fa-user"></i></th>
                        <th>Email <i class="fa fa-envelope"></i></th>
                        <th>Role <i class="fa fa-typo3"></i></th>
                        <th>Profile <i class="fa fa-image-portrait"></i></th>
                        @can('controller')
                            <th>Management <i class="fa fa-list-check"></i></th>
                        @endcan
                        <th>Email Verified Date</th>
                        <th>Dates:Times <i class="fa fa-clock"></i></th>
                    </tr>
                    </thead>

                    <tbody>
                    @forelse($users as $user)
                        <tr class="text-center align-middle">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <div class="w-100 d-flex justify-content-center align-items-center">
                                    <div
                                        id=""
                                        class="profile__logo profile__status position-relative"
                                        style="background-image:url(
                                        {{ $user->logo == "profile.png"
                                            ? asset('images/'.$user->logo)
                                            : asset('storage/profiles/'.$user->logo)
                                            }})"
                                    >
                                    </div>
                                </div>

                            </td>

                            @can('controller')
                                <td>
                                    <a href="{{ route('user.show',$user->id)  }}" class="btn btn-outline-light"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('user.edit',$user->id) }}" class="btn btn-outline-success"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('user.destroy',$user->id) }}" class="d-inline-block" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger"><i class="fa fa-trash-can"></i></button>
                                    </form>
                                </td>
                            @endcan

                            <td>
                                <div>
                                    @if($user->email_verified_at)
                                        {{ $user->email_verified_at->format('d / m / Y') }}
                                        <br>
                                        {{ $user->email_verified_at->format('h : i : s A') }}
                                        @else
                                            null
                                        @endif
                                </div>
                            </td>
                            <td>
                                <div>
                                    {{ $user->created_at->format('d / m / Y') }}
                                    <br>
                                    {{ $user->created_at->format('h : i : s A') }}
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="" >
                            <td class="text-center" colspan="7"> There is no item 🚀</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>

                <div class="d-flex justify-content-between align-items-center">
                    <div>{{ $users->onEachSide(1)->links() }}</div>
                    <div class="text-light h4">( {{ $shareUsers->count() }} )
                        @if($shareUsers->count()>1)
                            items
                        @else
                            item
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
