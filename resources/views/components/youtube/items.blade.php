<<div class="w-100 text-center text-light my-3">
    <h4 class="m-0 fw-bold">{{$type}}</h4>
</div>
<div class="d-flex flex-wrap show__each__yContainer">
    @forelse($items as $data)
        @if($data->type_id == $link && $data->level == $level)
            <div class=" animate__animated animate__bounceIn show__item__image p-0 shadow  mx-2 my-1 position-relative ">
                <a href="{{ route('favourite.store',$data->id) }}">
                    <i class="fa fa-star text-light star__logo">
                        <div class="add__favourite text-nowrap  px-2 py-1">
                            add favourite
                        </div>
                    </i>
                </a>

                {{-- "favourites()" means we are make table relationship in then( Item Model) --}}

                @foreach($favourites as $favourite)
                    @if($auth == $favourite->user_id)

                        @if($favourite->item_id == $data->id)
                            <i class="fa fa-star text-light star__logo active__favourite">
                                <div class="add__favourite text-nowrap  px-2 py-1">
                                    Added
                                </div>
                            </i>
                        @endif

                    @endif

                @endforeach
                <a href="{{ $data->title }}" target="_blank">
                    <img src="{{ asset('storage/youtube/'.$data->photo) }}" class="hover__item__image item__image" alt="">
                </a>
            </div>
        @endif


    @empty
        <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
            <h3 class=" fw-bold text-light">Link are empty in this case <i class="fa fa-link-slash"></i></h3>
        </div>
    @endforelse
</div>
