@extends('layouts.frontend')
@section('title')
    Your Home Safety | CCTV Installation & Home Security Solutions
@endsection
@section('content')
    <div class="no-bottom no-top" id="content">

        <div id="top"></div>

        <section id="section-intro" class="text-light no-top no-bottom relative overflow-hidden">

            <div class="relative">
                <div class="abs abs-centered w-100 z-2">
                    <div class="container">
                        <div class="row g-4 align-items-center justify-content-between">

                            <div class="col-lg-6">
                                <div class="spacer-single sm-hide"></div>
                                <div class="subtitle">Smart Home Protection</div>
                                <h1>Secure Your Home & Business with Reliable Surveillance Solutions</h1>
                                <a class="btn-main btn-line fx-slide" href="tel:+1234567890">
                                    <span><i class="fa fa-phone"></i> +1 (234) 555-2671</span>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="mh-800">
                    <div class="swiper wow scaleIn">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="swiper-inner" data-bgimage="url(/frontend/my-img/1.jpg) center">
                                    <div class="sw-overlay op-5"></div>
                                    <div class="gradient-edge-left z-2"></div>

                                </div>
                            </div>
                            <!-- Slides -->


                        </div>

                    </div>
                </div>
            </div>

        </section>

        <section class="bg-dark text-light pt-50 pb-30">
            <div class="container">
                <div class="row g-4 text-center text-md-start">

                    <!-- Call Us -->
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex flex-column flex-md-row align-items-center align-items-md-start">
                            <i class="fs-60 id-color icon_phone mb-3 mb-md-0"></i>
                            <div class="ms-md-3">
                                <h4 class="mb-1">Need Security Solutions?</h4>
                                <p class="mb-0">
                                    Call:
                                    <a href="tel:+14155552671" style="color:#fff; text-decoration:none;">
                                        +1 (415) 555-2671
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Free Consultation -->
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex flex-column flex-md-row align-items-center align-items-md-start">
                            <i class="fs-60 id-color icon_chat mb-3 mb-md-0"></i>
                            <div class="ms-md-3">
                                <h4 class="mb-1">Free Consultation</h4>
                                <p class="mb-0">Get Expert Advice for CCTV & Home Security</p>
                            </div>
                        </div>
                    </div>

                    <!-- Fast Installation -->
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex flex-column flex-md-row align-items-center align-items-md-start">
                            <i class="fs-60 id-color icon_check mb-3 mb-md-0"></i>
                            <div class="ms-md-3">
                                <h4 class="mb-1">Fast Installation</h4>
                                <p class="mb-0">Quick Setup with Professional Support</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <div class="row g-4 gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="rounded-1 overflow-hidden wow zoomIn">
                                            <img src="/frontend/my-img/cam-1.jpg" class="w-100 wow scaleIn" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row g-4">
                                    <div class="spacer-single sm-hide"></div>
                                    <div class="col-lg-12">
                                        <div class="rounded-1 overflow-hidden wow zoomIn" data-wow-delay=".3s">
                                            <img src="/frontend/my-img/cam-2.jpg" class="w-100 wow scaleIn" alt=""
                                                data-wow-delay=".3s">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="me-lg-3">
                            <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">
                                About Us
                            </div>

                            <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                Smart CCTV & Home Security Solutions You Can Trust
                            </h2>

                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                At Your Home Safety, we provide reliable CCTV installation and advanced home security
                                systems
                                to protect family, property, & business. Our expert team ensures quick setup,
                                high-quality
                                surveillance, and complete peace of mind with modern technology.
                            </p>

                            <ul class="ul-check text-dark cols-2 fw-600 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                <li>Professional CCTV Installation</li>
                                <li>24/7 Surveillance Solutions</li>
                                <li>Affordable & Reliable Service</li>
                                <li>Expert Support & Maintenance</li>
                            </ul>

                            <!-- Call Button -->
                            <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s" href="tel:+14155552671">
                                <span>
                                    <i class="fa-solid fa-phone" style="margin-right:8px;"></i>
                                    Call Now: +1 (415) 555-2671
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-color-op-1">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="subtitle wow fadeInUp mb-3">Our Services</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">
                            Complete Security Solutions for Your Home & Business
                        </h2>
                        <p class="col-lg-8 offset-lg-2 mb-0 wow fadeInUp">
                            From CCTV installation to advanced surveillance systems, we provide reliable and affordable
                            security solutions to keep property safe & secure.
                        </p>
                        <div class="spacer-single"></div>
                        <div class="spacer-half"></div>
                    </div>
                </div>

                <div class="row g-4">

                    <!-- CCTV -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="hover">
                            <div class="bg-white h-100 p-40 rounded-1 text-center">
                                <i class="fa-solid fa-video fs-60 mb-3 text-primary"></i>
                                <div class="relative mt-4">
                                    <h4>CCTV Installation</h4>
                                    <p>Secure camera setup for all spaces</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Security -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="hover">
                            <div class="bg-white h-100 p-40 rounded-1 text-center">
                                <i class="fa-solid fa-shield-halved fs-60 mb-3 text-success"></i>
                                <div class="relative mt-4">
                                    <h4>Home Security</h4>
                                    <p>Advanced systems to protect family and property</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Door Phone -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="hover">
                            <div class="bg-white h-100 p-40 rounded-1 text-center">
                                <i class="fa-solid fa-door-closed fs-60 mb-3 text-warning"></i>
                                <div class="relative mt-4">
                                    <h4>Video Door Phone</h4>
                                    <p>See and talk to visitors with smart door solutions</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alarm -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="hover">
                            <div class="bg-white h-100 p-40 rounded-1 text-center">
                                <i class="fa-solid fa-bell fs-60 mb-3 text-danger"></i>
                                <div class="relative mt-4">
                                    <h4>Alarm Systems</h4>
                                    <p>Instant alerts and alarms to prevent intrusions</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="col-lg-12 mt-5 text-center">
                        <a class="btn-main fx-slide" href="tel:+14155552671">
                            <span>
                                <i style="margin-right:8px;"></i>
                                Call Our Security Expert
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-dark text-light pt-60 pb-60">
            <div class="container">

                <div class="row g-4">

                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="de_count wow fadeInRight" data-wow-delay=".0s">
                            <h3 class="fs-40 mb-0">
                                <span class="timer" data-to="5000" data-speed="3000">0</span>+
                            </h3>
                            Cameras Installed
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="de_count wow fadeInRight" data-wow-delay=".2s">
                            <h3 class="fs-40 mb-0">
                                <span class="timer" data-to="2000" data-speed="3500">0</span>+
                            </h3>
                            Happy Clients
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="de_count wow fadeInRight" data-wow-delay=".4s">
                            <h3 class="fs-40 mb-0">
                                <span class="timer" data-to="1500" data-speed="3000">0</span>+
                            </h3>
                            Homes Secured
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="de_count wow fadeInRight" data-wow-delay=".6s">
                            <h3 class="fs-40 mb-0">
                                <span class="timer" data-to="8" data-speed="3000">0</span>+
                            </h3>
                            Years of Experience
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row gy-4 gx-5 align-items-center">

                    <div class="col-lg-6">
                        <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">
                            Why Choose Your Home Safety
                        </div>

                        <h2 class="wow fadeInUp" data-wow-delay=".2s">
                            Reliable Security Solutions You Can Trust
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay=".4s">
                            Choosing the right security provider is essential. We deliver advanced CCTV and home security
                            systems with expert installation, ensuring your home and business stay protected at all times.
                        </p>

                        <div class="border-bottom mb-4"></div>

                        <div class="row g-4">

                            <div class="col-sm-6">
                                <div class="h-100">
                                    <div class="relative wow fadeInUp">
                                        <h5>Expert Installation</h5>
                                        <p class="mb-0">Professional setup for maximum security and performance.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="h-100">
                                    <div class="relative wow fadeInUp">
                                        <h5>Advanced Technology</h5>
                                        <p class="mb-0">Latest CCTV systems with high-quality video monitoring.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="h-100">
                                    <div class="relative wow fadeInUp">
                                        <h5>Affordable Pricing</h5>
                                        <p class="mb-0">Cost-effective security solutions for every budget.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="h-100">
                                    <div class="relative wow fadeInUp">
                                        <h5>24/7 Support</h5>
                                        <p class="mb-0">Always available for assistance and maintenance support.</p>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <a class="btn-main fx-slide wow fadeInUp mt-4" data-wow-delay=".8s" href="tel:+14155552671">
                            <span>
                                <i class="fa-solid fa-phone" style="margin-right:8px;"></i>
                                Call Now: +1 (415) 555-2671
                            </span>
                        </a>
                    </div>

                    <!-- Images Side (no change needed, just better alt text) -->
                    <div class="col-lg-6">
                        <div class="row g-4 align-items-center">

                            <div class="col-6 text-end">
                                <div class="w-80 rounded-1 overflow-hidden mb-25 wow zoomIn d-inline-block">
                                    <img src="/frontend/my-img/cam-3.avif" class="w-100 wow scaleIn"
                                        alt="CCTV Installation">
                                </div>

                                <div class="w-100 rounded-1 overflow-hidden mb-25 wow zoomIn d-inline-block">
                                    <img src="/frontend/my-img/cam-5.avif" class="w-100 wow scaleIn"
                                        alt="Security Monitoring">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="w-100 rounded-1 overflow-hidden mb-25 wow zoomIn d-inline-block">
                                    <img src="/frontend/my-img/cam-4.jpg" class="w-100 wow scaleIn"
                                        alt="Home Security System">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section>
            <div class="container">
                <div class="row g-4">

                    <div class="col-lg-5">
                        <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">
                            Everything You Need to Know
                        </div>

                        <h2 class="wow fadeInUp" data-wow-delay=".2s">
                            Frequently Asked Questions
                        </h2>
                    </div>

                    <div class="col-lg-7">
                        <div class="accordion s2 wow fadeInUp">
                            <div class="accordion-section">

                                <!-- Q1 -->
                                <div class="accordion-section-title" data-tab="#accordion-a1">
                                    How long does CCTV installation take?
                                </div>
                                <div class="accordion-section-content" id="accordion-a1">
                                    Most CCTV installations are completed within a few hours depending on the size of your
                                    property.
                                </div>

                                <!-- Q2 -->
                                <div class="accordion-section-title" data-tab="#accordion-a2">
                                    Do you provide installation for homes and offices?
                                </div>
                                <div class="accordion-section-content" id="accordion-a2">
                                    Yes, we offer complete security solutions for homes, offices, shops, and commercial
                                    spaces.
                                </div>

                                <!-- Q3 -->
                                <div class="accordion-section-title" data-tab="#accordion-a3">
                                    Can I view my CCTV cameras on my mobile?
                                </div>
                                <div class="accordion-section-content" id="accordion-a3">
                                    Yes, you can monitor your cameras live from your smartphone anytime, anywhere.
                                </div>

                                <!-- Q4 -->
                                <div class="accordion-section-title" data-tab="#accordion-a4">
                                    Do you offer maintenance and support?
                                </div>
                                <div class="accordion-section-content" id="accordion-a4">
                                    Yes, we provide ongoing support and maintenance to ensure your system runs smoothly.
                                </div>

                                <!-- Q5 -->
                                <div class="accordion-section-title" data-tab="#accordion-a5">
                                    How can I get a quote for installation?
                                </div>
                                <div class="accordion-section-content" id="accordion-a5">
                                    Simply call us, and our team will guide you and provide a free consultation and
                                    estimate.
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-color-op-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="subtitle wow fadeInUp mb-3">Testimonials</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">What Our Customers Say</h2>
                        <p class="wow fadeInUp">
                            Trusted by hundreds of customers for reliable CCTV installation and home security solutions.
                            See what our clients say about our service.
                        </p>
                        <div class="spacer-single"></div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="owl-carousel owl-theme wow fadeInUp four-cols-center-dots text-center">

                        <!-- 1 -->
                        <div class="item">
                            <div class="gradient-white-top p-40 py-4 rounded-1">
                                <blockquote>
                                    <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                    <div class="de_testi_by">
                                        <img class="circle" alt="" src="/frontend/images/testimonial/1.webp">
                                        <div>Michael S.<span>Home Owner</span></div>
                                    </div>
                                    <p class="mt-4 mb-0 text-dark op-6">
                                        "Great service! My CCTV installation was done quickly and professionally.
                                        Now I feel much safer at home."
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="item">
                            <div class="gradient-white-top p-40 py-4 rounded-1">
                                <blockquote>
                                    <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                    <div class="de_testi_by">
                                        <img class="circle" alt="" src="/frontend/images/testimonial/2.webp">
                                        <div>Robert L.<span>Shop Owner</span></div>
                                    </div>
                                    <p class="mt-4 mb-0 text-dark op-6">
                                        "Installed cameras in my shop. The quality is excellent and the support team is very
                                        helpful."
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <!-- 3 -->
                        <div class="item">
                            <div class="gradient-white-top p-40 py-4 rounded-1">
                                <blockquote>
                                    <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                    <div class="de_testi_by">
                                        <img class="circle" alt="" src="/frontend/images/testimonial/3.webp">
                                        <div>Nelson K.<span>Customer</span></div>
                                    </div>
                                    <p class="mt-4 mb-0 text-dark op-6">
                                        "Very affordable and reliable service. I can now monitor my home from my mobile
                                        anytime."
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <!-- 4 -->
                        <div class="item">
                            <div class="gradient-white-top p-40 py-4 rounded-1">
                                <blockquote>
                                    <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                    <div class="de_testi_by">
                                        <img class="circle" alt="" src="/frontend/images/testimonial/4.webp">
                                        <div>Alex P.<span>Office Owner</span></div>
                                    </div>
                                    <p class="mt-4 mb-0 text-dark op-6">
                                        "Professional team and fast installation. Highly recommended for office security."
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <!-- 5 -->
                        <div class="item">
                            <div class="gradient-white-top p-40 py-4 rounded-1">
                                <blockquote>
                                    <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                    <div class="de_testi_by">
                                        <img class="circle" alt="" src="/frontend/images/testimonial/5.webp">
                                        <div>Carlos R.<span>Customer</span></div>
                                    </div>
                                    <p class="mt-4 mb-0 text-dark op-6">
                                        "Quick response and excellent service. The system works perfectly."
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <!-- 6 -->
                        <div class="item">
                            <div class="gradient-white-top p-40 py-4 rounded-1">
                                <blockquote>
                                    <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                    <div class="de_testi_by">
                                        <img class="circle" alt="" src="/frontend/images/testimonial/6.webp">
                                        <div>Harris M.<span>Customer</span></div>
                                    </div>
                                    <p class="mt-4 mb-0 text-dark op-6">
                                        "Same day installation and great support. Very satisfied with the service."
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="bg-color text-light pt-40 pb-40" id="contact">
            <div class="container">
                <div class="row g-4 align-items-center">

                    <div class="col-md-8">
                        <h3 class="mb-0 fs-32">
                            Ready to Secure Your Home or Business?
                        </h3>
                        <p class="mb-0">
                            Call now for quick CCTV installation and expert security solutions.
                        </p>
                    </div>

                    <div class="col-lg-4 text-lg-end">
                        <a class="btn-main btn-line fx-slide" href="tel:+14155552671">
                            <span>
                                <i class="fa-solid fa-phone" style="margin-right:8px;"></i>
                                Call Now To Speak With Expert
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </section>

    </div>
@endsection
