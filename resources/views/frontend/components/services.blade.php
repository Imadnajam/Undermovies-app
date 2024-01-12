<div class="container">

    <div class="service-banner">
        <figure>
            <img src="{{ asset('image/home/service-banner.jpeg') }}"
                alt="HD 4k resolution! only $3.99">
        </figure>

        <a href="{{ asset('image/home/service-banner.jpeg') }}" download class="service-btn">
            <span>{{ __('home.download') }}</span>

            <ion-icon name="download-outline"></ion-icon>
        </a>
    </div>

    <div class="service-content">

        <p class="service-subtitle">{{ __('home.Our_Services') }}</p>

        <h2 class="h2 service-title">{{ __('home.service_title') }}</h2>

        <p class="service-text">
            {{ __('home.service_text') }}
        </p>

        <ul class="service-list">

            <li>
                <div class="service-card">

                    <div class="card-icon">
                        <ion-icon name="tv"></ion-icon>
                    </div>

                    <div class="card-content">
                        <h3 class="h3 card-title"> {{ __('home.Enjoy') }}</h3>

                        <p class="card-text">
                            {{ __('home.EnjoyT') }}

                        </p>
                    </div>

                </div>
            </li>

            <li>
                <div class="service-card">

                    <div class="card-icon">
                        <ion-icon name="videocam"></ion-icon>
                    </div>

                    <div class="card-content">
                        <h3 class="h3 card-title"> {{ __('home.WatchE') }}</h3>

                        <p class="card-text">
                            {{ __('home.WatchET') }}
                        </p>
                    </div>

                </div>
            </li>

        </ul>

    </div>

</div>