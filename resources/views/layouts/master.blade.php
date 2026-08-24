<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header class="cards-container d-flex justify-content-between align-items-center">
        <div class="logo-wrapper">
            <img class="logo" src="{{ asset("img/dc-logo (2).png") }}" alt="Logo">
        </div>
            <ul class="nav-list align-items-stretch">
                <li class="{{ request()->routeIs('characters') ? 'active' : '' }}"><a href="{{ route('characters') }}">CHARACTERS</a></li>
                <li class="{{ request()->routeIs('comics') ? 'active' : '' }}"><a href="{{ route('comics') }}">COMICS</a></li>
                <li class="{{ request()->routeIs('movies') ? 'active' : '' }}"><a href="{{ route('movies') }}">MOVIES</a></li>
                <li class="{{ request()->routeIs('tv') ? 'active' : '' }}"><a href="{{ route('tv') }}">TV</a></li>
                <li class="{{ request()->routeIs('games') ? 'active' : '' }}"><a href="{{ route('games') }}">GAMES</a></li>
                <li class="{{ request()->routeIs('collectibles') ? 'active' : '' }}"><a href="{{ route('collectibles') }}">COLLECTIBLES</a></li>
                <li class="{{ request()->routeIs('videos') ? 'active' : '' }}"><a href="{{ route('videos') }}">VIDEOS</a></li>
                <li class="{{ request()->routeIs('fans') ? 'active' : '' }}"><a href="{{ route('fans') }}">FANS</a></li>
                <li class="{{ request()->routeIs('news') ? 'active' : '' }}"><a href="{{ route('news') }}">NEWS</a></li>
                <li class="{{ request()->routeIs('shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">SHOP</a></li>
            </ul>
            <button class="button-nav btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <i class="bi bi-border-width"></i>
            </button>

            <div class="offcanvas offcanvas-end" style="--bs-offcanvas-width: 180px;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav-list-alt d-flex flex-column align-items-stretch">
                    <li class="{{ request()->routeIs('characters') ? 'active' : '' }}"><a href="{{ route('characters') }}">CHARACTERS</a></li>
                    <li class="{{ request()->routeIs('comics') ? 'active' : '' }}"><a href="{{ route('comics') }}">COMICS</a></li>
                    <li class="{{ request()->routeIs('movies') ? 'active' : '' }}"><a href="{{ route('movies') }}">MOVIES</a></li>
                    <li class="{{ request()->routeIs('tv') ? 'active' : '' }}"><a href="{{ route('tv') }}">TV</a></li>
                    <li class="{{ request()->routeIs('games') ? 'active' : '' }}"><a href="{{ route('games') }}">GAMES</a></li>
                    <li class="{{ request()->routeIs('collectibles') ? 'active' : '' }}"><a href="{{ route('collectibles') }}">COLLECTIBLES</a></li>
                    <li class="{{ request()->routeIs('videos') ? 'active' : '' }}"><a href="{{ route('videos') }}">VIDEOS</a></li>
                    <li class="{{ request()->routeIs('fans') ? 'active' : '' }}"><a href="{{ route('fans') }}">FANS</a></li>
                    <li class="{{ request()->routeIs('news') ? 'active' : '' }}"><a href="{{ route('news') }}">NEWS</a></li>
                    <li class="{{ request()->routeIs('shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">SHOP</a></li>
            </ul>
            </div>
            </div>
    </header>
    <div class="cover-wrapper">
        <img src="{{ asset("img/jumbotron (2).jpg")}}" alt="jumbotron">
    </div>
    <main>
        
        @yield('content')
    </main>
    <footer>
        <div class="container">
            <h1>footer</h1>
        </div>
    </footer>
</body>
</html>