<header class="header" data-header>
    @include('frontend.components.header')
</header>
<main>
    <article>
        @php
            $list = ['Hero7.jpg', 'Hero1.jpg', 'Hero3.jpg', 'Hero2.jpg', 'Hero0.jpg', 'Hero4.jpg', 'Hero5.jpg', 'Hero6.jpg'];
        @endphp

        <section id="hero" class="hero" style="background-image: url({{ asset('image/home/' . $list[0]) }})">
            @include('frontend.components.hero')
        </section>
        <section class="upcoming">
            @include('frontend.components.upcoming', ['films' => $films])
        </section>
        <section class="service">
            @include('frontend.components.services')
        </section>
        <section class="top-rated">
            @include('frontend.components.toprated', ['tops' => $tops])
        </section>
        <section class="tv-series">
            @include('frontend.components.tvseries', ['tvs' => $tvs])
        </section>

        <section class="cta">
            @include('frontend.components.cta')
        </section>

    </article>
</main>

<footer class="footer">
    @include('frontend.components.footer')
</footer>
<a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up"></ion-icon>
</a>

@include('frontend.components.indexscript')