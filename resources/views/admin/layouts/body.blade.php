<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @yield('title')
    @include('admin.layouts.head')
</head>

<body class="">
    <div class="wrapper">
        @include('admin.layouts.menu')
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        @foreach ($languages as $lang)
            @if ($lang == 'uz')
                <li class="nav-item d-none d-sm-inline-block"><a
                        href="{{ url()->current() . '/?language=' . $lang }}" class="@if (app()->getLocale() == $lang) tilbolsa active @endif til">UZ</a>
                </li>

            @elseif($lang=='en')
                <li class="nav-item d-none d-sm-inline-block"><a
                        href="{{ url()->current() . '/?language=' . $lang }}" class="@if (app()->getLocale() == $lang) tilbolsa active @endif til">EN</a>
                </li>

            @elseif($lang=='ru')
                <li class="nav-item d-none d-sm-inline-block"><a
                        href="{{ url()->current() . '/?language=' . $lang }}" class="@if (app()->getLocale() == $lang) tilbolsa active @endif til">RUS</a>
                </li>
            @endif
        @endforeach

                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                </div>
            </nav>
            @yield('content')
        </div>
        @include('admin.layouts.footer')
    </div>
    @include('admin.layouts.script')
</body>

</html>
