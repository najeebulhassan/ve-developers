@extends('layouts.base')
@section('title','Databases')
@section('content')

<style>
    .font-size-icon {
        font-size: 20px;
    }

    .heading-section h3 {
        font-size: 25px;
        font-weight: 800;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #6EC2D3 !important;
    }

    .nav-pills .nav-link {
        border-radius: 0.25rem;
        color: black;
        font-size: 13px;
    }

    .expertise li {
        display: inline-flex;
        background-color: #ebf4fa;
        padding: 7px;
        margin-top: 5px;
        border-radius: 5px;
    }
</style>


<section class="hero-wrap hero-wrap-2" style="background-image: url('public/assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate padding-bottom-8">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Databases <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Databases</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-12 py-md-5">
                <div class="heading-section pt-md-5">
                    <h2 class="mb-4">Databases</h2>
                    <p>An information base is a sorted out assortment of organized data, or information, ordinarily put away electronically
                        in a PC framework. An information base is typically constrained by a data set administration framework (DBMS).
                        Together, the information and the DBMS, alongside the applications that are related with them, are alluded to as an
                        information base framework, regularly abbreviated to simply information base. Specialists at VEDevelopers have
                        critical data on Database Management Systems (DBMS).
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <br>
        <!-- Nav pills -->
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item" style="width: 20%;">
                <a style="font-size: 13px; text-align: center;" class="nav-link active" data-toggle="pill" href="#mySQL">MySQL</a>
            </li>
            <li class="nav-item" style="width: 20%;">
                <a style="font-size: 12px; text-align: center;" class="nav-link" data-toggle="pill" href="#postgreSQL">PostgreSQL</a>
            </li>
            <li class="nav-item" style="width: 20%;">
                <a class="nav-link" style="text-align: center;" data-toggle="pill" href="#oracle">Oracle</a>
            </li>
            <li class="nav-item" style="width: 20%;">
                <a class="nav-link" style="text-align: center;" data-toggle="pill" href="#sqLite">SQLite</a>
            </li>
            <li class="nav-item" style="width: 20%;">
                <a class="nav-link" style="text-align: center;" data-toggle="pill" href="#sqlServer">Microsoft SQL Server</a>
            </li>
        </ul>
        <hr style="border-top: 1px solid #413c69;">

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="mySQL" class="container tab-pane active"><br>
                <p>MySQL is utilized in practically all the open source web extends that require an information base in the back-end.
                    MySQL is essential for the amazing LAMP stack alongside Linux, Apache and PHP.
                </p>
            </div>
            <div id="postgreSQL" class="container tab-pane fade"><br>
                <p>PotgreSQL is an open source object-social information base framework. It runs on most *nix flavors, Windows and Mac OS.
                    This has full help for joins, sees, triggers, put away techniques and so forth.
                </p>

            </div>
            <div id="oracle" class="container tab-pane fade"><br>
                <p>Oracle is the best database for any mission critical commercial application. Oracle has following four different editions
                    of the database:
                </p>
                <ul style="list-style-type: none; padding-left: 0px;">
                    <li>
                    <li class="font-size-icon"><i class="fa fa-caret-right"></i> Standard Edition</li>
                    <li class="font-size-icon"><i class="fa fa-caret-right"></i> Standard Edition One</li>
                    <li class="font-size-icon"><i class="fa fa-caret-right"></i> Enterprise Edition</li>
                    <li class="font-size-icon"><i class="fa fa-caret-right"></i> Express Edition</li>
                </ul>
            </div>
            <div id="sqLite" class="container tab-pane fade"><br>
                <p>VEDevelopers offer crossover application advancement utilizing the most recent tech stack which incorporates Ionic,
                    React Native and Flutter.
                </p>
            </div>
            <div id="sqlServer" class="container tab-pane fade"><br>
                <p>SQLite doesn't work like a conventional customer worker model with independent cycle. Rather, it is an independent,
                    worker less SQL information base motor.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter bg-light ftco-no-pt" id="section-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="50">0</strong>
                    </div>
                    <div class="text">
                        <span>Years of Experienced</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="8500">0</strong>
                    </div>
                    <div class="text">
                        <span>Cases Completed</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="20">0</strong>
                    </div>
                    <div class="text">
                        <span>Awards Won</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="50">0</strong>
                    </div>
                    <div class="text">
                        <span>Expert Consultant</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ftco-section testimony-section bg-light">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                <span class="subheading">Testimonies</span>
                <h2>Happy Clients &amp; Feedbacks</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(public/assets/images/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(public/assets/images/person_2.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(public/assets/images/person_3.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(public/assets/images/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(public/assets/images/person_2.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.faqs')

<!-- <section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-7 d-flex align-items-center">
                <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;">Sign Up for Your Free 1st Accounting Consultation</h2>
            </div>
            <div class="col-md-5 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> -->


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg>
</div>

@endsection