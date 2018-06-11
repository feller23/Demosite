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

         {{-- NAV SIDEBAR --}}
         @include('includes.sidebar')
         {{-- END OF NAV SIDEBAR --}}

        <div class="container">

            @include('includes.messages')
            {{-- BODY CONTENT --}}
            @yield('content')

        </div>
        
       
       <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
