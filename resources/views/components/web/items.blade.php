<div class="w-100 text-center text-light my-3">
    <h4 class="m-0 fw-bold">{{$type}}</h4>
</div>
<div class="d-flex flex-wrap">
    @forelse($webs as $data)
        @if($data->type_id == $link && $data->level == $level)
            <div class=" animate__animated animate__bounceIn show__item__image p-0 shadow  m-2 position-relative">
                <a href="{{ route('wFavourite.store',$data->id) }}">
                    <i class="fa fa-star text-light  star__logo bg__star">
                        <div class="add__favourite text-nowrap  px-2 py-1">
                            add favourite
                        </div>
                    </i>
                </a>
                @foreach($favourites as $favourite)
                    @if($auth == $favourite->user_id)

                        @if($favourite->item_id == $data->id)
                            <i class="fa fa-star text-light star__logo active__favourite bg__star">
                                <div class="add__favourite text-nowrap  px-2 py-1">
                                    Added
                                </div>
                            </i>
                        @endif

                    @endif

                @endforeach
                <a href="{{ $data->title }}" target="_blank">
                    <img src="{{ asset('storage/webs/'.$data->photo) }}" class="hover__item__image w__item__image" alt="" height="50">
                </a>
            </div>
        @endif

    @empty
        <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
            <h2 class="text-success fw-bold">links are empty in this case <i class="fa fa-link-slash"></i></h2>
        </div>
    @endforelse
</div>
