<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @yield('title')
    @include('layouts.head')
</head>

<body>
    <div id="page-loader">
        <div class="page-loader__logo">
            <img src="{{ asset('assets/images/map1.png') }}" alt="" width="60px">
        </div><!-- .page-loader__logo -->

        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div><!-- .sk-folding-cube -->
    </div>
    @if (Route::currentRouteName() != 'login')
        @include('layouts.menu')
    @endif
    @yield('content')
    @if (Route::currentRouteName() != 'login')
        @include('layouts.footer')
    @endif
    @include('layouts.scripts')

</body>

</html>
</body>

</html>
