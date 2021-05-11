<div class="sidebar" data-color="purple" data-background-color="white"
    data-image="{{ asset('assets/vendor/img/sidebar-1.jpg') }}">
    <div class="logo"><a href="" class="simple-text logo-normal">
            Administration

        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'admin') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'countries') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('countries.index') }}">
                    <i class="fa fa-flag"></i>
                    <p>Country</p>
                </a>
            </li>
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'regions') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('regions.index') }}">
                    <i class="fa fa-globe"></i>
                    <p>Region</p>
                </a>
            </li>
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'districts') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('districts.index') }}">
                    <i class="fa fa-building-o"></i>
                    <p>District</p>
                </a>
            </li>
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'hotels') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('hotels.index') }}">
                    <i class="fa fa-hotel"></i>
                    <p>Hotels</p>
                </a>
            </li>
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'tourists') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('tourists.index') }}">
                    <i class="fa fa-tripadvisor"></i>
                    <p>Tourist Attraction</p>
                </a>
            </li>
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'contacts') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('contacts.index') }}">
                    <i class="fa fa-envelope-o"></i>
                    <p>Contacts</p>
                </a>
            </li>
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'galleries') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('galleries.index') }}">
                    <i class="fa fa-picture-o"></i>
                    <p>Gallery</p>
                </a>
            </li>
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'emails') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('emails.index') }}">
                    <i class="fa fa-envelope-o"></i>
                    <p>Emails</p>
                </a>
            </li>
            <li class="nav-item"><a href="{{ route('force_to_logout') }}" class="nav-link"><i
                        class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </div>
</div>
