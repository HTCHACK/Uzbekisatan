@extends('layouts.body')

@section('title')
    <title>{{__('lang.uzbekistan')}} | {{__('lang.contact')}}</title>
@endsection

@section('content')

    <section class="contact">
        <div class="container">


            <div class="contact__main">

                <div class="row">
                    <div class="col-md-6">
                        <div class="contact__map-container">
                            <div>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193719.60372944287!2d72.09064282123765!3d40.654822238128894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bc8e7e79c1f5c5%3A0xefe3af9c366863df!2z0JDRgdCw0LrQuNC90YHQutC40Lkg0YDQsNC50L7QvSwg0KPQt9Cx0LXQutC40YHRgtCw0L0!5e0!3m2!1sru!2s!4v1618053026633!5m2!1sru!2s"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div><!-- .contact__map -->
                        </div>
                    </div><!-- .col -->
                    <div class="col-md-6">
                        @if ($errors->any())
                            <div class="warning-msg">
                                <ul style="list-style:none;">
                                    @foreach ($errors->all() as $error)
                                        <li><i class="fa fa-warning"></i> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @elseif (session('success'))
                            <div class="success-msg">
                                <i class="fa fa-check"></i>
                                {{ session('success') }}
                            </div>
                        @endif
                        <h2 class="contact__title">{{__('lang.send_us_msg')}}</h2>
                        <div class="contact__desc">
                        </div>
                        <form class="contact-form contact-form--no-padding" method="POST"
                            action="{{ route('contacts.store') }}">
                            @csrf
                            <div class="contact-form__body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" class="contact-form__field contact-form__field--contact"
                                            placeholder="{{__('lang.name')}}" name="name" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="tel" class="contact-form__field contact-form__field--contact"
                                            placeholder="+(998)__-___-____" id="phone" name="phone_number">
                                    </div>
                                </div>
                                <textarea class="contact-form__field contact-form__comment contact-form__field--contact"
                                    cols="30" rows="4" placeholder="{{__('lang.message')}}.." name="message" required></textarea>
                                

                            </div><!-- .contact-form__body -->


                            <div class="contact-form__footer">
                                <input type="submit" class="contact-form__submit contact-form__submit--contact"
                                    value="{{__('lang.send')}}">
                            </div><!-- .contact-form__footer -->
                        </form><!-- .contact-form -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .contact__main -->
        </div>
    </section><!-- .contact -->

@endsection
