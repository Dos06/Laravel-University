@extends('layouts.app')

@section('title') Innovation @endsection

@section('content')

    <div class="container-fluid px-0">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="inno-back"></div>
            <div class="inno-title text-center">
                <h1>IITU Innovation Center</h1>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="slider-img d-block w-100" src="/img/slider1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Have a startup idea?</h5>
                        <p>You have found the right place!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="slider-img d-block w-100" src="/img/slider2.jfif" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>What is inside?</h5>
                        <p>We have a lot of cool stuff that you can use for free.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="slider-img d-block w-100" src="/img/slider3.jfif" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Enjoy the cozy atmosphere</h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center my-4">
                    <h2 class="display-4">About us</h2>
                    <p>
                        Functional innovative space with equipped workplaces,
                        meeting rooms and a play area.
                        <br>
                        Primarily for the business of
                        tomorrow - fast-growing innovative companies of the future, technology
                        projects aimed at the global market.
                        <br>
                        In general, for all those who desperately
                        need the right atmosphere for productive work.
                        <br>
                        Meetings with mentors and investors,
                        participation in contests, hackathons, bootcamps, conversations with the leaders
                        of successful startups will help you effectively launch your project
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
