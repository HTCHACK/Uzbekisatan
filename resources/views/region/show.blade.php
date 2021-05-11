@extends('layouts.body')
@section('title')
    <title>{{__('lang.uzbekistan')}} | {{__('lang.regions')}}</title>
@endsection
@section('content')


    <section class="main-listing" >
        <div class="section__header">
            <div class="section__header-overlay" style="
            background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,.7)),url('{{ asset('storage/' . $region->img) }}');
            background-position:center;
            background-repeat:no-repeat;
            background-size:cover;
            ">
                <div class="container">
                    <h1 class="section__title section__title--centered">{{ $region->name }} {{__('lang.region')}}</h1>
                </div><!-- .container -->
            </div><!-- .section__header-overlay -->
        </div><!-- .section__header -->
    </section>
    <section class="featured-listing">
        <div class="container">
            <div class="property__feature">
                <h3 class="property__feature-title property__feature-title--b-spacing">{{__('lang.about_district')}}</h3>
                <p>{!! $region->description !!}</p>

            </div><!-- .property__feature -->
            <h2 class="section__title">{{__('lang.districts')}}</h2>
            <div class="row">
                @foreach ($districts as $district)


                    <div class="col-md-4 featured-listing__container" style="padding-bottom:2rem">
                        <div class="listing">
                            <div class="item-grid__image-container">
                                <a href="{{route('districtsuz.show',$district->id)}}">
                                    <div class="item-grid__image-overlay"></div><!-- .item-grid__image-overlay -->
                                    <img src="{{ asset('storage/' . $district->img) }}"
                                        alt="Real House Luxury Villa" class="listing__img" style="height:250px">
                                    <span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                </a>
                            </div><!-- item-grid__image-container -->

                            <div class="item-grid__content-container">
                                <div class="listing__content">
                                    <h3 class="listing__title"><a href="{{route('districtsuz.show',$district->id)}}">{{ $district->name }}
                                            {{__('lang.district')}}</a></h3>
                                    <p class="listing__location"><span
                                            class="ion-ios-location-outline listing__location-icon"></span> {{$district->city}} {{__('lang.city')}} ,
                                    </p>
                                    <p class="listing__price">{{$district->population}} {{__('lang.population')}}</p>
                                    <div class="listing__details">
                                        <ul class="listing__stats">
                                            <li><span class="listing__figure">{{count($district->tourists)}}<sup></sup></span> {{__('lang.attraction')}}</li>
                                            <li><span class="listing__figure">{{count($district->hotels)}}</span> {{__('lang.hotels')}}</li>
                                        </ul><!-- .listing__stats -->
                                        <a href="{{route('districtsuz.show',$district->id)}}" class="listing__btn">{{__('lang.details')}} <span
                                                class="listing__btn-icon"><i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></span></a>
                                    </div><!-- .listing__details -->
                                </div><!-- .listing-content -->
                            </div><!-- .item-grid__content-container -->
                        </div><!-- .listing -->
                    </div><!-- .col -->
                @endforeach

            </div><!-- .row -->
            <div class="item-grid--centered">
            {{$districts->links()}}
            </div>
        </div><!-- .container -->
    </section><!-- .featured-listing -->


@endsection
