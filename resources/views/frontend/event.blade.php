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
                @foreach($event as $event)
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <!-- Start Single Blog Grid -->
                    <div class="single-blog-grid">
                        <div class="blog-img">
                            <a href="{{route('events.detail', $event->id)}}">
                                <img src="{{$event->image}}" alt="#">
                            </a>
                            <p class="date">
                                {{ \Carbon\Carbon::parse($event->date)->format('d') }}
                                <span class="day">
                                    {{ \Carbon\Carbon::parse($event->date)->format('M') }}
                                </span>
                            </p>
                            <!-- Offer Badge -->
                            @isset($event->SpecialOffer)
                            @if($event->SpecialOffer)
                            <span class="offer-badge">Special Offer</span>
                            @endif
                            @endisset
                        </div>
                        <div class="blog-content">
                            <p class="date">
                                <!-- Display Time -->
                                <span class="time">
                                    Time: <b>{{ \Carbon\Carbon::parse($event->start_time)->format('h:i A') }} -
                                        {{ \Carbon\Carbon::parse($event->end_time)->format('h:i A') }}</b>
                                </span>
                            </p>
                            <h4>
                                <a href="{{route('events.detail', $event->id)}}">{{$event->title}}</a>
                            </h4>
                            <p>{{ \Illuminate\Support\Str::limit($event->description, 100) }}</p>
                            @isset($event->SpecialOffer)
                            @if($event->SpecialOffer)
                            <!-- Offer Details -->
                            <div class="offer-details">
                                <span class="offer-item">
                                    <i class="lni lni-tag"></i> <b>{{$event->SpecialOffer->discount_percentage}}%
                                        Off</b>
                                </span>
                                <span class="offer-item">
                                    <i class="lni lni-calendar"></i>
                                    <b>{{ \Carbon\Carbon::parse($event->SpecialOffer->start_date)->format('d') }}
                                        {{ \Carbon\Carbon::parse($event->SpecialOffer->start_date)->format('M') }} -
                                        {{ \Carbon\Carbon::parse($event->SpecialOffer->end_date)->format('d') }}
                                        {{ \Carbon\Carbon::parse($event->SpecialOffer->end_date)->format('M') }}</b>
                                </span>
                            </div>
                            @endif
                            @endisset
                            <a href="{{route('events.detail', $event->id)}}" class="more-btn">Read Detail <i
                                    class="lni lni-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Blog Grid -->
                </div>
                @endforeach
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
                            <!-- Offer Badge -->
                            <span class="offer-badge">Special Offer</span>
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
                            <!-- Offer Details -->
                            <div class="offer-details">
                                <span class="offer-item">
                                    <i class="lni lni-tag"></i> <b>20% Off</b>
                                </span>
                                <span class="offer-item">
                                    <i class="lni lni-calendar"></i> <b>1 Mar - 10 Mar</b>
                                </span>
                            </div>
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