@extends('manage.manage')

@section('manage')

    <div class=" d-flex flex-column justify-content-center align-items-center mt-2">

        {{-- CURRENT PAGE STATUS --}}
        <x-breadCrumb :route="route('client.create')" addName="Emails List" arriveName="Client Email List "/>

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
                            <a href="{{ route('client.index') }}" class="badge bg-light text-primary px-3 py-1 text-decoration-none">
                                all emails <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    @endif
                    <div class="w-25">
                        <form action="{{ route('client.index') }}" method="get">
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
                        @can('controller')
                            <th>Management</th>
                        @endcan
                        <th>Dates & Times</th>
                    </tr>
                    </thead>

                    <tbody>
                       @forelse($clients as $client)
                           <tr class="align-middle text-center">
                               <td>{{ $client->id }}</td>
                               <td>{{ $client->email }}</td>
                               <td>{{ $client->name }}</td>
                              @can('controller')
                                   <td>
                                       <a href="{{ route('client.edit',$client->id) }}" class="btn btn-outline-success"><i class="fa fa-edit"></i></a>
                                       <form action="{{ route('client.destroy',$client->id) }}" class="d-inline-block" method="post">
                                           @csrf
                                           @method('delete')
                                           <button class="btn btn-outline-danger"><i class="fa fa-trash-can"></i></button>
                                       </form>
                                   </td>
                                  @endcan
                               <td>
                                   <div>
                                       {{ $client->created_at->format('d / m / Y') }}
                                       <br>
                                       {{ $client->created_at->format('h : i : s A') }}
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

                <div class="d-flex justify-content-between align-items-center">
                    <div>{{ $clients->onEachSide(1)->links() }}</div>
                    <div class="text-light h4">
                        {{ $shareClients->count() }}
                        @if($shareClients->count()>1)
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
