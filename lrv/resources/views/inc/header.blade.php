@section('header')

{{-- <header id="header"> --}}
    <div class="header-top">
        <nav class="navbar sticky-top">
            <div class="container justify-content-between">
                <div class="row w-100 justify-content-between">

                    <div class="col-sm-6 col-md-4 col-lg-3 my-2 d-flex justify-content-center">
                        <i class="fas fa-phone-alt my-auto mr-2 white"></i>
                        <h6 class="my-auto white">+7 (777) 777 77 77</h6>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 my-2 d-flex p-2 justify-content-center">
                        <i class="fas fa-clock my-auto mr-2 white"></i>
                        <h6 class="my-auto white">8:00 AM - 6:00 PM</h6>
                    </div>

                    <div class="social-link col-sm-12 col-md-4 col-lg-3 offset-lg-3 d-flex justify-content-between align-items-center">
                            <a class="navbar-brand" href="https://www.facebook.com/iitukz/">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="navbar-brand" href="https://www.instagram.com/iitu_kz/?hl=ru">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="navbar-brand" href="https://vk.com/iitukz">
                                <i class="fab fa-vk"></i>
                            </a>
                            <a class="navbar-brand" href="https://twitter.com/iitukz">
                                <i class="fab fa-twitter"></i>
                            </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    @if(session()->has('currentUser'))

    <div class="mobile-menu">
        <div class="mm-inner" id="menuBar">
            <ul class="">
                <li class="nav-item my-auto"><a href="{{ route('home') }}" class="menu nav-link">Home</a></li>
                <li class="nav-item my-auto"><a href="{{ route('news') }}" class="menu nav-link">News</a></li>
                <li class="nav-item my-auto"><a href="{{ route('admission') }}" class="menu nav-link">Admission</a></li>
                <li class="nav-item my-auto"><a href="{{ route('innovation') }}" class="menu nav-link">Innovation</a></li>
                @if (session()->get('currentUser')->role == 'admin')
                <li class="nav-item my-auto active"><a href="{{ route('admin') }}" class="menu nav-link">Admin</a></li>
                @endif
                <li class="nav-item my-auto"><a href="{{ route('profile') }}" class="menu nav-link">Profile</a></li>
                <li class="nav-item my-auto"><a href="{{ route('signout') }}" class="btn btn-secondary menu nav-link">Signout</a></li>
                <li class="x-menu my-auto white" id="x-menu"><i class="fas fa-times fa-2x"></i></li>
            </ul>
        </div>
    </div>
    <div class="header-bottom">
        <div class="hb-inner">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow bg-white rounded" >
                <div class="container justify-content-between">
                    <div class="row w-100">
                        <div class="col-sm-1">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img src="/img/iitu_logo_header.png" width="200" height="auto" alt="" loading="lazy">
                            </a>
                        </div>
                        <!--
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#publications" aria-controls="publications" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button> -->
                        <div class="col-sm-8 offset-3 d-flex">
                            <div class="collapse navbar-collapse">
                                <ul class="navbar-nav ml-auto">
                                    <li class="link nav-item my-auto active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                                    <li class="link nav-item my-auto"><a href="{{ route('news') }}" class="nav-link">News</a></li>
                                    <li class="link nav-item my-auto"><a href="{{ route('admission') }}" class="nav-link">Admission</a></li>
                                    <li class="link nav-item my-auto"><a href="{{ route('innovation') }}" class="nav-link">Innovation</a></li>
                                    @if (session()->get('currentUser')->role == 'admin')
                                    <li class="link nav-item my-auto active"><a href="{{ route('admin') }}" class="nav-link">Admin</a></li>
                                    @endif
                                    <li class="link nav-item my-auto"><a href="{{ route('profile') }}" class="nav-link">Profile</a></li>
                                    <li class="link nav-item my-auto"><a href="{{ route('signout') }}" class="btn-reg btn btn-danger">Sign out</a></li>
                                    <li class="hamburger-menu my-auto" id="hr-menu"><i class="fas fa-bars fa-1x"></i></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    @else
    <div class="mobile-menu">
        <div class="mm-inner" id="menuBar">
            <ul class="">
                <li class="nav-item my-auto"><a href="{{ route('home') }}" class="menu nav-link">Home</a></li>
                <li class="nav-item my-auto"><a href="{{ route('news') }}" class="menu nav-link">News</a></li>
                <li class="nav-item my-auto"><a href="{{ route('admission') }}" class="menu nav-link">Admission</a></li>
                <li class="nav-item my-auto"><a href="{{ route('innovation') }}" class="menu nav-link">Innovation</a></li>
                <li class="nav-item my-auto mr-3"><a href="{{ route('login') }}" class="btn-reg btn btn-danger" style="float:right;">Sign In</a></li>
                <li class="x-menu my-auto white" id="x-menu"><i class="fas fa-times fa-2x"></i></li>
            </ul>
        </div>
    </div>
    <div class="header-bottom">
        <div class="hb-inner">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow bg-white rounded" >
                <div class="container justify-content-between">
                    <div class="row w-100">
                        <div class="col-sm-1">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img src="/img/iitu_logo_header.png" width="200" height="auto" loading="lazy">
                            </a>
                        </div>
                        <!--
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#publications" aria-controls="publications" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button> -->
                        <div class="col-sm-8 offset-3 d-flex">
                            <div class="collapse navbar-collapse">
                                <ul class="navbar-nav ml-auto">
                                    <li class="link nav-item my-auto active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                                    <li class="link nav-item my-auto"><a href="{{ route('news') }}" class="nav-link">News</a></li>
                                    <li class="link nav-item my-auto"><a href="{{ route('admission') }}" class="nav-link">Admission</a></li>
                                    <li class="link nav-item my-auto"><a href="{{ route('innovation') }}" class="nav-link">Innovation</a></li>
                                    <li class="link nav-item my-auto"><a href="{{ route('login') }}" class="btn-reg btn btn-danger">Sign In</a></li>
                                    <li class="hamburger-menu my-auto" id="hr-menu"><i class="fas fa-bars fa-1x"></i></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    @endif

    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-0baf1fc1-5a1d-4e3b-81c7-fd3509580bf5"></div>
    <script type="text/javascript">
        document.getElementById("hr-menu").onclick = function() {openMenu()};
        document.getElementById("x-menu").onclick = function() {closeMenu()};

        function closeMenu(){
            menuBtn = document.getElementById('x-menu');
            menu = document.getElementById('menuBar');

            menuBtn.classList.remove('is-active');
            menu.classList.remove('hello');
        }

        function openMenu() {

            menuBtn = document.getElementById("hr-menu");
            menu = document.getElementById('menuBar');

            menuBtn.classList.add('is-active');
            menu.classList.add('hello');

        }
    </script>
{{-- </header> --}}

