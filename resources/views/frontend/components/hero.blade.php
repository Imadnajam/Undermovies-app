<div class="container">

    <div class="hero-content">

        <p class="hero-subtitle">UnderMovie</p>

        <h1 class="h1 hero-title">
            {{ __('home.Unlimited') }} <strong> {{ __('home.movie') }} </strong>
            {{ __('home.TVs_Shows_&_More') }}
        </h1>

        <div class="meta-wrapper">

            <div class="badge-wrapper">
                <div class="badge badge-fill">PG 18</div>

                <div class="badge badge-outline">HD</div>
            </div>

            <div class="ganre-wrapper">
                <a href="#">{{ __('home.Romance') }} ,</a>

                <a href="#">{{ __('home.Drama') }}</a>
            </div>

            <div class="date-time">

                <div>
                    <ion-icon name="calendar-outline"></ion-icon>

                    <time datetime="2022">2022</time>
                </div>

                <div>
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT128M">128 min</time>
                </div>

            </div>

        </div>

        <button class="btn btn-primary">
            <ion-icon name="play"></ion-icon>

            <span>{{ __('home.Watch_now') }}</span>
        </button>

    </div>

</div>
