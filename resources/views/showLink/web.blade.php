@extends('layouts.app')

@section('content')

    <div class="w-100 vh-100 show__web__item  "></div>
        <div class="w-100 vh-100 overflow-hidden show__web__itemContainer">

            <div class="row">
            {{--
                We are building component (php artisan make:component Youtube/Items)
                in there you need aware giving the name... and then you can see
                (app/View/Components/Web/Items.php) whth (resources/views/components/web/items.blade.php)
            --}}

                <div class="col-4">
                   <x-web.items :favourites="$favourites" :webs="$webs" :auth="$auth" :link="$link" level="0"  type="Elementary"/>
                </div>

                <div class="col-4">
                    <x-web.items :favourites="$favourites" :webs="$webs" :auth="$auth" :link="$link" level="1" type="Intermediate"/>
                </div>

                <div class="col-4">
                    <x-web.items :favourites="$favourites" :webs="$webs" :auth="$auth" :link="$link" level="2" type="Advanced"/>
                </div>


            </div>

        </div>
@endsection


