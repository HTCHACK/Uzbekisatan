<header class="header header--blue">
    <div class="container">
        <div class="header__main">
            <div class="header__logo">
                <a href="{{route('home')}}">
                    <h1 class="screen-reader-text">Uzbekistan</h1>
                    <img src="{{ asset('assets/images/map1.png') }}" alt="" width="40px">
                </a>
            </div><!-- .header__logo -->

            <div class="nav-mobile">
                <a href="#" class="nav-toggle">
                    <span></span>
                </a><!-- .nav-toggle -->
            </div><!-- .nav-mobile -->

            <div class="header__menu header__menu--v6">
                <ul class="header__nav">
                    <li
                        class="header__nav-item {{ Str::contains(Route::currentRouteName(), 'home') ? 'active' : null }}">
                        <a href="{{ route('home') }}"
                            class="header__nav-link header__nav-link--v2">{{ __('lang.home') }}</a>
                    </li>
                    <li
                        class="header__nav-item {{ Str::contains(Route::currentRouteName(), 'regionsuz') ? 'active' : null }}">
                        <a href="{{ route('regionsuz.index') }}"
                            class="header__nav-link header__nav-link--v2 ">{{__('lang.regions')}}</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="{{ route('mappage.map') }}" class="header__nav-link header__nav-link--v2">@lang('lang.map')</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="{{ route('galleriesuz.index') }}"
                            class="header__nav-link header__nav-link--v2">{{__('lang.gallery')}}</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="{{ route('contactsuz.index') }}" class="header__nav-link header__nav-link--v2">{{__('lang.contact')}}</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="" class="header__nav-link header__nav-link--v2">{{__('lang.language')}}</a>
                        <ul>
                            @foreach ($languages as $lang)
                                @if ($lang == 'uz')
                                    <li><a href="{{url()->current() . '/?language=' . $lang }}">Uzbek</a></li>
                                @elseif ($lang=='ru')
                                    <li><a href="{{url()->current() . '/?language=' . $lang }}">Russian</a></li>
                                @elseif($lang=='en')
                                    <li><a href="{{url()->current() . '/?language=' . $lang }}">English</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul><!-- .header__nav -->

            </div><!-- .header__menu -->
        </div><!-- .header__main -->
    </div><!-- .container -->
</header><!-- .header -->
