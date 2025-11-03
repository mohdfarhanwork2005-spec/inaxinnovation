@include('template.head')

<body class="bg-black">
    <div class="cursor-follower"></div>
    <!--<div class="preloader"><button class="th-btn preloaderCls">Cancel Preloader</button>-->
    <!--    <div class="preloader-inner">-->
    <!--        <div class="bounce"><img src="assets/img/logo/updated logo 2.png" alt="img"></div><span class="loader">Inax Innovation <span-->
    <!--                class="loading-text">Inax Innovation</span></span>-->
    <!--    </div>-->
    <!--</div>-->
    @include('template.header')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.png" data-overlay="black" data-opacity="7">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100">Blog</h1>
                        <ul class="breadcumb-menu" data-cue="slideInUp" data-delay="300">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom" id="blog-sec">
        <div class="container">
            <div class="row gy-40">
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
                            <a href="blog-details.html"><img src="assets/img/blog/blog 4.png" alt="blog image"></a>
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
                <!-- <div class="col-xl-4 fadeinup wow" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog_1_4.jpg" alt="blog image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>16 Jul, 2025</a>
                                <a href="blog.html"><i class="far fa-user"></i>by admin</a></div>
                            <h3 class="box-title"><a href="blog-details.html">The Role of AI in Shaping the Future of
                                    Work</a></h3><a href="blog-details.html" class="link-btn style4">Read More <i
                                    class="fas fa-long-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 fadeinup wow" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog_1_5.jpg" alt="blog image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>24 Jan, 2025</a>
                                <a href="blog.html"><i class="far fa-user"></i>by admin</a></div>
                            <h3 class="box-title"><a href="blog-details.html">How Small Businesses Can Benefit from AI
                                    Solutions</a></h3><a href="blog-details.html" class="link-btn style4">Read More <i
                                    class="fas fa-long-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 fadeinup wow" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog_1_6.jpg" alt="blog image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>16 Jul, 2025</a>
                                <a href="blog.html"><i class="far fa-user"></i>by admin</a></div>
                            <h3 class="box-title"><a href="blog-details.html">Top AI Tools and Platforms for Businesses
                                    in 2025</a></h3><a href="blog-details.html" class="link-btn style4">Read More <i
                                    class="fas fa-long-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 fadeinup wow" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog_1_7.jpg" alt="blog image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>30 Jun, 2025</a>
                                <a href="blog.html"><i class="far fa-user"></i>by admin</a></div>
                            <h3 class="box-title"><a href="blog-details.html">AI and Creativity: Can Machines Be Truly
                                    Creative</a></h3><a href="blog-details.html" class="link-btn style4">Read More <i
                                    class="fas fa-long-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 fadeinup wow" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog_1_8.jpg" alt="blog image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>16 Jul, 2025</a>
                                <a href="blog.html"><i class="far fa-user"></i>by admin</a></div>
                            <h3 class="box-title"><a href="blog-details.html">Ethical AI: Building Responsible and Fair
                                    AI Systems</a></h3><a href="blog-details.html" class="link-btn style4">Read More <i
                                    class="fas fa-long-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 fadeinup wow" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog_1_9.jpg" alt="blog image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>24 Jan, 2025</a>
                                <a href="blog.html"><i class="far fa-user"></i>by admin</a></div>
                            <h3 class="box-title"><a href="blog-details.html">AI-Powered Innovations: What’s Next for
                                    the Future?</a></h3><a href="blog-details.html" class="link-btn style4">Read More <i
                                    class="fas fa-long-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="th-pagination text-center" data-cue="slideInUp">
                <ul>
                    <li><a href="#"><i class="far fa-arrow-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="far fa-arrow-right"></i></a></li>
                </ul>
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