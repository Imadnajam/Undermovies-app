<div class="container">

    <div class="overlay" data-overlay></div>

    <a href="{{ route('home') }}" class="logo">
        <img width="100px" src="{{ asset('image/home/logo.png') }}" alt="Filmlane logo">
    </a>

    <div class="header-actions">
        <a href="{{route('searchController')}}">
            <button class="search-btn">
                <ion-icon name="search-outline"></ion-icon>

            </button>
        </a>
        <div class="lang-wrapper">
            <label for="language">
                <ion-icon name="globe-outline"></ion-icon>
            </label>

            <form action="{{ route('change.language') }}" method="post">
                @csrf
                <select name="language" id="language" onchange="this.form.submit()">
                    <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>EN</option>
                    <option value="ar" {{ app()->getLocale() == 'ar' ? 'selected' : '' }}>AR</option>
                    <option value="fr" {{ app()->getLocale() == 'fr' ? 'selected' : '' }}>FR</option>
                    <option value="al" {{ app()->getLocale() == 'al' ? 'selected' : '' }}>AL</option>
                    <option value="it" {{ app()->getLocale() == 'it' ? 'selected' : '' }}>IT</option>


                </select>
            </form>

        </div>


    </div>

    <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
    </button>

    <nav class="navbar" data-navbar>

        <div class="navbar-top">

            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('image/home/logo.png') }}" width="100px" alt="Filmlane logo">
            </a>

            <button class="menu-close-btn" data-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
            </button>

        </div>

        <ul class="navbar-list">

            <li>
                <a href="{{ route('home') }}" class="navbar-link">{{ __('home.home') }}</a>
            </li>

            <li>
                <a href="{{ route('films') }}" class="navbar-link">{{ __('home.movie') }}</a>
            </li>

            <li>
                <a href="{{ route('anime') }}" class="navbar-link">{{ __('home.anime') }}</a>
            </li>

            <li>
                <a href="{{ route('series') }}" class="navbar-link">{{ __('home.series') }}</a>
            </li>

            <li>
                <a href="{{ route('pricing') }}" class="navbar-link">{{ __('home.pricing') }}</a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="navbar-link">{{ __('home.about') }}</a>
            </li>

            <li>

                <a href="{{ route('authentification') }}"><button
                        class="btn btn-primary">{{ __('home.sign_in') }}</button></a>
            </li>

        </ul>

        <ul class="navbar-social-list">

            <li>
                <a href="#" class="navbar-social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="navbar-social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="navbar-social-link">
                    <ion-icon name="logo-pinterest"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="navbar-social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="navbar-social-link">
                    <ion-icon name="logo-youtube"></ion-icon>
                </a>
            </li>

        </ul>

    </nav>

</div>