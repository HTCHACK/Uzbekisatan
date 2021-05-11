@extends('layouts.body')
@section('title')
    <title>{{__('lang.uzbekistan')}} | {{__('lang.regions')}}</title>
@endsection

@section('content')
    @livewireStyles
    <section class="features_regions" id="asad">
        <div class="features__overlay_regions">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="feature">
                            <img src="{{ asset('assets/images/icon_search.png') }}" alt="Search" class="feature__icon">
                            <h3 class="feature__title">{{__('lang.regions')}}</h3>
                        </div><!-- .feature -->
                    </div><!-- .col -->

                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .features__overlay -->
    </section><!-- .features -->
    <section class="featured-listing">
        @livewire('search')
    </section>
    <!-- .featured-listing -->


    @livewireScripts
@endsection
