@extends('layouts.base')
@section('title','Web Application Development')
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
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Web Application Development <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Web Application Development</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row d-flex no-gutters">
            <!-- <div class="col-md-12 d-flex">
					<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/about.jpg);">
					</div>
				</div> -->
            <div class="col-md-12 py-md-5">
                <div class="heading-section pt-md-5">
                    <!-- <span class="subheading">We Create Small Solutions in United Kingdom</span> -->
                    <h2 class="mb-4">Web Application Development</h2>
                    <p>Our team of dedicated software engineers at MST Developers helps you build web applications using the latest cutting
                        edge technology stack which includes but not limited to Python/Django, Flask, NodeJS/ExpressJS, Laravel, Ruby on
                        Rails and ASP.NET on the backend as well as React, Angular and Vue on the frontend. We help you choose the best
                        stack according to your requirements. We also offer CMS/CRM based development services with popular CMS/CRM
                        systems such as WordPress, Shopify, Magento, Odoo, Salesforce, etc.
                    </p>
                </div>
            </div>
            <!-- <div class="col-md-12 pl-md-5">
                    <div class="heading-section pl-md-4 ">
                        <h2 class="mb-4">Web Application Development Divisions</h2>
                        <p>Web Application Development is divided into 3 major categories:
                        </p>
                        <ul style="list-style-type: none;">
                            <li>
                            <li class="font-size-icon"><i class="fa fa-caret-right"></i> Front-End Development</li>
                            <li class="font-size-icon"><i class="fa fa-caret-right"></i> Back-End Development</li>
                            <li class="font-size-icon"><i class="fa fa-caret-right"></i> Database Development</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 pl-md-5">
                    <div class="heading-section pl-md-4 ">
                        <h2 class="mb-4">Front-End Development OR UI/UX</h2>
                        <p>At MST Developers We Use The Following Technologies For Front-End Development:
                        </p>
                        <h3>HTML / CSS</h3>
                        <p>HTML (the Hypertext Markup Language) and CSS (Cascading Style Sheets) are two of the center advances for building
                            Web pages. HTML gives the structure of the page, CSS the (visual and aural) format, for an assortment of gadgets.
                        </p>
                    </div>
                </div>
                <div class="col-md-12 pl-md-5">
                    <div class="heading-section pl-md-4 ">
                        <h3>Sass</h3>
                        <p>Sass is a preprocessor scripting language that is interpreted or compiled into Cascading Style Sheets. SassScript is
                            the scripting language itself. Sass consists of two syntaxes. The original syntax, called "the indented syntax,"
                            uses a syntax similar to Haml.
                        </p>
                    </div>
                </div>
                <div class="col-md-12 pl-md-5">
                    <div class="heading-section pl-md-4 ">
                        <h3>Bootstrap</h3>
                        <p>Bootstrap is a free and open-source CSS structure coordinated at responsive, versatile first front-end web
                            advancement. It contains CSS-and JavaScript-based plan layouts for typography, structures, catches, route, and
                            other interface segments.
                        </p>
                    </div>
                </div>
                <div class="col-md-12 pl-md-5">
                    <div class="heading-section pl-md-4 ">
                        <h3>Javascript</h3>
                        <p>JavaScript, frequently abridged as JS, is a programming language that adjusts to the ECMAScript particular.
                            JavaScript is significant level, regularly in the nick of time assembled, and multi-worldview. It has wavy section
                            punctuation, dynamic composing, model based item direction, and top of the line capacities.
                        </p>
                    </div>
                </div>
                <div class="col-md-12 pl-md-5">
                    <div class="heading-section pl-md-4 ">
                        <h2 class="mb-4">Web Application Frame Works</h2>
                        <p>At MST Developers We Use The Following Technologies For Web Development:
                        </p>
                    </div>
                </div>
                <div class="col-md-12 pl-md-5">
                    <div class="heading-section pl-md-4 ">
                        <h3>React</h3>
                        <p>React just depicts itself as 'a javascript library for building UI'. This is an exceptionally basic and humble
                            depiction of React. It is a ground-breaking frontend library made and kept up by Facebook. Of all the frontend
                            systems recorded, React is the most mainstream and amazing. It is appropriate for enormous scope web ventures.
                            Picking it for little to medium estimated ventures is a little needless excess - by and by, as I would see it.
                        </p>
                    </div>
                </div>
                <div class="col-md-12 pl-md-5">
                    <div class="heading-section pl-md-4 ">
                        <h3>Vue</h3>
                        <p>Vue portrays itself as 'the reformist JavaScript system'. Vue is littler in size and simpler to learn than React,
                            and is useful for most sizes of ventures. It's additionally simple to execute into a venture which is useful.
                        </p>
                    </div>
                </div>
                <div class="col-md-12 pl-md-5">
                    <div class="heading-section pl-md-4 ">
                        <h3>Angular</h3>
                        <p>Angular is a TypeScript-based open-source web application structure/framework drove by the Angular Team at Google and by a
                            network of people and enterprises. Angular is a finished revamp from a similar group that fabricated AngularJS.
                        </p>
                    </div>
                </div> -->
        </div>
    </div>
    <div class="container">
        <br>
        <!-- Nav pills -->
        <!-- <div class="row nav nav-pills" role="tablist">
                <div class="col-md-4 nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#home">Home</a>
                </div>
                <div class="col-md-4 nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu1">Menu 1</a>
                </div>
                <div class="col-md-4 nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu2">Menu 2</a>
                </div>
            </div> -->
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item" style="width: 16.66666666666667%;">
                <a style="font-size: 13px;" class="nav-link active" data-toggle="pill" href="#backend">Backend Development</a>
            </li>
            <li class="nav-item" style="width: 16.66666666666667%;">
                <a style="font-size: 12px;" class="nav-link" data-toggle="pill" href="#frontend">Frontend Development</a>
            </li>
            <li class="nav-item" style="width: 16.66666666666667%;">
                <a class="nav-link" data-toggle="pill" href="#pythonDjangoFlask">Python/Django/Flask</a>
            </li>
            <li class="nav-item" style="width: 16.66666666666667%;">
                <a class="nav-link" style="text-align: center;" data-toggle="pill" href="#nodeJs">NodeJS</a>
            </li>
            <li class="nav-item" style="width: 16.66666666666667%;">
                <a class="nav-link" style="text-align: center;" data-toggle="pill" href="#wordPress">Wordpress</a>
            </li>
            <li class="nav-item" style="width: 16.66666666666667%;">
                <a class="nav-link" style="text-align: center;" data-toggle="pill" href="#openCart">OpenCart</a>
            </li>
        </ul>
        <hr style="border-top: 1px solid #413c69;">

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="backend" class="container tab-pane active"><br>
                <p>At MST Developers, We represent considerable authority in backend advancement with ability in wide scope of backend
                    dialects and systems. Wether you need to construct an application without any preparation or hoping to broaden/keep up
                    your current backend we can furnish you with the correct group or designer to carry out that responsibility.
                    MST Developers follow the light-footed technique all through the lifecycle of the task where every day announcements
                    and week by week runs/stand ups are essential for our cycle. We suggest you the best innovation stack that suit your
                    business necessities while keeping your inclination in thought.
                </p>
                <h3>Expertise</h3>
                <ul class="expertise" style="padding-left: 0px;">
                    <li>Microservices Architecture</li>
                    <li>Serverless Architecture</li>
                    <li>GraphQL</li>
                    <li>Django</li>
                    <li>Firebase</li>
                </ul>
            </div>
            <div id="frontend" class="container tab-pane fade"><br>
                <p>MST Developers work with bleeding edge javascript structures like ReactJs, AngularJS, Angular7+ and Vue JS to work cutting edge
                    frontend hurl web applications. Our architects convey responsive SPA (single page applications) and other web
                    applications that works over completely upheld gadgets from handheld to enormous 5k shows. Our frontend group works
                    intimately with our in-house UI/UX group or distant UI/UX groups on customer's premises and convey pixel flawless
                    intelligent frontends.
                </p>
                <h3>Expertise</h3>
                <ul class="expertise" style="padding-left: 0px;">
                    <li>ReactJS</li>
                    <li>AngularJS</li>
                    <li>VueJS</li>
                    <li>jQuery</li>
                    <li>ReactiveX</li>
                    <li>ThreeJS</li>
                    <li>Data Driven Apps</li>
                    <li>Responsive Design &amp; Styling</li>
                </ul>
            </div>
            <div id="pythonDjangoFlask" class="container tab-pane fade"><br>
                <p>Python is one of our center mastery at MST Developers and we have been working with python since 2013. We have worked
                    with assortment of Python structures including Django, Flask, Pyramid and Tornado yet Django is our system of decision
                    with regards to architecting an enormous scope application. Django Rest Framework is an incredible apparatus to
                    immediately think of API backend frameworks to be utilized with versatile applications or Single Page Applications.
                </p>
                <h3>Expertise</h3>
                <ul class="expertise" style="padding-left: 0px;">
                    <li>Django</li>
                    <li>Flask</li>
                    <li>Google App Engine</li>
                    <li>AWS Elastic Beanstalk</li>
                </ul>
            </div>
            <div id="nodeJs" class="container tab-pane fade"><br>
                <p>NodeJS is one of the quickest developing Javascript based backend system lately. NodeJS have occasion driven design
                    which settles on it a structure of decision with regards to continuous applications. It mixes well with NoSQL databased
                    like MongoDB and Cassandra and MST Developers truly suggests it for applications that need associated engineering like
                    visit applications or ongoing notices and compose concentrated applications. NodeJS is regularly utilized with React
                    or Angular frontend related to Sails or Express. Mainstream NodeJS stacks that we work with are MEAN and MERN.
                </p>
            </div>
            <div id="wordPress" class="container tab-pane fade"><br>
                <p>As indicated by W3Techs, an organization which screens and reviews web innovation utilization more than 30% of sites over
                    the globe use WordPress as their substance the executives framework. WordPress is quickest approach to create feature and
                    portfolio sites and offers wide scope of instruments and modules to get your site ready for action in days. At
                    MST Developers we have engineers that are very knowledgeable with WordPress and can get your portfolio, item data,
                    internet business or other significant sites fully operational in days. We have experience expanding on head of
                    well known topics like Avada, Divi, Flatsome alongside custom modules and subject improvement administrations.
                </p>
            </div>
            <div id="openCart" class="container tab-pane fade"><br>
                <p>OpenCart is an extraordinary instrument in the event that you need to get your web based business store ready for action.
                    At MST Developers we offer types of assistance in OpenCart applications improvement, OpenCart subject turn of events and
                    other related administrations. OpenCart is especially extremely mainstream with Drop-transporters.
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

<section class="ftco-section ftco-no-pt bg-light ftco-faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-faqs w-100">
                    <div class="img mb-4 mb-sm-0" style="background-image:url(public/assets/images/about-2.jpg);">
                    </div>
                    <div class="img img-2 mb-4 mb-sm-0" style="background-image:url(public/assets/images/about-1.jpg);">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pl-lg-5">
                <div class="heading-section mb-5 mt-5 mt-lg-0">
                    <span class="subheading">FAQs</span>
                    <h2 class="mb-3">Frequently Asks Questions</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header p-0" id="headingOne">
                            <h2 class="mb-0">
                                <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                    <p class="mb-0">How to fixed a problem?</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-body py-3 px-0">
                                <ol>
                                    <li>Far far away, behind the word mountains</li>
                                    <li>Consonantia, there live the blind texts</li>
                                    <li>When she reached the first hills of the Italic Mountains</li>
                                    <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                    <li>Separated they live in Bookmarksgrove right</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-0" id="headingTwo" role="tab">
                            <h2 class="mb-0">
                                <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                    <p class="mb-0">How to manage your business loans?</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body py-3 px-0">
                                <ol>
                                    <li>Far far away, behind the word mountains</li>
                                    <li>Consonantia, there live the blind texts</li>
                                    <li>When she reached the first hills of the Italic Mountains</li>
                                    <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                    <li>Separated they live in Bookmarksgrove right</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-0" id="headingThree" role="tab">
                            <h2 class="mb-0">
                                <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                    <p class="mb-0">How to grow your investments funds?</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body py-3 px-0">
                                <ol>
                                    <li>Far far away, behind the word mountains</li>
                                    <li>Consonantia, there live the blind texts</li>
                                    <li>When she reached the first hills of the Italic Mountains</li>
                                    <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                    <li>Separated they live in Bookmarksgrove right</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-0" id="headingFour" role="tab">
                            <h2 class="mb-0">
                                <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                    <p class="mb-0">What are those requirements for businesses?</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body py-3 px-0">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
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
</section>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg>
</div>


@endsection