@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center mt-2">

        {{-- CURRENT PAGE STATUS --}}
        <x-breadCrumb :route="route('item.create')" addName="Create Item" arriveName="Item List"/>

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
                            <a href="{{ route('item.index') }}" class="badge bg-light text-primary px-3 py-1 text-decoration-none">
                                all items <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    @endif
                    <div class="w-25">
                        <form action="{{ route('item.index') }}" method="get">
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
                        <th>Logo</th>
                        <th>Typeof</th>
                        <th>Level</th>
                        @can('controller')
                            <th>Management</th>
                        @endcan
                        <th>Dates:Times</th>
                    </tr>
                    </thead>

                    <tbody>
                    @forelse($items as $item)
                        <tr class="text-center align-middle">
                            <td>{{ $item->id }}</td>
                            <td><a href="{{ $item->title }}" class="text-light">{{ $item->title }}</a></td>
                            <td class="h4"><img class="item__logo__img" src="{{ asset('storage/youtube/'.$item->photo ) }}" alt=""></td>
                            <td>{{ $item->type->title }}</td>
                            <td>{{ $item->level }}</td>
                            @can('controller')
                                <td>
                                    <a href="{{ route('item.show',$item->id) }}" class="btn btn-outline-light"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('item.edit',$item->id) }}" class="btn btn-outline-success"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('item.destroy',$item->id) }}" class="d-inline-block" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger"><i class="fa fa-trash-can"></i></button>
                                    </form>
                                </td>
                            @endcan
                            <td>
                                <div>
                                    {{ $item->created_at->format('d / m / Y') }}
                                    <br>
                                    {{ $item->created_at->format('h : i : s A') }}
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
                    <div>{{ $items->onEachSide(1)->links() }}</div>
                    <div class="text-light h4">( {{ $shareItems->count() }} ) items</div>
                </div>
            </div>
        </div>

    </div>

@endsection
