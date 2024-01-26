<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.components.headlinks', ['page' => 'Best Anime'])
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @include('frontend.components.paginationStyle')
</head>
<body>

    @include('frontend.components.animesection', ['animes' => $animes])
    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
