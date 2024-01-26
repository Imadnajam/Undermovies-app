<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @include('frontend.components.seriesheadP')
</head>

<body class="loading">
    <header class="header" data-header>
        @include('frontend.components.header')
    </header>
    @include('frontend.components.seriescontentP')
</body>

</html>
