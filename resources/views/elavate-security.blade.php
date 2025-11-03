@include('template.head')

<body class="">
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
                        <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100">Blog Details</h1>
                        <ul class="breadcumb-menu" data-cue="slideInUp" data-delay="300">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="th-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xl-8 col-lg-7">
                    <div class="th-blog blog-single" data-cue="slideInUp">
                        <div class="blog-img"><img src="assets/img/blog/blog 1.png" alt="Blog Image"></div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>24 Jun, 2025</a> <a href="blog.html"><i class="far fa-user"></i>by admin</a></div>
                            <!-- <h3 class="mb-20">The rise of AI and Robotics in retail customer experiences</h3> -->
                            <p class="mb-20" style="font-size: 44px !important;">
                                <b>Elevate Security with Inax Innovations: Access Control & CCTV Systems </b></p>
                            <p class="mb-20"><b>Your safety is our priority. At Inax Innovations, we provide top-of-the-line access control and CCTV systems that offer both protection and peace of mind.</b></p>
                            <p class="mb-30">Our Access Control Systems and CCTV Solutions ensure that your premises are secure, monitored, and under control at all times. Whether you need a simple system for your home or a more complex setup for your business, we’ve
                                got you covered.</p>

                            <div class="row gx-30 mt-30">
                                <div class="col-md-6 mb-30">
                                    <div class="blog-radius-img"><img class="w-100" src="assets/img/blog/blog 2.png" alt="Blog Image"></div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="blog-radius-img"><img class="w-100" src="assets/img/blog/blog 3.png" alt="Blog Image"></div>
                                </div>
                            </div>
                            <p class="mb-0"><b>CCTV Systems:</b> Our CCTV systems provide comprehensive surveillance solutions equipped with high-definition cameras. These systems are designed to continuously monitor and record activity, ensuring enhanced security for
                                homes, offices, and commercial spaces. With real-time footage and playback options, users can easily track events and prevent unauthorized access.</p>
                            <p class="mb-0"><b> Access Control Systems:</b> Our access control solutions are designed to restrict entry to authorized individuals only. Using smart keypads, biometric scanners, and remote control features, these systems help secure entry
                                points effectively. They offer a reliable way to manage access, track usage, and protect sensitive areas from unauthorized intrusion.</p>
                            <!-- <div class="share-links clearfix">
                                <div class="row justify-content-between">
                                    <div class="col-md-auto"><span class="share-links-title">Tags:</span>
                                        <div class="tagcloud"><a href="blog.html">Automation</a> <a href="blog.html">Technology</a> <a href="blog.html">Digital</a></div>
                                    </div>
                                    <div class="col-md-auto text-xl-end"><span class="share-links-title">Share:</span>
                                        <div class="th-social style2 align-items-center"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>                                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="th-comments-wrap" data-cue="slideInUp">
                        <h2 class="blog-inner-title h4"><i class="fas fa-comments"></i> Comments (3)</h2>
                        <ul class="comment-list">
                            <li class="th-comment-item">
                                <div class="th-post-comment">
                                    <div class="comment-avater"><img src="assets/img/blog/comment-author-1.jpg" alt="Comment Author"></div>
                                    <div class="comment-content">
                                        <h3 class="name">Mariya Dsuza</h3><span class="commented-on">25 Jun, 2025<span class="ms-2">06:30pm</span></span>
                                        <p class="text">Our AI agency is a cutting-edge technology partner that specializes in delivering artificial intelligence solutions to help businesses streamline operations</p>
                                        <div class="reply_and_edit"><a href="blog-details.html" class="reply-btn"><i class="fas fa-reply"></i>Reply</a></div>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li class="th-comment-item">
                                        <div class="th-post-comment">
                                            <div class="comment-avater"><img src="assets/img/blog/comment-author-2.jpg" alt="Comment Author"></div>
                                            <div class="comment-content">
                                                <h3 class="name">Michel Phelops</h3><span class="commented-on">15 Dec, 2025<span class="ms-2">04:30pm</span></span>
                                                <p class="text">By leveraging the power of AI, we aim to revolutionize industries and empower organizations to stay competitive in a rapidly evolving digital landscape.</p>
                                                <div class="reply_and_edit"><a href="blog-details.html" class="reply-btn"><i class="fas fa-reply"></i>Reply</a></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="th-comment-item">
                                <div class="th-post-comment">
                                    <div class="comment-avater"><img src="assets/img/blog/comment-author-3.jpg" alt="Comment Author"></div>
                                    <div class="comment-content">
                                        <h3 class="name">Michel Alex</h3><span class="commented-on">20 Dec, 2025<span class="ms-2">02:30pm</span></span>
                                        <p class="text">To be a leading AI agency recognized for creating intelligent solutions that drive meaningful change across industries, fostering smarter decision-making,</p>
                                        <div class="reply_and_edit"><a href="blog-details.html" class="reply-btn"><i class="fas fa-reply"></i>Reply</a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                    <div class="th-comment-form" data-cue="slideInUp">
                        <div class="form-title">
                            <h3 class="blog-inner-title h4 mb-2">Leave a Reply</h3>
                            <p class="form-text">Your email address will not be published. Required fields are marked</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group style-border"><input type="text" placeholder="Your Name" class="form-control"> <i class="fal fa-user"></i></div>
                            <div class="col-md-6 form-group style-border"><input type="text" placeholder="Email Address" class="form-control"> <i class="fal fa-envelope"></i></div>
                            <div class="col-12 form-group style-border"><textarea placeholder="Type Your Message" class="form-control"></textarea> <i class="fal fa-pencil"></i></div>
                            <div class="col-12 form-group"><input id="reviewcheck" name="reviewcheck" type="checkbox"> <label for="reviewcheck">Save my name, email, and website in this browser for the next time I comment.<span class="checkmark"></span></label></div>
                            <div class="col-12 form-group mb-0"><button class="th-btn style3 btn-md">Submit Comment</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                   @include('template.blog-sidebar')
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #000000 !important;">
    @include('template.footer')
    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path></svg></div>
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
    </section>
</body>

</html>