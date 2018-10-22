<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="has-shadow">
            <div class='container'>
                <nav class="left">
                    <a class="nav-item" href="{{route('home')}}">
                        <img src="#"" alt="DevMarketer Logo" />
                    </a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile">Discuss</a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile">Share</a>   
                </nav>

                <div class='nav-right'>
                    @if(Auth::guest())
                        <a href="#" class="nav-item is-tab">Log in</a>
                        <a href="#" class="nav-item is-tab">Join The Community</a>
                    @else
                        <button class="dropdown nav-item is-tab">
                            Hey Alex <span class="icon"><i class="fa fa-caret-down"></i></span>

                            <ul class="dropdown menu">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Notification</a></li>
                                <li><a href="#">Settings</a></li>
                                <li class="separator"></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </button>
                    @endif
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
