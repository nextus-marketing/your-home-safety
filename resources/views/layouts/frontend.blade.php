<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description"
        content="Get reliable CCTV installation and home security solutions. Protect your home, office, and business with advanced surveillance systems. Call now for fast setup and expert service.">

    <!-- Page Title -->
    <title>@yield('title')</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/images/favicon.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="/frontend/css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="/frontend/css/all.min.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="/frontend/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="/frontend/css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="/frontend/css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="/frontend/css/custom.css" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="/frontend/css/my.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
</head>

<body>

    <!-- Preloader Start -->
    {{-- <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="/frontend/images/loader.svg" alt=""></div>
        </div>
    </div> --}}
    <!-- Preloader End -->

    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="topbar-info-text">
                        <p>Talk to Security Experts & Protect What Matters Most</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="/">
                        <img src="/frontend/my-img/logo-2.png" alt="Logo" width="150px">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="/#about">About Us</a>
                                <li class="nav-item"><a class="nav-link" href="/#contact">Contact Us</a></li>
                            </ul>
                        </div>

                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="tel:+18664206110" class="btn-default">+1 (866) 420-6110</a>
                        </div>
                        <!-- Header Btn End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')

    <!-- Main Footer Section Start -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <!-- Footer Newsletter Form Start -->
                    <div class="footer-links footer-newsletter-form">
                        <div class="footer-logo mb-3">
                            <img src="/frontend/my-img/logo.png" alt="" width="100">
                        </div>
                        <p>At Your Home Safety, we provide reliable CCTV installation and advanced home security
                            solutions to protect your home, office, and business. Our expert team ensures quick setup,
                            high-quality surveillance, and trusted support for complete peace of mind.</p>
                    </div>
                    <!-- Footer Newsletter Form End -->
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <!-- Footer Links Start -->
                    <div class="footer-links footer-quick-links">
                        <h3>Quick link</h3>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li><a href="/#about">about us</a></li>
                            <li><a href="/#contact">Contact Us</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/terms-and-condition">Terms & Conditions</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>Contact</h3>
                        <ul>
                            <li><a href="tel:+18664206110">+1 (866) 420-6110</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>
            </div>
        </div>

        <!-- Footer Copyright Start -->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Footer Copyright Text Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © 2026 Your Home Safety.</p>
                        </div>
                        <!-- Footer Copyright Text End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyright End -->
    </footer>
    <!-- Main Footer Section End -->

    <!-- Popup Modal -->
    <div id="securityPopup" class="popup-overlay">
        <div class="popup-box">
            <span class="popup-close">&times;</span>

            <div class="popup-content">
                <img src="/frontend/my-img/logo-2.png" alt="Logo" class="popup-logo">

                <h2>Talk to Security Experts & Protect What Matters Most</h2>

                <div class="header-btn">
                    <a href="tel:+18664206110" class="btn-default">
                        <i class="fa fa-phone"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </div>



    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.getElementById("securityPopup").style.display = "flex";
            }, 3000); // 3 seconds
        });

        // Close popup
        document.querySelector(".popup-close").addEventListener("click", function() {
            document.getElementById("securityPopup").style.display = "none";
        });

        // Close on outside click
        document.getElementById("securityPopup").addEventListener("click", function(e) {
            if (e.target === this) {
                this.style.display = "none";
            }
        });
    </script>

    <a href="tel:+18664206110" class="call-float">
        <i class="fa-solid fa-phone"></i>
    </a>


    <!-- Jquery Library File -->
    <script src="/frontend/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="/frontend/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="/frontend/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="/frontend/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="/frontend/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="/frontend/js/jquery.waypoints.min.js"></script>
    <script src="/frontend/js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="/frontend/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="/frontend/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="/frontend/js/gsap.min.js"></script>
    <script src="/frontend/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="/frontend/js/SplitText.js"></script>
    <script src="/frontend/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="/frontend/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="/frontend/js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="/frontend/js/function.js"></script>
    <script src="../../demo.awaikenthemes.com/assets/js/theme-panel.js"></script>
</body>

</html>
