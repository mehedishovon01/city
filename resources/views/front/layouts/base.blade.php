<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('fronts/img/logos/logo-shortcut.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fronts/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fronts/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fronts/css/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fronts/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fronts/css/slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fronts/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fronts/css/switcher.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fronts/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fronts/css/default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fronts/css/styles.css') }}" id="colors">
    <link href="../../../fonts.googleapis.com/css669b.css?family=Fira+Sans:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">
</head>

<body>
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <div id="top-bar" class="hidden-sm-down" style="background-color: rgb(51, 51, 51)">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-9 col-12">
                    <div class="top-bar-info">
                        <ul>
                            <li><i class="fa fa-envelope"></i>info@cbcrl.com
                            <li>
                            <li><i class="fa fa-phone"></i>880-2-55110947
                            <li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <ul class="social-icons hidden-md-down">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header>
        <nav id="navigation4" class="container-lg navigation">
            <div class="nav-header"> <a class="nav-brand" href="{{ url('/') }}"> <img
                        src="{{ asset('public/uploads/logo.jpg') }}" class="main-logo" alt="logo" id="main_logo"
                        style="height: 80px; width: 200px;"> </a>
                <div class="nav-toggle"></div>
            </div>
            <div class="nav-menus-wrapper">
                <ul class="nav-menu align-to-right">
                    <li><a href="{{ route('front.about') }}" style="color: rgb(58, 58, 58)">CBC</a>
                        <ul class="nav-dropdown">
                            <li><a href="about-2.html">Overview/About Us    </a></li>
                            <li>
                                <a href="about.html">Our People</a>
                                <ul class="nav-dropdown">
                                    <li><a href="{{ route('boardofdirectors') }}">Board of Directors</a></li>
                                    <li><a href="{{ route('leadership') }}">Leadership</a></li>
                                    <li><a href="about-2.html">Leadership</a></li>
                                </ul>
                            </li>
                            <li><a href="about-2.html">Achievements & Recognitions</a></li>
                        </ul>
                    </li>
                    <li><a href="#" style="color: rgb(58, 58, 58)">What We Do</a>
                        <ul class="nav-dropdown">
                            <li>
                                <a href="services.html">Advisory</a>
                                <ul class="nav-dropdown">
                                    <li><a href="services.html">Corporate Advisory</a></li>
                                    <li><a href="services-2.html">Structured Finance</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="services-2.html">Portfolio Management</a>
                                <ul class="nav-dropdown">
                                    <li><a href="services.html">Discretionary Portfolio Management</a></li>
                                    <li><a href="services-2.html">Non- Discretionary Portfolio Management</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="services.html">Transaction Credentials</a></li>
                    <li><a href="#" style="color: rgb(58, 58, 58)">CBC Research</a>
                        <ul class="nav-dropdown">
                            <li><a href="services.html">Weekly Market Insight</a></li>
                            <li><a href="services.html">Weekly Mutual Fund Report</a></li>
                            <li><a href="services.html">IPO Notes</a></li>
                            <li><a href="services.html">Economy Update</a></li>
                            <li><a href="services.html">Equity Note</a></li>
                        </ul>
                    </li>
                    <li>
                                <a href="services-2.html">Prospectus & Documents</a>
                                <ul class="nav-dropdown">
                                    <li><a href="services-3.html">IM</a></li>
                                    <li><a href="service-detail.html">Teaser and Factsheet</a></li>
                                    <li><a href="cases.html">IPO Result</a></li>
                                </ul>
                            </li>
                    <li>
                        <a href="cases.html">News and Events</a>
                        <ul class="nav-dropdown">
                            <li><a href="services-3.html">Press Releases</a></li>
                            <li><a href="service-detail.html">Articles and Interviews</a></li>
                        </ul>
                    </li>
                    <li><a href="#" style="color: rgb(58, 58, 58)">Career</a>
                    </li>
                    <li><a href="#" style="color: rgb(58, 58, 58)">Contact Us</a>
                    </li>
                    <li><a href="#" style="color: rgb(58, 58, 58)">Clinet Login</a> 
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('contents')



    <footer style="background-color: rgb(51, 52, 52)">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <h3>ABOUT US</h3>
                    <div class="mt-25">
                        <p class="mt-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <div class="footer-social-icons mt-25">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <h3>LATEST NEWS</h3>
                    <div class="mt-25">
                        <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <p>..................................................................</p>
                        <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <p>..................................................................</p>
                        <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <p>..................................................................</p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <h3>POPULER NEWS</h3>
                    <div class="mt-25">
                        <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <p>..................................................................</p>
                        <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <p>..................................................................</p>
                        <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <p>..................................................................</p>

                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-12">
                    <h3>CONTACT US</h3>
                    <div class="footer-tags mt-25">
                        <p>Head Office City Centre, 13th Floor, Level-14, Unit ID: 13D, 90/1 Motijheel C/A, Dhaka-1000,
                            Bangladesh</p>
                        <p><i class="fa fa-phone"></i> 880-2-55110947</p>
                        <p><i class="fa fa-envelope"></i> info@cbcrl.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <style>
        .footer-bar {
            margin-top: 0px;
        }

    </style>
    <div class="section" style="background-color: rgb(39, 40, 40);">
        <div class="container" style="height: 60px;">
            <div class="footer-bar">
                <p class="text-center" style="margin-bottom: 10px;">Copyright © <?php echo date('Y'); ?>. All Rights
                    Reserved.</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('public/fronts/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/fronts/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/fronts/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/fronts/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('public/fronts/js/navigation.js') }}"></script>
    <script src="{{ asset('public/fronts/js/navigation.fixed.js') }}"></script>
    <script src="{{ asset('public/fronts/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/fronts/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('public/fronts/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('public/fronts/js/tabs.min.js') }}"></script>
    <script src="{{ asset('public/fronts/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('public/fronts/js/swiper.min.js') }}"></script>
    <script src="{{ asset('public/fronts/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/fronts/js/switcher.js') }}"></script>
    <script src="{{ asset('public/fronts/js/modernizr.js') }}"></script>
    <script src="{{ asset('public/fronts/js/map.js') }}"></script>
    <script src="{{ asset('public/fronts/js/main.js') }}"></script>
    <script src="{{ asset('public/fronts/js/popper.min.js') }}"></script>
</body>

</html>
