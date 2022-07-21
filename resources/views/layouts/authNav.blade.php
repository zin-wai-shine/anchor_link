<div class="nav__container bg-primary">

        <div class="d-flex justify-content-between align-items-center w-100 h-100 px-5 ">

            <div class="page__logo">
                <a href="" class="text-decoration-none fw-bold text-light">AL</a>
            </div>

            <div class="dropLink__container d-flex align-items-center justify-content-between">
                <div class="home__page">
                    <a href="" class="text-decoration-none text-light fw-bold">Go To Home</a>
                </div>

                <div class="select__category">
                    <a href="" class="text-decoration-none text-light fw-bold">Travel To Webpage World</a>
                </div>

                <div class="select__category">
                    <a href="" class="text-decoration-none text-light fw-bold">Travel To Youtube World</a>
                </div>
            </div>

            <div class="user__container d-flex">
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
                    <div class="">
                        <span class="text-light fw-bold">{{ Auth::user()->name }}</span>
                        <select id="myselect" class="nice-select right open">
                            <option data-display="Select">Nothing</option>
                            <option value="1">Some option</option>
                            <option value="2">Another option</option>
                            <option value="3" disabled>A disabled option</option>
                            <option value="4">Potato</option>
                        </select>
                    </div>
                @endguest
            </div>

        </div>

</div>
