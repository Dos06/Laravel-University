@extends('layouts.app')

@section('title') Admission @endsection

@section('content')

    <div class="container pt-3">
        <h3 class="text-center"><b>Upcoming Events</b></h3>
        <hr>
        <div class="row">
            <div class="col-xl-6">
                <h4><b>Bachelor's Program</b></h4>
                <div class="line"></div>
                <!-- LIST -->
                <div class="">
                    <!-- ITEM -->
                    <div class="row col-sm-12 mb-4">
                        <div class="calendar-item bg-red col-sm-2 text-align-center text-center white mb-2">
                            <h2><b>20</b></h2>
                            <h5><b>Jun</b></h5>
                        </div>
                        <div class="col-sm-10">
                            <h5><b>Start of documents accepting</b></h5>
                            <p>You can find out a complete list of all necessary documents on our social networks.</p>
                        </div>
                    </div>
                    <div class="row col-sm-12 mb-4">
                        <div class="calendar-item bg-red col-sm-2 text-align-center text-center white mb-2">
                            <h2><b>6</b></h2>
                            <h5><b>Jul</b></h5>
                        </div>
                        <div class="col-sm-10">
                            <h5><b>Scholarship applications</b></h5>
                            <p>To apply for a scholarship, you must have a UNT certificate, you can find out the list of other required documents on our social networks.</p>
                        </div>
                    </div>
                    <div class="row col-sm-12 mb-4">
                        <div class="calendar-item bg-red col-sm-2 text-align-center text-center white mb-2">
                            <h2><b>27</b></h2>
                            <h5><b>Aug</b></h5>
                        </div>
                        <div class="col-sm-10">
                            <h5><b>Orientation week</b></h5>
                            <p>During the orientation week, you will get acquainted with the educational process, learn about student organizations and see the university as a whole. Do not miss this event!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <h4><b>Master's Program</b></h4>
                <div class="line"></div>
                <!-- LIST -->
                <div class="">
                    <!-- ITEM -->
                    <div class="row col-sm-12 mb-4">
                        <div class="calendar-item bg-red col-sm-2 text-align-center text-center white mb-2">
                            <h2><b>15</b></h2>
                            <h5><b>Jul</b></h5>
                        </div>
                        <div class="col-sm-10">
                            <h5><b>Start of documents accepting</b></h5>
                            <p>You can find out a complete list of all necessary documents on our social networks.</p>
                        </div>
                    </div>
                    <div class="row col-sm-12 mb-4">
                        <div class="calendar-item bg-red col-sm-2 text-align-center text-center white mb-2">
                            <h2><b>21</b></h2>
                            <h5><b>Aug</b></h5>
                        </div>
                        <div class="col-sm-10">
                            <h5><b>Scholarship applications</b></h5>
                            <p>To apply for a scholarship, you must have a UNT certificate, you can find out the list of other required documents on our social networks.</p>
                        </div>
                    </div>
                    <div class="row col-sm-12 mb-4">
                        <div class="calendar-item bg-red col-sm-2 text-align-center text-center white mb-2">
                            <h2><b>5</b></h2>
                            <h5><b>Sep</b></h5>
                        </div>
                        <div class="col-sm-10">
                            <h5><b>Orientation week</b></h5>
                            <p>During the orientation week, you will get acquainted with the educational process, learn about student organizations and see the university as a whole. Do not miss this event!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-4">
        <h3 class="text-center"><b>Specialties</b></h3>
        <div class="line mx-auto"></div>
        <div class="row">

            <div class="card-group">
                <div class="card feature">
                    <div class="card-body">
                        <i class="fas fa-code fa-3x"></i>
                        <h5 class="card-title mt-3"><b>CSSE</b></h5>
                        <p class="card-text">Computer Science and Software Engineering<br>C++, Java, Python, C#, Machine Learning, Robotics, Electronics</p>
                    </div>
                </div>
                <div class="card feature">
                    <div class="card-body">
                        <i class="fas fa-shield-alt fa-3x"></i>
                        <h5 class="card-title mt-3"><b>SIS</b></h5>
                        <p class="card-text">Security of Information Systems<br>Security, Protection, Shields, Anivirus, C++, Java, Python, C#</p>
                    </div>
                </div>
                <div class="card feature">
                    <div class="card-body">
                        <i class="fab fa-python fa-3x"></i>
                        <h5 class="card-title mt-3"><b>IS</b></h5>
                        <p class="card-text">Information Systems<br>Python, C#, C++, Java, Machine Learning, HTML, CSS, JavaScript</p>
                    </div>
                </div>
            </div>

            <div class="card-group">
                <div class="card feature">
                    <div class="card-body">
                        <i class="fas fa-atom fa-3x"></i>
                        <h5 class="card-title mt-3"><b>RET</b></h5>
                        <p class="card-text">Radio Engineering<br>Electronics, Basic Circuit Theory, Robotics, Java, Python, C#</p>
                    </div>
                </div>
                <div class="card feature">
                    <div class="card-body">
                        <i class="fas fa-hand-holding-usd fa-3x"></i>
                        <h5 class="card-title mt-3"><b>FIN</b></h5>
                        <p class="card-text">Finances<br>Analytics, Risk Management, Mathematics, Algebra, Mathematical Analysis</p>
                    </div>
                </div>
                <div class="card feature">
                    <div class="card-body">
                        <i class="fas fa-headset fa-3x"></i>
                        <h5 class="card-title mt-3"><b>JUR</b></h5>
                        <p class="card-text">Journalism<br>Communcation Technologies, Adope Photoshop, Premiere Pro, Interviewing, Sports Analytics</p>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <script>
        $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < 4; i++) {
                next = next.next();
                if (!next.length) {
                    next=$(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        });
    </script>

@endsection
