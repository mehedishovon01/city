@extends('front.layouts.base')
@section('contents')
    <div class="swiper-main-slider-fade swiper-container" style="height: 700px;">
        <div class="swiper-wrapper">
            @foreach ($sliders as $item)
                <div class="swiper-slide" style="background-image: url('public/uploads/slider/{{ $item->image }}');">
                    <div class="container">
                        <div class="slider-content left-holder">
                            <h2 class="animated fadeInDown" style="color: rgb(236, 31, 40)"> {{ Str::limit($item->title, 50) }} </h2>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-12">
                                    <p class="animated fadeInDown text-justify"> {{ Str::limit($item->description, 200) }} </p>
                                </div>
                            </div>
                            <div class="animated fadeInUp mt-30" style="color: rgb(236, 31, 40)"> <a href="{{ $item->link }}"
                                    class="dark-button button-md">Learn
                                    More</a> </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>




    <div class="section-block" style="padding: 5px;">
        <div class="container">
            <div class="row mt-60">
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="pr-30-md">
                        <div class="text-content-big">
                            <p style="color: rgb(204, 204, 204)">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="container">
                        <div class="row">
                          <div class="col-sm">
                            <img
                                style="color: rgb(204, 204, 204)"
                                src="{{ asset('public/fronts/img/partners/partner1.png') }}" alt="partner-image">
                          </div>
                          <div class="col-sm">
                            <img
                                style="color: rgb(204, 204, 204)"
                                src="{{ asset('public/fronts/img/partners/partner2.png') }}" alt="partner-image">
                          </div>
                          <div class="col-sm">
                            <img
                            style="color: rgb(204, 204, 204)"
                            src="{{ asset('public/fronts/img/partners/partner3.png') }}" alt="partner-image">
                          </div>
                          <div class="col-sm">
                            <img
                                style="color: rgb(204, 204, 204)"
                                src="{{ asset('public/fronts/img/partners/partner4.png') }}" alt="partner-image">
                          </div>
                          <div class="col-sm">
                            <img
                                style="color: rgb(204, 204, 204)"
                                src="{{ asset('public/fronts/img/partners/partner5.png') }}" alt="partner-image">
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        .swiper-button-next1 {
            position: absolute;

            /* border-style: solid; */
            /* border-width: 37px 20px 0 0; */
            border-color: rgb(0, 0, 0) transparent transparent transparent;
        }

        .swiper-button-prev1 {
            position: absolute;

            /* border-style: solid; */
            /* border-width: 37px 20px 0 0; */
            border-color: rgb(0, 0, 0) transparent transparent transparent;
        }

    </style>

    <div class="swiper-main-slider-fade swiper-container" style="padding-top: 40px; background-color:rgb(245, 245, 245); height: 500px;">
        <div class="section-heading center-holder">
            <h3 style="color: rgb(236, 31, 40)">OUR SERVICES</h3>
        </div>
        <div class="swiper-wrapper">
            @foreach ($ourservices as $item)
                <div class="swiper-slide" >
                    <div class="container">
                        <div class="slider-content left-holder">
                            <div class="row text-left">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="pr-30-md">
                                        <div class="section-heading">
                                            <h4 style="color: rgb(0, 0, 0)">{{ Str::limit($item->title, 50) }}</h4>
                                        </div>
                                        <div class="text-content-big mt-20 text-justify">
                                            <p style="color: rgb(134, 135, 139)">{{ Str::limit($item->description, 200) }}</p>
                                        </div>
                                        <div class="mt-25" style="color: rgb(236, 31, 40)"> <a
                                                href="{{ $item->link }}" class="primary-button button-sm mb-15-xs">Learn
                                                More</a> </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12"> <img
                                        src="{{ asset('public/uploads/ourservice/' . $item->image) }}"
                                        class="rounded-border shadow-primary" alt="img"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>




    <div class="section-block" style="padding-top: 40px;">
        <div class="container">
            @foreach ($latest_news as $item)
                <div class="section-heading center-holder">
                    <h3 style="color: rgb(236, 31, 40)">LATEST NEWS</h3>
                    <p>{{ Str::limit($item->header_title, 150) }}</p>
                </div>
                <div class="row" style="padding-top: 60px;">
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="pr-30-md">
                            <img style="height: 500px;" src="{{ asset('public/uploads/latest-news/' . $item->image) }}"
                                class="rounded-border shadow-primary" alt="img">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="section-heading">
                            <h4 style="color: rgb(0, 0, 0)">{{ Str::limit($item->title, 50) }}</h4>
                        </div>
                        <div class="text-content-big mt-20">
                            <p class="text-justify" style="color: rgb(134, 135, 139)">{{ Str::limit($item->description, 200) }}</p>
                            @foreach ($feature_news as $item)
                                <div class="feature-flex-square">
                                    <div class="clearfix">
                                        <div class="feature-flex-square-icon" style="width: 15%;"> <i
                                                class="icon-clock"></i>
                                        </div>
                                        <div class="feature-flex-square-content">
                                            <h4><a href="#">{{ Str::limit($item->title, 30) }}</a></h4>
                                            <p class="text-justify">{{ Str::limit($item->description, 100) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-25" style="color: rgb(236, 31, 40)"> <a href="{{ $item->link }}"
                                class="primary-button button-sm mb-15-xs float-right">Learn More</a> </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @foreach ($stay_up_to_date as $item)
    <div class="section-block-bg" style="background-image: url({{ asset('public/uploads/stayuptodate/' . $item->image) }});">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading">
                        <h3><strong>{{ Str::limit($item->title, 30) }}</strong></h3>
                        <div class="section-heading-line-left"></div>
                    </div>
                    <div class="text-content-big mt-20">
                        <p class="text-justify">{{ Str::limit($item->description, 150) }}</p>
                    </div>
                    <div class="mt-20"> <a href="#" class="primary-button button-md">Learn More</a> </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach


    <div class="section-block">
        <div class="container">
            <div class="row mt-30">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="team-box-2">
                        <div class="team-box-2-image"> <img src="{{ asset('public/fronts/img/team/team1.jpg') }}"
                                alt="member">
                            <div class="team-box-2-overlay">
                                <div class="team-box-2-name">
                                    <h4>Samm Bock</h4>
                                    <h5>Support Enginer</h5>
                                </div>
                                <div class="team-box-2-content"> <a href="#"><i class="fa fa-facebook-official"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i
                                            class="fa fa-instagram"></i></a> <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="team-box-2">
                        <div class="team-box-2-image"> <img src="{{ asset('public/fronts/img/team/team2.jpg') }}"
                                alt="member">
                            <div class="team-box-2-overlay">
                                <div class="team-box-2-name">
                                    <h4>Mary Cay</h4>
                                    <h5>Support Enginer</h5>
                                </div>
                                <div class="team-box-2-content"> <a href="#"><i class="fa fa-facebook-official"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i
                                            class="fa fa-instagram"></i></a> <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="team-box-2">
                        <div class="team-box-2-image"> <img src="{{ asset('public/fronts/img/team/team3.jpg') }}"
                                alt="member">
                            <div class="team-box-2-overlay">
                                <div class="team-box-2-name">
                                    <h4>Henry Ford</h4>
                                    <h5>Support Enginer</h5>
                                </div>
                                <div class="team-box-2-content"> <a href="#"><i class="fa fa-facebook-official"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i
                                            class="fa fa-instagram"></i></a> <a href="#"><i
                                            class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="team-box-2">
                        <div class="team-box-2-image"> <img src="{{ asset('public/fronts/img/team/team4.jpg') }}"
                                alt="member">
                            <div class="team-box-2-overlay">
                                <div class="team-box-2-name">
                                    <h4>Clarence D. Ryan</h4>
                                    <h5>Nina Harris</h5>
                                </div>
                                <div class="team-box-2-content"> <a href="#"><i class="fa fa-facebook-official"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i
                                            class="fa fa-instagram"></i></a> <a href="#"><i
                                            class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .owl-item.center>div .testmonial-item-bxx {
            background: rgb(245, 245, 245);
            border: rgb(245, 245, 245);
            cursor: auto;
            /* box-shadow: 0px 10px 30px 0px rgb(50 50 50 / 16%); */
            color: aqua;
        }

        .testmonial-arrow {
            border-color: rgb(245, 245, 245)
        }

        .owl-item.center>div .testmonial-item-bxx {
            /* background: #d21e2b;
                border: 1px solid #d21e2b; */
            cursor: auto;
            box-shadow: 0px 0px 0px 0px rgb(50 50 50 / 16%);
        }

        .testmonial-arrow {
            position: absolute;
            bottom: -25px;
            left: 50px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 37px 20px 0 0;
            border-color: rgb(245, 245, 245) transparent transparent transparent;
            display: none;
        }

    </style>

    <div class="section-block">
        <div class="container">
            <div class="section-heading center-holder">
                <h3 style="color: rgb(236, 31, 40)">WHAT OUR CUSTOMERS ARE SAYING</h3>
                <div class="section-heading-line"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.</p>
            </div>
            <div class="owl-carousel owl-theme mt-30 owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transition: all 0.85s ease 0s; width: 3800px; transform: translate3d(-760px, 0px, 0px);">
                        <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                            <div class="testmonial-item">
                                <div class="testmonial-item-bxx">
                                    <p style="color: rgb(236, 31, 40)"> Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris.</p>
                                    {{-- <div class="testmonial-arrow"></div> --}}
                                </div>
                                <div class="testmonial-item-bxx-img">
                                    <div class="testmonial-item-img"> <img
                                            src="{{ asset('public/fronts/img/testmonials/t-2.jpg') }}" alt="img">
                                    </div>
                                    <div class="testmonial-item-name">
                                        <h4>Jason Smith</h4> <span>Consultant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                            <div class="testmonial-item">
                                <div class="testmonial-item-bxx">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris.</p>
                                    {{-- <div class="testmonial-arrow"></div> --}}
                                </div>
                                <div class="testmonial-item-bxx-img">
                                    <div class="testmonial-item-img"> <img
                                            src="{{ asset('public/fronts/img/testmonials/t-3.jpg') }}" alt="img">
                                    </div>
                                    <div class="testmonial-item-name">
                                        <h4>Jasmin Priestley</h4> <span>Company Owner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item center" style="width: 350px; margin-right: 30px;">
                            <div class="testmonial-item">
                                <div class="testmonial-item-bxx">
                                    <p style="color: rgb(134, 135, 139)"> Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris.</p>
                                    <div class="testmonial-arrow"></div>
                                </div>
                                <div class="testmonial-item-bxx-img">
                                    <div class="testmonial-item-img"> <img
                                            src="{{ asset('public/fronts/img/testmonials/t-4.jpg') }}" alt="img">
                                    </div>
                                    <div class="testmonial-item-name">
                                        <h4>Michelle Stacey</h4> <span style="color: rgb(134, 135, 139)">Consultant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item center" style="width: 350px; margin-right: 30px; color: rgb(245, 245, 245)">
                            <div class="testmonial-item">
                                <div class="testmonial-item-bxx">
                                    <p style="color: rgb(134, 135, 139)"> Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris.</p>
                                    <div class="testmonial-arrow"></div>
                                </div>
                                <div class="testmonial-item-bxx-img">
                                    <div class="testmonial-item-img"> <img
                                            src="{{ asset('public/fronts/img/testmonials/t-1.jpg') }}" alt="img">
                                    </div>
                                    <div class="testmonial-item-name">
                                        <h4>Henry Ford</h4> <span style="color: rgb(134, 135, 139)">Financial
                                            Analyst</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item center" style="width: 350px; margin-right: 30px;">
                            <div class="testmonial-item">
                                <div class="testmonial-item-bxx">
                                    <p style="color: rgb(134, 135, 139)"> Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris.</p>
                                    <div class="testmonial-arrow"></div>
                                </div>
                                <div class="testmonial-item-bxx-img">
                                    <div class="testmonial-item-img"> <img
                                            src="{{ asset('public/fronts/img/testmonials/t-2.jpg') }}" alt="img">
                                    </div>
                                    <div class="testmonial-item-name">
                                        <h4>Jason Smith</h4> <span style="color: rgb(134, 135, 139)">Consultant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 350px; margin-right: 30px;">
                            <div class="testmonial-item">
                                <div class="testmonial-item-bxx">
                                    <p style="color: rgb(134, 135, 139)"> Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris.</p>
                                    <div class="testmonial-arrow"></div>
                                </div>
                                <div class="testmonial-item-bxx-img">
                                    <div class="testmonial-item-img"> <img
                                            src="{{ asset('public/fronts/img/testmonials/t-3.jpg') }}" alt="img">
                                    </div>
                                    <div class="testmonial-item-name">
                                        <h4>Jasmin Priestley</h4> <span>Company Owner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 350px; margin-right: 30px;">
                            <div class="testmonial-item">
                                <div class="testmonial-item-bxx">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris.</p>
                                    <div class="testmonial-arrow"></div>
                                </div>
                                <div class="testmonial-item-bxx-img">
                                    <div class="testmonial-item-img"> <img
                                            src="{{ asset('public/fronts/img/testmonials/t-4.jpg') }}" alt="img">
                                    </div>
                                    <div class="testmonial-item-name">
                                        <h4>Michelle Stacey</h4> <span>Consultant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                            <div class="testmonial-item">
                                <div class="testmonial-item-bxx">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris.</p>
                                    <div class="testmonial-arrow"></div>
                                </div>
                                <div class="testmonial-item-bxx-img">
                                    <div class="testmonial-item-img"> <img
                                            src="{{ asset('public/fronts/img/testmonials/t-1.jpg') }}" alt="img">
                                    </div>
                                    <div class="testmonial-item-name">
                                        <h4>Henry Ford</h4> <span>Financial Analyst</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                            <div class="testmonial-item">
                                <div class="testmonial-item-bxx">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris.</p>
                                    <div class="testmonial-arrow"></div>
                                </div>
                                <div class="testmonial-item-bxx-img">
                                    <div class="testmonial-item-img"> <img
                                            src="{{ asset('public/fronts/img/testmonials/t-2.jpg') }}" alt="img">
                                    </div>
                                    <div class="testmonial-item-name">
                                        <h4>Jason Smith</h4> <span>Consultant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                            <div class="testmonial-item">
                                <div class="testmonial-item-bxx">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris.</p>
                                    <div class="testmonial-arrow"></div>
                                </div>
                                <div class="testmonial-item-bxx-img">
                                    <div class="testmonial-item-img"> <img
                                            src="{{ asset('public/fronts/img/testmonials/t-3.jpg') }}" alt="img">
                                    </div>
                                    <div class="testmonial-item-name">
                                        <h4>Jasmin Priestley</h4> <span>Company Owner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled">
                    <div class="owl-prev">prev</div>
                    <div class="owl-next">next</div>
                </div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </div>

    <div class="section-block-parallax" style="background-image: url({{ asset('public/fronts/img/bg/bg2.png') }});">
        <div class="container">
            <div class="section-heading center-holder white-color">
                <h2><strong>NEWSLETTER</strong></h2>
                <div class="section-heading-line"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.</p>
            </div>
            <div class="mt-30 center-holder">
                <form class="newsletter-form" method="post" action="#"> <input type="email" name="email"
                        placeholder="Enter Your Email adress"> <button type="submit">Subscribe</button> </form>
            </div>
        </div>
    </div>
@endsection
