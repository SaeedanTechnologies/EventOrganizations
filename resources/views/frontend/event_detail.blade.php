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
    <style>
    .post-thumbnils {
        position: relative;
    }

    .offer-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #F20487;
        color: white;
        padding: 5px 10px;
        font-size: 12px;
        font-weight: bold;
        border-radius: 3px;
    }

    .detail-inner .highlight {
        font-size: 1.1em;
        color: #333;
        font-weight: bold;
    }

    .detail-inner .highlight strong {
        color: #F20487;
    }

    .original-price {
        color: #888;
        margin-right: 5px;
    }

    .discounted-price {
        color: #F20487;
        font-weight: bold;
    }
    </style>
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
                        <h1 class="page-title">Event Detail</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <!-- Start Blog Singel Area -->
    <section class="section blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    @if(Session::get('error'))
                    <div class="alert alert-danger">
                        {{Session::get('error')}}
                    </div>
                    @endif
                    <div class="single-inner">
                        <div class="post-details">
                            <div class="main-content-head">
                                <div class="post-thumbnils position-relative">
                                    <img src="{{$event->image}}" alt="#" class="img-fluid">
                                    @isset($event->SpecialOffer)
                                    <span class="offer-badge">Special Offer</span>
                                    @endisset
                                </div>
                                <div class="meta-information">
                                    <h2 class="post-title">{{$event->title}}</h2>
                                    <!-- Meta Info -->
                                    <ul class="meta-info">
                                        <li>
                                            <a href="javascript:void(0)">{{$event->Organizer->first_name}}
                                                {{$event->Organizer->last_name}}</a>
                                        </li>
                                        <li>
                                            <a
                                                href="javascript:void(0)">{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Events</a>
                                        </li>
                                    </ul>
                                    <!-- End Meta Info -->
                                </div>
                                <!-- Event Details -->
                                <div class="detail-inner">
                                    <p class="highlight">
                                        <strong>Time:</strong>
                                        {{ \Carbon\Carbon::parse($event->start_time)->format('h:i A') }} -
                                        {{ \Carbon\Carbon::parse($event->end_time)->format('h:i A') }} |
                                        <strong>Price:</strong>
                                        @isset($event->SpecialOffer)
                                        <span class="original-price"
                                            style="text-decoration: line-through;">${{ number_format($event->price, 2) }}</span>
                                        <span
                                            class="discounted-price">${{ number_format($event->price * (1 - $event->SpecialOffer->discount_percentage / 100), 2) }}</span>
                                        @else
                                        ${{ number_format($event->price, 2) }}
                                        @endisset
                                    </p>
                                    @isset($event->SpecialOffer)
                                    <p class="special-offer" style="color:#F20487;"><strong>Special Offer:</strong>
                                        {{ $event->SpecialOffer->discount_percentage }}% off</p>
                                    @endisset
                                    <p>{{ $event->description }}</p>
                                    <!-- Book Now Button -->
                                    <a href="{{route('user.booking', $event->id)}}" class="btn btn-primary">Book Now</a>
                                    <!-- Social Media Icons -->
                                    <div class="social-icons mt-3">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                            class="btn btn-social btn-facebook" target="_blank"><i
                                                class="lni lni-facebook-filled"></i> Share</a>
                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($event->title) }}"
                                            class="btn btn-social btn-twitter" target="_blank"><i
                                                class="lni lni-twitter-filled"></i> Tweet</a>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($event->title) }}&summary={{ urlencode($event->description) }}"
                                            class="btn btn-social btn-linkedin" target="_blank"><i
                                                class="lni lni-linkedin-original"></i> Share</a>
                                    </div>
                                </div>
                                <!-- End Event Details -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- End Blog Singel Area -->

    <!-- Start Call Action Area -->
    <section class="call-action overlay style2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 col-12">
                    <div class="inner-content">
                        <div class="text">
                            <h5>Hurry Up!</h5>
                            <h2>Europe’s Leading Conference Book your Seat Now</h2>
                            <p>Entertainment & technology show inspirational speakers including game changing not just a
                                large-scale conference but a hub.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="button">
                        <a href="pricing.html" class="btn">Get Tickets<i class="lni lni-ticket"></i></a>
                    </div>
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