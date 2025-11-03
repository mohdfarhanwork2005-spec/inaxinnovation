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
                        <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100">Access Control System
                        </h1>
                        <ul class="breadcumb-menu" data-cue="slideInUp" data-delay="300">
                            <li><a href="index.html">Home</a></li>
                            <li>Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-60">
                <div class="col-xl-8 col-lg-7">
                    <div class="page-single">
                        <div class="page-img gsap-parallax mb-35"><img src="assets/img/service/service_ (4).png" alt="Service Image" style="width: 50% !important;"></div>
                        <p class="mb-0">At Inax Innovations, we provide cutting-edge access control systems designed to enhance the security of your property, whether it’s residential, commercial, or industrial. Our systems offer flexible and scalable solutions to ensure
                            only authorized individuals can access sensitive areas, improving safety and streamlining operations.</p>
                        <p class="mb-25">Advanced Authentication Methods – Use PIN codes, biometric recognition, keycards, and mobile apps for secure entry. Real-Time Monitoring – Track access in real-time, and get immediate alerts for unauthorized attempts. Customizable
                            Access Levels – Set different access permissions for various users, ensuring only authorized personnel have access to restricted areas. Remote Management – Control and monitor the system remotely through a user-friendly mobile
                            app or web portal. Seamless Integration – Easily integrate with existing security systems, such as CCTV and alarms, for a complete security solution. Audit Trails – Keep a record of all access events for auditing, compliance,
                            and peace of mind.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <aside class="sidebar-area sidebar-sticky rounded-0 p-0 bg-transparent">
                        <div class="widget widget-contact-wrap">
                            <h3 class="widget_title">Contact info</h3>
                            <p class="box-text">Need Any Help, Call Us 24/7 For Support</p>
                            <div class="info-box">
                                <div class="info-box_icon"><i class="fas fa-phone"></i></div>
                                <div class="box-content">
                                    <p class="info-box_title">Call Us</p>
                                    <p class="info-box_text"><a href="tel:+91 9633 043 414" class="info-box_link">+91 9633 043 414</a></p>
                                </div>
                            </div>
                            <div class="info-box">
                                <div class="info-box_icon"><i class="fas fa-envelope"></i></div>
                                <div class="box-content">
                                    <p class="info-box_title">Mail Us</p>
                                    <p class="info-box_text"><a href="mailto:inaxinnovations@gmail.com" class="info-box_link">inaxinnovations@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="info-box">
                                <div class="info-box_icon"><i class="fas fa-map-marker-alt"></i></div>
                                <div class="box-content">
                                    <p class="info-box_title">Office Address</p>
                                    <p class="info-box_text"><a href="https://www.google.ca/maps/" class="info-box_link">Kottangodan Plaza Building 2nd Floor, Mankav, Calicut</a></p>
                                </div>
                            </div>
                        </div>
                    </aside>
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