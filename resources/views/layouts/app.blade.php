<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Demosite</title>

        <!-- Fonts -->
    </head>
    <body>
        <div class="container">
                 {{-- NAV SIDEBAR --}}

        @include('includes.sidebar')
         {{-- END OF NAV SIDEBAR --}}

        {{-- BODY CONTENT --}}
         @yield('content')
        </div>

       
       
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
