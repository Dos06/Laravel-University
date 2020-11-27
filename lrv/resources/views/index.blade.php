@extends('layouts.app')

@section('title') Main Page @endsection

@section('content')

    <div class="back-video">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="/img/video.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex h-100 text-left align-items-center ">
                <div class="w-100 text-white">
                    <h1 class="header-title display-3">INTERNATIONAL</h1>
                    <h1 class="header-title display-4">UNIVERSITY</h1>
                    <p class="lead mb-0"></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-4">
            <div class="col-lg-6">
                <div class="edu-years">
                    <div class="edu-years-filter nav" id="nav-tab" role="tablist">
                        <a class="active show" data-toggle="tab" href="#2009"><span>2009</span></a>
                        <a data-toggle="tab" href="#2011" class=""><span>2011</span></a>
                        <a data-toggle="tab" href="#2013" class=""><span>2013</span></a>
                        <a data-toggle="tab" href="#2015" class=""><span>2015</span></a>
                    </div>

                    <div class="edu-years-content tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="2009" role="tabpanel">
                            <ul class="px-0 my-3">
                                <li>IITU was established on April 2, 2009 on behalf of the First President of the Republic of Kazakhstan - Nursultan Abishevich Nazarbayev.</li>
                                <li>On May 29, 2009, the Ministry of Education and Science of the Republic of Kazakhstan issued a state license for educational activities to the University.</li>
                                <li>Cisco Laboratory - in Almaty in summer 2009, the university signed a memorandum of understanding and cooperation in the field of information and communication technologies with Cisco. This was done as part of the active development of cooperation with the largest IT companies in order to provide the students of the International University of Information Technologies with the best opportunities for obtaining high-quality specialized education.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="2011" role="tabpanel">
                            <ul class="px-0 my-3">
                                <li>Cloud Computing of Innogrid - On August 9, 2011, a laboratory of open systems and cloud computing was established in close cooperation with the Chinese company Huawei, the Zerde infocommunication holding and the International University of Information Technology.</li>
                                <li>The Apple Training Center is an official Apple certified laboratory that develops mobile applications for the IOS operating system. The laboratory was opened in 2011 at the International University of Information Technology. The laboratory belongs to the Department of Information Systems.</li>
                                <li>Also in 2011, there were such significant events in the history of the university as a Memorandum with JSC NIT on July 16, 2011 on mutual understanding with Universiti Kuala Lumpur, Malaysia and a Memorandum with Graduate IT Systems Management School, Riga on September 15, 2011 on mutual understanding with Riga Technical University Riga. Latvia</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="2013" role="tabpanel">
                            <ul class="px-0 my-3">
                                <li>On May 8, 2013, the University received scientific and scientific and technical accreditation from the Ministry of Education and Science of the Republic of Kazakhstan and on July 4, 2018 passed the re-accreditation procedure.</li>
                                <li>June 25, 2013 A ceremonial presentation of diplomas to the first graduates of the International University of Information Technologies took place in Almaty. Deputy Akim of Almaty Zauresh Amanzholova, Vice President of iCarnegie Michael Bridzhez, Ambassador of Malaysia to Kazakhstan Dato Ahmad Razidi Bin Hazizi took part in the award ceremony.</li>
                                <li>The 3D graphics and animation laboratory was opened at the International University of Information Technologies in 2013. Despite this, the laboratory managed to create several high-quality products for the Kazakhstan market. The main focus of the laboratory is 3D Mapping Show, as well as the creation of video presentations and various 3D projects.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="2015" role="tabpanel">
                            <ul class="px-0 my-3">
                                <li>In 2015, IITU students took first place in 1/4 of the world championship in sports programming ACM ICPC 2015. This victory allowed the team to reach the semifinals of the world championship in sports programming ACM ICPC 2015-2016, which was held on December 6 in Tashkent.</li>
                                <li>Also, IITU students took first place in the final of the international technology competition Imagine Cup in the Game development category. The competition was held in three nominations: socially significant projects (World Citizenship), innovative applications (Innovation) and games (Games).</li>
                                <li>On December 11, 2015, a collective amateur radio station with the call sign UN9GWA was opened at IITU. The MUIT collective radio station is equipped with modern radio equipment from ICOM and BARRETT firms, and efficient antennas. The IUIT radio station is the first and only collective radio station among the universities of Kazakhstan at the moment.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="edu-right-thumb">
                    <img class="img-fluid h-auto" src="/img/amazon.jpg" style="width:auto; height: 500px;">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-danger">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 p-0 pl-md-3 py-4">
                    <div class="">
                        <div class="">
                            <h2>Have any questions? We are ready to help!</h2>
                            <button type="button" class="btn btn-lg btn-dark" data-toggle="modal" data-target="#subscribe">
                                Contact us<i class="fas fa-angle-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="subscribe" tabindex="-1" aria-labelledby="SubscribeLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="SubscribeLabel">Subscribe on News</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <p style="margin:0"id="errorMess">Fill all fields</p>
                            </div>
                                <form id="formMail">

                                    <div class="form-group">
                                        <label>Email : </label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email..." >
                                    </div>
                                    <div class="form-group">
                                        <label>Name : </label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter name..." >
                                    </div>
                                    <div class="form-group">
                                        <label>Phone : </label>
                                        <input type="phone" name="phone" id="phone" class="form-control" placeholder="Enter phone..." >
                                    </div>
                                    <div class="form-group">
                                        <label>Some information : </label>
                                        <input type="text-area" name="info" id="info" class="form-control" placeholder="Put some info..." >
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                        <button type="button" id="sendMail" class="btn btn-dark">SUBSCRIBE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 py-4">
                    <div class="row justify-content-around text-center">
                        <div>
                            <i class="fas fa-user-graduate fa-4x pb-4"></i>
                            <h5>5000+ Students</h5>
                        </div>
                        <div>
                            <i class="fas fa-book-open fa-4x pb-4"></i>
                            <h5>20+ Directions</h5>
                        </div>
                        <div>
                            <i class="fas fa-user-tie fa-4x pb-4"></i>
                            <!-- <i class="fas fa-glasses fa-4x pb-4"></i> -->
                            <h5>100+ Teachers</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <a href="{{ route('admission') }}" class="feature col-lg-4 col-md-6">
                <i class="fas fa-code-branch fa-4x my-4"></i>
                <h4><b>6 specialties, 4 directions</b></h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod recusandae sint eligendi, aliquam in labore exercitationem quas? Reprehenderit ipsa sit, iusto quo ut placeat voluptate?</p>
            </a>
            <a href="{{ route('admission') }}" class="feature col-lg-4 col-md-6">
                <i class="fas fa-laptop-code fa-4x my-4"></i>
                <h4><b>Modern computers</b></h4>
                <p>Computers have become an important part of our everyday life. We use computers every day, though not everyone realizes it. Even smartphones that are hidden in our bags and pockets are actually small computers.</p>
            </a>
            <a href="{{ route('admission') }}" class="feature col-lg-4 col-md-6">
                <i class="fas fa-chalkboard-teacher fa-4x my-4"></i>
                <h4><b>Foreign teachers</b></h4>
                <p>Teaching English online is rapidly growing in popularity. Allowing you to teach students all over the world from the comfort of your home. However, it can often be challenging to keep students motivated.</p>
            </a>
        </div>
    </div>


@endsection
