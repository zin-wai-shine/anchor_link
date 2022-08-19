@extends('layouts.app')

@section('content')
        <div class="w-100 vh-100 show__youtube__item  "></div>
        <div class="w-100 vh-100 show__youtube__itemContainer">

            <div class="row">
            {{--
                We are building component (php artisan make:component Youtube/Items)
                in there you need aware giving the name... and then you can see
                (app/View/Components/Youtube/Items.php) whth (resources/views/components/youtube/items.blade.php)
            --}}
                    <div class="col-4">
                       <x-youtube.items :items="$items" :auth="$auth" :favourites="$favourites" :link="$link" level="0" type="Elementary"/>
                    </div>

                    <div class="col-4">
                        <x-youtube.items :items="$items" :auth="$auth" :favourites="$favourites" :link="$link" level="1" type="Intermediate"/>
                    </div>

                    <div class="col-4">
                        <x-youtube.items :items="$items" :auth="$auth" :favourites="$favourites" :link="$link" level="2" type="Advanced"/>
                    </div>
            </div>

        </div>
@endsection
