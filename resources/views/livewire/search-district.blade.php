<section class="main-listing__inner">
    <section class="listing-sort">
        <div class="container-fluid">
            <div class="listing-sort__inner">


                <p class="listing-sort__sort">
                    <label  class="listing-sort__label"><i class="fa fa-sort-amount-asc"
                            aria-hidden="true"></i> {{__('lang.searchby')}} </label>
                </p>
                <p class="listing-sort__sort" style="padding-left:0.5rem">
                    <input  type="text"  class="ht-field listing-sort__field"  placeholder="{{__('lang.city')}} ..." wire:model.debounce300ms="searchCity" style="background:#efefef"/>
                </p>
                <p class="listing-sort__sort" style="padding-left:0.5rem">
                    <input  type="text"  class="ht-field listing-sort__field"  placeholder="{{__('lang.district')}} ..." wire:model.debounce300ms="searchName" style="background:#efefef"/>
                </p>
            </div><!-- .listing-sort__inner -->
        </div><!-- .container -->
    </section><!-- .listing-sort -->

    <section class="main-listing__item-grid main-listing__item-grid--t-margin">
        @foreach ($districts as $district)


            <div class="item-grid__container">
                <div class="listing">
                    <div class="item-grid__image-container">
                        <a href="{{ route('districtsuz.show', $district->id) }}">
                            <div class="item-grid__image-overlay"></div><!-- .item-grid__image-overlay -->
                            <img src="{{ asset('storage/' . $district->img) }}" alt="Castalia Shibakoen"
                                class="listing__img" style="width:100%;height:180px">
                            <span class="listing__favorite"><i class="fa fa-heart-o"
                                    aria-hidden="true"></i></span>
                        </a>
                    </div><!-- .item-grid__image-container -->

                    <div class="item-grid__content-container">
                        <div class="listing__content">
                            <h3 class="listing__title"><a
                                    href="{{ route('districtsuz.show', $district->id) }}">{{ $district->name }}</a>
                            </h3>
                            <p class="listing__location"><span
                                    class="ion-ios-location-outline listing__location-icon"></span>
                                {{ $district->city }}</p>
                            <p class="listing__price">{{ $district->population }} {{__('lang.population')}}</p>
                            <div class="listing__details">
                                <ul class="listing__stats">
                                    <li><span
                                            class="listing__figure">{{ count($district->hotels) }}<sup></sup></span>
                                        {{__('lang.hotels')}}</li>
                                    <li><span
                                            class="listing__figure">{{ count($district->tourists) }}</span>
                                        {{__('lang.attraction')}}</li>
                                </ul><!-- .listing__stats -->
                                <a href="{{ route('districtsuz.show', $district->id) }}"
                                    class="listing__btn">{{__('lang.details')}} <span class="listing__btn-icon"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                            </div><!-- .listing__details -->
                        </div><!-- .listing-content -->
                    </div><!-- .item-grid__content-container -->
                </div><!-- .listing -->
            </div><!-- .col -->
        @endforeach



    </section><!-- .main-listing__item-grid -->

    <div class="item-grid--centered">
        {{ $districts->links('livewire.custom') }}
    </div>

</section>
