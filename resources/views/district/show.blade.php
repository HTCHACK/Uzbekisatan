@extends('layouts.body')

@section('title')

<title>{{__('lang.uzbekistan')}} | {{__('lang.district')}}</title>

@endsection

@section('content')


<section class="property">


    <div class="property__container">
        <div  style="
        background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,.7)),url('{{ asset('storage/' . $district->img) }}');
        background-position:center;
        background-repeat:no-repeat;
        background-size:cover;
        padding-top:15%;
        padding-bottom:15%
        ">
          <!--<ul class="property__controls">
            <li id="gallery" class="property__control property__control-gallery" data-content="#property-gallery">
              <i class="ion-camera property__control-icon" aria-hidden="true"></i>
            </li>
            <li class="property__control property__control-map" data-content="#property-map">
              <i class="ion-map property__control-icon" aria-hidden="true"></i>
            </li>
            <li class="property__control property__control-streetview" data-content="#property-streetview">
              <i class="ion-location property__control-icon" aria-hidden="true"></i>
            </li>
          </ul>-property__controls -->


        <!---<div id="property-map" class="property__map"></div>--property-map -->
      </div><!-- .property__placeholder -->

      <div class="container">
        <div class="row">
          <aside class="col-md-3">
            <div class="widget__container">


                <section class="widget widget--white widget--padding-20">
                    <h3 class="widget__title">{{__('lang.attraction')}}</h3>
                    @foreach ($tourists as $tourist)


                    <div class="similar-home">
                      <a href="{{route('touristsuz.show',$tourist->id)}}">
                        <div class="similar-home__image">
                        <div class="similar-home__overlay"></div><!-- .similar-home__overlay -->
                        <img src="{{ asset('storage/' . $tourist->img) }}" alt="Castalia Shibakoen" style="height:140px">
                        <span class="similar-home__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </div><!-- .similar-home__image -->
                        <div class="similar-home__content">
                          <h3 class="similar-home__title">{{$tourist->name}}</h3>
                          <span class="similar-home__price"></span>
                        </div><!-- .similar-home__content -->
                      </a>
                    </div><!-- .similar-home -->

                    @endforeach

                  </section>

              <section class="widget widget--white widget--padding-20">
                <h3 class="widget__title">{{__('lang.hotels')}}</h3>
                @foreach ($hotels as $hotel)


                <div class="similar-home">
                  <a href="{{route('hotelsuz.show',$hotel->id)}}">
                    <div class="similar-home__image">
                    <div class="similar-home__overlay"></div><!-- .similar-home__overlay -->
                    <img src="{{ asset('storage/' . $hotel->img) }}" alt="Castalia Shibakoen" style="height:140px">
                    <span class="similar-home__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                    </div><!-- .similar-home__image -->
                    <div class="similar-home__content">
                      <h3 class="similar-home__title">{{$hotel->name}}</h3>
                      <span class="similar-home__price"></span>
                    </div><!-- .similar-home__content -->
                  </a>
                </div><!-- .similar-home -->

                @endforeach

              </section><!-- .widget -->



            </div><!-- .widget__container -->
          </aside>

          <main class="col-md-9">
            <div class="property__feature-container">
              <div class="property__header property__header--v3">
                <div class="property__header-container">
                  <div class="property__primary">
                    <div class="property__title property__title--b-margin">
                      <div class="property__meta">
                        <span class="property__offer"></span><span class="property__offer"></span>
                        <span class="property__offer"></span><span class="property__offer"></span>
                      </div><!-- .property__meta -->
                      <h2 class="property__name">{{$district->name}}</h2>
                      <span class="property__address"><i class="ion-ios-location-outline property__address-icon"></i>{{$district->city}}</span>
                    </div><!-- .property__title -->

                    <div class="property__details property__main-item">
                      <ul class="property__stats">
                        <li class="property__stat"><span class="property__figure">{{count($district->hotels)}}<sup></sup></span> {{__('lang.hotels')}}</li>
                        <li class="property__stat"><span class="property__figure">{{count($district->tourists)}}</span> {{__('lang.attraction')}}</li>
                        <li class="property__stat"><span class="property__figure">{{$district->population}}</span> {{__('lang.population')}}</li>
                      </ul><!-- .listing__stats -->
                    </div><!-- .property__details -->
                  </div><!-- .property__primary -->


                </div><!-- .property__header-container -->
              </div><!-- .property__header -->



              <div class="property__feature">
                <h3 class="property__feature-title property__feature-title--b-spacing">{{__('lang.about_district')}}</h3>
            <p>{!!$district->description!!}
            </div>


            </div><!-- .property__feature-container -->
          </main>
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- .property__container -->
</section><!-- .property -->

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="pswp__bg"></div><!-- .pswp__bg -->
  <div class="pswp__scroll-wrap">
    <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
    </div><!-- pswp__container -->

    <div class="pswp__ui pswp__ui--hidden">
      <div class="pswp__top-bar">
        <div class="pswp__counter"></div><!-- .pswp__counter -->

        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

        <div class="pswp__preloader">
          <div class="pswp__preloader__icn">
            <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div><!-- .pswp__preloader__donut -->
            </div><!-- .pswp__preloader__cut -->
          </div><!-- .pswp__preloader__icon -->
        </div><!-- pswp__preloader -->
      </div><!-- .pswp__top-bar -->

      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button><!-- .pswp__button -->
      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button><!-- .pswp__button -->

      <div class="pswp__caption">
        <div class="pswp__caption__center"></div><!-- .pswp__caption__center -->
      </div><!-- .pswp__caption -->
    </div><!-- .pswp__ui -->
  </div><!-- .pswp__scroll-wrap -->
</div><!-- .pswp -->





@endsection
