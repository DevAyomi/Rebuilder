<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="{{  asset('backend/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="{{ asset('/backend/css/style.css') }}" rel='stylesheet' type='text/css' />
        <script src="{{ asset('backend/js/jquery.min.js') }}"> </script>
        <!--webfonts-->
        <link href='http://fonts.googleapis.com/css?family=Poiret+One|Open+Sans:400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>


        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
