@extends('layouts.body')

@section('content')

    <section class="sign-up">
        <div class="container">


            <div class="sign-up__container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="sign-up__header">
                            <h1 class="sign-up__textcontent">{{ __('Login') }}
                            </h1>
                        </div><!-- .sign-up__header -->

                        <div class="sign-up__main">
                            <form method="POST" action="{{ route('login') }}" class="sign-up__form is-visible">
                                @csrf

                                <label for="phone_number" class="sign-up__label">Phone Number</label>
                                <input type="number" value="{{ old('phone_number') }}"
                                    class="sign-up__field form-control @error('email') is-invalid @enderror"
                                    name="phone_number" id="phone_number" placeholder="994436224" required
                                    autocomplete="phone_number" autofocus>
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="log-in-password" class="sign-up__label">Password</label>
                                <input type="password"
                                    class="sign-up__field orm-control @error('password') is-invalid @enderror"
                                    name="password" id="log-in-password" placeholder="******" required
                                    autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label><br><br><br>
                                <button type="submit" class="sign-up__submit">{{ __('Login') }}</button>
                                @if (Route::has('password.request'))
                                    <a class="sign-up__link" style="margin-left: 10px;"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </form>


                        </div>
                    </div>
                </div><!-- .row -->
            </div><!-- .sign-up__container -->
        </div><!-- .container -->
    </section><!-- .sign-up -->
@endsection
