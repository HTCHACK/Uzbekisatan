@extends('layouts.body')

@section('title')
<title>{{__('lang.uzbekistan')}} | {{__('lang.attraction')}}</title>
@endsection
@section('content')

<section class="about-us">
    <div class="container">
      <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
        <li class="ht-breadcrumbs__item"><a href="{{route('home')}}" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">{{__('lang.home')}}</span></a></li>
      </ul><!-- ht-breadcrumb -->

      <div class="about-us__main">
        <div class="row">
          <main class="col-md-8 col-md-main">
            <div class="about-us__img">
              <img src="{{ asset('storage/' . $tourist->img) }}" width="100%" style="height:320px" alt="About us">
            </div><!-- .about-us__img -->
            <h1 class="about-us__title">{{$tourist->name}}</h1>
            <p>
                {!!$tourist->description!!}
            </p>
          </main><!-- .col -->
          <aside class="col-md-4 col-md-sidebar">
            <section class="widget">
              <form class="contact-form contact-form--bordered contact-form--wild-sand">
                <div class="contact-form__header">
                  <h3 class="contact-form__title">{{__('lang.send_us_msg')}}</h3>
                </div><!-- .contact-form__header -->

                <div class="contact-form__body">
                  <input type="text" class="contact-form__field" placeholder="{{__('lang.name')}}" name="name" required>
                  <input type="email" class="contact-form__field" placeholder="{{__('lang.email')}}" name="email" required>
                  <input type="tel" class="contact-form__field" placeholder="{{__('lang.phone')}}" name="phone number">
                  <textarea class="contact-form__field contact-form__comment" cols="30" rows="4" placeholder="{{__('lang.message')}}" name="comment" required></textarea>
                </div><!-- .contact-form__body -->

                <div class="contact-form__footer">
                  <input type="submit" class="contact-form__submit" name="submit" value="{{__('lang.send')}}">
                </div><!-- .contact-form__footer -->
              </form><!-- .contact-form -->
            </section><!-- .widget -->


          </aside><!-- .col -->
        </div><!-- .row -->
      </div><!-- .about-us__main -->
    </div><!-- .container -->
  </section><!-- .about-us -->



@endsection
