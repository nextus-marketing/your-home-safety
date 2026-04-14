<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <link rel="icon" href="/frontend/my-img/favicon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description"
        content="Get reliable CCTV installation and home security solutions. Protect your home, office, and business with advanced surveillance systems. Call now for fast setup and expert service.">

    <!-- CSS Files
    ================================================== -->
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="/frontend/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="/frontend/css/swiper.css" rel="stylesheet" type="text/css">
    <link href="/frontend/css/style.css" rel="stylesheet" type="text/css">
    <link href="/frontend/css/my.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="/frontend/css/colors/scheme-01.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />

</head>

<body>
    <a href="tel:+14155552671" class="call-float">
        <i class="fa-solid fa-phone"></i>
    </a>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>

        <!-- preloader begin -->
        {{-- <div id="de-loader"></div> --}}
        <!-- preloader end -->

        <!-- header begin -->
        <header class="transparent scroll-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="/">
                                        <img class="logo-main" src="/frontend/my-img/logo.png" alt="">
                                        <img class="logo-scroll" src="/frontend/my-img/logo-2.png" alt="">
                                        <img class="logo-mobile" src="/frontend/my-img/logo.png" alt="">
                                    </a>
                                </div>
                                <!-- logo end -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainemenu begin -->
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="/">Home</a>

                                    </li>
                                    <li><a class="menu-item" href="/#about">About Us</a>

                                    </li>

                                    <li><a class="menu-item" href="/#contact">Contact Us</a></li>
                                </ul>
                                <!-- mainmenu end -->
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="tel:+1234567890" class="btn-main fx-slide"><span>+1 (234)
                                            555-2671</span></a>
                                    <span id="menu-btn"></span>
                                </div>

                                <div id="btn-extra">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
        <!-- content begin -->
        @yield('content')
        <!-- content end -->

        <!-- footer begin -->
        <footer class="section-dark">
            <div class="container">
                <div class="row gx-5 gy-4 align-items-start">

                    <!-- Logo + About -->
                    <div class="col-lg-6 col-md-6">
                        <img src="/frontend/my-img/logo.png" class="logo-footer mb-3" alt="">
                        <p class="mb-0">
                            At Your Home Safety, we provide reliable CCTV installation and advanced home security
                            solutions to protect your home, office, and business. Our expert team ensures quick setup,
                            high-quality surveillance, and trusted support for complete peace of mind.
                        </p>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="widget">
                            <h5 class="mb-3">Quick Links</h5>
                            <ul class="list-unstyled">
                                <li><a href="/">Home</a></li>
                                <li><a href="/#about">About Us</a></li>
                                <li><a href="/#contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="widget">
                            <h5 class="mb-3">Contact Us</h5>

                            <div class="fw-bold text-white mb-1">
                                <i class="icofont-phone me-2 id-color"></i>Call Us
                            </div>
                            <p class="mb-0">+1 123 456 789</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sub Footer -->
            <div class="subfooter mt-4 pt-3 border-top">
                <div class="container">
                    <div class="d-flex justify-content-between flex-wrap text-center text-md-start">

                        <div class="mb-2 mb-md-0">
                            Copyright 2026 - Your Home Seafty
                        </div>

                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="/terms-and-conditions">Terms & Conditions</a>
                            </li>
                            <li class="list-inline-item ms-3">
                                <a href="/privacy-policy">Privacy Policy</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->
    </div>

    <!-- overlay content begin -->
    <div id="extra-wrap" class="text-light">
        <div id="btn-close">
            <span></span>
            <span></span>
        </div>

        <div id="extra-content">
            <img src="/frontend/my-img/logo.png" class="w-150px" alt="">

            <div class="spacer-30-line"></div>

            <h5>Our Services</h5>
            <ul class="ul-check">
                <li><a href="#">CCTV Camera Installation</a></li>
                <li><a href="#">Home Security Systems</a></li>
                <li><a href="#">Video Door Phone Setup</a></li>
                <li><a href="#">Wireless Alarm Systems</a></li>
                <li><a href="#">Office Surveillance Solutions</a></li>
                <li><a href="#">Maintenance & Support</a></li>
            </ul>

            <div class="spacer-30-line"></div>

            <h5>Contact Us</h5>

            <div>
                <i class="icofont-envelope me-2 op-5"></i>
                support@yourhomesafety.com
            </div>

            <div style="margin-top:10px;">
                <i class="icofont-phone me-2 op-5"></i>
                <a href="tel:+14155552671" style="color:inherit; text-decoration:none;">
                    +1 (415) 555-2671
                </a>
            </div>

            <div class="spacer-30-line"></div>
        </div>
    </div>

    <!-- Popup Overlay -->
    <div id="popup-overlay">
        <div class="popup-box">

            <!-- Close Button -->
            <span class="popup-close" onclick="closePopup()">&times;</span>

            <!-- Logo -->
            <div class="popup-logo">
                <img src="/frontend/my-img/logo-2.png" alt="Logo">
            </div>

            <!-- Content -->
            <h2>Talk To Security Experts</h2>
            <p>Get 3 Months Free Monitoring Services</p>

            <!-- Button -->
            <div class="popup-btn">
                <a class="call-btn" href="tel:+14155552671">
                    <i class="fa-solid fa-phone"></i>
                    Call Now
                </a>
            </div>

        </div>
    </div>

    <script>
        function closePopup() {
            document.getElementById("popup-overlay").style.display = "none";
        }

        window.onload = function() {
            setTimeout(() => {
                document.getElementById("popup-overlay").style.display = "flex";
            }, 2000);
        };
    </script>

    <!-- Javascript Files
    ================================================== -->
    <script src="/frontend/js/plugins.js"></script>
    <script src="/frontend/js/designesia.js"></script>
    <script src="/frontend/js/swiper.js"></script>
    <script src="/frontend/js/custom-swiper-1.js"></script>
    <script src="/frontend/js/custom-marquee.js"></script>
    <script>
        document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
            ':35729/livereload.js?LR-verbose&snipver=1&LiveTest=1"></' + 'script>')
    </script>
</body>

</html>
