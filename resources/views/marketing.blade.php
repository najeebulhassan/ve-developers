@extends('layouts.base')
@section('title','Marketing')
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
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Marketing <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Marketing</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-12 py-md-5">
                <div class="heading-section pt-md-5">
                    <h2 class="mb-4">Marketing</h2>
                    <p>Marketing refers to the activities of a company who takes the responsibility to promote the buying or selling of a product or service. It includes advertising, selling and delivering products to consumers. At its core, marketing seeks to take a product or service, identify its ideal customers, and draw the customer's attention to the product or service available.
                    </p>
                    <p>Marketing as a discipline involves all the actions a company undertakes to draw in customers and maintain relationships with them. Networking and building a strong relation with potential and past customers is part of the work too. It may include some social and virtual activities like playing golf with a prospective clients, writing thank you emails, responding to calls and emails quickly, and meeting a client for a coffee or a meal.
                    </p>
                    <p>Product, Price, Place and Promotion are the 4P's of the marketing that always need a focus. These 4P's collectively adds a lot of value to the progression of a company. At its most basic level marketing seeks to match a company's products and services to its customers and this ultimately ensures profitability.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <br>
        <!-- Nav pills -->
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item" style="width: 16.667%;">
                <a style="font-size: 13px; text-align: center;" class="nav-link active" data-toggle="pill" href="#digitalMarketing">Digital Marketing</a>
            </li>
            <li class="nav-item" style="width: 16.667%;">
                <a style="font-size: 12px; text-align: center;" class="nav-link" data-toggle="pill" href="#sem">Search Engine Marketing</a>
            </li>
            <li class="nav-item" style="width: 16.667%;">
                <a class="nav-link" style="text-align: center;" data-toggle="pill" href="#smm">Social Media Marketing</a>
            </li>
            <li class="nav-item" style="width: 16.667%;">
                <a class="nav-link" style="text-align: center;" data-toggle="pill" href="#emailMarketing">Email Marketing</a>
            </li>
            <li class="nav-item" style="width: 16.667%;">
                <a class="nav-link" style="text-align: center;" data-toggle="pill" href="#affiliateMarketing">Affiliate Marketing </a>
            </li>
            <li class="nav-item" style="width: 16.667%;">
                <a class="nav-link" style="text-align: center;" data-toggle="pill" href="#inOutBound">Inbound/Outbound</a>
            </li>
        </ul>
        <hr style="border-top: 1px solid #413c69;">

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="digitalMarketing" class="container tab-pane active"><br>
                <p>This type of marketing encircle all the marketing efforts that involves the use of electronic device or an internet. Business is usually run by using the digital channels such as search engines, social media, email and other websites to connect with the current and prospective customers. By using these online media channels, digital marketing is used by the companies to endorse goods, services and brands. We can attract customers via email, content marketing, search platforms, social media and more. To gain a rise in this field requires a strategy that helps achieve some specific business goals. In today's world digital marketing is offering to target an audience that can be reached in a cost effective and measurable way. Along with this it also includes increasing the brand loyalty by giving an audience a chance to know you while you also get to know them personally. Moreover, Digital Marketing gives a chance of driving online sales.
                </p>
            </div>
            <div id="sem" class="container tab-pane fade"><br>
                <p>Search Engine Marketing or SEM includes all activities in the effort of ensuring your business's products or services are visible on the search engine results pages (SERPs). It is a way to create and edit a website so that search engines rank it higher than the other pages. When a user types in a certain keyword SEM enables your business to appear as a top result for that searched query. So many advertisers prefer to expand their activities, including increasing search engines and adding more keywords. There are two types of SEM: Search Engine Optimization (SEO) for organic search results and pay-per-click (PPC) advertising for sponsored SERPs.
                </p>
                <p>To learn about SEO, you must gain the knowledge of search engine ranking factors and produce content for search engines to index. </p>
                <p>While to learn about PPC (SEM), you must work with a search engine you are looking to purchase the placement with.</p>
            </div>
            <div id="smm" class="container tab-pane fade"><br>
                <p>Social Media Marketing is creating a content to promote your brand and products via using various social media platforms like Face book, Instagram, LinkedIn, Snap chat, You tube, Pinterest and Twitter. It is a very useful way to build your brand, increase sales, and drive website traffic. Keep on your focus on the audience that is going to view your content. As no one logs in to the social media to purchase something, so brain storm enough to think of the content that would be useful, informative, entertaining, and/or compelling. Your unique content would be shared to the specific platform to help you boost your post's reach. There are also a range of social media management tools that help businesses to get the most out of the social media platforms listed above. Social Media Marketing can help you generate engagement around your brand, create a community, and serve as a customer support channel for your customers.
                </p>
                <!-- <ul style="list-style-type: none; padding-left: 0px;">
                    <li>
                    <li class="font-size-icon"><i class="fa fa-caret-right"></i> Standard Edition</li>
                    <li class="font-size-icon"><i class="fa fa-caret-right"></i> Standard Edition One</li>
                    <li class="font-size-icon"><i class="fa fa-caret-right"></i> Enterprise Edition</li>
                    <li class="font-size-icon"><i class="fa fa-caret-right"></i> Express Edition</li>
                </ul> -->
            </div>
            <div id="emailMarketing" class="container tab-pane fade"><br>
                <p>Email Marketing involves sending educational or entertaining content and promotional messages to people who willingly subscribe to receive messages from you. The primary goal is to strengthen your relation with the customer or advertise by sending marketing messages personalized to them. In short the goal is to increase customer's loyalty, or delivering the important information. If coupled with the right messages, Email marketing can become one of your most impactful marketing channels. For a successful running of an Email marketing you need to strategize how you will build your email list which is the database of the contacts you can send email to. The most common mechanism is through lead capture forms on your website. then you need email marketing software to monitor the effectiveness of the emails you are sending. For further productivity you also need to learn about email automation software that sends emails based on triggering criteria.
                </p>
            </div>
            <div id="affiliateMarketing" class="container tab-pane fade"><br>
                <p>Affiliate Marketing is when an online retailer rewards a website with a commission for each customer they refer their promotion on one of the online retailer's product. It is the process of earning a commission by promoting other people's (or company's) products. The simple procedure involves you find a product you like, promote it to others and earn a piece of profit for each sale that you do. The website is often called an affiliate. The sales are tracked via affliate links from one website to another. Because affiliate marketing works by spreading the responsibilities of product marketing and creation across parties, it manages to leverage the abilities of a variety of individuals for a more effective marketing strategy while providing contributors with a share of profit. Not all affiliates advertise the product using the same way. There are different kinds of marketing channels like influencers, bloggers, paid search focused microsites, email lists and large media websites are used to advertise the poduct.
                </p>
            </div>
            <div id="inOutBound" class="container tab-pane fade"><br>
                <p>Inbound Marketing refers to attract customers rather than interrupt them. The majority of strategies of Inbound Marketings falls under digital marketing as consumers are empowered to do research online as they progress through their own buyer’s journey. The primary aim for inbound marketing is to create a valuable experience that have a positive impact on people and your business to attract maximum number of customers to your website with relevant and thoughtful content.
                </p>
                <p>Outbound Marketing focus on the intrusive promotion such as print ads, TV ads, cold calling, and email blasts. This marketing method is called outbound as it is pushing and spreading the message to its customers whether they need it or not. </p>
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