<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UnderMovie - Home</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">


    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">

    <!--
    - #HEADER
  -->

    <header class="header" data-header>
        @include('frontend.components.header')
    </header>





    <main>
        <article>

            <!--
        - #HERO
      -->
            @php
                $list = ['Hero7.jpg', 'Hero1.jpg', 'Hero3.jpg', 'Hero2.jpg', 'Hero0.jpg', 'Hero4.jpg', 'Hero5.jpg', 'Hero6.jpg'];
            @endphp

            <section id="hero" class="hero" style="background-image: url({{ asset('image/home/' . $list[0]) }})">
            @include('frontend.components.hero')
            </section>





            <!--
        - #UPCOMING
      -->

            <section class="upcoming">
                @include('frontend.components.upcoming', ['films' => $films])
            </section>





            <!--
        - #SERVICE
      -->

            <section class="service">
                @include('frontend.components.services')
            </section>





            <!--
        - #TOP RATED
      -->


            <section class="top-rated">


                @include('frontend.components.toprated', ['tops' => $tops])
            </section>





            <!--
        - #TV SERIES
      -->

            <section class="tv-series">
                @include('frontend.components.tvseries', ['tvs' => $tvs])
            </section>
            <!--
        - #CTA
      -->

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
        // Set the list of background images
        var backgroundList = @json($list);

        // Get the hero section element
        var heroSection = document.getElementById('hero');

        // Function to change the background after 20 seconds
        function changeBackground() {
            // Get the current background image index
            var currentIndex = backgroundList.indexOf(heroSection.style.backgroundImage.split('/').pop().replace('")', ''));

            // Calculate the next index with wrap-around
            var nextIndex = (currentIndex + 1) % backgroundList.length;

            // Set the new background image
            heroSection.style.backgroundImage = 'url(' + "{{ asset('image/home/') }}/" + backgroundList[nextIndex] + ')';
        }

        // Change the background every 20 seconds
        setInterval(changeBackground, 20000);
    </script>
    <!--
    - ionicon link
  -->
    <!-- Add this script section at the end of your view or in a separate JavaScript file -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
