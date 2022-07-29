@extends('layouts.app')

@section('content')
    <div class="w-100 h-100 overflow-hidden">
        <div class="d-flex flex-wrap">
            @forelse(\App\Models\Web::all() as $data)
                @if($data->type_id == $link)
                    <a href="{{ $data->title }}" target="_blank" class="p-0">
                        <img src="{{ asset('storage/webs/'.$data->photo) }}" alt="" height="50">
                    </a>
                @endif
            @empty
                <h1 class="text-primary fw-bold">Not Found Link <i class="fa fa-link-slash"></i></h1>
            @endforelse
        </div>
    </div>
@endsection
