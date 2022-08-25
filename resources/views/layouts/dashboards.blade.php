<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstarp/bootstrap.css')}} " media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboards/dashboard.css') }}" media="all">

</head>

<body class="">
    <div class="row">
            {{-- <header>
                @include('dashboards.header')
            </header> --}}

            {{-- <main>
                {{-- <section class="col-3">
                    @include('dashboards.sidebar')
                </section> --}}

                 {{-- <section class="col-9">
                    @yield('content')
                 </section> --}}
                
           {{-- </main> --}}
            @yield('content')

           
                {{-- @include('dashboards.footer') --}}
            
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/dashboards/dashboard.js') }}"></script>
</body>

</html>
