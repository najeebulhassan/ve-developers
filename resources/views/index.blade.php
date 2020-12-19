@extends('layouts.base')
@section('title','VEDevelopers')
@section('content')

<!-- <div class="hero-wrap">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(public/assets/images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-8 ftco-animate">
                        <div class="text w-100 text-center">
                            <h3 style="color:#413c69;">Microsoft Technology Development</h3>
                            <h1 class="mb-4">Digital Strategies To Help You Get More</h1>
                            <p><a href="#" class="btn btn-white">Connect with us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(public/assets/images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-8 ftco-animate">
                        <div class="text w-100 text-center">
                            <h3 style="color:#413c69;">Creativity & Technology</h3>
                            <h1 class="mb-4">MORE BUSINESS GROWTH</h1>
                            <h3 style="color: white;"> Web Development & Designing, SEO, Digital Marketing & More...</h3>
                            <p><a href="#" class="btn btn-white">Connect with us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(public/assets/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-8 ftco-animate">
                        <div class="text w-100 text-center">
                            <h3 style="color:#413c69;"> Hire the Best</h3>
                            <h3 style="color: white;">Ask VEDevelopers to create a comprehensive and aggressive digital marketing plan taking your business to new heights.</h3>
                            <p><a href="#" class="btn btn-white">Connect with us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- <video autoplay muted loop id="myVideo" style="width: 1348px; position:absolute; top: 0;">

    <source src="public/assets/videos/ved-video.mp4" type="video/mp4">

</video> -->


<div class="splide">
    <div class="splide__track">
        <ul class="splide__list" style="background: #bfe6f2;">

            <li class="splide__slide">
                <h2 class="" style="position: absolute; top: 222px; left: 100px;">WEB</h2>
                <h2 class="ml2" style="position: absolute; top: 270px; left: 100px;">DEVELOPMENT</h2>
                <p style="position: absolute; top: 345px; left: 100px;">Our team of dedicated software engineers at VEDevelopers helps you build web <br> applications using the latest cutting edge technology stack which includes but not <br> limited to Python/Django, Flask, NodeJS/ExpressJS, Laravel, Ruby on Rails and <br> ASP.NET on the backend as well as React, Angular and Vue on the frontend. </p>
                <img style="width: 50%; float: right; height: 300px; margin-top: 200px; margin-right: 20px; " src="public/assets/images/ve-developers_4.png" alt="">
            </li>
            <li class="splide__slide">
                <h2 class="" style="position: absolute; top: 222px; left: 100px;">APP</h2>
                <h2 class="ml3" style="position: absolute; top: 250px; left: 100px;">DEVELOPMENT</h2>
                <p style="position: absolute; top: 345px; left: 100px;">Experts at VEDevelopers have significant information on Mobile Technologies(Native <br> Android, Native IOS and Hybrid Mobile Apps) and Frameworks which helps in building <br> a safe and versatile responsive plan with incredible UI/UX for IOS and Android gadgets <br> and will be advanced for speed effectiveness and security.</p>
                <img style="width: 28%; float: right; height: 300px; margin-top: 180px; margin-right: 80px; " src="public/assets/images/ve-developers_1.png" alt="">
            </li>
            <li class="splide__slide">
                <h2 class="" style="position: absolute; top: 222px; left: 100px;">SOCIAL</h2>
                <h2 class="ml10" style="position: absolute; top: 250px; left: 100px;"><span class="text-wrapper"><span class="letters">MEDIA MARKETING</span></span></h2>
                <p style="position: absolute; top: 345px; left: 100px;">Social Media Marketing is creating a content to promote your brand and products via using <br> various social media platforms like Facebook, Instagram, LinkedIn, Snapchat, Youtube, <br> Pinterest and Twitter. It is a very useful way to build your brand, increase sales, and drive website traffic. </p>
                <img style="width: 28%; float: right; height: 300px; margin-top: 200px; margin-right: 80px; " src="public/assets/images/ve-developers_2.png" alt="">
            </li>
            <li class="splide__slide">
                <h2 class="" style="position: absolute; top: 222px; left: 100px;">SEARCH</h2>
                <h2 class="ml6" style="position: absolute; top: 250px; left: 100px;">
                    <span class="text-wrapper">
                        <span class="letters">ENGINE OPTIMIZATION</span>
                    </span>
                </h2>
                <p style="position: absolute; top: 345px; left: 100px;">Search Engine Optimization (SEO) is the art and science of getting pages to rank higher <br> in search engines, for example, Google. Since search is one of the fundamental manners <br> by which individuals find content online, positioning higher in search engines can <br> prompt an expansion in traffic to a site. </p>
                <img style="width: 28%; float: right; height: 300px; margin-top: 180px; margin-right: 80px; " src="public/assets/images/ve-developers_3.png" alt="">
            </li>

            <li class="splide__slide">
                <h2 style="position: absolute; top: 222px; left: 100px;">GRAPHIC</h2>

                <h2 class="ml16" style="position: absolute; top: 230px; left: 100px;">
                    <span class="text-wrapper">
                        <span class="line line1"></span>
                        <span class="letters"><strong> DESIGNING </strong></span>
                    </span>
                </h2>
                <p style="position: absolute; top: 345px; left: 100px;">Graphic design is a craft where professionals create visual content to communicate <br> messages and ideas through typography, imagery, color and form. There are several <br> ways of doing that, each with its own area of specialization.</p>
                <img style="width: 30%; float: right; height: 300px; margin-top: 180px; margin-right: 80px;" src="public/assets/images/ve-developers_5.png" alt="">
            </li>


            <!-- <li class="splide__slide"><h2 class="ml" style="position: absolute; top: 270px; left: 10px;">WEB DEVELOPMENT</h2><img style="width: 70%; float: right; height: 400px; margin-top: 175px;" src="public/assets/images/ve-developers_2.png" alt=""></li> -->
            <!-- <li class="splide__slide"><h2 class="ml" style="position: absolute; top: 270px; left: 10px;">WEB DEVELOPMENT</h2><img style="width: 70%; float: right; height: 400px; margin-top: 175px;" src="public/assets/images/ve-developers_3.png" alt=""></li> -->
            <!-- <li class="splide__slide"><h2 class="ml" style="position: absolute; top: 270px; left: 10px;">WEB DEVELOPMENT</h2><img style="width: 70%; float: right; height: 400px; margin-top: 175px;" src="public/assets/images/ve-developers_5.png" alt=""></li> -->
        </ul>
    </div>
</div>

<!-- Service box start -->
<section id="service" class="service angle">
    <div class="container">
        <div class="row" style="margin-bottom: 70px;">
            <div class="col-md-12 heading-section" style="text-align: center;">
                <!-- <span><i class="fa fa-cogs" style="font-size: 50px;"></i></span> -->
                <h2 style="letter-spacing: 5px;"> Welcome to VEDevelopers</h2>
                <h3>We Provide The Best Software Solutions</h3>
            </div>
        </div><!-- Title row end --><br>

        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="text-center">
                    <span class="service-icon icon-pentagon-new"><i class="fas fa-laptop-code"></i></span>
                    <h3>Web Application Development</h3>
                    <p> Our team of dedicated software engineers at VEDevelopers helps you build web applications using the latest cutting edge technology stack…</p><br>
                    <a href="web-apps-development" class="btn btn-primary  px-2 py-3" id="services-links" style="margin-top: 8px;">Read More</a>

                </div>
            </div>
            <!--/ End first service -->

            <div class="col-md-4 col-sm-12">
                <div class="text-center">
                    <span class="service-icon icon-pentagon-new"><i class="fa fa-android"></i></span>
                    <h3>Mobile Application Development</h3>
                    <p>Experts at VEDevelopers have significant information on Mobile Technologies(Native Android, Native IOS and Hybrid Mobile Apps). and Frameworks which helps…</p><br>
                    <a href="mobile-apps-development" class="btn btn-primary  px-2 py-3" id="services-links" style="margin-top: 8px;">Read More</a>
                </div>

            </div>
            <!--/ End Second service -->

            <div class="col-md-4 col-sm-12">
                <div class="text-center">
                    <span class="service-icon icon-pentagon-new"><i class="fas fa-database"></i></span>
                    <h3>Databases</h3>
                    <p style="margin-top: 50px;">An information base is a sorted out assortment of organized data, or information, ordinarily put away electronically in a PC framework. An information base…</p> <br>
                    <a href="databases" class="btn btn-primary  px-2 py-3" id="services-links" style="margin-top: 8px;">Read More</a>

                </div>
            </div>
            <!--/ End Third service -->
        </div>
        <br><br>
        <hr style="border-top: 1px solid #413c69;"><br><br>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="text-center">
                    <span class="service-icon icon-pentagon-new"><i class="fas fa-poll"></i></span>
                    <h3>Marketing</h3>
                    <p style="margin-top: 50px;">Marketing refers to the activities of a company who takes the responsibility to promote the buying or selling of a…</p> <br>
                    <a href="marketing" class="btn btn-primary  px-2 py-3" id="services-links" >Read More</a>

                </div>
            </div>
            <!--/ End first service -->

            <div class="col-md-3 col-sm-12">
                <div class="text-center">
                    <span class="service-icon icon-pentagon-new"><i class="fas fa-palette"></i></span>
                    <h3>Graphic Designing</h3>
                    <p>Graphic design is a craft where professionals create visual content to communicate messages and ideas…</p> <br>
                    <a href="graphic-design" class="btn btn-primary  px-2 py-3" id="services-links" >Read More</a>

                </div>
            </div>
            <!--/ End Second service -->

            <div class="col-md-3 col-sm-12">
                <div class="text-center">
                    <span class="service-icon icon-pentagon-new"><i class="fas fa-laptop-code"></i></span>
                    <h3>Content Writing</h3>
                    <p style="margin-top: 50px;">A content writer is a professional writer producing an up to dated content to use online. They are internet expert individuals…</p> <br>
                    <a href="content-writing" class="btn btn-primary  px-2 py-3" id="services-links" >Read More</a>

                </div>
            </div>
            <!--/ End Third service -->

            <div class="col-md-3 col-sm-3">
                <div class="text-center">
                    <span class="service-icon icon-pentagon-new"><i class="fas fa-search"></i></span>
                    <h3>Search Engine Optimization </h3>
                    <p>Search Engine Optimization (SEO) is the art and science of getting pages to rank higher in search engines…</p> <br>
                    <a href="search-engine-optimization" class="btn btn-primary  px-2 py-3" id="services-links" >Read More</a>
                </div>
            </div>

        </div>
    </div><!-- Content row end -->
    <!--/ Container end -->
</section>
<!--/ Service box end -->

<section class="ftco-section bg-light pt-100">
    <div class="container homepage-icons">
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block">
                    <div class="icon d-flex mr-2">
                        <span><i class='fas fa-pencil-ruler'></i></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Responsive Design Skills</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block">
                    <div class="icon d-flex mr-2">
                        <span><i class="fas fa-layer-group"></i></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">User Interface/User Experience (UI/UX)</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block">
                    <div class="icon d-flex mr-2">
                        <span><i class="fab fa-wordpress"></i></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Content Management System (CMS)</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block">
                    <div class="icon d-flex mr-2">
                        <span><i class="fab fa-laravel"></i></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Model View Controller (MVC)</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container homepage-icons" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block">
                    <div class="icon d-flex mr-2">
                        <span><i class="fas fa-database"></i></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">MySQL/NoSQL Databases</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block">
                    <div class="icon d-flex mr-2">
                        <span><i class="fas fa-search"></i></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">On/Off Page SEO</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block">
                    <div class="icon d-flex mr-2">
                        <span><i class="far fa-chart-bar"></i></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Data Analysis</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block">
                    <div class="icon d-flex mr-2">
                        <span><i class="fas fa-user-friends"></i></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">CRM Skills</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.number-counter')

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

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">News &amp; Blog</span>
                <h2>Latest news from our blog</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url('public/assets/images/image_1.jpg');">
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-2">
                            <div><a href="#">March 31, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url('public/assets/images/image_2.jpg');">
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-2">
                            <div><a href="#">March 31, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url('public/assets/images/image_3.jpg');">
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-2">
                            <div><a href="#">March 31, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Price &amp; Plans</span>
                <h2>Affordable Packages</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <span class="excerpt d-block">Personal</span>
                        <span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mos</sub></span>

                        <ul class="pricing-text mb-5">
                            <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                            <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                            <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                            <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                            <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                        </ul>

                        <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <span class="excerpt d-block">Business</span>
                        <span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mos</sub></span>

                        <ul class="pricing-text mb-5">
                            <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                            <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                            <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                            <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                            <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                        </ul>

                        <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <span class="excerpt d-block">Ultimate</span>
                        <span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mos</sub></span>

                        <ul class="pricing-text mb-5">
                            <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                            <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                            <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                            <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                            <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                        </ul>

                        <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <span class="excerpt d-block">Premium</span>
                        <span class="price"><sup>$</sup> <span class="number">149</span> <sub>/mos</sub></span>

                        <ul class="pricing-text mb-5">
                            <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                            <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                            <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                            <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                            <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                        </ul>

                        <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg>
</div>

<script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml16');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml16 .letter',
            translateY: [-100, 0],
            easing: "easeOutExpo",
            duration: 1400,
            delay: (el, i) => 30 * i
        }).add({
            targets: '.ml16',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
</script>
<script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml6 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml6 .letter',
            translateY: ["1.1em", 0],
            translateZ: 0,
            duration: 750,
            delay: (el, i) => 50 * i
        }).add({
            targets: '.ml6',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
</script>

<script>
    new Splide('.splide', {
        type: 'loop',
        padding: {
            right: '5rem',
            left: '5rem',
        },
    }).mount();

    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml2');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml2 .letter',
            scale: [4, 1],
            opacity: [0, 1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 950,
            delay: (el, i) => 70 * i
        }).add({
            targets: '.ml2',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });

    // Wrap every letter in a span Second Styling
    var textWrapper = document.querySelector('.ml3');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml3 .letter',
            opacity: [0, 1],
            easing: "easeInOutQuad",
            duration: 2250,
            delay: (el, i) => 150 * (i + 1)
        }).add({
            targets: '.ml3',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
</script>

<script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml10 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml10 .letter',
            rotateY: [-90, 0],
            duration: 1300,
            delay: (el, i) => 45 * i
        }).add({
            targets: '.ml10',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
</script>


@endsection