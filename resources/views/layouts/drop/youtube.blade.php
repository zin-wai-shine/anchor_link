<div
    class="youtube__item bg-primary animate__animated animate__fadeIn animate__faster px-3 py-5 display__action"
    id="youtubeItem"
>
    <i class="fa fa-close text-light itemClose" id="youtubeItemClose"></i>


        <div class="w-100 d-flex flex-column">
            @foreach(\App\Models\Category::all() as $category)
                <div class="text-primary category__case rounded position-relative mt-2" id="categoryCase">
                    <div class="d-flex  justify-content-between align-items-center bg-light border border-light px-3 h5 w-100 category__text h-100">
                        <div>{{ $category->title }}</div>
                        <i class="fa fa-angle-right"></i>
                    </div>
                    <div class="type p-2 bg-primary category__child__container rounded "
                         id="categoryChildContainer"
                    >
                        @foreach(\App\Models\Type::all() as $type)
                                @if($category->id == $type->category_id)
                                    <div class="w-100 bg-light text-center category__child mt-1">
                                                <a href="{{ route('showLink',$type->id) }}"
                                                   class="w-100 h-100 text-primary text-decoration-none  animate__animated animate__zoomIn  animate__faster">
                                                    {{ $type->title }}
                                                </a>
                                    </div>
                                @endif
                            @endforeach
                    </div>
                </div>
                <div class="mx-1"></div>
            @endforeach
        </div>



</div>
