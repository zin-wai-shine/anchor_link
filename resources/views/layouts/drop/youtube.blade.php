<div
    class="youtube__item bg-primary animate__animated animate__fadeIn animate__faster py-5 display__action"
    id="youtubeItem"
>
    <i class="fa fa-close text-light itemClose" id="youtubeItemClose"></i>


        <div class="w-100 d-flex flex-column">

            @foreach(\App\Models\Category::all() as $category)
                <div class=" yCategory__case category__case  position-relative" id="categoryCase">

                    <div class="d-flex text-light  justify-content-between align-items-center  px-3 h5 m-0 w-100 yCategory__text category__text" id="yCategoryText">
                        <div>{{ $category->title }}</div>
                        <i class="fa fa-angle-right"></i>
                    </div>

                    <div class="type w-75 h-auto bg-primary category__child__container display__action"
                         id="categoryChildContainer"
                    >
                        @foreach(\App\Models\Type::all() as $type)
                                @if($category->id == $type->category_id)
                                    <div class="w-100 text-center category__child">
                                                <a href="{{ route('youtubeLink',$type->id) }}"
                                                   class="w-100 h-100 fw-bold d-flex justify-content-center align-items-center text-light text-decoration-none  animate__animated animate__zoomIn  animate__faster">
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
