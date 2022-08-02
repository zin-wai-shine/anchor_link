<div class="nav__container bg-primary">

        <div class="d-flex justify-content-between align-items-center w-100 h-100">

            <div class="page__logo">
                <a href="{{ route('home') }}" class="text-decoration-none fw-bold text-light mx-3">L >.....> L</a>
            </div>

            <div class="dropLink__container d-flex align-items-center justify-content-between">
                <div class="home__page">
                    <a href="{{ route('home') }}" class="text-decoration-none text-light fw-bold home__logo__container position-relative">
                        <i class="fa fa-house mx-3"></i>
                        <div class="hover__home__text text-nowrap">
                            Home
                        </div>
                    </a>

                </div>

            {{--WEB PAGE ACTION--}}
               <div class="d-flex align-items-center">

                   <a href="{{ route('wFavourite.index') }}" class="favourite__star__logo">
                       <div class="start__logo__container d-flex justify-content-center align-items-center">
                           <i class="fa fa-star active__favourite text-center"></i>
                       </div>
                       <div class="hover__favourite__text text-nowrap">
                           your favourite webpage links
                       </div>
                   </a>

                   <div class="mx-3"></div>

                   <div class="select__category web__drop">
                       <div class="text-decoration-none text-light fw-bold nav__link " id="clickWeb">
                           Learn By Webpage  <i class="fa fa-link"></i>
                           <i class="fa fa-angle-down mx-3"></i>
                       </div>
                       @include('layouts.drop.web')
                   </div>
               </div>

            {{--YOUTUBE PAGE ACTION--}}
                <div class="d-flex align-items-center">

                    <a href="{{ route('favourite.index') }}" class=" favourite__star__logo">
                        <div class="start__logo__container d-flex justify-content-center align-items-center">
                            <i class="fa fa-star active__favourite text-center"></i>
                        </div>
                        <div class="hover__favourite__text text-nowrap">
                            your favourite youtube links
                        </div>
                    </a>

                    <div class="mx-3"></div>

                    <div class="select__category youtube__drop">
                        <div class="text-decoration-none text-light fw-bold nav__link " id="clickYoutube">
                            Learn By Youtube  <i class="fa fa-link"></i>
                            <i class="fa fa-angle-down mx-3"></i>
                        </div>
                        @include('layouts.drop.youtube')
                    </div>

                </div>

            </div>

        {{--LOGIN AND REGISTER BUTTON--}}
            <div class="user__container d-flex align-items-center">
                @guest

                    @if (Route::has('login'))
                        <li class="">
                            <a class="text-light text-decoration-none fw-bold" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="">
                            <a class="text-light text-decoration-none fw-bold" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif

                @else

                    <div class="d-flex align-items-center">

                        <span class="text-light fw-bold mx-2">{{ Auth::user()->name }}</span>
                        <div
                            id="profileClick"
                            class="profile__logo profile__status position-relative"
                            style="background-image:url(
                            {{ \Illuminate\Support\Facades\Auth::user()->logo == "profile.png"
                                ? asset('images/'.\Illuminate\Support\Facades\Auth::user()->logo)
                                : asset('storage/profiles/'.\Illuminate\Support\Facades\Auth::user()->logo)
                                }})"
                        >
                            <div class="profile__hover__text">
                                Your Profile
                            </div>
                        </div>



              {{--  MANAGE PROFILE --}}
                       @include('layouts.drop.profile')


                {{-- MANAGE DROPDOWN --}}

{{--                        --}}{{--CREATE ITEMS DROPDOWN--}}{{--
                            @include('layouts.drop.createItem')
                        --}}{{--CREATE CATEGORY DROPDOWN--}}{{--
                            @include('layouts.drop.createCategory')--}}

                        <div class="mx-3">
                            <div class=" position-relative manage__logo__container">
                                   <div class="manage__logo d-flex justify-content-center align-items-center">
                                       <i class="fa fa-gear text-light w-100 text-center" id="manageLogo"></i>
                                   </div>
                                 <div class="setting__text">Setting</div>
                            </div>
                        </div>

                        <div class="manage__dropdown  rainbow px-1 py-2 bg-primary animate__animated animate__fadeIn animate__faster display__action"
                            id="manageDropdown"
                        >
                            <i class="fa fa-close text-light manage__close" id="manageClose"></i>

{{--                 CREATE CATEGORY
                            <a href="" class="manage__item mt-4 text-decoration-none w-100
                                    bg-light text-primary py-1 px-3 d-flex justify-content-between
                                    align-items-center"
                                 id="clickCreateCategory"
                            >
                                <span>Create Category</span>
                                <i class="fa fa-plus-circle"></i>
                            </a>
                            ABOVE OF CREATE CATEGORY DROPDOWN--}}

               {{-- CREATE ITEMS --}}
                            <a href="{{ route("manage") }}" target="_blank" class="manage__item mb-1 mt-4 text-decoration-none w-100
                                    bg-light text-primary px-3 d-flex justify-content-between
                                    align-items-center"
                                 id="clickCreateItem"
                            >
                                <span>Manage</span>
                                <i class="fa fa-plus-circle"></i>
                            </a>
                            {{--ABOVE OF CREATE ITEMS DROPDOWN--}}

                {{--LOGOUT--}}
                            <a class="manage__item text-decoration-none w-100 bg-danger text-light px-3 d-flex justify-content-between align-items-center" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <span class="">logout</span>
                                <i class="fa fa-arrow-right-from-bracket"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>





                    </div>

                @endguest
            </div>

        </div>

</div>
