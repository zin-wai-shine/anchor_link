<div class="nav__container bg-primary">

    <div class="d-flex justify-content-between align-items-center w-100 h-100 px-5 ">

        <div class="page__logo">
            <a href="" class="text-decoration-none fw-bold text-light">AL</a>
        </div>

        <div class="user__container d-flex">
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
        </div>

    </div>

</div>
