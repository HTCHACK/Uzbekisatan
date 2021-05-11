@extends('layouts.body')
@section('title')
    <title>{{__('lang.uzbekistan')}} | {{__('lang.gallery')}}</title>
@endsection

@section('content')

<section class="features_regions">
    <div class="features__overlay_regions">
        <div class="container">
            <div class="row">


                <div class="col-sm-12">
                    <div class="feature">
                        <h3 class="feature__title">{{__('lang.gallery')}}</h3>
                    </div><!-- .feature -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div>
    </div>
</section>
    <section class="item-grid">
        <div class="container">
            <div class="row">

                @foreach ($galleries as $gallery)
                    <div class="col-md-4 item-grid__container">
                        <div class="listing">
                            <div class="item-grid__image-container">
                                <a href="">
                                    <div class="item-grid__image-overlay"></div><!-- .item-grid__image-overlay -->
                                    <img src="{{ asset('storage/' . $gallery->img) }}" alt="{{ $gallery->name }}"
                                        class="listing__img" style="width:360px;height:250px">
                                </a>
                            </div><!-- .item-grid__image-container -->
                        </div><!-- .listing -->
                    </div><!-- .col -->
                @endforeach
                {{$galleries->links()}}
            </div><!-- .row -->


        </div><!-- .container -->
    </section><!-- .item-grid-3 -->


@endsection
