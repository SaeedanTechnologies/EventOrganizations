<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.graygrids.com/themes/eventgrids/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 12:17:18 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>About Us - EventGrids Conference and Event HTML Template.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('frontend.partials.style')

</head>

<body>
    <!-- Start Header Area -->
    @include('frontend.partials.header')
    <!-- End Header Area -->

    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Events</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <section class="blog-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Events</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">All Events</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <!-- Start Single Blog Grid -->
                    <div class="single-blog-grid">
                        <div class="blog-img">
                            <a href="blog-single.html">
                                <img src="{{asset('frontend/assets/images/blog/blog1.jpg')}}" alt="#">
                            </a>
                            <p class="date">
                                29
                                <span class="day">
                                    Nov
                                </span>
                            </p>
                        </div>
                        <div class="blog-content">
                            <p class="date">
                                <!-- Display End Date -->
                                <span class="end-date">End: <b>31 Nov</b></span>
                                <!-- Display Time -->
                                <span class="time">Time: <b>10:00 AM - 5:00 PM</b></span>
                            </p>
                            <h4>
                                <a href="blog-single.html">3 Best Practices for Keeping Your Event Clients
                                    Happy</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt dolore
                                magna.</p>
                            <a href="blog-single.html" class="more-btn">Read Detail <i
                                    class="lni lni-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Blog Grid -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <!-- Start Single Blog -->
                    <div class="single-blog-grid">
                        <div class="blog-img">
                            <a href="blog-single.html">
                                <img src="{{asset('frontend/assets/images/blog/blog2.jpg')}}" alt="#">
                            </a>
                            <p class="date">
                                15
                                <span class="day">
                                    Mar
                                </span>
                            </p>
                        </div>
                        <div class="blog-content">
                            <p class="date">
                                <!-- Display End Date -->
                                <span class="end-date">End: <b>31 Nov</b></span>
                                <!-- Display Time -->
                                <span class="time">Time: <b>10:00 AM - 5:00 PM</b></span>
                            </p>
                            <h4>
                                <a href="blog-single.html">Adding a New Digital Dimension to Your Next Special Event</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt dolore
                                magna.</p>
                            <a href="blog-single.html" class="more-btn">Read Detail <i
                                    class="lni lni-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Blog Grid -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".8s">
                    <!-- Start Single Blog Grid -->
                    <div class="single-blog-grid">
                        <div class="blog-img">
                            <a href="blog-single.html">
                                <img src="{{asset('frontend/assets/images/blog/blog3.jpg')}}" alt="#">
                            </a>
                            <p class="date">
                                30
                                <span class="day">
                                    Jan
                                </span>
                            </p>
                        </div>
                        <div class="blog-content">
                            <p class="date">
                                <!-- Display End Date -->
                                <span class="end-date">End: <b>31 Nov</b></span>
                                <!-- Display Time -->
                                <span class="time">Time: <b>10:00 AM - 5:00 PM</b></span>
                            </p>
                            <h4>
                                <a href="blog-single.html">West Elm At Evantor 2023 + Room Makeover Competition!</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt dolore
                                magna.</p>
                            <a href="blog-single.html" class="more-btn">Read Detail <i
                                    class="lni lni-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Blog Grid -->
                </div>
            </div>
        </div>
    </section>

    <!-- Start Footer Area -->
    @include('frontend.partials.footer')
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    @include('frontend.partials.script')
</body>


<!-- Mirrored from demo.graygrids.com/themes/eventgrids/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 12:17:18 GMT -->
</html>