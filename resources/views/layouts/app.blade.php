<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel | {{ $title ?? 'Home' }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Home' ? 'active' : 'null' }}" href="/">Home</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Products' ? 'active' : 'null' }}" href="/products">Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'News' ? 'active' : 'null' }}" href="/news">News</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Program' ? 'active' : 'null' }}" href="/program">Program</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Home' ? 'active' : 'null' }}" href="/aboutus">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Home' ? 'active' : 'null' }}" href="/contactus">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
