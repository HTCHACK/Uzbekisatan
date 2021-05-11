<div class="container">
    <div class="row" style="padding-bottom:3rem" >
        <div class="col-sm-4 featured-listing__container">
            <input type="text" class="listing-search__field" placeholder="{{__('lang.region')}}..." wire:model.debounce.300ms="searchName" />
        </div>
        <div class="col-sm-4 featured-listing__container">
            <input type="text" class="listing-search__field" placeholder="{{__('lang.population')}}..."
                wire:model.debounce.300ms="searchPopulation" />
        </div>
        <div class="col-sm-4 featured-listing__container">
            <input type="text" class="listing-search__field" placeholder="{{__('lang.city')}}..." wire:model.debounce.300ms="searchCenter" />
        </div>
    </div>
    <div class="row">
        @foreach ($regions as $region)

            <div class="col-md-4 featured-listing__container" style="padding-bottom:2rem">
                <div class="listing">
                    <div class="item-grid__image-container">
                        <a href="{{ route('regionsuz.show', $region->id) }}">
                            <div class="item-grid__image-overlay"></div><!-- .item-grid__image-overlay -->
                            <img src="{{ asset('storage/' . $region->img) }}" style="width:360px;height:250px"
                                alt="Real House Luxury Villa" class="listing__img">
                            <span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </div><!-- item-grid__image-container -->

                    <div class="item-grid__content-container">
                        <div class="listing__content">
                            <h3 class="listing__title"><a
                                    href="{{ route('regionsuz.show', $region->id) }}">{{ $region->name }}
                                    {{__('lang.region')}}</a></h3>
                            <p class="listing__location"><span
                                    class="ion-ios-location-outline listing__location-icon"></span>
                                {{ $region->city }} {{__('lang.city')}} ,
                            </p>
                            <p class="listing__price">{{ $region->population }} {{__('lang.population')}}</p>
                            <div class="listing__details">
                                <ul class="listing__stats">
                                    <li><span class="listing__figure">{{ count($region->hotels) }}<sup></sup></span>
                                        {{__('lang.hotels')}}</li>
                                    <li><span class="listing__figure">{{ count($region->districts) }}</span>
                                        {{__('lang.districts')}}</li>
                                </ul><!-- .listing__stats -->
                                <a href="{{ route('regionsuz.show', $region->id) }}" class="listing__btn">{{__('lang.details')}}
                                    <span class="listing__btn-icon"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i></span></a>
                            </div><!-- .listing__details -->
                        </div><!-- .listing-content -->
                    </div><!-- .item-grid__content-container -->
                </div><!-- .listing -->
            </div><!-- .col -->
        @endforeach
    </div><!-- .row -->

    <div class="item-grid--centered">
        {{ $regions->links('livewire.custom') }}
    </div>
</div>
