@extends('layouts.body')
@section('title')
    <title>{{__('lang.uzbekistan')}} | {{__('lang.regions')}}</title>
@endsection
@section('content')
@livewireStyles
    <section class="main-listing main-listing--wild-sand">
        <section class="listing-search">
            <div class="container">
                <form action="index.html" method="get" class="listing-search__form">
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="listing-type" class="listing-search__label">Listing Types</label>
                            <select name="listing-type" id="listing-type" class="ht-field">
                                <option value="All" selected>All Listing Type</option>
                                <option value="For Rent">For Rent</option>
                                <option value="For Sale">For Sale</option>
                                <option value="Open House">Open House</option>
                            </select>
                        </div><!-- .col -->

                        <div class="col-sm-3">
                            <label for="offer-type" class="listing-search__label">Offer Type</label>
                            <select name="offer-type" id="offer-type" class="ht-field">
                                <option value="All" selected>All Offer Type</option>
                                <option value="For Rent">For Rent</option>
                                <option value="For Sale">For Sale</option>
                                <option value="Open House">Open House</option>
                            </select>
                        </div><!-- .col -->

                        <div class="col-sm-3">
                            <label for="city" class="listing-search__label">Select Your District</label>
                            <select name="city" id="city" class="ht-field">
                                <option value="All" selected>All District</option>
                                @foreach ($districts as $district)
                                <option value="{{$district->name}}">{{$district->name}}</option>
                                @endforeach
                            </select>
                        </div><!-- .col -->

                        <div class="col-sm-3">
                            <label for="listing-btn" class="listing-search__label listing-search__label--hidden">Advanced
                                Search</label>
                            <a href="listing_4.html#" id="listing-btn" class="listing-search__btn">Advanced Search</a>
                        </div><!-- .col -->
                    </div><!-- row -->

                    <div class="listing-search__advance">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="keywords" class="listing-search__label">Keyword</label>
                                <input type="text" id="keywords" class="listing-search__field"
                                    placeholder="Type your keywords...">
                            </div><!-- .col -->

                            <div class="col-sm-3">
                                <label for="min-price" class="listing-search__label">Min Price</label>
                                <select name="min-price" id="min-price" class="ht-field">
                                    <option value="Unlimited" selected>Unlimited</option>
                                    <option value="$1,000">$1,000</option>
                                    <option value="$10,000">$10,000</option>
                                    <option value="$20,000">$20,000</option>
                                    <option value="$50,000">$50,000</option>
                                    <option value="$100,000">$100,000</option>
                                </select>
                            </div><!-- .col -->

                            <div class="col-sm-3">
                                <label for="bedrooms" class="listing-search__label">Bedrooms</label>
                                <select name="bedrooms" id="bedrooms" class="ht-field">
                                    <option value="Any" selected>Any</option>
                                    <option value="1">01 bedroom(s)</option>
                                    <option value="2">02 bedroom(s)</option>
                                    <option value="3">03 bedroom(s)</option>
                                    <option value="4">04 bedroom(s)</option>
                                    <option value="5">05 bedroom(s)</option>
                                    <option value="6">06 bedroom(s)</option>
                                    <option value="7">07 bedroom(s)</option>
                                </select>
                            </div><!-- .col -->

                            <div class="col-sm-3">
                                <label for="bathrooms" class="listing-search__label">Bathrooms</label>
                                <select name="bathrooms" id="bathrooms" class="ht-field">
                                    <option value="Any" selected>Any</option>
                                    <option value="1">01 bathroom(s)</option>
                                    <option value="2">02 bathroom(s)</option>
                                    <option value="3">03 bathroom(s)</option>
                                    <option value="4">04 bathroom(s)</option>
                                    <option value="5">05 bathroom(s)</option>
                                    <option value="6">06 bathroom(s)</option>
                                    <option value="7">07 bathroom(s)</option>
                                </select>
                            </div><!-- .col -->

                            <div class="col-sm-3">
                                <label for="property-size" class="listing-search__label">Property Size</label>
                                <div class="listing-search__amount">
                                    <label for="property-amount">Sq.Ft</label>
                                    <span id="property-amount"></span>
                                </div><!-- listing-search__amount -->
                                <div id="property-size" class="listing-search__slider listing-search__property-size"></div>
                            </div><!-- .col -->

                            <div class="col-sm-3">
                                <label for="lot-size" class="listing-search__label">Lot Size</label>
                                <div class="listing-search__amount">
                                    <label for="lot-amount">Sq.Ft</label>
                                    <span id="lot-amount"></span>
                                </div><!-- .listing-search__amount -->
                                <div id="lot-size" class="listing-search__slider listing-search__lot-size"></div>
                            </div><!-- .col -->

                            <div class="col-sm-3">
                                <label for="garages" class="listing-search__label">Garages</label>
                                <select name="garages" id="garages" class="ht-field">
                                    <option value="Any" selected>Any</option>
                                    <option value="1">01 garage(s)</option>
                                    <option value="2">02 garage(s)</option>
                                    <option value="3">03 garage(s)</option>
                                    <option value="4">04 garage(s)</option>
                                </select>
                            </div><!-- .col -->

                            <div class="col-sm-3">
                                <label for="tenure" class="listing-search__label">Tenure</label>
                                <select name="tenure" id="tenure" class="ht-field">
                                    <option value="Any" selected>Any</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div><!-- .col -->
                        </div><!-- .row -->

                        <div class="listing-search__more">
                            <a class="listing-search__more-btn" href="listing_4.html#">Additional Features</a>

                            <div class="listing-search__more-inner">
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="parking-garage" id="parking-garage"
                                                class="listing-search__more-field">
                                            <label for="parking-garage" class="listing-search__more-label">Parking/Garage
                                                (26)</label>
                                        </div><!-- .listing-search__more-wrapper -->

                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="balcony-terrace" id="balcony-terrace"
                                                class="listing-search__more-field">
                                            <label for="balcony-terrace" class="listing-search__more-label">Balcony/Terrace
                                                (24)</label>
                                        </div>

                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="garden" id="garden"
                                                class="listing-search__more-field">
                                            <label for="garden" class="listing-search__more-label">Garden (26)</label>
                                        </div>

                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="porter-security" id="porter-security"
                                                class="listing-search__more-field">
                                            <label for="porter-security" class="listing-search__more-label">Porter/Security
                                                (24)</label>
                                        </div>

                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="fireplace" id="fireplace"
                                                class="listing-search__more-field">
                                            <label for="fireplace" class="listing-search__more-label">Fireplace (23)</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-3">
                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="rural-secluded" id="rural-secluded"
                                                class="listing-search__more-field">
                                            <label for="rural-secluded" class="listing-search__more-label">Rural/Secluded
                                                (21)</label>
                                        </div>

                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="air-conditioning" id="air-conditioning"
                                                class="listing-search__more-field">
                                            <label for="air-conditioning" class="listing-search__more-label">Air
                                                Conditioning (22)</label>
                                        </div>

                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="lawn" id="lawn" class="listing-search__more-field">
                                            <label for="lawn" class="listing-search__more-label">Lawn (4)</label>
                                        </div>

                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="swimming-pool" id="swimming-pool"
                                                class="listing-search__more-field">
                                            <label for="swimming-pool" class="listing-search__more-label">Swimming Pool
                                                (4)</label>
                                        </div>

                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="barbecue" id="barbecue"
                                                class="listing-search__more-field">
                                            <label for="barbecue" class="listing-search__more-label">Barbecue (23)</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-3">
                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="microwave" id="microwave"
                                                class="listing-search__more-field">
                                            <label for="microwave" class="listing-search__more-label">Microwave (24)</label>
                                        </div>

                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="tv-cable" id="tv-cable"
                                                class="listing-search__more-field">
                                            <label for="tv-cable" class="listing-search__more-label">TV Cable (5)</label>
                                        </div>

                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="washer" id="washer"
                                                class="listing-search__more-field">
                                            <label for="washer" class="listing-search__more-label">Washer (24)</label>
                                        </div>

                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="outdoor-shower" id="outdoor-shower"
                                                class="listing-search__more-field">
                                            <label for="outdoor-shower" class="listing-search__more-label">Outdoor Shower
                                                (22)</label>
                                        </div>

                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="gym" id="gym" class="listing-search__more-field">
                                            <label for="gym" class="listing-search__more-label">Gym (4)</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-3">
                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="window-coverings" id="window-coverings"
                                                class="listing-search__more-field">
                                            <label for="window-coverings" class="listing-search__more-label">Window
                                                Coverings (21)</label>
                                        </div>

                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="dryer" id="dryer"
                                                class="listing-search__more-field">
                                            <label for="dryer" class="listing-search__more-label">Dryer (21)</label>
                                        </div>

                                        <div class="listing-search__more-wrapper">
                                            <input type="checkbox" name="laundry" id="laundry"
                                                class="listing-search__more-field">
                                            <label for="laundry" class="listing-search__more-label">Laundry (24)</label>
                                        </div>
                                    </div>
                                </div><!-- .row -->
                            </div><!-- .listing-search__more-inner -->
                        </div><!-- .listing-search__more -->
                    </div><!-- .listing-search__advance -->
                </form><!-- .listing-search__form -->
            </div><!-- .container -->
        </section><!-- .listing-search -->

        <div class="main-listing__container">
            <div class="main-listing--col-md-6">
                <section class="map-container map-container--sticky" style="background:rgba(11, 33, 76, 0.9);">
                    <!--<div id="map" class="map--default">

                                                                                                                                                                                                  </div> -->

                    <div class="mapdiv"><a href="{{ route('regionsuz.show', $region->id) }}">
                        @if ($region->name == 'Orol')
                            <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                mapsvg:geoViewBox="55.997099 45.594337 73.133286 37.176101" width="360" height="300">

                                <a xlink:title="Aral Sea" xlink:href="map_region_detail.html">
                                    <path
                                        d="m 180 150 -3.4,6.4199998 -1,3.43 -0.61,3.82 2.02,2.82 1,3.02 -1.81,2.62 -2.82,5.23 -1.41,2.21 2.22,-1 1.61,-2.02 1.41,-1 3.82,0.6 2.42,0.6 0.2,3.23 -2.82,0.4 -0.2,8.25 -2.01,-1.01 -1.81,0.41 -1.82,2.01 0.61,2.42 3.22,2.61 3.02,1.81 -1.01,3.23 0,4.02 -1.41,3.02 -2.82,1.01 -1.81,-1.01 -1.2,-2.82 -1.62,0 0,3.42 1.21,1.61 0.2,6.24 0.41,4.03 3.02,1.81 2.21,-2.41 2.42,-4.23 1.81,-4.03 2.41,-1.41 3.02,1.61 2.42,-0.8 -0.81,-2.82 -1.21,-2.62 -0.8,-4.62 0.6,-2.62 1.41,-1.41 1.81,-0.2 2.22,0 1,-4.23 2.82,-6.04 3.22,-5.43 2.02,-5.84 -0.36,-7.73 0,0 56.78,40.99 0,0 -3.89,0.36 1.01,2.01 1.61,1.41 1.01,1.41 -0.81,3.82 -2.82,5.03 -4.63,4.63 -6.24,5.04 -1.61,3.42 1.01,1.81 -1.21,1.81 -3.42,0 -0.6,2.62 -7.05,2.819998 -4.83,1.61 -5.03,1 -3.63,-1.21 -2.01,0.61 -3.82,0.8 -1.21,-1 -2.42,-1.41 -3.62,2.21 -4.43,-0.2 -6.04,-0.6 -3.02,-0.41 -2.61,-2.21 -5.24,-0.799998 -1.81,-1.82 -2.21,-1 -1.01,-3.63 2.82,-1.81 1.81,-2.21 -0.8,-3.63 -1.61,-1 -2.62,1.21 -5.03,1.61 -1.82,0.8 -2.41,-0.2 -1.61,0.4 -1.01,2.02 -2.01,-0.61 -2.62,-2.01 -3.02,-0.2 -4.02,-1.61 -3.02,-1.41 -2.22,-2.62 -2.21,-5.23 -0.4,-5.24 3.02,-8.45 0.4,-2.62 -2.01,-3.62 -1.21,-2.82 -0.2,-6.04 0.4,-4.63 2.01,-5.43 3.02,-4.83 1.21,-5.64 2.62,-2.62 0.2,-5.83 2.01,-3.22 3.83,-3.43 0.2,-4.8299998 1.61,-3.22 0.17,-3.55 0,0"
                                        class="water" title="" id="UZ-AS" />
                                </a>
                            </svg>
                        @elseif ($region->name == 'Andijon')
                            <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                mapsvg:geoViewBox="55.997099 45.594337 73.133286 37.176101" width="480" height="300">
                                <path
                                    d="m 180,260 -0.66,-21.66 -1.86,-5.04 -24.06,
                                    -7.68 -13.5,-2.7 -1.44,1.02 -1.98,0 -55.5,-9.42 -13.5,
                                    -20.75 -3.71,-3.9 -18.12,-9.36 -24.96,-3.6 -1.2,8.7 -18.18,
                                    -26.8 0,0 11.4,-7.26 -13.2,-16.02 12.18,-11.4 7.14,-4.8 51.54,
                                    -13.14 22,0.18 3.42,1.56 4.38,3.36 19.98,4.43 8.76,0.9 29.28,-2.64 3.18,
                                    -1.62 2.4,-2.7 7.56,-35.22 0,0 1.44,0.9 4.02,-0.06 17.1,-8.1 4.56,-1.08 7.32,
                                    -5.52 6.78,-7.43 4.14,-0.42 0.9,1.08 7.92,2.1 5.82,4.08 5.34,0.3 4.74,2.4 5.16,
                                    -0.54 4.68,1.02 3.96,1.92 1.56,7.02 -0.6,3.9 -4.92,9.12 0.06,1.32 1.08,1.32 0.9,-0.12 2.76,
                                    -4.32 1.38,-0.3 1.44,-0.18 2.82,1.44 2.52,2.34 7.92,13.6 3.48,4.14 1.2,12 4.62,3.3 7.2,2.09 7.98,
                                    3.9 9.42,3.48 3.3,-1.2 10.92,1.74 5.64,-2.4 5.52,-1.14 4.08,1.26 13.26,-3.36 4.32,0.12 4.92,2.7 9.12,
                                    10.02 2.28,6.3 1.02,0.9 3.96,0.96 3.06,-0.24 3.9,-1.5 1.14,-1.8 3.84,-1.98 2.4,-2.88 3.48,-0.12 2.09,
                                    -1.26 -0.9,-3.24 -3.48,-2.4 -2.1,-2.94 2.58,-8.52 1.38,-1.38 2.58,0.06 6.06,8.76 5.4,1.2 6.78,4.56 5.7,
                                    -3.12 9,0.42 2.58,2.28 1.38,5.82 -2.58,10.44 -2.58,3.66 -2.7,1.86 -17.28,7.26 -9.95,1.44 -3.78,5.22 -6.96,
                                    4.8 -8.39,4.68 -4.86,1.02 -0.3,1.38 -5.22,1.2 -8.04,4.43 -6,5.76 -9.24,3 -6.78,-0.9 -4.74,0.66 -1.86,
                                    2.16 -0.3,1.92 0.84,2.64 2.28,2.76 0.18,2.04 -4.43,3.66 -0.6,2.52 1.08,16.44 -0.42,6.42 -3.9,1.26 -3.12,
                                    -1.8 -5.76,-5.88 -9,-2.04 -1.92,2.21 -0.3,4.56 -5.22,3.78 -0.84,1.44 -1.26,8.4 -3.5,6.42 -4.02,0.96 -2.52,
                                    -0.24 -8.34,-6.72 -8.82,-0.42 -4.14,-2.28 -5.46,-5.22 -3.06,-1.08 -4.08,1.74 -1.26,-0.24 -8.22,-10.02 -3.3,
                                    -6 -8.34,-7.02 -2.4,-1.14 -5.88,2.58 -6.6,0.06 -2.4,3.24 0.9,1.68 6.72,2.28 1.92,1.85 2.76,6.18 6.3,1.92 2.46,
                                    3.36 -0.24,3.3 -2.1,2.4 -6.18,0.6 -1.62,1.14 -1.02,3.06 0.84,2.7 6.48,-0.66 1.56,2.22 1.39,8.82 2.94,3.18 1.44,
                                    4.5 -6.84,16.02 1.68,4.97 -0.42,3.84 -1.02,0.96 -1.8,0.36 -8.88,-2.28 -2.7,-1.62 -9.3,-9.6 -3.9,-2.76 -1.74,

                                    -0.6 -4.8,1.8 -1.92,-1.26 -3,-4.26 -1.74,-1.26 -5.4,0.06 -1.62,-0.66 -1.08,-2.4 1.98,-6.78 -0.36,-1.5 -2.7,-1.62 z"
                                    title="" id="UZ-AN" />
                            </svg>
                        @elseif ($region->name == 'Qoraqalpoq')
                            <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                mapsvg:geoViewBox="55.997099 45.594337 73.133286 37.176101" width="400" height="400">
                                <path
                                    d="m 230,100 0.35,7.72 -2.01,5.84 -3.22,5.44 -2.82,6.04 -1.01,4.23 -2.21,0 -1.81,0.2 -1.41,1.41 -0.6,2.62 0.81,4.63 1.21,2.62 0.81,2.82 -2.42,0.81 -3.02,-1.61 -2.42,1.41 -1.81,4.03 -2.42,4.23 -2.21,2.42 -3.02,-1.81 -0.4,-4.03 -0.2,-6.24 -1.21,-1.61 0,-3.45 1.61,0 1.21,2.82 1.81,1.01 2.82,-1.01 1.41,-3.02 0,-4.03 1.01,-3.22 -3.03,-1.81 -3.22,-2.62 -0.6,-2.42 1.81,-2.01 1.81,-0.4 2.01,1.01 0.2,-8.25 2.82,-0.4 -0.2,-3.22 -2.42,-0.6 -3.82,-0.6 -1.41,1.01 -1.61,2.01 -2.21,1.01 1.41,-2.21 2.82,-5.23 1.81,-2.62 -1.01,-3.02 -2.01,-2.82 0.6,-3.82 1.01,-3.42 3.4,-6.4299998 0,0 23.01,16.5899998 z m -38.32,-23.3999998 -0.18,3.55 -1.61,3.22 -0.2,4.8299998 -3.82,3.42 -2.01,3.22 -0.2,5.84 -2.62,2.62 -1.21,5.64 -3.02,4.83 -2.01,5.43 -0.4,4.63 0.2,6.04 1.21,2.82 2.01,3.62 -0.4,2.62 -3.02,8.45 0.4,5.23 2.21,5.23 2.21,2.62 3.02,1.41 4.03,1.61 3.02,0.2 2.62,2.01 2.01,0.6 1.01,-2.01 1.61,-0.4 2.42,0.2 1.81,-0.81 5.03,-1.61 2.62,-1.21 1.61,1.01 0.81,3.62 -1.81,2.21 -2.83,1.83 1.01,3.62 2.21,1.01 1.81,1.81 5.23,0.809998 2.62,2.21 3.02,0.4 6.04,0.6 4.43,0.2 3.62,-2.21 2.42,1.41 1.21,1.01 3.82,-0.81 2.01,-0.6 3.62,1.21 5.03,-1.01 4.83,-1.61 7.05,-2.819998 0.6,-2.62 3.42,0 1.21,-1.81 -1,-1.8 1.61,-3.42 6.24,-5.03 4.63,-4.63 2.82,-5.03 0.81,-3.82 -1.01,-1.41 -1.61,-1.41 -1.01,-2.01 3.88,-0.35 0,0 21.68,15.65 2.21,7.05 6.07,6.13 6.39,7.709998 0.29,0.64 0.64,0.59 2.53,3.01 5.7,7.01 16.83,20.9 1.63,1.56 0.55,0.05 0,0 5.85,10.5 15.43,4.18 -27.66,52.2 -1.26,15.77 6.74,12.15 -12.85,7.1 20.92,28.67 0,0 13.79,19.18 -10.94,5.06 0,0 -2.55,1.21 -0.65,-0.19 -0.27,-0.22 -4.56,-7.41 -1.5,-2.77 -8,-8.81 -3.08,-1.91 -3.52,-1.86 -8.95,-2.06 -3.04,-0.02 -0.62,0.2 -1.39,0.77 -0.78,0.89 -1.17,2.3 -0.51,1.87 -0.72,0.77 -1.49,0 -2.25,-1.44 -0.25,-1.16 -0.37,-0.87 -2.02,-2.27 -0.71,-0.61 -0.74,-0.29 -2.16,-0.36 -1.41,-0.58 -5.96,-4.54 -8.23,-7.31 -1.57,-1.5 -3.35,-3.9 -5.17,-4.83 -0.69,-0.31 -0.67,-0.65 -0.37,-0.46 -3.08,-5.39 -0.41,-2.46 -0.04,-2.63 -0.17,-0.58 -0.39,-0.48 -5.28,-1.12 -4.26,1.39 -1.9,0.84 -2.67,5.23 0,0 -0.22,-0.53 -0.5,-0.6 -0.55,-0.39 -2.42,-0.83 -0.81,-0.51 -1.78,-2.19 -0.17,0.04 -0.33,-0.35 -0.88,0.2 -1.26,-1.24 -0.19,-0.81 0.19,-0.34 0.56,-0.45 2.82,-0.2 0.35,-0.45 -0.2,-0.8 -0.51,-0.73 -0.41,-0.97 -0.22,-0.94 -0.16,-2.27 -1.26,-1.64 -0.03,-0.67 0.18,-0.48 1.09,-0.58 0.42,0.19 0.85,0.1 0.46,-0.11 0.45,-0.43 0.25,-0.39 0.02,-0.64 -0.49,-1.19 -0.48,-0.56 -0.99,-0.6 -1.75,-0.24 -0.58,-0.24 -0.82,-0.71 -0.83,-1.12 -0.68,-1.36 -0.63,-0.56 -1.97,-0.64 -1.04,-0.84 -0.31,0.55 -0.46,1.43 -0.36,0.35 -0.5,0.01 -1.8,-0.55 -0.68,-0.35 -0.46,0.02 -0.54,-0.21 -1.97,-0.04 -1.57,0.37 -1.51,0 -1.34,0.16 -7.41,0.1 -0.57,-0.45 -0.73,-1.4 -0.65,-0.3 -0.88,-1.06 -4.04,-4.03 -0.04,-0.4 0.46,-1.24 -0.11,-1.23 -3.41,-4.45 -0.47,-0.46 -1.11,-0.66 -0.4,-0.06 -1.09,0.3 -0.96,0.77 -0.57,0.24 -2.6,-0.17 -0.7,-0.22 -1.58,-0.86 -2.27,-0.66 -0.67,-0.32 -1.73,-1.5 -4.19,-4.6 -4.81,-5.35 -3.08,-3.9 -0.48,-0.43 -0.03,0.85 -0.31,1.18 0.1,0.55 0.89,0.89 0.04,0.29 -0.17,0.52 -0.34,0.22 -0.42,-0.01 -0.55,-0.31 -0.63,0 -0.51,0.63 0,0.17 0.69,0.57 0.26,0.42 -0.42,2.18 -0.31,0.49 -0.49,0.3 -1.15,-0.37 -2.65,0.5 -1.07,0.06 -1.32,-0.64 -1.21,-0.24 -1.19,-0.57 -1.49,-0.41 -2.9,-0.6 -0.9,0.03 -1.42,0.57 -1.04,0.6 -2.33,1.94 -0.62,0.06 -0.410003,0.35 -0.18,0.69 0.32,0.76 1.860003,1.35 2.37,1.33 0.99,0.38 1.35,0.25 0.45,0.54 2.67,6.2 1.3,2.05 0.57,0.68 0.19,0.94 -0.04,1.21 0.44,0.4 0.53,-0.13 3.15,1.98 0.96,0.79 0.13,0.71 -0.51,1.04 -0.37,0.26 -0.43,0.02 -2.11,-0.5 -1.87,0.38 -0.19,-0.67 0.12,-2.02 -0.11,-1.05 -0.81,-2.86 -0.71,-1.34 -0.89,-0.99 -1.25,-0.84 -4.85,-1.25 -0.8,0.05 -2.180003,1.13 -1.3,0.48 -0.19,-0.1 -0.19,-0.72 -0.92,-0.65 -0.29,-0.37 -0.27,-1.2 -0.85,-0.75 -0.96,-0.18 -1.43,0.31 -0.99,0.68 -0.53,-0.01 -0.27,0.29 -0.4,1.83 -0.29,0.75 -0.32,-0.13 -0.74,-0.86 -0.44,-0.11 -0.67,0.22 -0.22,0.39 -0.28,1.55 0.34,0.78 0.89,0.82 0.44,0.72 0.33,1.08 -0.02,0.54 -0.37,1.05 0.03,1.41 -0.24,1.11 0.12,1.55 -0.2,1.61 -0.18,0.6 -0.34,0.39 -0.47,0.16 -0.85,-0.03 -1.66,-0.69 -0.44,0.1 -0.28,0.52 -0.34,1.2 0.7,1.2 0.44,1.1 -0.19,0.42 -0.87,0.12 -3.06,-0.52 -2.59,0.89 -1.77,0.93 -0.74,0.18 -0.6,-0.02 -1.62,-0.99 -1.87,-0.37 -2.29,-0.18 -5.17,0.28 -1.96,0.73 -2.52,1.24 -2.19,1.6 -1.26,1.09 -1.12,1.61 -0.41,0.87 -0.68,1.59 -1.07,3.33 -0.61,0.85 -1.13,1.1 -0.71,0.43 -1.37,0.51 -2.16,0.64 -0.73,0.44 -0.86,0.79 -0.92,1.92 -0.31,2.04 -0.45,1.83 0.05,2.75 0.3,2.68 -0.14,2.73 0.56,2.37 0.4,0.99 0.38,0.5 -0.02,0.24 0.36,0.16 0.53,1.03 0.24,1.15 0.09,0.8 -0.2,1.22 0,2.34 0.42,3.14 0.3,0.99 0.38,0.72 1.85,2.64 0.91,0.02 1.95,-0.6 0.43,0.4 0.04,0.52 -0.32,0.71 -0.4,0.4 -0.53,0.33 -1.98,0.69 -0.84,0.79 -0.46,0.88 -0.04,1.5 -0.32,0.67 -0.49,0.54 -0.55,0.29 -1.32,0 -1.8,-0.44 -3.96,-0.34 -4.15,-0.59 -6.75,-0.42 -3.77,-0.08 -5.88,-0.68 -3.49,-0.26 -1.88,0.01 -5.1800003,-0.47 -9.41999997,-0.39 -0.08,-232.559998 1.51999997,-0.39 1.43,-0.63 30.1400003,-9.85 0.02,-0.13 1.67,-0.29 0.34,-0.35 1.01,-0.34 13.14,-4.2 43.66,-13.4999998 6.65,-2.22 2.220003,-0.46 17.06,-5.04 z"
                                    title="" id="UZ-QR" />
                            </svg>
                        @elseif ($region->name == 'Navoiy')
                            <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                mapsvg:geoViewBox="55.997099 45.594337 73.133286 37.176101" width="360" height="330">
                                <path
                                    d="m 320,220 -0.52,4.76 -0.22,-0.04 -0.29,2.93 -6.71,0.22 1.13,10.64 0.72,1.27 0.95,0.58 4.27,1.05 0.25,0.23 0.23,0.53 1.57,6.86 -0.28,0.74 -3.12,5.32 -4.43,8.59 -0.73,1.79 0,0 -1.26,-3.47 -1.86,-2.66 -0.97,-1.12 -0.58,-0.27 -2.11,1.92 -2.35,1.29 -1.38,0.11 -1.83,-0.25 -1.04,-0.79 -1.03,-1.55 -1.19,-0.09 -1.11,0.19 -0.91,1.08 -2.15,4.68 -0.59,4.91 0.25,0.35 0.54,0.2 0.37,0.72 -0.17,2.27 -0.88,6.12 -0.86,1.34 -2.3,6.07 0.2,0.98 0.8,0.1 1.43,-0.92 0.82,0.07 0.18,0.45 -0.14,1.12 -0.43,0.62 -3.49,3.29 -1.63,0.76 -8.91,1.93 -1.22,-0.2 -5.38,-2.3 -2.09,-1.14 -0.46,-1.04 -1,-1.55 -5.48,-2.07 -1.01,-0.17 -0.52,0.28 -0.35,0.57 -0.16,0.7 0.05,0.97 -0.42,5.8 -1.83,5.54 -0.71,1.29 -0.52,0.3 -0.59,0.01 -2.85,-0.88 -1,-0.49 -8.65,2.92 -0.5,0.35 -0.08,0.37 0.33,0.77 1.48,1.53 0.97,0.81 0.94,1.45 1.35,5.22 -0.17,0.97 -0.51,1.46 -1.17,2.34 -0.04,0.63 0.17,0.81 0.81,1.81 2.12,3.8 0,0 -0.4,0.43 -0.53,0.21 -2.6,0.4 -1.39,0.37 -0.8,0.38 -1.17,0.81 0,0 0,0 0,0 -0.29,-3.38 -0.36,-1.15 -4.39,-9.39 -4.91,-3.69 -3.2,0.78 -1.08,-0.06 -7.06,-2.67 -1.19,-1.15 -4.27,-5.79 1.42,-2.72 0.89,-0.33 4.4,-2.67 2.13,-2.47 2.53,-4.78 1.29,-5.71 0.45,-4.36 -0.36,-3.32 0.36,-0.62 1.11,-0.48 2.06,0.12 2,1.3 0.82,0.79 2.01,0.99 2.9,0.54 3.85,0.23 0.94,-0.38 0.64,-0.61 3.35,-4.14 1.45,-4.13 0.17,-1.03 3.99,-2.81 1.4,-9.26 -7.97,-1.14 -5.93,-0.63 -8.63,-1.19 -1.03,-0.34 -0.8,-0.42 -1.14,-1.1 -2.14,-10.12 -0.79,-2.83 -0.97,-0.22 -0.45,0.19 -0.72,2.1 -1.13,2.68 -2.27,0.38 -3.79,0.06 -5.02,0.58 -0.57,0.19 -0.82,4.49 -0.19,0.49 -16.19,-1.89 -0.1,-7.61 -1.67,-1.93 -0.88,-0.15 -2.19,1.17 -1.04,1.09 -5.38,12.19 -0.55,0.19 -2.64,0.23 -3.4,0.09 0.48,-2.23 -0.34,-1.49 -0.56,-1.05 -2.12,-1.67 -9.83,-5.7 -8.48,-4.6 -5.38,-2.31 -3.16,-0.91 -2.04,0.05 -0.45,0.37 -0.88,0.09 -0.57,-1.39 -1.4,-5.15 -2.08,-4.35 -1.57,-1.58 -3.54,-1.9 -2.39,-1.55 -2.15,-2.32 -1.39,-2.06 -3.34,-6.7 -1.05,0.08 -13.55,3.21 -3.67,0.92 -0.56,0.28 0,0 -20.92,-28.67 12.85,-7.1 -6.74,-12.15 1.26,-15.77 27.66,-52.21 -15.44,-4.18 -5.85,-10.49 0,0 42.36,-8.25 20.45,-3.61 3.48,0.68 3.01,0.36 9.7,1.05 5.93,0.38 2.4,0.42 14.18,1.09 13.64,0.67 0.2,-0.15 0.85,-0.04 10.52,-5.17 7,-3.06 4.38,-2.19 2.06,-0.51 1.08,-0.11 1.67,0.07 0.83,0.32 0.76,0.58 0.99,1.14 5.73,12.62 2.02,1.91 3.6,3.74 10.88,9.68 1.5,6.07 6.64,21.39 12.57,-5.92 0.35,31.3 -0.05,7.21 -0.58,-0.18 -2.42,-1.23 -0.25,0 -0.1,6.6 -0.91,1.1 -0.3,16.64 0.07,2.15 24.14,2.92 3.48,39.7 z"
                                    title="Navoiy" id="UZ-NW" />
                            </svg>
                        @elseif ($region->name == 'Samarqand')
                            <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                mapsvg:geoViewBox="55.997099 45.594337 73.133286 37.176101" width="360" height="330">
                                <path
                                    d="m 270,180 -0.11,0.3 -1.6,-0.31 -0.97,0.21 -3.33,1.15 -0.23,0.29 0,0.19 0,0 -1,0.23 -1.65,-0.32 -3.84,-1.19 -2.56,-1.09 -4.46,-1.27 -0.88,0.05 -0.43,0.48 0.07,1.78 -0.11,0.35 -0.42,0.48 -0.82,0.21 -3.88,0.24 -1.89,-0.15 -0.93,-0.53 -0.33,-0.48 -0.06,-0.58 0.46,-1.7 0.11,-1.26 -0.49,-1.32 -0.63,-0.67 -8.57,-1.53 -1.19,0.06 -0.81,0.28 -0.83,0.95 -1.1,1.78 -0.82,0.96 -3.64,1.56 -0.3,0.01 -0.69,-0.33 -1.64,-1.15 -1.65,-1.44 -1.17,-0.75 -0.63,-0.16 -7.55,1.87 -3.27,1.67 -2.21,1.38 -1.53,0.04 -3.08,-0.78 -0.72,-0.25 -0.22,-0.21 -0.09,-1.49 -2.77,-4.65 -3.3,-3.81 -4.31,-0.88 -0.04,0.33 -0.19,0.27 -1.43,1.07 -1.31,0.55 -1.49,0.18 -17.55,-0.53 -0.69,-0.16 0,0 -2.12,-3.8 -0.81,-1.81 -0.17,-0.81 0.04,-0.63 1.17,-2.34 0.51,-1.46 0.17,-0.97 -1.35,-5.22 -0.94,-1.45 -0.97,-0.81 -1.48,-1.53 -0.33,-0.77 0.08,-0.37 0.5,-0.35 8.65,-2.92 1,0.49 2.85,0.88 0.59,-0.01 0.52,-0.3 0.71,-1.29 1.83,-5.54 0.42,-5.8 -0.05,-0.97 0.16,-0.7 0.35,-0.57 0.52,-0.28 1.01,0.17 5.48,2.07 1,1.55 0.46,1.04 2.09,1.14 5.38,2.3 1.22,0.2 8.91,-1.93 1.63,-0.76 3.49,-3.29 0.43,-0.62 0.14,-1.12 -0.18,-0.45 -0.82,-0.07 -1.43,0.92 -0.8,-0.1 -0.2,-0.98 2.3,-6.07 0.86,-1.34 0.88,-6.12 0.17,-2.27 -0.37,-0.72 -0.54,-0.2 -0.25,-0.35 0.59,-4.91 2.15,-4.68 0.91,-1.08 1.11,-0.19 1.19,0.09 1.03,1.55 1.04,0.79 1.83,0.25 1.38,-0.11 2.35,-1.29 2.11,-1.92 0.58,0.27 0.97,1.12 1.86,2.66 1.26,3.47 0,0 7.79,0.92 4.61,0.1 0.96,2.18 0.01,1.1 -0.83,1.83 -0.14,0.77 0.1,3.93 0.84,4.1 1.86,1.66 1.44,2.81 -0.07,0.81 -0.45,1.34 -0.24,0.16 -1.24,0.29 -0.1,0.35 0.35,3.71 5.83,3.93 2.12,0.8 4.81,0.4 11.87,2.53 0.21,0.24 1.07,5.96 0.08,1.02 -1.3,0.15 -1.54,0.38 -2.16,1.03 -0.69,0.54 -0.76,0.91 -3.22,5.24 -0.1,0.37 0.02,4.16 0.21,0.95 0.65,0.96 1.03,1.05 4.53,3.82 0,0 2.23,4.67 0.83,2.3 0.94,1.95 0.21,0.81 z"
                                    title="" id="UZ-SA" />
                            </svg>
                        @elseif ($region->name == 'Surxandaryo')
                            <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                mapsvg:geoViewBox="55.997099 45.594337 73.133286 37.176101" width="360" height="330">
                                <path
                                    d="m 260,150 -1.03,3.53 -0.14,1.23 -2.3,2.42 -1.64,3.1 0.07,1.57 -0.47,1.11 0.09,0.79 -0.35,0.89 -2.5,1.17 -4.05,0.7 -0.81,1.44 -3.16,6.75 -1.15,1.66 -1.37,0.98 -2.29,2.97 -1.05,2.43 -1.27,2.43 -1.59,1.53 -1.19,3.88 -0.05,2.56 0.26,4.01 -0.56,6.66 -0.71,2.43 -0.68,0.44 -0.59,-1.11 -1.5,-1.2 -0.74,-0.22 -1.38,0.15 -0.42,-0.06 -0.86,-0.76 -1,-0.59 -0.61,0.09 -1.37,0.55 -0.67,0.54 -0.39,0.5 -0.7,0.09 -0.42,-0.65 -0.42,-1.37 -0.74,-0.72 -0.82,-0.4 -0.67,0.14 -0.57,0.38 -1.87,1.72 -1.35,0.46 -1.15,0.68 -1.26,0.11 -1.84,0.47 -0.96,1.03 -1.5,0.63 -0.54,-0.2 -0.86,-0.77 -0.17,-1.53 -0.28,-0.49 -0.77,-0.37 -0.37,-0.87 -0.27,-0.27 -0.97,-0.38 -0.45,-0.34 -0.7,0.15 -0.46,-0.12 -1.52,-0.85 -0.46,-0.71 0.36,-1.53 -0.32,-0.84 -1.73,-0.86 -1.36,-1.41 -0.43,-0.26 -1.93,-0.72 -1.88,0.13 -3.58,1.59 -1.58,-0.19 -0.82,0.07 -2.23,0.76 -1.95,-0.49 -0.95,0.01 -1.1,0.37 -1.6,-0.37 -1.45,0.23 -1.17,-0.12 -1.79,0.07 -1.31,0.54 -0.4,-2.01 0.17,-0.66 0.43,-0.62 0.86,-0.63 1.13,-0.58 3.04,-0.91 0.3,-0.73 0.01,-0.75 -0.43,-1.1 -4.56,-5.54 -0.26,-1.49 0.56,-5.62 -0.29,-1.53 0,-0.6 0.45,-3.11 0.74,-1.79 0.73,-1.12 0.77,-0.76 0.54,-1.27 0.56,-0.73 2.28,-1.33 0.43,-0.4 0.24,-0.83 -0.03,-0.89 -0.54,-1.05 0,0 -0.27,-0.9 1.04,-4.27 0.43,-1.25 11.58,-12.1 3.54,-1.85 1.83,-1.28 2.42,-2.43 0.45,-0.87 0.37,-1.4 0.16,-1.52 0.72,-3.35 8.89,-8.88 1.19,-2.22 0.81,-1.3 0.59,-0.64 0.45,-0.34 1.14,-0.33 1.43,0.07 1,0.32 1.41,1.43 0.54,0.18 1.34,-4.3 -0.13,-4.2 -0.15,-0.52 -0.38,-0.46 -1.02,-2.1 -0.54,-3.14 0.06,-0.4 0.45,-0.84 0.67,-0.57 0.51,-0.25 0.86,-0.26 3.99,-0.23 0.98,-0.58 0.8,-0.82 0,0 0.39,0.53 0.68,0.29 0.91,-0.32 0.62,0.24 1.04,-0.72 2.05,-0.19 1.35,0.82 1.47,0.14 1.05,-1.35 2.05,-0.07 1.04,-0.55 0.45,0.01 1.11,1.16 1.02,0.25 1.84,-0.99 1.25,0.14 1.24,0.82 0.87,1.84 0.31,1.03 2.69,2.1 0.09,0.8 -0.14,1.24 -0.35,0.22 0.3,2.16 -1.26,0.65 -0.59,0.9 -1.03,0.32 -2.5,0.4 -0.35,0.56 2.53,3.68 -0.36,0.67 -1.59,0.19 -1.27,1.22 0.42,1.48 0.87,1.94 -0.01,0.45 -0.47,0.56 -0.33,5.31 2.42,3.21 1,0.81 -0.37,1.12 -0.93,1.45 -0.25,1.01 0.45,0.01 1.48,-0.65 0.46,0.01 1.67,0.94 1.41,2.4 0.21,0.79 0.08,1.36 0.22,0.23 1.34,0.48 1.45,0.71 1,0.69 1.97,2.53 0.02,0.38 0.72,1.32 1.09,1.49 -0.01,0.79 z"
                                    title="Surxondaryo" id="UZ-SU" />
                            </svg>
                        @elseif ($region->name == 'Qashqadaryo')
                            <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                mapsvg:geoViewBox="55.997099 45.594337 73.133286 37.176101" width="360" height="330">
                                <path
                                    d="m 190,140 1.17,-0.81 0.8,-0.38 1.39,-0.37 2.6,-0.4 0.53,-0.21 0.4,-0.43 0,0 0.69,0.16 17.55,0.53 1.49,-0.18 1.31,-0.55 1.43,-1.07 0.19,-0.27 0.04,-0.33 4.31,0.88 3.3,3.81 2.77,4.65 0.09,1.49 0.22,0.21 0.72,0.25 3.08,0.78 1.53,-0.04 2.21,-1.38 3.27,-1.67 7.55,-1.87 0.63,0.16 1.17,0.75 1.65,1.44 1.64,1.15 0.69,0.33 0.3,-0.01 3.64,-1.56 0.82,-0.96 1.1,-1.78 0.83,-0.95 0.81,-0.28 1.19,-0.06 8.57,1.53 0.63,0.67 0.49,1.32 -0.11,1.26 -0.46,1.7 0.06,0.58 0.33,0.48 0.93,0.53 1.89,0.15 3.88,-0.24 0.82,-0.21 0.42,-0.48 0.11,-0.35 -0.07,-1.78 0.43,-0.48 0.88,-0.05 4.46,1.27 2.56,1.09 3.84,1.19 1.65,0.32 1,-0.23 0,0 0.38,1.58 1.39,2.41 0.73,0.75 0.96,0.53 1.76,0.37 0.62,0.41 0.85,0.29 0.8,0.02 1.03,-0.22 1.08,0.19 1.02,0.47 0.65,1.67 0.57,0.23 1.59,0.08 0.28,0.29 -0.01,0.57 -0.35,0.51 -0.21,2.5 0.44,1.26 0.13,2.05 0.39,0.56 0,0 -0.8,0.82 -0.98,0.58 -3.99,0.23 -0.86,0.26 -0.51,0.25 -0.67,0.57 -0.45,0.84 -0.06,0.4 0.54,3.14 1.02,2.1 0.38,0.46 0.15,0.52 0.13,4.2 -1.34,4.3 -0.54,-0.18 -1.41,-1.43 -1,-0.32 -1.43,-0.07 -1.14,0.33 -0.45,0.34 -0.59,0.64 -0.81,1.3 -1.19,2.22 -8.89,8.88 -0.72,3.35 -0.16,1.52 -0.37,1.4 -0.45,0.87 -2.42,2.43 -1.83,1.28 -3.54,1.85 -11.58,12.1 -0.43,1.25 -1.04,4.27 0.27,0.9 0,0 -2.39,-2.79 -1.05,-0.67 -1.48,-0.61 -3.19,-0.35 -2.63,0.82 -0.57,0.06 -1.26,-0.33 -1.23,-1.07 -2.79,-1.64 -1.83,-2.07 -1.29,-2.33 -0.47,-0.3 -1.9,-0.11 -3.5,-1.03 -0.63,-0.4 -0.5,-0.97 -1.17,-0.4 -0.87,-0.13 -0.76,-0.8 -0.47,-0.17 -1.37,0.07 -0.83,-0.27 -0.9,-0.6 -1.91,-1.96 -0.9,-0.24 -1.07,0.01 -0.97,0.27 -0.73,1.4 -0.56,-0.07 -0.14,0.1 -0.16,0.64 -0.37,0.17 -0.53,0 -4.68,-0.96 -9.93,-3.92 -1.95,-1.12 -6.41,-4.13 -1.85,-1.49 -2.7,-2.52 -7.61,-7.6 -0.58,-0.39 -2.73,-1.25 -3.5,-1.33 -2.94,-1.37 -1.73,-1.26 -0.61,-0.66 -8.98,-5.55 -2.72,-1.9 -5.54,-5.13 -1.19,-1.31 0,0 5.61,-6.23 18.12,-6.64 0.28,-0.61 -0.23,-0.51 -0.82,-1.17 -0.83,-0.88 -0.71,-1.2 -0.15,-0.86 0.35,-1.03 4.4,-4.71 0.57,-0.11 3.35,-2.22 z"
                                    title="Qashqadaryo" id="UZ-QA" />
                            </svg>
                        @elseif ($region->name == 'Xorazm')
                            <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                mapsvg:geoViewBox="55.997099 45.594337 73.133286 37.176101" width="360" height="330">
                                <path
                                    d="m 250,150 -1.26,-2.86 -0.52,-0.75 -0.69,-0.61 -0.3,-0.81 -0.16,-2.77 -0.46,-0.74 -0.26,-1.03 -1.22,-2.04 -0.09,-1.22 0.16,-1.18 -0.07,-1.98 -0.15,-0.48 -0.25,-2.85 0.23,-1.62 -0.22,-0.4 -0.51,-0.21 -0.18,-0.72 0.02,-0.64 -0.29,-0.81 -0.74,-0.94 -1.47,-0.78 -0.57,-0.11 -0.45,-0.26 -0.3,-0.56 0.19,-0.94 -0.37,-1.05 -0.47,-0.87 -1.22,-0.73 -1.88,-1.98 -1.13,-0.34 -1.49,-1.01 -2.03,-2.41 -0.48,-0.3 -1.27,-0.13 -0.66,-0.23 -0.49,-0.34 -0.41,-0.38 -0.28,-0.95 -0.38,-0.72 -0.85,-0.64 -0.47,-0.01 -1.3,0.57 -1.77,-0.14 -0.74,-0.22 -1.61,-0.9 -1.76,-0.29 -0.52,0.04 -0.47,0.31 -0.82,1.47 0.06,2.65 -0.45,0.8 -0.28,1.57 -0.43,0.91 -0.35,0.39 -0.49,0.33 -1.05,0.16 -0.15,0.14 -1.67,0.19 -0.33,-0.1 -1.32,0.05 -0.2,-0.13 -0.28,0.1 -0.7,-0.16 -3.1,-1.48 -2.13,-2.23 -0.34,-0.15 -2.01,0.18 -1.32,-1.56 -4.91,-0.22 -0.42,0.21 -1.04,-0.07 -2.18,0.32 -2.58,-0.12 -1.68,0.31 -3.93,0.01 -4.76,0.3 -0.88,-0.05 -2.6,0.43 -0.95,-0.06 -0.72,-0.24 -3.24,-1.94 -2.91,-2.6 -6.11,-4.17 -3.37,-1.93 -1.16,-1.04 -0.57,-1.24 -0.02,-0.69 0.16,-0.79 0.04,-2.99 0.28,-1.86 0.38,-0.81 2.14,-2 0.25,-0.61 0,-1.17 -0.27,-0.89 -1.13,-2.02 -1.15,-1.53 -1.85,-2.89 -0.38,-1.5 0.52,-1.24 0.56,-2.25 0.24,-0.14 0.31,0.02 0.9,0.49 1,-0.02 1.98,0.72 1.11,0.53 1.28,1.05 1.19,-0.03 0.78,0.63 0.82,0.27 0.26,-0.4 0.73,0.01 0.26,-0.16 0.03,-0.44 -0.52,-0.7 -1.13,-0.89 -1.16,-1.32 -1.25,-0.57 -1.65,-0.37 -1.39,-0.87 -0.76,-0.85 -0.31,-0.72 0,0 2.67,-5.23 1.9,-0.85 4.26,-1.39 5.28,1.12 0.39,0.48 0.16,0.58 0.04,2.64 0.41,2.45 3.08,5.39 0.38,0.47 0.66,0.65 0.7,0.31 5.17,4.83 3.35,3.9 1.57,1.51 8.23,7.31 5.96,4.54 1.41,0.58 2.16,0.36 0.74,0.29 0.71,0.61 2.01,2.27 0.37,0.87 0.26,1.16 2.25,1.44 1.49,0 0.72,-0.76 0.51,-1.88 1.17,-2.3 0.78,-0.88 1.39,-0.77 0.62,-0.2 3.04,0.01 8.95,2.06 3.52,1.86 3.08,1.91 8,8.81 1.5,2.77 4.56,7.41 0.27,0.22 0.65,0.19 2.55,-1.22 0,0 3.24,3.33 5.91,6.68 0.68,1.15 -0.03,1.54 -0.79,3.8 -4.59,5.13 -6.28,7.61 0,0 z"
                                    title="Xorazm" id="UZ-XO" />
                            </svg>
                        @elseif ($region->name == 'Toshkent')
                            <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                mapsvg:geoViewBox="55.997099 45.594337 73.133286 37.176101" width="360" height="330">
                                <path
                                    d="m 290,110 -0.15,-0.38 -0.65,-0.51 -0.79,-0.38 -3.33,-3 -0.94,-0.54 -1.75,-0.21 -1.22,-0.7 -0.46,-0.02 -0.86,0.21 -1.14,0.5 -1.25,1.16 -0.68,0.03 -0.94,-0.34 -0.42,0.04 -1.77,2.24 -1.02,0.69 -0.96,0.43 -1.18,0.89 -0.7,0.02 -1.06,-1.01 -0.52,0.16 -0.58,0.56 -0.67,0.73 -0.84,1.38 -0.82,0.66 -0.55,0.9 -0.98,0.78 -0.75,1.09 -0.15,1.26 -0.91,1.8 -1.1,2.99 0.05,0.2 -0.22,0.48 -0.74,0.26 -0.42,-0.02 -1.23,-1.13 -0.75,-0.21 -0.15,-0.63 0.11,-1.61 -0.55,-0.91 -2.54,-1.39 -2.69,-2.37 -0.37,-0.16 -0.69,0.14 -0.37,0.46 -0.3,2.12 -0.22,0.37 -0.97,0.87 -0.3,0.69 -1.58,0.96 -0.31,0.5 0.13,1.17 0.34,1.39 -0.08,1.08 -1.04,0.74 -0.96,0.31 -0.49,0.55 -0.54,-0.02 -1.16,0.55 -0.89,1.3 -1.07,0.9 -0.44,0.76 -0.74,2.01 -0.59,1.01 -3.19,1.6 -1.34,0.96 -0.73,2.14 -0.32,0.3 -0.33,0.12 -0.36,-0.12 -0.16,-0.29 0.05,-0.56 -0.38,-0.67 -0.39,-0.07 -0.68,0.2 -0.26,0.31 -1.65,3.99 -2.93,1.2 -1.2,-1.04 -0.74,-0.33 -0.5,0 -1.67,1.05 -2.04,0.33 -0.25,-0.13 -0.84,0.13 -0.31,0.2 -0.2,0.44 -0.53,0.53 -0.68,0.33 -2.74,0.65 -0.52,0.23 -1.22,1.14 -0.29,0.51 -0.95,0.71 -1.3,1.39 -0.4,0.54 -0.5,1.56 -0.23,0.28 -0.74,0.38 -1.22,0.35 -0.38,-0.06 -0.33,0.12 -1.68,1.43 -0.67,1.1 0.02,0.52 0.33,0.54 1.17,0.76 -0.34,1.01 -0.41,0.21 -2.21,-0.35 -0.53,0.23 -0.83,0.04 -1.31,0.35 -0.47,-0.02 -1,-0.58 -0.56,-0.14 -1.1,0.13 -0.36,-0.12 -1.5,0.32 -1.15,0.69 -0.64,1.9 -0.44,0.5 -2.23,1.26 -1.14,2.84 -0.66,0.46 -0.51,-0.06 -0.59,-0.58 -0.29,-0.12 -0.51,0.16 -1.98,3.07 -0.19,2.71 -0.23,0.37 -1.39,1.17 -0.3,1.8 -0.21,0.14 -0.85,-0.15 -0.68,0.46 -0.65,0.86 -1.41,1.37 -1.53,2.02 -0.74,1.15 -0.48,1.1 -1.66,2.09 -0.72,1.67 -0.15,1.51 -0.17,0.35 -1.33,1.21 -1.83,0.72 -1.04,0.86 0,0 4.86,5.52 3.47,3.47 4.92,4.44 4.71,3.91 0.62,0.08 3.03,4.23 -0.5,4.7 -0.86,5.32 -1.01,4.96 0.01,1.06 0.14,0.62 0.5,1.06 -0.25,4.73 0,0 2.55,0.22 0.64,-0.05 1.05,0.37 1.09,-0.09 0.77,-0.25 1.3,0.31 1.96,0.04 1.12,0.62 0.48,-0.4 -0.84,-2.12 -0.41,-0.42 -1.38,-0.27 -0.41,-0.42 0.24,-0.85 -0.35,-0.58 0.18,-0.62 1.75,0.24 0.83,-0.06 1.13,-1.07 0.01,-0.91 0.33,-0.55 -0.02,-1.21 -1.04,-0.83 -0.42,-0.5 0.01,-0.83 -0.29,-0.81 -0.4,-0.35 0.24,-0.85 -0.47,-0.19 -0.61,-2.07 -0.42,-0.5 0.01,-0.83 0.35,-0.41 0.04,-0.76 -0.66,-0.57 -1.34,-1.85 -0.07,-0.33 0.27,-0.64 1.56,-1.05 1.82,-0.24 0.87,0.17 0.3,-0.08 0.26,-0.27 -0.03,-0.18 0.4,-0.75 0.48,-0.23 0.26,-1.27 -0.56,-1.23 -0.34,-1.13 0.21,-3.51 0.06,-0.32 0.33,-0.39 0.2,-0.95 1.84,-2.59 1.64,-0.2 0.66,0.33 2.53,0.7 1.21,0.15 0.75,0.74 0.85,1.71 0.25,1.19 0.55,0.78 1.26,0.9 0.73,0.88 0.69,0.11 0.4,0.21 0.5,1.3 0.3,0.41 0.66,0.15 1.62,-0.11 0.93,-0.59 1.4,-3.02 0.45,-0.4 0.71,-0.21 1.43,0.41 0.3,-0.03 0.94,-1.01 1.11,-0.66 0.43,-0.01 1.59,0.98 0.21,0.01 1.18,-1.12 0.76,-0.49 2.03,-0.29 0.83,-0.36 1.06,-0.9 1.43,-0.56 2.38,-2.32 0.31,-0.44 0.28,-0.87 0.49,-0.59 0.59,-0.11 1.03,0.41 1.14,0.18 1.46,-0.94 0.88,-0.39 0.72,-1.02 1.64,-0.99 1.2,-0.03 0.68,-0.23 0.37,-0.36 0.51,-1.01 0.01,-0.36 -0.29,-0.93 0.15,-0.72 0.68,-0.82 0.03,-0.76 0.3,-0.53 -0.28,-1.28 0.11,-0.46 0.38,-0.28 0.4,-0.94 0.55,-0.6 1.3,-0.52 1.03,0.25 0,0 -0.2,-0.42 0.15,-0.88 -0.03,-1.75 -0.24,-2.33 -0.66,-1.34 -1.91,-2.62 -0.67,-7.3 2.97,-4.11 0.68,-1.93 0,0 -0.49,-1.01 -0.48,-0.56 -0.85,-0.56 -1.21,-1.45 -1.17,-0.12 -0.5,-0.52 -0.63,-1.47 -0.4,-0.27 -1.31,-0.56 -1.07,-0.18 -0.97,0.06 -0.52,0.28 -0.82,0.1 -0.94,-0.24 -1.25,0.09 -0.63,-0.37 -0.16,-0.37 -0.17,-1.24 0.08,-1.97 0.28,-0.74 0.41,-0.58 1.27,-0.54 0.69,-0.12 1.28,0.11 1.66,-1.54 1.3,0.05 0.85,-0.4 1.51,-1.46 0.58,-0.9 0.3,-0.23 2.07,-1.13 0.54,-0.16 1.66,-1.13 0.67,-1.34 0.09,-2.21 0.24,-0.49 0.62,-0.59 1.24,-0.56 2.17,-1.52 0.33,-1.21 1.12,-0.8 0.37,-0.42 0.74,-1.53 1.05,-1.08 1.19,-0.57 0.65,-0.05 0.88,0.32 0.41,-0.01 0.17,-0.19 0.17,-0.82 0.22,-0.2 0.68,0.46 1.04,0.36 0.88,0.01 0.43,-0.15 0.89,-0.9 0.3,-0.51 0.16,-1.82 -0.91,-1.58 0.34,-0.9 0.65,-0.66 0.12,-0.73 0.17,-0.29 0.6,-0.29 0.8,0 1.87,1.04 0.81,0.2 0.77,0 1.05,-0.52 1.29,-1.1 0.68,-0.3 1.76,-1.81 0.81,-0.31 2.68,-2.56 1.08,-0.41 0.82,-0.03 1.27,0.31 0.4,-0.62 0.7,-0.54 0.45,-0.18 0.2,-0.28 0.1,-1.57 0.33,-0.45 z m -86.22,51.43 -0.36,0.46 0.09,0.66 -0.39,-0.05 -0.16,0.11 -0.29,0.68 -0.05,0.48 0.14,0.34 -0.34,0.25 -0.48,0.75 0.57,0.75 0.17,0.55 0,0.89 -0.15,0.55 -0.95,1.14 -0.33,0.23 -0.64,0.09 -0.36,-0.25 -0.43,-0.93 0.16,-0.41 -0.72,-0.23 -1.08,-0.09 -1.08,0.87 -0.02,0.48 -0.57,0.07 -0.69,-0.14 -0.17,-0.25 -0.36,0.23 -0.16,-0.05 -0.33,-0.84 -0.48,-0.25 -0.33,0.18 -0.29,-0.21 -0.93,-0.23 -0.09,-0.34 0.12,-1.46 0.14,-0.87 0.45,-1.25 0.1,-0.84 1.2,-1.32 0.14,0 0.1,0.18 1.03,0.21 0.83,-0.37 0.26,-0.34 0.21,-0.02 1.6,0.84 0.57,-0.11 0.55,0.27 0.36,-0.66 0.71,0.07 0.7,-0.75 0.6,-0.11 0.38,-0.62 0.45,-0.11 0.04,0.71 0.51,0.46 0.05,0.6 z"
                                    title="Toshkent" id="UZ-TO" />
                            </svg>
                        @elseif ($region->name == 'Namangan')
                            <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                mapsvg:geoViewBox="55.997099 45.594337 73.133286 37.176101" width="360" height="330">
                                <path
                                    d="m 280,150 -0.5,-0.84 -0.46,-0.29 -0.45,-0.07 -0.45,0.24 -1.05,-0.35 -0.76,-0.03 -1.88,1.36 -0.35,0.08 -0.68,-0.3 -1.74,-1.12 -1.14,-0.31 -1.22,-0.14 -1.16,0.79 -0.46,-0.22 -0.56,-0.05 -1.62,-0.65 -0.32,-0.41 0.02,-0.88 -0.56,-0.06 -0.37,-0.2 -0.07,-0.21 0.64,-2 0.92,-1.61 0.78,-0.8 0.47,-0.82 0.56,-1.35 -0.05,-0.25 -1.08,-0.58 -0.85,-1.03 -0.28,-0.65 0.13,-1.3 -0.14,-0.37 -0.38,-0.28 -0.41,0.24 -0.34,0.56 -0.81,0.17 -0.25,-0.17 -0.06,-0.19 0.26,-1.3 -0.62,-1.06 -1.4,-1.35 -1.05,-2.21 -0.37,-0.1 -0.14,0.12 -0.11,1.69 -0.17,0.26 -0.31,0.07 -0.21,-0.41 -0.1,-0.68 -0.31,-0.27 -0.38,-0.03 -0.63,0.45 -0.12,0.4 0.41,0.66 -0.06,0.56 -0.27,0.21 -0.42,-0.26 -0.41,-0.71 -0.1,-0.46 0.09,-0.43 0.84,-1.1 0.46,-0.83 0.07,-0.47 -0.24,-1.41 0.13,-0.3 -0.06,-0.74 0.43,-0.9 -0.35,-0.61 -1.14,-0.05 -0.36,0.1 -0.77,0.72 -0.76,1.36 -0.44,0.5 -1.26,0.43 -0.24,0.35 0.05,0.42 0.32,0.24 1.14,0.11 0.57,0.23 0.5,0.78 0.13,0.68 -0.34,1.22 -0.44,0.81 -0.04,0.41 0.8,1.23 -0.29,0.66 -0.66,0.72 -0.36,0.7 -0.27,0.98 -0.22,0.01 -0.36,-0.25 -0.26,0.25 -0.32,0.72 -0.6,0.49 -0.17,0.58 -0.17,0.04 -0.25,0.95 -0.38,0.32 -0.6,-0.16 -0.61,-0.69 -0.4,-0.22 -0.88,-0.02 -0.42,0.35 -0.67,0.14 -0.82,-0.51 -0.32,0.07 -1.44,1.72 -0.05,0.41 0.25,0.77 -0.26,0.85 0,0.53 0.18,0.37 0.86,0.37 0.3,0.72 -0.89,2 -0.32,1.99 -0.71,1.61 -0.03,0.37 -1.03,1.12 -0.53,0.04 -0.26,-0.17 -0.15,-0.29 -0.23,-1.77 -0.23,-0.49 -0.79,-0.83 -0.39,-0.19 -0.54,0.01 -0.51,0.3 -0.35,0.41 -0.23,1.41 -0.4,0.76 -0.8,0.75 -0.51,0.12 -0.38,-0.11 -0.14,-0.3 0.22,-2.39 -0.26,-1.43 -0.26,-0.42 -0.95,-0.63 -0.3,-0.04 -0.62,0.29 -0.13,0.4 0.04,0.54 -0.31,0.23 -0.28,-0.06 -0.43,-1.06 -0.32,-0.01 -0.35,0.3 -0.47,0.72 -0.48,-0.02 -0.26,0.15 -0.83,0.88 -0.5,0.29 -0.4,0.03 -1.21,-0.43 -0.41,-0.37 -0.61,-1.02 -0.8,-0.19 -1.23,-0.8 -0.59,0.03 -2.66,1.81 -0.56,-0.2 -0.54,-1.23 -0.92,-0.86 -0.86,-0.54 -0.58,-0.85 -0.53,-0.5 -0.27,-0.04 -0.71,0.32 -0.47,0.68 -0.83,2.06 -0.3,0.44 -0.33,0.16 -0.86,-0.35 -0.5,-0.61 -0.22,-0.9 0.03,-1.09 0.74,-0.95 0.18,-0.6 -0.1,-0.35 -0.62,-0.91 -0.25,-0.74 -0.07,-1.79 0.42,-0.92 0.25,-1.16 -0.49,-2.05 -2.55,-4.08 -0.42,-1.17 -0.19,-0.16 -1.21,-0.34 -0.31,0.03 -1.14,0.85 -1.23,-0.06 -1.52,0.48 -0.98,0.84 -0.41,0.74 -1.68,1.39 -2.08,0 -0.5,-0.54 0,0 -0.68,1.93 -2.97,4.11 0.67,7.3 1.91,2.62 0.66,1.34 0.24,2.33 0.03,1.75 -0.15,0.88 0.2,0.42 0,0 0.45,-0.02 0.73,0.4 0.27,0.68 1.1,0.89 0.07,0.62 0.32,0.24 0.88,1.19 0.68,0.02 0.55,1.37 1.01,1.25 0.39,0.89 1.11,1.65 0.46,1.18 0.27,0.01 0.12,0.37 0.97,0.83 0.56,1.37 0.83,0.31 0.53,0.47 0.73,0.99 -0.48,0.38 -0.17,-0.09 -0.29,0.18 0.08,0.32 -0.19,0.29 -0.37,0.1 -0.57,-0.25 -0.47,-1.21 -0.37,1.24 0.04,0.71 0.32,0.64 0.83,-0.24 1.23,0.1 0.85,0.45 -0.28,0.18 0.9,0.04 0.43,0.23 1,0.85 0.22,0.49 0,0 0.34,-0.09 0.26,-0.26 4.87,-1.25 3.38,-0.61 6.75,-0.1 0,0.22 -0.37,0.52 -1.36,1.66 0.83,1.97 1.88,1.85 5.58,2.73 0.4,0.08 0.76,-0.42 3.02,-2.85 0.76,-1 0.75,-1.45 1.23,-0.79 4.11,-2.23 3.44,-1.03 0,0 1.9,-1.21 -2.2,-2.67 2.03,-1.89 1.2,-0.8 8.59,-2.19 3.67,0.03 0.58,0.25 0.73,0.56 3.33,0.75 1.46,0.15 4.88,-0.44 0.53,-0.27 0.4,-0.46 1.26,-5.86 0,0 -0.42,-0.26 -0.45,-0.58 0.16,-0.33 1.26,-0.3 0.53,-0.41 0.47,-1.02 -0.45,-0.82 -0.77,-4.63 z m -70.46,14.69 -3.18,-4.31 -1.22,-0.9 -1.01,-0.03 -0.19,-0.68 0.27,-0.47 0.73,-0.56 -0.27,0.38 1.2,0.51 1.51,1.77 1.73,2.35 0.64,1.58 -0.21,0.36 z"
                                    title="" id="UZ-NG" />
                            </svg>
                        @elseif ($region->name == 'Fargona')
                            <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                mapsvg:geoViewBox="55.997099 45.594337 73.133286 37.176101" width="360" height="330">
                                <path d="m 150,150 0.2,-1.32 -0.46,
                                                                                    -1.1 -1.48,-1.32 -5.82,
                                                                                    -2.62 -3.26,-0.66 -2,
                                                                                    -0.8 -0.64,0 -1.8,0.86 -0.86,
                                                                                    -0.06 -0.92,-0.42 -0.66,-0.74 -0.92,
                                                                                    -2.22 -0.58,-0.62 -0.58,-0.2 -0.30,-0.148 -0.182,-3.54 -0.12,
                                                                                    -1.21 0.26,-0.4 1.62,
                                                                                    -0.44 2,-1.62 2.38,-0.44 2.2,-1.14 4.1,
                                                                                    -1.44 1.6,0 0.94,-0.82 0.24,
                                                                                    -1.62 0.88,-0.88 0.28,-1.78 0.38,
                                                                                    -0.8 0.8,-0.44 1.18,-0.16 1.54,0.14 0.96,
                                                                                    -0.72 1.44,-0.04 0.86,-0.32 1.74,-2.22 2.22,-4.44 0.72,
                                                                                    -0.76 1.3,-0.36 1.36,-1.46 1.02,-0.34 0.3,-0.56 0.82,
                                                                                    -0.16 0.82,-1 1.94,-0.44 0.8,0.56 0.64,0.06 0.1,-1.32 -0.36,-1.98 0.62,
                                                                                    -0.46 0.56,0.5 1.32,-0.08 0.88,-1.16 0.6,-2 1.16,
                                                                                    -1.06 0.12,-0.52 0,0 0.68,-0.18 0.52,-0.52 9.74,
                                                                                    -2.5 6.74,
                                                                                    -1.21 13.52,-0.2 0,0.44 -0.74,1.04 -2.72,3.32 1.66,3.94 3.74,3.72 11.18,
                                                                                    5.46 0.8,0.16 1.5,-0.84 6.04,-5.7 1.52,-1.98 1.48,
                                                                                    -2.9 2.48,-1.6 8.22,-4.46 6.88,-2.06 0,0 6.06,8.96 0.4,-2.9 8.32,
                                                                                    1.2 6.04,3.12 1.24,1.3 4.48,6.92 18.5,3.14 0.66,
                                                                                    0 0.48,-0.34 4.5,0.9 8.02,2.56 0.62,1.68 0.22,7.22 0,0 -0.98,
                                                                                    0.08 -2.14,-0.52 -0.78,0.16 -1.02,2.76 -0.6,
                                                                                    1 -1.26,1.2 -0.92,0.48 -0.74,0.14 -1.18,-0.4 -1.78,-1.18 -0.92,2.08 0.9,
                                                                                    3.42 -0.28,0.68 -1.28,1.42 -0.14,1.14 -0.58,0.8 -2.74,0.82 -2.08,2.68 -1.02,0.76 -1.6,2.26 -2.38,
                                                                                    1.04 -1.86,1.72 -0.24,0.52 0.41,1 1.96,0.46 1.96,1.78 -0.14,0.98 -2.22,2.06 -0.92,2.16 -0.58,0.64 -1.32,
                                                                                    0.66 -1.24,-0.04 -2.54,-1.84 -4.04,-0.94 -0.96,0.78 -0.26,0.96 0.1,0.54 1.48,
                                                                                    2.26 0.04,1.06 -1.5,1 -1.08,-0.06 -4.98,3.18 -2.64,0.84 -1.84,
                                                                                    1.32 -0.7,0.12 -0.5,-0.28 -0.92,-1.7 -0.86,-1.02 -0.48,-0.14 -0.72,
                                                                                    -0.8 -0.3,-0.72 0.34,-3.8 -0.38,-1.62 -1.36,-1.82 -1.04,-0.72 -1.54,-0.16 -2.46,0.24 -0.22,
                                                                                    1.68 0.48,2.86 -0.42,1.9 0.16,1.12 -0.24,0.4 -0.58,-0.06 -1.62,-1.92 -2,
                                                                                    0 -1.1,0.38 -1.84,-1.16 -3.54 -1.58 -0.44,-1.08 0.38,-2.7 -0.48,-1.04 -2.6,-0.06 -3.08,-0.8 -1.26,
                                                                                    -1 -2.18,-2.46 -0.82,-0.54 -0.98,-0.3 -1,
                                                                                    0.44 -1.24,0.12 -0.32,-0.62 0.18,-0.78 -0.64,-0.5 -2.06,1.28 -1.5,0.2 -0.54,-0.2 -0.3,-0.54 -0.04,-2 -2.08,
                                                                                    0.22 -2.02,-0.68 -2,-0.18 -1.66,0.22 -2.76,0.92 -1.96,-0.04 -1.22,0.42 -5.12,3.56 -3.9,
                                                                                    0.7 -4.14,1.8 -0.9,0.58 -0.28,0.54 0.62,1.84 -0.22,1.94 -4.76,0.14 -3.9,0.7 -0.54,-0.18 -3.4,2.56 -4.94,
                                                                                    2.2 -3.16,0.66 -2.8,0.24 -6.26,1.38 -1.66,-0.68 -2.36,-4.28 -0.64,-1.76 -1.44,-0.78 -1.06,-1.88 0.26,-0.22 0.14,
                                                                                    -2.56 0.74,-1.98 -1.1,-3.5 z"
                                    title="Farg‘ona" id="UZ-FA" />
                            </svg>
                        @elseif ($region->name == 'Jizzah')
                            <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                mapsvg:geoViewBox="55.997099 45.594337 73.133286 37.176101" width="360" height="330">
                                <path
                                    d="m 200,150 -0.48,0.25 -0.21,1.54 -0.32,1.02 -0.82,0.73 -1.08,-0.38 -1.15,0.26 -2.96,-0.47 -1.86,0.81 -0.39,-0.12 -0.79,-0.76 -0.51,-0.24 -1.42,-0.32 -1.77,-0.21 -1.26,0.14 -0.93,0.26 -0.74,-0.13 -1.02,-0.59 -0.74,0.1 -2.23,-0.16 -0.97,-0.48 -0.74,-0.19 -1.09,0.09 -0.6,-0.15 -1.1,-0.85 -0.91,-0.37 -1.37,-0.08 -0.92,0.1 -1.87,-0.84 -0.96,-0.88 -1.38,-0.08 -2.43,-1.65 -0.7,0.39 -1.21,0.32 -1.93,-0.83 -0.4,-0.01 -0.88,1.02 -1.09,0.38 -0.64,0.45 -0.94,1.53 -0.58,0.16 -1.43,0.03 -3.98,1.49 -0.12,0.68 0.2,1.61 -0.41,0.51 -2.22,-0.55 -0.46,0.11 -0.35,0.8 -0.02,1.31 0.32,0.51 0,0 -4.53,-3.82 -1.03,-1.05 -0.65,-0.96 -0.21,-0.95 -0.02,-4.16 0.1,-0.37 3.22,-5.24 0.76,-0.91 0.69,-0.54 2.16,-1.03 1.54,-0.38 1.3,-0.15 -0.08,-1.02 -1.07,-5.96 -0.21,-0.24 -11.87,-2.53 -4.81,-0.4 -2.12,-0.8 -5.83,-3.93 -0.35,-3.71 0.1,-0.35 1.24,-0.29 0.24,-0.16 0.45,-1.34 0.07,-0.81 -1.44,-2.81 -1.86,-1.66 -0.84,-4.1 -0.1,-3.93 0.14,-0.77 0.83,-1.83 -0.01,-1.1 -0.96,-2.18 -4.61,-0.1 -7.79,-0.92 0,0 0.73,-1.79 4.43,-8.59 3.12,-5.32 0.28,-0.74 -1.57,-6.86 -0.23,-0.53 -0.25,-0.23 -4.27,-1.05 -0.95,-0.58 -0.72,-1.27 -1.13,-10.64 6.71,-0.22 0.29,-2.93 0.22,0.04 0.52,-4.76 0,0 17.4,1.31 4.64,0.52 2.72,0.01 0.85,0.56 0.87,0.13 1.25,-0.41 1.27,-0.2 15.41,0.47 1.41,1.29 0.87,0.23 2.05,2.49 3.32,3.08 1.47,-1.3 0.84,1.19 3.05,-1.98 1.38,1.29 0.59,-0.26 0.79,0.47 -2.47,0.53 -1.41,1.48 1.39,3.45 -1.48,1.47 0.08,5.22 -4.07,0.15 -0.73,2.28 1.44,2 2.44,0.68 5.77,3.4 3.59,4.03 3.79,1.34 0.44,0.38 0,0 -0.17,2.84 -0.34,0.61 -1.86,-0.1 -2.1,0.54 -0.48,4.89 0.16,0.27 2.11,-1.02 0.33,-0.1 0.16,0.2 -0.15,0.77 -0.77,2 -4.95,11.04 -0.2,1.52 0.15,0.96 0.34,0.9 0.66,0.97 0.32,0.05 6.55,0.31 4.57,-0.17 4.02,-0.82 2.28,-0.79 7.13,-1.64 0.31,0.68 -1.01,6.41 0,0 -1.55,0.28 -0.09,0.14 -2.89,0.84 -0.24,0.6 0.86,0.8 2.62,1.54 1.23,-0.03 2.15,-0.45 1.31,-0.56 2.87,-0.81 1.23,-0.55 3.43,-0.89 1.68,-0.21 3.15,-0.11 0.84,0.65 0.41,1.28 0.45,2.38 -0.32,0.66 -0.75,0.06 -1.53,-0.36 -0.9,-0.01 -0.75,0.03 -1.52,0.35 -1.17,0.88 -0.21,1.04 -0.15,0.12 -0.46,-0.26 -0.3,-1.29 -0.73,-1.1 -0.65,-0.1 -0.58,0.2 -0.24,0.28 -0.03,0.53 0.35,0.57 0.94,0.94 0.05,0.63 -0.41,1.35 0.03,0.3 1.5,1.4 2.61,3.24 0.54,1.1 0.04,0.75 -0.2,0.69 -0.71,0.72 -0.81,0.1 -0.62,-0.31 -0.6,-0.94 -0.07,-1.78 -1.35,-3.21 -0.72,-0.88 -0.4,-0.07 -0.47,0.22 -0.12,0.4 0.08,1.1 1.04,1.98 0.81,1.92 0.03,0.69 -0.36,0.8 -0.36,0.27 -0.92,0.21 -0.3,0.39 -0.27,1.43 -0.24,0.22 -0.46,0.11 -0.56,-0.42 -0.31,-1.27 -0.78,-0.89 -0.46,-0.13 -1.47,1.23 -0.51,-0.3 -1.2,-0.15 -0.09,1.15 0.3,1.67 -0.32,1.31 -0.49,0.85 -0.25,0.92 -0.3,0.56 -0.64,0.27 -0.63,0.04 -0.42,0.51 0.27,0.64 1.88,2.68 -0.27,1.72 -2.37,2.68 z"
                                    title="Jizzax" id="UZ-JI" />
                            </svg>
                        @elseif ($region->name == 'Sirdaryo')
                            <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                mapsvg:geoViewBox="55.997099 45.594337 73.133286 37.176101" width="360" height="330">
                                <path
                                    d="m 200,180 -1.61,0.97 -1.29,0.33 -2.39,-0.67 -0.98,0.44 -5.44,1.74 0,0 1.01,-6.41 -0.31,-0.68 -7.13,1.64 -2.28,0.79 -4.02,0.82 -4.57,0.17 -6.55,-0.31 -0.32,-0.05 -0.66,-0.97 -0.34,-0.9 -0.15,-0.96 0.2,-1.52 4.95,-11.04 0.77,-2 0.15,-0.77 -0.16,-0.2 -0.33,0.1 -2.11,1.02 -0.16,-0.27 0.48,-4.89 2.1,-0.54 1.86,0.1 0.34,-0.61 0.17,-2.84 0,0 3.65,3.11 1.89,-0.5 1.91,1.57 -0.54,1.14 4.87,1.43 0.81,-1.12 2.4,0.18 4.31,-1.73 -0.84,-2.09 -2.41,-1.29 -1.13,-3.29 -3.28,-4.53 0.87,-7.45 -1,-2.53 0.86,-0.9 -0.88,-1.39 -3.62,-0.23 -0.01,-1.3 4.92,0.31 0.32,0.6 2.36,-1.47 -0.02,0.24 0.31,0.09 0.2,1.2 0.67,0.25 0.8,-0.37 0.94,0.21 0.37,0.38 -0.14,0.33 -1.44,0.55 -0.19,0.35 -0.03,0.56 0.54,1.06 0.4,-0.33 0,0 4.86,5.52 3.47,3.47 4.92,4.44 4.71,3.91 0.62,0.08 3.03,4.23 -0.5,4.7 -0.86,5.32 -1.01,4.96 0.02,1.06 0.14,0.62 0.5,1.05 -0.25,4.73 0,0 -1.11,-0.35 -2.57,-0.02 -3.36,0.35 z"
                                    title="" id="UZ-SI" />
                            </svg>
                        @elseif ($region->name == 'Toshkent City')
                            <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                mapsvg:geoViewBox="55.997099 45.594337 73.133286 37.176101" width="360" height="330">
                                <path
                                    d="m 618.94007,266.48972 0.05,-0.57 -0.09,-0.14 -0.24,0 -0.3,0.25 -0.13,0.37 -0.75,0.23 -0.71,0.75 -0.7,-0.07 -0.36,0.66 -0.55,-0.27 -0.57,0.11 -1.6,-0.84 -0.2,0.02 -0.26,0.34 -0.82,0.37 -1.03,-0.21 -0.11,-0.18 -0.14,0 -1.2,1.32 -0.1,0.85 -0.45,1.25 -0.14,0.87 -0.12,1.46 0.09,0.34 0.93,0.22 0.29,0.21 0.33,-0.18 0.48,0.25 0.32,0.84 0.16,0.05 0.36,-0.23 0.17,0.25 0.69,0.13 0.57,-0.06 0.01,-0.48 1.08,-0.87 1.09,0.09 0.72,0.23 -0.16,0.41 0.43,0.94 0.37,0.25 0.63,-0.09 1.05,-1.05 0.38,-0.87 -0.07,-1.18 -0.38,-0.73 -0.29,-0.27 0.48,-0.76 0.34,-0.25 -0.13,-0.34 0.05,-0.48 0.29,-0.68 0.15,-0.12 0.4,0.05 -0.09,-0.66 0.28,-0.27 0.12,-0.48 -0.11,-0.32 -0.24,-0.14 z"
                                    title="Toshkent City" id="UZ-TK" />
                            </svg>
                        @endif


                    </div></a>
                    <ul class="map-controls">
                        <li class="map-control map-reset"><i class="ion-ios-loop-strong map-control__icon"></i></li>
                        <li class="map-control map-expand"><i class="ion-arrow-expand map-control__icon"
                                aria-hidden="true"></i>
                        </li>
                        <li class="map-control map-prev"><i class="ion-ios-arrow-left map-control__icon"></i></li>
                        <li class="map-control map-next"><i class="ion-ios-arrow-right map-control__icon"></i></li>
                    </ul><!-- .map-controls -->
                </section><!-- .map-container -->

            </div><!-- .col -->
            <div class="main-listing--col-md-6">
                @livewire('search-district')
            </div>
        </div><!-- .row -->
    </section><!-- .main-listing -->


    @livewireScripts
@endsection
