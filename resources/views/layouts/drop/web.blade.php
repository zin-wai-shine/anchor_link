    <div class="web__item bg-primary animate__animated animate__fadeIn animate__faster pt-5 pb-3 display__action" id="webItem">
        <i class="fa fa-close text-light itemClose" id="wetItemClose"></i>

        <div class="row">
            <div class="col-6 web__category__firstContainer">
                <div class="w-100 d-flex flex-column">

               {{-- In there we are build View shar (can see in AppServiceProvider.php)......--}}
                    @foreach($shareCategory as $category)
                        <div class="text-primary wCategory__case__first category__case position-relative" id="categoryCase">
                            @if($category->column == 1)
                                <div class="d-flex text-light  justify-content-between align-items-center  px-3 h5 m-0 w-100 wCategory__text category__text" id="wCategoryText">
                                    <i class="fa fa-angle-left"></i>
                                    <div class="mx-2">{{ $category->title }}</div>
                                </div>
                            @endif
                            <div class="type type__first w-75 h-auto bg-primary category__child__container"
                                 id="categoryChildContainer"
                            >
                                @foreach($shareType as $type)
                                    @if($category->id == $type->category_id)
                                        <div class="w-100 text-center category__child">
                                            <a href="{{ route('webLink',$type->slug) }}"
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

            <div class="col-6">
                <div class="w-100 d-flex flex-column">

            {{-- In there we are build View shar (can see in AppServiceProvider.php)......--}}
                    @foreach($shareCategory as $category)
                        <div class="text-primary wCategory__case__second category__case position-relative" id="categoryCase">
                            @if($category->column == 2)
                                <div class="d-flex text-light  justify-content-between align-items-center  px-3 h5 m-0 w-100 wCategory__text category__text" id="wCategoryText">
                                    <div class="mx-2">{{ $category->title }}</div>
                                    <i class="fa fa-angle-right"></i>
                                </div>
                            @endif
                            <div class="type type__second w-75 h-auto bg-primary category__child__container"
                                 id="categoryChildContainer"
                            >
                                @foreach($shareType as $type)
                                    @if($category->id == $type->category_id)
                                        <div class="w-100 text-center category__child">
                                            <a href="{{ route('webLink',$type->slug) }}"
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
        </div>
    </div>

