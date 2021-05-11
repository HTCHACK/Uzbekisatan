@extends('layouts.body')
@section('title')
    <title>Uzbekistan</title>
@endsection
@section('content')

    <section class="features">
        <div class="features__overlay">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="feature">
                  <a href="{{route('mappage.map')}}"><img src="{{asset('assets/images/icon_map.png')}}" alt="Map" class="feature__icon"></a>
                  <h3 class="feature__title">{{__('lang.choose_map')}}</h3>

                </div><!-- .feature -->
              </div><!-- .col -->

              <div class="col-sm-6">
                <div class="feature">
                  <a href="{{route('regionsuz.index')}}"><img src="{{asset('assets/images/icon_search.png')}}" alt="Search" class="feature__icon"></a>
                  <h3 class="feature__title">{{__('lang.choose_list')}}</h3>

                </div><!-- .feature -->
              </div><!-- .col -->

            </div><!-- .row -->
          </div><!-- .container -->
        </div><!-- .features__overlay -->
      </section><!-- .features -->

      
@endsection
