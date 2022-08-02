@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center mt-2">

        {{-- CURRENT PAGE STATUS --}}
        <div class="current__page bg-primary px-3 d-flex align-items-center h6 mb-2">
            <a href="{{ route('home') }}" class="text-light text-decoration-none">Home <i class="fa fa-home"></i></a>
            <div class="mx-3 text-light">/</div>
            <a href="{{ route("category.create") }}" class="text-light text-decoration-none">Create Category <i class="fa fa-plus"></i></a>
            <div class="mx-3 text-light">/</div>
            <div  class="text-secondary text-decoration-none">Category List<i class="fa fa-list-squares"></i></div>
        </div>

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
                            <a href="{{ route('category.index') }}" class="badge bg-light text-primary px-3 py-1 text-decoration-none">
                                all category <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                        @endif
                    <div class="w-25">
                        <form action="{{ route('category.index') }}" method="get">
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
                            <th>Title</th>
                            <th>Icon</th>
                            <th>User</th>
                            <th>Management</th>
                            <th>Dates:Times</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($categories as $category)
                            <tr class="text-center align-middle">
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td class="h4"><i class="text-light fa {{ $category->icon }}"></i></td>
                                <td>{{ $category->user->name }}</td>
                                <td>
                                    <a href="" class="btn btn-outline-light"><i class="fa fa-info-circle"></i></a>
                                    <a href="{{ route('category.edit',$category->id) }}" class="btn btn-outline-success"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('category.destroy',$category->id) }}" class="d-inline-block" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger"><i class="fa fa-trash-can"></i></button>
                                    </form>
                                </td>
                                <td>
                                    <div>
                                        {{ $category->created_at->format('d / m / Y') }}
                                        <br>
                                        {{ $category->created_at->format('h : i : s A') }}
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="" >
                                <td class="text-center" colspan="6"> There is no category 🚀</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div>
                    {{ $categories->onEachSide(1)->links() }}
                </div>
            </div>
        </div>

    </div>

@endsection
