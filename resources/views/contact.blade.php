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
                        <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100">Contact Us</h1>
                        <ul class="breadcumb-menu" data-cue="slideInUp" data-delay="300">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space overflow-hidden contact-area-1 position-relative z-index-common" id="contact-sec">
        <div class="container">
            <div class="row gy-40 justify-content-center">
                <div class="col-xl-12">
                    <div class="title-area mb-0 text-center"><span class="sub-title2 text-anim text-theme text-uppercase mb-30" data-cue="slideInUp">Quick
                            contact info</span>
                        <h2 class="sec-title text-anim2" data-cue="slideInUp">Contact Information</h2>
                    </div>
                </div>
                <!--<div class="col-xl-3">-->
                <!--    <div class="contact-info" data-cue="slideInUp">-->
                <!--        <div class="box-icon"><i class="fal fa-map-marker-alt"></i></div>-->
                <!--        <h4 class="box-title">Location</h4>-->
                <!--        <p class="box-text">Aychavattam, Mankav, Calicut</p>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-xl-3">
                    <div class="contact-info" data-cue="slideInUp">
                        <div class="box-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <h4 class="box-title">Location</h4>
                        <p class="box-text"><a href="https://maps.app.goo.gl/VcwXv1V4FqNdco328">Aychavattam, Mankav, Calicut</a>
                            <br>
                            <br>
                        </p>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="contact-info" data-cue="slideInUp">
                        <div class="box-icon"><i class="fal fa-envelope"></i></div>
                        <h4 class="box-title">Email us</h4>
                        <p class="box-text"><a href="mailto:inaxinnovations@gmail.com">inaxinnovations@gmail.com</a>
                            <br>
                            <br>
                        </p>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="contact-info" data-cue="slideInUp">
                        <div class="box-icon"><i class="fal fa-phone"></i></div>
                        <h4 class="box-title">Free Call</h4>
                        <p class="box-text"><a href="tel:+91 9633 043 414">+91 9633 043 414</a>
                            <br>
                            <br>
                        </p>
                    </div>
                </div>
                <!--<div class="col-xl-3">-->
                <!--    <div class="contact-info" data-cue="slideInUp">-->
                <!--        <div class="box-icon"><i class="fal fa-clock"></i></div>-->
                <!--        <h4 class="box-title">Opening hour</h4>-->
                <!--        <p class="box-text">Mon to Fri: 09AM - 05PM</p>-->
                <!--        <br>-->
                <!--        <br>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <div class="space-bottom overflow-hidden contact-area-1 position-relative z-index-common" id="contact-sec">
        <div class="container">
            <div class="consulting-wrap1 bg-smoke">
                <div class="row align-items-center">
                    <div class="col-xxl-6">
                        <div class="page-img mb-0"><img src="assets/img/normal/consulting-thumb1-2.png" alt="img"></div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="consulting-form-wrap1">
                            <div class="title-area mb-20">
                                <h2 class="sec-title" style="color: #143a60 !important;">Get In Touch!</h2>
                            </div>
                            <div class="contact-form-v1">
                                <form action="mail.php" method="POST" class="contact-form ajax-contact">
                                    <div class="row">
                                        <div class="form-group style-border col-md-6"><input type="text" class="form-control" name="name" id="name" placeholder="Your name"> <i class="far fa-user"></i></div>
                                        <div class="form-group style-border col-md-6"><input type="email" class="form-control" name="email" id="email" placeholder="Email Address"> <i class="far fa-envelope"></i></div>
                                        <div class="form-group style-border col-md-6"><input type="number" class="form-control" name="number" id="number" placeholder="Phone Number"> <i class="far fa-phone"></i></div>
                                        <div class="form-group style-border col-md-6">
                                            <select name="subject" id="subject" class="form-select bg-white">
                                                <option value="" disabled="disabled" selected="selected" hidden="">
                                                    Select Subject</option>
                                                <option value="Security & Fire Alarm Systems">Security & Fire Alarm Systems</option>
                                                <option value="Advanced Access Control System">Advanced Access Control System</option>
                                                <option value="Video Doorbell System">Video Doorbell System</option>
                                                <option value="CCTV Surveillance Systems">CCTV Surveillance Systems</option>
                                                <option value="Home Automation">Home Automation</option>
                                                <option value="Automatic Gates, Shutters & Curtains">Automatic Gates, Shutters & Curtains</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group style-border col-12"><textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="How can we help you? feel free to get in touch!*"></textarea>
                                        </div>
                                        <div class="form-btn col-12"><button class="th-btn style5">Submit
                                                Message</button></div>
                                    </div>
                                    <p class="form-messages mb-0 mt-3"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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