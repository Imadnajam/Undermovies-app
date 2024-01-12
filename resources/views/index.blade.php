<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.components.headlinks')
</head>

<body id="top">
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


    <script src="{{ asset('js/home.js') }}"></script>
    <script>
        var backgroundList = @json($list);
        var heroSection = document.getElementById('hero');

        function changeBackground() {
            var currentIndex = backgroundList.indexOf(heroSection.style.backgroundImage.split('/').pop().replace('")', ''));
            var nextIndex = (currentIndex + 1) % backgroundList.length;
            heroSection.style.backgroundImage = 'url(' + "{{ asset('image/home/') }}/" + backgroundList[nextIndex] + ')';
        }
        setInterval(changeBackground, 20000);
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
