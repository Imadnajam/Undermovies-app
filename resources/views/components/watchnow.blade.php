<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
 

    <link rel="stylesheet" type="text/css" href="{{ asset('css/watch.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

</head>

<body style="background-color:#10131a;">
    <header class="header" data-header>
        @include('frontend.components.header')
    </header><br>
    <section class="top-rated">
        <div class="row">
            <div class="container">
             
               
                <div style='max-width: 800px; position: relative; margin: 0 auto; margin-top: 100px; margin-top: 64px;'>
                  <p style="margin-bottom: 49px; font-size: 28pt; color: white; font-family: Montserrat;">
                    {{ $title }}</p>
                  
                  <iframe width="800" height="450" src="{{ $trailer_url }}" frameborder="0"
                        allowfullscreen></iframe>

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
