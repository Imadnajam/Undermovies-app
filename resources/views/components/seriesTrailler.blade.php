<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Best Series</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
 

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

</head>

<body style="background-color:#10131a;">
    <header class="header" data-header>
        @include('frontend.components.header')
    </header><br>
    <section class="upcoming">
        <div class="container">
            
                <div class="flex-wrapper">
                    @foreach ($Trailler['results'] as $item)
                    <div class="title-wrapper">
                        <h2 class="h2 section-title">
                            {{ $item['name'] }}</h2>

                    </div>

                    <div
                        style='max-width: 800px; position: relative; margin: 0 auto; margin-top: 0px; margin-top: 64px;'>
                        @php
                            $trailerUrl = "https://www.youtube.com/embed/{$item['key']}";

                        @endphp

                        <iframe width="800" height="450" src="{{ $trailerUrl }}" frameborder="0"
                            allowfullscreen></iframe>


                    </div>
                    @endforeach 
                </div>
        </div> 
    </div>
  
</section>
    <!-- Moovie JS Core -->
    <script src="{{ asset('js/watch.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var demo1 = new Moovie({
                selector: "#example",
                dimensions: {
                    width: "100%"
                },
                config: {
                    storage: {
                        captionOffset: false,
                        playrateSpeed: false,
                        captionSize: false
                    }
                }
            });
        });
    </script>
</body>

</html>
