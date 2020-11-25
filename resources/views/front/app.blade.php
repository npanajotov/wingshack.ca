<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <title>{{$title}}</title>--}}
{{--    <meta name="description" content="{{$description}}">--}}
{{--    <meta name="image" content="{{$image}}"/>--}}


<!-- Fonts -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900%7cRaleway:300,400,400i,500,600,700,900"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">

<!-- Page Header -->
@include('front.layout.header')

<div class="min-h-screen bg-gray-100">
    <!-- Page Content -->
    <main>
        {{$slot}}
    </main>
</div>

<!-- Page Footer -->
@include('front.layout.footer')
</body>
</html>
