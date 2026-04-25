@extends('layouts.frontend')
@section('title')
    Your Home Safety | CCTV Installation & Home Security Solutions
@endsection
@section('content')
    <!-- Hero Section Start -->
    <div class="hero parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">welcome Your Home Safety</h3>
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Secure Your Home & Business
                                with Reliable Surveillance Solutions</h1>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Hero Button Start -->
                            <div class="hero-btn">
                                <a href="tel:+18664206110" class="btn-default btn-highlighted"> +1 (866) 420-6110</a>
                            </div>
                            <!-- Hero Button End -->
                        </div>
                        <!-- Hero Content Body End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Us Section Start -->
    <div class="about-us" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-us-image">
                        <!-- About Image Box Start -->
                        <div class="about-image-box about-img-1">
                            <figure class="image-anime reveal">
                                <img src="/frontend/my-img/cam-3.avif" alt="">
                            </figure>
                        </div>
                        <!-- About Image Box End -->

                        <!-- About Image Box Start -->
                        <div class="about-image-box">
                            <div class="about-img-2">
                                <figure class="image-anime reveal">
                                    <img src="/frontend/my-img/cam-4.jpg" alt="">
                                </figure>
                            </div>

                            <div class="about-img-3">
                                <figure class="image-anime reveal">
                                    <img src="/frontend/my-img/cam-5.avif" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- About Image Box Start -->

                        <!-- Get Free Security Circle Start -->
                        {{-- <div class="get-free-security-circle">
                            <a href="#0">
                                <img src="/frontend/images/get-free-security-circle.svg" alt="">
                            </a>
                        </div> --}}
                        <!-- Get Free Security Circle End -->
                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Smart <span>CCTV & Home
                                    Security
                                    Solutions</span> You Can
                                Trust</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s"> At Your Home Safety, we provide reliable CCTV
                                installation and advanced home security systems to protect family, property, & business. Our
                                expert team ensures quick setup, high-quality surveillance, and complete peace of mind with
                                modern technology.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.8s">
                            <!-- About Footer List Start -->
                            <div class="about-footer-list">
                                <ul>
                                    <li>Professional CCTV Installation</li>
                                    <li>24/7 Surveillance Solutions</li>
                                    <li>Expert Support & Maintenance</li>
                                </ul>
                            </div>
                            <!-- About Footer List End -->

                            <!-- About Footer Content Start -->
                            <div class="about-footer-content">
                                <!-- About Content Button Start -->
                                <div class="about-contact-btn">
                                    <div class="icon-box">
                                        <img src="/frontend/images/icon-phone.svg" alt="">
                                    </div>

                                    <div class="about-footer-btn-content">
                                        <h3><a href="tel:+18664206110">+1 (866) 420-6110</a></h3>
                                    </div>
                                </div>
                                <!-- About Content Button End -->
                            </div>
                            <!-- About Footer Content End -->
                        </div>
                        <!-- About Us Footer End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3 class="wow fadeInUp">Our Services</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">
                            Complete Security Solutions for Your <span>Home & Business</span>
                        </h2>
                        <p>
                            From CCTV installation to advanced surveillance systems, we provide reliable and affordable
                            security solutions to keep your property safe & secure.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-4">

                <!-- CCTV -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <i class="fa-solid fa-camera"></i>
                        <h4>CCTV Installation</h4>
                        <p>Secure camera setup for homes, offices and commercial spaces.</p>
                    </div>
                </div>

                <!-- Home Security -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <i class="fa-solid fa-shield-halved"></i>
                        <h4>Home Security</h4>
                        <p>Advanced systems to protect your family and property 24/7.</p>
                    </div>
                </div>

                <!-- Video Door -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <i class="fa-solid fa-video"></i>
                        <h4>Video Door Phone</h4>
                        <p>See and talk to visitors with smart door solutions.</p>
                    </div>
                </div>

                <!-- Alarm -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <i class="fa-solid fa-bell"></i>
                        <h4>Alarm Systems</h4>
                        <p>Instant alerts and alarms to prevent intrusions.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Our Feature Section Start -->
    <div class="our-feature">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Feature Images Start -->
                    <div class="our-feature-images">
                        <!-- Feature Image Start -->
                        <div class="feature-image">
                            <figure class="image-anime reveal">
                                <img src="/frontend/my-img/cam-1.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Feature Image End -->

                        <!-- Company Experience Info Start -->
                        <div class="company-experience-info">
                            <!-- Feature Image Start -->
                            <div class="feature-image">
                                <figure class="image-anime reveal">
                                    <img src="/frontend/images/feature-image-2.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Feature Image End -->

                            <!-- Company Experience Box Start -->
                            <div class="company-experience-box">
                                <!-- Company Experience Content Start -->
                                <div class="company-experience-content">
                                    <h2><span class="counter">15</span>+</h2>
                                    <p>Years of experience in Home security</p>
                                </div>
                                <!-- Company Experience Content End -->

                                <!-- Company Client Image Start -->
                                <div class="our-client-images company-client-images">
                                    <!-- Client Image Start -->
                                    <div class="client-image">
                                        <figure class="image-anime">
                                            <img src="/frontend/images/client-image-1.jpg" alt="">
                                        </figure>
                                    </div>
                                    <!-- Client Image End -->

                                    <!-- Client Image Start -->
                                    <div class="client-image">
                                        <figure class="image-anime">
                                            <img src="/frontend/images/client-image-2.jpg" alt="">
                                        </figure>
                                    </div>
                                    <!-- Client Image End -->

                                    <!-- Client Image Start -->
                                    <div class="client-image">
                                        <figure class="image-anime">
                                            <img src="/frontend/images/client-image-3.jpg" alt="">
                                        </figure>
                                    </div>
                                    <!-- Client Image End -->

                                    <!-- Add More Client Image Start -->
                                    <div class="client-image client-counter">
                                        <h3><span class="counter">25</span>k</h3>
                                    </div>
                                    <!-- Add More Client Image End -->
                                </div>
                                <!-- Company Client Image End -->
                            </div>
                            <!-- Company Experience Box End -->
                        </div>
                        <!-- Company Experience Info End -->
                    </div>
                    <!-- Our Feature Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our Feature Content Start -->
                    <div class="our-feature-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Why Choose Your Home Safety</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Reliable Security
                                Solutions <span>You Can Trust</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Feature List Start -->
                        <div class="ferature-list">
                            <!-- Feature List Item Start -->
                            <div class="ferature-list-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-ferature-1.svg" alt="">
                                </div>
                                <div class="ferature-list-content">
                                    <h3>Expert Installation</h3>
                                    <p>Professional setup for maximum security and performance.</p>
                                </div>
                            </div>
                            <!-- Feature List Item End -->

                            <!-- Feature List Item Start -->
                            <div class="ferature-list-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-ferature-2.svg" alt="">
                                </div>
                                <div class="ferature-list-content">
                                    <h3>Advanced Technology</h3>
                                    <p>Latest CCTV systems with high-quality video monitoring.</p>
                                </div>
                            </div>
                            <!-- Feature List Item End -->

                            <!-- Feature List Item Start -->
                            <div class="ferature-list-item wow fadeInUp" data-wow-delay="0.8s">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-ferature-3.svg" alt="">
                                </div>
                                <div class="ferature-list-content">
                                    <h3>Affordable Pricing</h3>
                                    <p>Cost-effective security solutions for every budget.</p>
                                </div>
                            </div>
                            <!-- Feature List Item End -->
                        </div>
                        <!-- Feature List End -->
                    </div>
                    <!-- Our Feature Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Feature Section End -->


    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">testimonials</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Our clients <span>are
                                saying</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-12">
                    <!-- Testimonial Box Start -->
                    <div class="testimonial-box parallaxie">
                        <!-- Testimonial Video Button Start -->
                        <div class="testimonial-video-button">
                            {{-- <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video"
                                data-cursor-text="Play">
                                <i class="fa-solid fa-play"></i>
                            </a> --}}
                            {{-- <h3>Watch video</h3> --}}
                        </div>
                        <!-- Testimonial Video Button End -->

                        <!-- Testimonial Slide Box Start -->
                        <div class="testimonial-slider-box">
                            <!-- Testimonial Slide Start -->
                            <div class="testimonial-slider">
                                <div class="swiper">
                                    <div class="swiper-wrapper" data-cursor-text="Drag">

                                        <!-- Testimonial 1 -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-item">
                                                <div class="testimonial-content">
                                                    <p>"Your Home Security is an excellent website. The CCTV products are
                                                        reliable and very affordable. Installation was quick and
                                                        professionally handled. Highly satisfied with the service."</p>
                                                </div>
                                                <div class="testimonial-body">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="/frontend/images/author-1.jpg" alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>Michael Carter</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Testimonial 2 -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-item">
                                                <div class="testimonial-content">
                                                    <p>"I had a great experience with Your Home Security. Their cameras are
                                                        high quality and pricing is very reasonable. The support team guided
                                                        me throughout the installation process."</p>
                                                </div>
                                                <div class="testimonial-body">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="/frontend/images/author-2.jpg" alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>Emma Williams</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Testimonial 3 -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-item">
                                                <div class="testimonial-content">
                                                    <p>"The CCTV installation service was smooth and efficient. I really
                                                        liked the product quality and the affordable pricing. Definitely
                                                        recommended for anyone looking for security solutions."</p>
                                                </div>
                                                <div class="testimonial-body">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="/frontend/images/author-3.jpg" alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>Daniel Schmidt</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Testimonial 4 -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-item">
                                                <div class="testimonial-content">
                                                    <p>"Very impressed with the service quality. The website is easy to use
                                                        and the products are trustworthy. Installation team was polite and
                                                        completed the work perfectly."</p>
                                                </div>
                                                <div class="testimonial-body">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="/frontend/images/author-4.jpg" alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>Sophia Martinez</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Testimonial 5 -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-item">
                                                <div class="testimonial-content">
                                                    <p>"Your Home Security offers great value for money. The CCTV cameras
                                                        work perfectly and give me peace of mind. Installation was fast and
                                                        hassle-free."</p>
                                                </div>
                                                <div class="testimonial-body">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="/frontend/images/author-5.jpg" alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>Lucas Anderson</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="testimonial-btn">
                                        <div class="testimonial-button-prev"></div>
                                        <div class="testimonial-button-next"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!-- Testimnoial Contact Info Start -->
                            <div class="testimonial-contact-info">
                                <!-- Testimonial Contact Box Start -->
                                <div class="testimonial-contact-box">
                                    <div class="icon-box">
                                        <img src="/frontend/images/icon-phone.svg" alt="">
                                    </div>
                                    <div class="testimonial-contact-content">
                                        <p>If you any questions or need help contact with team. <span><a
                                                    href="tel:+18664206110">+1 (866) 420-6110</a></span></p>
                                    </div>
                                </div>
                                <!-- Testimonial Contact Box End -->

                                <!-- Testimonial Contact Button Start -->
                                <div class="testimonial-contact-btn">
                                    <a href="tel:+18664206110" class="btn-default">contact us</a>
                                </div>
                                <!-- Testimonial Contact Button End -->
                            </div>
                            <!-- Testimnoial Contact Info End -->
                        </div>
                        <!-- Testimonial Slide Box End -->
                    </div>
                    <!-- Testimonials Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->



    <!-- CTA Box Section Start -->
    <div class="cta-box-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- CTA Box Start -->
                    <div class="cta-box">
                        <!-- CTA Box Content Start -->
                        <div class="cta-box-content">
                            <!-- Section Title Start -->
                            <div class="section-title dark-section">
                                <h2 class="wow fadeInUp" data-cursor="-opaque">Ready to Secure Your Home or Business?</h2>
                                <p>Call now for quick CCTV installation and expert security solutions.</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- CTA Contact Info Start -->
                            <div class="cta-contact-info">
                                <!-- CTA Contact Item Start -->
                                <div class="cta-contact-item">
                                    <div class="icon-box">
                                        <img src="/frontend/images/icon-phone.svg" alt="">
                                    </div>
                                    <div class="cta-contact-content">
                                        <h3>Get contact now</h3>
                                        <p><a href="tel:+18664206110">+1 (866) 420-6110</a></p>
                                    </div>
                                </div>
                                <!-- CTA Contact Item End -->
                            </div>
                            <!-- CTA Contact Info End -->
                        </div>
                        <!-- CTA Box Content End -->

                        <!-- CTA Box Image Start -->
                        <div class="cta-box-image">
                            <figure class="image-anime reveal">
                                <img src="/frontend/my-img/3.jpg" alt="">
                            </figure>
                        </div>
                        <!-- CTA Box Image End -->
                    </div>
                    <!-- CTA Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Box Section End -->
@endsection
