<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Google-clone') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .search-result {
            max-width: 650px;
            margin-top: 20px;
            margin-left: 240px;
            margin-bottom: 100px
        }

        @media only screen and (max-width: 600px) {
            .search-result {
                width: 100%;
                margin-top: 20px;
                margin-left: 80px;
                margin-bottom: 100px
            }
            .header-top
            {
                width:100%;
            }
        }

    </style>
</head>
<body>
    <div id="app">

        <main>
            {{$slot}}
        </main>

    </div>
       <script>

            function empty()
            {
                let x;
                x = document.getElementById("search").value;
                if (x == "") 
                { 
                    console.log("Enter a Valid input");
                    return false;
                };
            }
          

           
       </script>
</body>
</html>