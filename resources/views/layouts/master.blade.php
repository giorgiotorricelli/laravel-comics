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
    <div class="subscriptions-bg">
        <div class="cards-container subscriptions-sect">

        
            <div>
                <div class="sub-img-wrapper">
                    <img src="{{ asset("img/buy-comics-digital-comics.png") }}" alt="dc">
                </div>
                
                <p>DIGITAL COMICS</p>
            </div>
            <div>
                <div class="sub-img-wrapper">
                    <img src="{{ asset("img/buy-comics-merchandise (2).png") }}" alt="dc">

                </div>
                
                <p>DC MERCHANDISE</p>
            </div>
            <div>
                <div class="sub-img-wrapper">
                    <img src="{{ asset("img/buy-comics-shop-locator (2).png") }}" alt="dc">
                </div>
                
                <p>SUBSCRIPTIONS</p>
            </div>
            <div>
                <div class="sub-img-wrapper">
                    <img src="{{ asset("img/buy-comics-subscriptions (2).png") }}" alt="dc">
                </div>
                
                <p>COMIC SHOP LOCATOR</p>
            </div>
            <div>
                <div class="sub-img-wrapper-alt">
                    <img id="dc-power-visa" src="{{ asset("img/buy-dc-power-visa (2).svg") }}" alt="dc">
                </div>
                
                <p>DC POWER VISA</p>
            </div>
        </div>
    </div>
    <footer>
        <div class="cards-container">
            <div class="footer-elements">
                <div class="footer-info">
                    <div>
                        <h3>DC COMICS</h3>
                        <ul>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Comics</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Video</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                        <h3>SHOP</h3>
                        <ul>
                            <li><a href="#">Shop DC</a></li>
                            <li><a href="#">Shop DC collectibles</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>DC</h3>
                        <ul>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Add choises</a></li>
                            <li><a href="#">Advertising</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Subscriptions</a></li>
                            <li><a href="#">Talent Workshops</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>SITES</h3>
                        <ul>
                            <li><a href="#">DC</a></li>
                            <li><a href="#">Mad Magazine</a></li>
                            <li><a href="#">DC kids</a></li>
                    </div>
                    
                </div>
                <div class="footer-logo-wrapper">
                    <img class="img-fluid" src="{{ asset("img/dc-logo-bg (2).png") }}" alt="">
                </div>
            </div>
            
        </div>
        <div class="bottom-footer">
            <div class="cards-container">
                <div class="bottom-footer-elements">
                    <button class="sign-up">
                        SIGN-UP-NOW!
                    </button>
                    <div class="d-flex justify-content-center gap-3">
                        <button class="follow-us">
                            FOLLOW US
                        </button>
                        <div class="bottom-footer-socials">
                            <img class="img-fluid" src="{{ asset("img/footer-facebook (2).png") }}" alt="facebook">
                        </div>
                        <div class="bottom-footer-socials">
                            <img class="img-fluid" src="{{ asset("img/footer-periscope (2).png") }}" alt="periscope">
                        </div>
                        <div class="bottom-footer-socials">
                            <img class="img-fluid" src="{{ asset("img/footer-pinterest (2).png") }}" alt="pinterest">
                        </div>
                        <div class="bottom-footer-socials">
                            <img class="img-fluid" src="{{ asset("img/footer-twitter (2).png") }}" alt="twitter">
                        </div>
                        <div class="bottom-footer-socials">
                            <img class="img-fluid" src="{{ asset("img/footer-youtube (2).png") }}" alt="youtube">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>
</body>
</html>