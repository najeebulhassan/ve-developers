@extends('layouts.base')
@section('title','Graphic Design')
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
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Graphic Design <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Graphic Design</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-12 py-md-5">
                <div class="heading-section pt-md-5">
                    <h2 class="mb-4">Graphic Design</h2>
                    <p>Graphic design is a craft where professionals create visual content to communicate messages and ideas through typography, imagery, color and form. There are several ways of doing that, each with its own area of specialization. Each type of graphic design requires special skills and design techniques so usually a graphic designer choose to specialize in a single type. But since the industry is changing so the designers need to add more areas of specializations throughout their career. Graphic designers create visual concepts using computer software or by hand, to communicate ideas that inspire, inform, and captivate consumers. They develop the overall layout and production design for applications such as advertisements, brochures, magazines and reports. The beauty of a graphic designing is that it's a combination of art and technology in order to communicate a message. It is done through the strategic placement of images and text. It is an art with a purpose. It involves a creative and systematic plan to solve a problem or achieve certain objectives, with the use of images, symbols or even words. It is visual communication and the aesthetic expression of concepts and ideas using various graphic elements and tools.
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
                <a style="font-size: 13px; text-align: center;" class="nav-link active" data-toggle="pill" href="#digitalMarketing">Visual Identity Designs</a>
            </li>
            <li class="nav-item" style="width: 16.667%;">
                <a style="font-size: 12px; text-align: center;" class="nav-link" data-toggle="pill" href="#sem">Marketing & Advertisement</a>
            </li>
            <li class="nav-item" style="width: 16.667%;">
                <a class="nav-link" style="text-align: center;" data-toggle="pill" href="#smm">UI Graphic Designs</a>
            </li>
            <li class="nav-item" style="width: 16.667%;">
                <a class="nav-link" style="text-align: center;" data-toggle="pill" href="#emailMarketing">Publication Designs</a>
            </li>
            <li class="nav-item" style="width: 16.667%;">
                <a class="nav-link" style="text-align: center;" data-toggle="pill" href="#affiliateMarketing">Packaging Designs</a>
            </li>
            <li class="nav-item" style="width: 16.667%;">
                <a class="nav-link" style="text-align: center;" data-toggle="pill" href="#inOutBound">Motion Graphic design</a>
            </li>
        </ul>
        <hr style="border-top: 1px solid #413c69;">

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="digitalMarketing" class="container tab-pane active"><br>
                <p>A brand is a relationship between an organization or a business and its audience. A brand identity is how the organization communicates its personality, tone and essence as well as memories, emotions and experiences. Visual Identity graphic design is exactly that, the visual elements of brand identity that act as the face of a brand to communicate those intangible qualities through images, shapes and color. Designers that specialize in visual identity graphic design collaborate with brand stakeholders to create logos, typography, color palettes and image libraries that represent a brand's personality. Visual identity design is one of the most common design. Visual identity graphic designers must have the knowledge of all types of graphic designs in order to create design elements that are suitable across all visual media. They also should possess excellent communication, conceptual and creative skills and a determination for researching industries, organizations, trends and competitors.
                </p>
            </div>
            <div id="sem" class="container tab-pane fade"><br>
                <p>When most people think of graphic design, they think of designs created for marketing and advertising. Most of the company's success depend on the marketing strategies of their companies. Great marketing targets the audience's wants, needs, awareness and satisfaction they have about the product, service or brand. Since visual content is more engaging for people, graphic design helps organizations promote and communicate more effectively. Through marketing you create an interest in your product or brand and design helps you visually communicate your brand. Great design marketing is more than a company's logo font page, layout or images you use. In short it is the bridge that connects your brand to your customer as the design represents face of your brand so it isn't just about using stunning images and cool graphics. That's why smart marketing needs to be combined with a great design. Some of the examples of marketing and advertising graphic design can be: postcards and flyers, Magazine and newspaper ads, posters, banners and billboards, info graphics etc.
                </p>
            </div>
            <div id="smm" class="container tab-pane fade"><br>
                <p>A User Interface (UI) is how a user interacts with a device or application. User Interface design is a process designers used to build interfaces in the soft ware or computerized devices, focusing on looks or style. Designers primary aim is to create interfaces which users find easy to use. User Interface design refers to anticipating what users might need to do and ensuring that the interface has the elements that are easy to access, understand and use to facilitate those actions. UI brings the concepts from interaction design, visual design and informative architecture.
                </p>
                <p>UI includes all the things that a user interact with like the screen, keyboard and the mouse but when we talk about graphic design, UI design focuses on the user's visual experience and the design of on screen graphic elements like buttons, menus, micro interactions and more. It's a UI designer's responsibility to maintain a balance between aesthetic appeal and the technical functionality. UI designers specialize in desktop apps, mobile apps, web apps and games. Some of the examples of UI graphic design is web page designing, game interfaces, app design etc.
                </p>
            </div>
            <div id="emailMarketing" class="container tab-pane fade"><br>
                <p>Publications are long form pieces that come interaction with an audience through public distribution. They are considered to be a print medium traditionally. Publication medium is a classic type of design involving books, newspaper, magazines and catalogs. Graphic designers that specialize in publications work with editors and publishers to create layouts with carefully selected typography along with artwork which includes photography, graphics and illustrations. Publication designers may work as freelancers, as a creative agency member or being part of a publishing company. Publication designers must have an excellent communication., layout and organizational skills. However, publication with graphic design also needs some understanding of color management, printing and digital publishing. Some example of publication graphic design includes, Newsletters, directories, annual reports, catalogs etc.
                </p>
            </div>
            <div id="affiliateMarketing" class="container tab-pane fade"><br>
                <p>Most items require some type of bundling to secure and set them up for storage, distribution and sale. In any case, packaging configuration can likewise be a marketing tool for consumers, which makes it an incredibly significant way of promotion of a product. Each crate, jug and sack, can holder, or canister is an opportunity to be a narrative of a brand. Bundling planners make ideas, create mockups and make the print-prepared records for an item. This requires master information on print measures and a sharp comprehension of mechanical plan and complete knowledge of assembling. Since bundling configuration contacts endless controls, it's normal for fashioners to wind up making different resources for an item, for example, photography, delineations and visual personality. Packaging designers may be jack of all trades or specialize in a specific type of packaging or a specific industry. Their work requires first class calculated and critical thinking aptitudes notwithstanding a solid working information on print and mechanical plan. They should be adaptable to satisfy the needs of customers, advertisers and producers and know about current patterns.
                </p>
            </div>
            <div id="inOutBound" class="container tab-pane fade"><br>
                <p>Basically, motion illustrations are designs that are moving. It has several kinds like animation, audio, typography, imagery, video and different effects that are utilized in online media, TV and film. The medium's fame has soar as of late as innovation improved and video content became a ruler itself. Motion graphic designing is a to some degree new forte for graphic designers. Officially held for TV and film, mechanical advances have diminished creation time and costs, making the work of art more available and reasonable. Presently, motion graphic design is one of the freshest kinds of design and can be found over all digital platforms, which has made a wide range of new opportunities and openings. Motion graphic designers start by creating storyboards and afterward rejuvenate their ideas with animation, video and traditional art. Depending upon the business, a solid working information on showcasing, coding and 3D demonstrating can be positive resources.
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