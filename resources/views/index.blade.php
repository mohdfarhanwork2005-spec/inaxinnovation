

@include('template.head')

<body class="bg-black" style="">
    <div class="cursor-follower"></div>
    <!--<div class="preloader"><button class="th-btn preloaderCls">Cancel Preloader</button>-->
    <!--    <div class="preloader-inner">-->
    <!--        <div class="bounce"><img src="assets/img/logo/updated logo 2.png" alt="img"></div><span class="loader">Inax<span-->
    <!--                class="loading-text">Inax</span></span>-->
    <!--    </div>-->
    <!--</div>-->
    @include('template.header')
    <div id="carouselExampleCaptions" class="carousel slide main-banner" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/banner/banner1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Smart Homes,
                        <br>Safe spaces</h5>
                    <p>Some representative placeholder content for the first slide.</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/banner/banner2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p> -->
                </div>
            </div>
            <!-- <div class="carousel-item">
                <img src="assets/img/banner/banner3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div> -->
        </div>
        <button class="carousel-control-prev cerosel-arrow" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
        <button class="carousel-control-next cerosel-arrow" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
    </div>
    <!-- <div class="th-hero-wrapper hero-2" id="hero">
        <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_2_1.jpg"></div>
        <div class="hero-inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10">
                        <div class="hero-style2 text-center">
                            <h1 class="hero-title text-white text-anim2" data-cue="slideInUp" data-delay="100">
                                Smart Automation For Your Home
                            </h1>
                            <p class="hero-text text-anim2" data-cue="slideInUp" data-delay="300">Artificial Control Your Home With Ease -lighting, security, temperature and more, all at your fingertips</p>
                            <div class="btn-wrap justify-content-center" data-cue="slideInUp" data-delay="500"><a href="service.html" class="th-btn">Get Started <i
                                        class="far fa-long-arrow-right ms-2"></i></a>
                                <a href="contact.html" class="th-btn style-border2">Discover
                                    More <i class="far fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-category-wrap">
                <div class="hero-category-bg"><img src="assets/img/hero/hero-category-bg2.svg" alt="img"></div>
            </div>
        </div>
    </div> -->
    <!-- <div class="overflow-hidden brand-area-2 position-relative z-index-2">
        <div class="container-fluid p-0">
            <div class="brand-wrap2 pt-40 pb-40 text-center">
                <div class="swiper th-slider" data-cue="slideInUp" id="brandSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"false","speed":6000,"spaceBetween":160}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-1.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-2.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-3.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-4.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-5.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-6.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-1.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-2.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-3.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-4.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-5.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-6.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-1.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-2.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-3.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-4.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-5.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-6.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-1.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-2.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-3.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-4.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-5.svg" alt="Brand Logo"></a></div>
                        <div class="swiper-slide"><a href="blog.html" class="brand-box"><img
                                    src="assets/img/brand/brand1-6.svg" alt="Brand Logo"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <section class="space overflow-hidden">
        <div class="container">
            <div class="title-area text-xl-start text-center">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-auto">
                        <h2 class="sub-title2 text-white text-anim justify-content-xl-start justify-content-center" data-cue="slideInLeft">Features</h2>
                    </div>
                    <div class="col-md d-none d-xl-block">
                        <hr class="title-line bg-black3 mb-0">
                    </div>
                    <div class="col-xl-5">
                        <h2 class="sec-title style2 text-anim2 text-white mb-0" data-cue="slideInLeft">Making Your Home Smarter, Safer, and Simpler</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-md-6" data-cue="slideInUp">
                    <div class="feature-card style2">
                        <div class="box-img"><img src="assets/img/feature/2-1.png" alt="icon"></div>
                        <h3 class="box-title">Video Doorbell System</h3>
                        <p class="box-text">
                            We offer smart video doorbells with real-time video and two-way audio, letting you see and talk to visitors anytime, whether you're home or away.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-cue="slideInUp">
                    <div class="feature-card style2">
                        <div class="box-img"><img src="assets/img/feature/2-2.png" alt="icon"></div>
                        <h3 class="box-title">Fire Alert Solutions</h3>
                        <p class="box-text">Get real-time monitoring, instant alerts, and quick response to break-ins or fires—keeping you safe at all times.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-cue="slideInUp">
                    <div class="feature-card style2">
                        <div class="box-img"><img src="assets/img/feature/2_3.png" alt="icon"></div>
                        <h3 class="box-title">Home Automation</h3>
                        <p class="box-text">
                            Turn your home smart with our automation solutions. Control lights, climate, and security from your phone or voice—anytime, anywhere.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="cta-area-1 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--<div class="cta-wrap1" data-cue="slideInUp">-->
                    <!--    <h2 class="sec-title style2 text-white text-center mb-0">Transform Your Home with-->
                    <!--        <span class="text-stroke">Inax Innovations:</span> Automatic Gates, Shutters & Curtains-->
                    <!--    </h2>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-hidden position-relative space overflow-hidden" id="about-sec">
        <div class="container">
            <div class="row gx-100 gy-60 align-items-center">
                <div class="col-xxl-6 col-xl-6">
                    <div class="img-box2" data-cue="slideInLeft">
                        <div class="img1"><img src="assets/img/normal/about-thumb2-1.png" alt="About"></div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6">
                    <div class="about-wrap2">
                        <div class="title-area mb-35"><span class="sub-title2 mb-30 text-anim text-white" data-cue="slideInUp">About Us</span>
                            <h2 class="sec-title style2 text-anim2 text-white" data-cue="slideInUp">Home Automation – Simplifying Smarter Living</h2>
                        </div>
                        <p class="sec-text text-gray3 mb-25" data-cue="slideInUp">Experience the future of comfort and control with Inax Innovations' home automation solutions. Our systems seamlessly connect your lighting, climate, appliances, and security for a smarter lifestyle.</p>
                        <div class="checklist style4" data-cue="slideInUp">
                            <ul>
                                <li><img src="assets/img/icon/check-icon1-1.svg" alt="img"> Centralized control from mobile or voice</li>
                                <li><img src="assets/img/icon/check-icon1-1.svg" alt="img"> Energy efficiency with automated schedules</li>
                                <li><img src="assets/img/icon/check-icon1-1.svg" alt="img"> Enhanced comfort and convenience every day</li>
                            </ul>
                        </div>
                        <div class="btn-wrap mt-50" data-cue="slideInUp"><a href="contact.html" class="th-btn style-border3">Discover More
                                <i class="fas fa-arrow-right ms-2"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="counter-area-2 space-bottom overflow-hidden">
        <div class="container">
            <div class="counter-wrap2">
                <div class="counter-card2" data-cue="slideInUp">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number">70</span>%</h2>
                        <p class="box-text">Smart Security Solutions</p>
                    </div>
                </div>
                <div class="counter-card2" data-cue="slideInUp">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number">85</span>%</h2>
                        <p class="box-text">Home Automation Excellence</p>
                    </div>
                </div>
                <div class="counter-card2" data-cue="slideInUp">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number">95</span>%</h2>
                        <p class="box-text">Seamless System Integration</p>
                    </div>
                </div>
                <div class="counter-card2" data-cue="slideInUp">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number">25</span>k+</h2>
                        <p class="box-text">Happy Customers</p>
                    </div>
                </div>
                <!-- <div class="counter-card2" data-cue="slideInUp">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number">38</span>M</h2>
                        <p class="box-text">Collaborative
                            Team</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <section class="overflow-hidden space-bottom overflow-hidden" id="service-sec">
        <div class="service-wrap2 bg-gray space">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-7 col-xl-8">
                        <div class="title-area text-center mb-50"><span class="sub-title2 justify-content-center mb-30 text-anim text-white" data-cue="slideInUp">Our Services</span>
                            <h2 class="sec-title style2 text-anim2 text-white" data-cue="slideInUp">Transform Life & Work with Smart Automation & Security.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="service-list-wrap">
                            <!-- <div class="service-card2 hover-item" data-cue="slideInUp">
                                <div class="box-img"><img src="assets/img/service/service_ (5).jpg" style="width: 50%;" alt="img"></div>
                                <div class="box-content">
                                    <div class="box-number text-white">01</div>
                                    <h3 class="box-title text-white"><a href="service.html">Security & Fire Alarm Systems</a></h3>
                                    <p class="box-text">Protect your space with real-time alerts and rapid-response fire and security systems.</p>
                                </div><a href="service-details.html" class="icon-btn style2"><i
                                        class="fal fa-arrow-right"></i></a>
                            </div> -->
                            <div class="service-card2 hover-item item-active" data-cue="slideInUp">
                                <div class="box-img"><img src="assets/img/service/service_ (5).jpg" alt="img"></div>
                                <div class="box-content">
                                    <div class="box-number text-white">01</div>
                                    <h3 class="box-title text-white"><a href="service.html">Security & Fire Alarm Systems</a></h3>
                                    <p class="box-text">Protect your space with real-time alerts and rapid-response fire and security systems.</p>
                                </div><a href="security-fire-alarm-system.html" class="icon-btn style2"><i
                                        class="fal fa-arrow-right"></i></a>
                            </div>
                            <div class="service-card2 hover-item item-active" data-cue="slideInUp">
                                <div class="box-img"><img src="assets/img/service/service_ (4).jpg" alt="img"></div>
                                <div class="box-content">
                                    <div class="box-number text-white">02</div>
                                    <h3 class="box-title text-white"><a href="service.html">Advanced Access Control System</a></h3>
                                    <p class="box-text">Control who enters with smart, secure, and scalable access solutions.</p>
                                </div><a href="access-control-system.html" class="icon-btn style2"><i
                                        class="fal fa-arrow-right"></i></a>
                            </div>
                            <div class="service-card2 hover-item" data-cue="slideInUp">
                                <div class="box-img"><img src="assets/img/service/service_ (3).jpg" alt="img"></div>
                                <div class="box-content">
                                    <div class="box-number text-white">03</div>
                                    <h3 class="box-title text-white"><a href="service.html">Video Doorbell System</a></h3>
                                    <p class="box-text">See, speak, and stay aware — even when you're away.</p>
                                </div><a href="video-doorbell-system.html" class="icon-btn style2"><i
                                        class="fal fa-arrow-right"></i></a>
                            </div>
                            <div class="service-card2 hover-item" data-cue="slideInUp">
                                <div class="box-img"><img src="assets/img/service/service_ (1).jpg" alt="img"></div>
                                <div class="box-content">
                                    <div class="box-number text-white">04</div>
                                    <h3 class="box-title text-white"><a href="service.html">CCTV Surveillance Systems</a></h3>
                                    <p class="box-text">24/7 crystal-clear monitoring for homes, offices, and commercial spaces.</p>
                                </div><a href="cctv-surveillance-system.html" class="icon-btn style2"><i
                                        class="fal fa-arrow-right"></i></a>
                            </div>
                            <div class="service-card2 hover-item" data-cue="slideInUp">
                                <div class="box-img"><img src="assets/img/service/service_ (6).jpg" alt="img"></div>
                                <div class="box-content">
                                    <div class="box-number text-white">05</div>
                                    <h3 class="box-title text-white"><a href="service.html">Home Automation</a></h3>
                                    <p class="box-text">Control lights, appliances, and more — all from your phone or voice.</p>
                                </div><a href="home-automation.html" class="icon-btn style2"><i
                                        class="fal fa-arrow-right"></i></a>
                            </div>
                            <div class="service-card2 hover-item" data-cue="slideInUp">
                                <div class="box-img"><img src="assets/img/service/service_ (2).jpg" alt="img"></div>
                                <div class="box-content">
                                    <div class="box-number text-white">06</div>
                                    <h3 class="box-title text-white"><a href="service.html">Automatic Gates, Shutters & Curtains</a></h3>
                                    <p class="box-text">Effortless control and enhanced security with automated movement.</p>
                                </div><a href="automatic-gates-shutter-and-curtains.html" class="icon-btn style2"><i
                                        class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="btn-wrap justify-content-center mt-60"><a href="about.html" class="icon-btn style2"><i class="fal fa-angle-down"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<div class="overflow-hidden" data-cue="slideInUp">-->
    <!--    <div class="marquee-wrap2 bg-theme pt-40 pb-40">-->
    <!--        <div class="container-fluid p-0">-->
    <!--            <div class="swiper th-slider marquee-slider2" data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"false","speed":10000,"spaceBetween":30}'>-->
    <!--                <div class="swiper-wrapper">-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">SMART HOME AUTOMATION</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">CCTV SURVEILLANCE</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">FIRE ALARM SYSTEMS</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">VIDEO DOORBELLS</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">ACCESS CONTROL</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">MOTION SENSORS</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">REMOTE MONITORING</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">AUTOMATIC GATES</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">CURTAIN AUTOMATION</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">SMART LIGHTING</a></div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="marquee-wrap3 bg-gray pt-40 pb-40">-->
    <!--        <div class="container-fluid p-0">-->
    <!--            <div class="swiper th-slider marquee-slider2" data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"false","speed":10000,"spaceBetween":30}'>-->
    <!--                <div class="swiper-wrapper">-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">SMART HOME AUTOMATION</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">CCTV SURVEILLANCE</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">FIRE ALARM SYSTEMS</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">VIDEO DOORBELLS</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">ACCESS CONTROL</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">MOTION SENSORS</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">REMOTE MONITORING</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">AUTOMATIC GATES</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">CURTAIN AUTOMATION</a></div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-slide">-->
    <!--                        <div class="marquee-card style2 text-white"><a target="_blank" href="#">SMART LIGHTING</a></div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
     <section class="position-relative space overflow-hidden" id="project-sec">
        <div class="container">
            <div class="title-area text-xl-start text-center z-index-n1">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-auto">
                        <div class="shadow-title style3">Project</div>
                        <h2 class="sub-title2 text-white text-anim justify-content-xl-start justify-content-center"
                            data-cue="slideInLeft">Case Study</h2>
                    </div>
                    <div class="col-md d-none d-xl-block">
                        <hr class="title-line bg-black3 mb-0">
                    </div>
                    <div class="col-xl-3">
                        <h2 class="sec-title style2 text-anim2 text-white mb-0" data-cue="slideInLeft">Our Projects &
                            Case
                            Studies</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-80 gy-80 justify-content-center">
                <div class="col-md-6" data-cue="slideInUp">
                    <div class="project-card2">
                        <div class="box-img"><img src="assets/img/service/service_card_2_1.jpg" alt="img"> <a
                                href="project-details.html" class="icon-btn"><i class="fal fa-arrow-up-right"></i></a>
                        </div>
                        <div class="box-content">
                            <p class="box-subtitle text-white">User
                                Research</p>
                            <h3 class="box-title text-white"><a href="project-details.html">Speech
                                    recognizer using deep
                                    learning</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-cue="slideInUp">
                    <div class="project-card2">
                        <div class="box-img"><img src="assets/img/service/service_card_2_2.jpg" alt="img"> <a
                                href="project-details.html" class="icon-btn"><i class="fal fa-arrow-up-right"></i></a>
                        </div>
                        <div class="box-content">
                            <p class="box-subtitle text-white">Robotics,
                                Program</p>
                            <h3 class="box-title text-white"><a href="project-details.html">AI Machine
                                    Learning</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-cue="slideInUp">
                    <div class="project-card2">
                        <div class="box-img"><img src="assets/img/service/service_card_2_3.jpg" alt="img"> <a
                                href="project-details.html" class="icon-btn"><i class="fal fa-arrow-up-right"></i></a>
                        </div>
                        <div class="box-content">
                            <p class="box-subtitle text-white">Technology,
                                Program</p>
                            <h3 class="box-title text-white"><a href="project-details.html">Smart House
                                    Technology</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-cue="slideInUp">
                    <div class="project-card2">
                        <div class="box-img"><img src="assets/img/service/service_card_2_4.jpg" alt="img"> <a
                                href="project-details.html" class="icon-btn"><i class="fal fa-arrow-up-right"></i></a>
                        </div>
                        <div class="box-content">
                            <p class="box-subtitle text-white">AI,
                                Program</p>
                            <h3 class="box-title text-white"><a href="project-details.html">Artificial
                                    Intelligence
                                    Dev</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section class="cta-area-2 overflow-hidden" id="contact-sec">
        <div class="cta-wrap2" data-bg-src="assets/img/bg/cta-bg-2.png" data-overlay="black" data-opacity="7">
            <div class="cta-thumb2-1" data-cue="slideInLeft">
                <div class="img"><img src="assets/img/normal/cta-img2-1.jpg" alt="img"></div>
            </div>
            <div class="cta-thumb2-2" data-cue="slideInRight">
                <div class="img"><img src="assets/img/normal/cta-img2-2.jpg" alt="img"></div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="title-area text-center mb-0"><span class="sub-title2 justify-content-center mb-30 text-anim text-white" data-cue="slideInUp">Smart Home & Security Solutions</span>
                            <h2 class="sec-title style2 text-anim2 text-white" data-cue="slideInUp">From security systems to home automation — we bring intelligence to your doorstep.</h2>
                            <div class="btn-wrap justify-content-center mt-50"><a href="contact.html" class="th-btn style-border2">Get Started
                                    Now <i class="far fa-long-arrow-right ms-2"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space overflow-hidden team-area-1">
        <div class="container">
            <div class="title-area text-xl-start text-center">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-auto">
                        <h2 class="sub-title2 text-white text-anim justify-content-xl-start justify-content-center" data-cue="slideInLeft">Our Team</h2>
                    </div>
                    <div class="col-md d-none d-xl-block">
                        <hr class="title-line bg-black3 mb-0">
                    </div>
                    <div class="col-xl-4">
                        <h2 class="sec-title style2 text-anim2 text-white mb-0" data-cue="slideInLeft">Our Team.</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-xl-6">
                    <div class="team-wrap1" data-cue="slideInLeft">
                        <p class="text-gray3">We help make everyday living secure and effortless. Our smart solutions from CCTV and automation to video doorbells and fire alarms are designed to bring comfort, safety, and control to your home or business. We combine modern
                            technology with simple design to create systems that just work.</p>
                        <p class="text-gray3 mb-0"> From setup to support, we’re here every step of the way — focused on trust, quality, and long-term peace of mind.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="th-team team-card" data-cue="slideInUp">
                        <div class="team-img"><img src="assets/img/team/team_1_1.png" alt="Team"></div>
                        <div class="team-card-content">
                            <h3 class="box-title"><a href="team-details.html">Alex
                                    Javed</a></h3>
                        </div>
                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a target="_blank" href="https://twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a target="_blank" href="https://instagram.com/"><i
                                    class="fab fa-instagram"></i></a> <a target="_blank" href="https://whatsapp.com/"><i
                                    class="fab fa-whatsapp"></i></a></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="th-team team-card" data-cue="slideInUp">
                        <div class="team-img"><img src="assets/img/team/team_1_2.png" alt="Team"></div>
                        <div class="team-card-content">
                            <h3 class="box-title"><a href="team-details.html">Jenny
                                    William</a></h3>
                        </div>
                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a target="_blank" href="https://twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a target="_blank" href="https://instagram.com/"><i
                                    class="fab fa-instagram"></i></a> <a target="_blank" href="https://whatsapp.com/"><i
                                    class="fab fa-whatsapp"></i></a></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="th-team team-card" data-cue="slideInUp">
                        <div class="team-img"><img src="assets/img/team/team_1_3.png" alt="Team"></div>
                        <div class="team-card-content">
                            <h3 class="box-title"><a href="team-details.html">Daniel
                                    Thomas</a></h3>
                        </div>
                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a target="_blank" href="https://twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a target="_blank" href="https://instagram.com/"><i
                                    class="fab fa-instagram"></i></a> <a target="_blank" href="https://whatsapp.com/"><i
                                    class="fab fa-whatsapp"></i></a></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="th-team team-card" data-cue="slideInUp">
                        <div class="team-img"><img src="assets/img/team/team_1_4.png" alt="Team"></div>
                        <div class="team-card-content">
                            <h3 class="box-title"><a href="team-details.html">Jessica
                                    Lauren</a></h3>
                        </div>
                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a target="_blank" href="https://twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a target="_blank" href="https://instagram.com/"><i
                                    class="fab fa-instagram"></i></a> <a target="_blank" href="https://whatsapp.com/"><i
                                    class="fab fa-whatsapp"></i></a></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="th-team team-card" data-cue="slideInUp">
                        <div class="team-img"><img src="assets/img/team/team_1_5.png" alt="Team"></div>
                        <div class="team-card-content">
                            <h3 class="box-title"><a href="team-details.html">Alex
                                    Joseph</a></h3>
                        </div>
                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a target="_blank" href="https://twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a target="_blank" href="https://instagram.com/"><i
                                    class="fab fa-instagram"></i></a> <a target="_blank" href="https://whatsapp.com/"><i
                                    class="fab fa-whatsapp"></i></a></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 align-self-center text-center"><a href="about.html" class="circle-btn th-btn style4 mt-xl-0 mt-30" data-cue="slideInUp">About Us<i
                            class="far fa-long-arrow-right ms-2"></i></a></div>
            </div>
        </div>
    </section>
    <div class="why-sec-2 overflow-hidden overflow-hidden">
        <div class="why-wrap2 space-top bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4">
                        <div class="title-area">
                            <!-- <span class="sub-title2 mb-30 text-anim text-white"
                                data-cue="slideInUp">Leading the AI
                                Revolution</span> -->
                            <h2 class="sec-title style2 text-anim2 text-white" data-cue="slideInUp">We are building a secure future together</h2>
                        </div>
                        <div class="why-card-wrap2">
                            <div class="why-card" data-cue="slideInUp">
                                <div class="box-details">
                                    <h4 class="box-title">Client Needs Assessment</h4>
                                    <p class="box-text">Understanding your space, security, and comfort needs.</p>
                                </div>
                            </div>
                            <div class="why-card" data-cue="slideInUp">
                                <div class="box-details">
                                    <h4 class="box-title">Tailored System Design</h4>
                                    <p class="box-text">Smart, scalable solutions from CCTV to automation.</p>
                                </div>
                            </div>
                            <div class="why-card" data-cue="slideInUp">
                                <div class="box-details">
                                    <h4 class="box-title">Seamless Integration & Support</h4>
                                    <p class="box-text">Flawless installation & daily seamless system support.
                                    </p>
                                </div>
                            </div>
                            <div class="circle-tag" data-cue="slideInUp"><span class="circle-title-anime">INAX INNOVATION</span> <a href="#" class="icon-btn"><i
                                        class="fal fa-long-arrow-right"></i></a></div>
                        </div>
                        <div class="why-counter-wrap-2">
                            <div class="box-icon"><img src="assets/img/icon/why-icon2-1.svg" alt="img"></div>
                            <div class="why-counter-content">
                                <h4 class="box-title text-white">Security & Fire Alarm Systems</h4>
                                <p class="box-text text-gray3">Protect what matters most with our intelligent fire and security alarm systems. Get instant alerts, real-time monitoring, and automated emergency responses — designed to keep your home or business safe 24/7.</p>
                            </div>
                            <div class="why-counter-card">
                                <h2 class="box-number text-white"><span class="counter-number">24</span><span class="counter-marker">/7</span></h2>
                                <h4 class="counter-text text-white">Secure</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 text-xxl-end text-center">
                        <div class="why-img-box2" data-cue="slideInUp">
                            <div class="img1"><img src="assets/img/normal/why-thumb2-1.png" alt="img"></div>
                            <div class="img2 jump"><img src="assets/img/normal/why-thumb2-2.png" alt="img"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="testi-area-2 space-top overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-7 col-xl-8">
                    <div class="title-area text-center mb-50"><span class="sub-title2 justify-content-center mb-30 text-anim text-white" data-cue="slideInUp">Testimonials</span>
                        <h2 class="sec-title style2 text-anim2 text-white" data-cue="slideInUp">What Our Clients Say About Us?
                        </h2>
                    </div>
                </div>
            </div>
            <div class="testi-wrap2" data-cue="slideInUp">
                <div class="testi-quote-icon"><img src="assets/img/icon/quote-icon.svg" alt="icon"></div>
                <div class="slider-area">
                    <div class="swiper th-slider testi-slider2" id="testiSlide2" data-slider-options='{"autoHeight": "true","effect": "fade"}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-card2">
                                     <div class="box-thumb"><img src="assets/img/testimonial/testi2-2.jpg" alt="img"> 
                                     </div> 
                                    <div class="box-content">
                                        <p class="box-text">“We’re thrilled with the automatic gates and shutters installed by Inax Innovations. The convenience of controlling everything remotely is a game-changer. The team was prompt, professional, and made sure everything
                                            was set up perfectly. It’s amazing how much smarter our home feels now. Highly satisfied!”</p>
                                        <h3 class="box-title">Gopika</h3>
                                        <!-- <p class="box-desig">Co-founder,
                                            XYZ</p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card2">
                                     <div class="box-thumb"><img src="assets/img/testimonial/testi2-1.jpg" alt="img">
                                    </div> 
                                    <div class="box-content">
                                        <p class="box-text">“Inax Innovations helped us upgrade our home with their top-notch security systems. The CCTV cameras provide crystal-clear footage, and the access control system is a breeze to use. The installation was fast, and
                                            the team was very knowledgeable. We feel safer and more connected to our home than ever before!”</p>
                                        <h3 class="box-title">Vishnu</h3>
                                        <!-- <p class="box-desig">Business
                                            Analyst</p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card2">
                                     <div class="box-thumb"><img src="assets/img/testimonial/testi2-3.jpg" alt="img">
                                    </div>
                                    <div class="box-content">
                                        <p class="box-text">“Inax Innovations has truly transformed our home! The home automation systems are incredibly easy to use, and the CCTV setup gives us peace of mind knowing our property is always secure. Highly recommend their services
                                            for anyone looking to upgrade their home!”</p>
                                        <h3 class="box-title">Ashiq</h3>
                                        <!-- <p class="box-desig">Co-founder,
                                            XYZ</p> -->
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="swiper-slide">
                                <div class="testi-card2">
                                    <div class="box-thumb"><img src="assets/img/testimonial/testi2-2.jpg" alt="img">
                                    </div>
                                    <div class="box-content">
                                        <p class="box-text">“Stay informed
                                            about our upcoming events and
                                            campaigns. AI is transforming
                                            industries by enabling machines
                                            to perform tasks that previously
                                            required human intervention,
                                            there are plenty of ways to get
                                            involved and support.”</p>
                                        <h3 class="box-title">Sophia
                                            Jennifer</h3>
                                        <p class="box-desig">Business
                                            Analyst</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="slider-pagination-wrap">
                            <div class="slider-pagination2"></div>
                            <div class="icon-box"><button data-slider-prev="#testiSlide2" class="slider-arrow style-border3 default"><i
                                        class="far fa-arrow-left"></i></button>
                                <button data-slider-next="#testiSlide2" class="slider-arrow style-border3 default"><i
                                        class="far fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="overflow-hidden space overflow-hidden" id="blog-sec">
        <div class="blog-wrap2 space bg-gray">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xxl-7 col-xl-8">
                        <div class="title-area mb-50"><span class="sub-title2 mb-30 text-anim text-white" data-cue="slideInUp">News & Blog</span>
                            <h2 class="sec-title style2 text-anim2 text-white" data-cue="slideInUp">Our Latest News & Blog
                            </h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="sec-btn" data-cue="slideInRight"><a href="blog.html" class="th-btn style-border2">View All Post
                                <i class="far fa-long-arrow-right ms-2"></i></a></div>
                    </div>
                </div>
                <div class="row gy-40 justify-content-center">
                    <div class="col-xl-4 fadeinup wow" data-cue="slideInUp">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="/elavate-security"><img src="assets/img/blog/blog 1.png" alt="blog image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>24 Jan, 2025</a>
                                    <a href="blog.html"><i class="far fa-user"></i>by admin</a></div>
                                <h3 class="box-title"><a href="/elavate-security" style="color: white !important;">Elevate Security with Inax Innovations: Access Control & CCTV Systems</a></h3><a href="elavate-security.html" class="link-btn style4" style="color: white;">Read More <i class="fas fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 fadeinup wow" data-cue="slideInUp">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="/transform-home"><img src="assets/img/blog/blog 4.png" alt="blog image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>16 Jul, 2025</a>
                                    <a href="blog.html"><i class="far fa-user"></i>by admin</a></div>
                                <h3 class="box-title"><a href="/transform-home" style="color: white !important;">Transform Your Home with Inax Innovations: Automatic Gates, Shutters & Curtains</a></h3><a href="transform-home.html" class="link-btn style4" style="color: white;">Read More <i
                                    class="fas fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 fadeinup wow" data-cue="slideInUp">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="/the-future"><img src="assets/img/blog/blog 7.png" alt="blog image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>30 Jun, 2025</a>
                                    <a href="blog.html"><i class="far fa-user"></i>by admin</a></div>
                                <h3 class="box-title"><a href="/the-future" style="color: white !important;">The Future of Smart Living: Home Automation</a></h3><a href="the-future.html" class="link-btn style4" style="color: white !important; ">Read More
                                <i class="fas fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('template.footer')
    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>