@extends('layouts.body')
@section('title')
<title>Uzbekistan</title>
@endsection

@section('content')
<section class="error">
    <div class="container">
      <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
        <li class="ht-breadcrumbs__item"><a href="404.html#" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
        <li class="ht-breadcrumbs__item"><a href="404.html#" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Pages</span></a></li>
        <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page">404 Error</span></li>
      </ul><!-- ht-breadcrumb -->

      <div class="error-404__main">
        <div class="row">
          <div class="col-md-6">
            <img src="{{asset('assets/images/uploads/404.jpg')}}" alt="404">
          </div><!-- error-404__img -->

          <div class="col-md-6">
            <h1 class="error-404__title">Whoops!</h1>
            <div class="error-404__detail">
              <h2 class="error-404__explain">Looks like something's broken here.</h2>
              <p class="error-404__desc">The page you were looking for could not be found. Head back home, or</p>
            </div><!-- .error-404__detail -->

            <a href="404.html#" class="error-404__cta">Search</a>
          </div><!-- .error-404__content -->
        </div><!-- .row -->
      </div><!-- .error-404__main -->
    </div><!-- .container -->
  </section><!-- .error-404 -->

@endsection
