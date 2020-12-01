@extends('layouts.base')
@section('title','Testimonials')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('public/assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate padding-bottom-8">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Testimonials <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Testimonials</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-5 col-sm-12 box">
                <div class="row">
                    <div class="col-md-3" style="padding: 45px 0 15px 30px">
                        <img src="public/assets/images/person_4.jpg" style="width: 80px;height: 80px;border-radius: 100%;">
                    </div>
                    <div class="col-md-9" style="padding: 10px 15px 0px 20px">
                        <p style="color:black">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                    <div class="authur-details"></div>
                    <div class="authur-name">
                        <h3 style="font-size: 20px;font-weight: 500;margin-bottom: -5px;color: #413c69;">Name</h3>
                        <span>CEO</span>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 col-sm-12 box">
                <div class="row">
                    <div class="col-md-3" style="padding: 45px 0 15px 30px">
                        <img src="public/assets/images/person_4.jpg" style="width: 80px;height: 80px;border-radius: 100%;">
                    </div>
                    <div class="col-md-9" style="padding: 10px 15px 0px 20px">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                    <div class="authur-details"></div>
                    <div class="authur-name">
                        <h3 style="font-size: 20px;font-weight: 500;margin-bottom: -5px;">Name</h3>
                        <span>CEO</span>
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

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg>
</div>

@endsection