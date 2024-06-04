<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.graygrids.com/themes/eventgrids/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 12:17:23 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Contact Us - EventGrids Conference and Event HTML Template.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('frontend.partials.style')

</head>

<body>
    @include('frontend.partials.header')
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Contact Us</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact Area -->
    <div class="contact-us section">
        <div class="container">
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="contact-widget-wrapper">
                            <div class="main-title">
                                <h2>We are always open<br> for help you.
                                </h2>
                                <p>There are many variations of passages of Lorem
                                    Ipsum available, but the majority have suffered.</p>
                            </div>
                            <div class="contact-widget-block">
                                <h3 class="title">Call us</h3>
                                <p>+1-492-4918-395</p>
                            </div>
                            <div class="contact-widget-block">
                                <h3 class="title">Email us</h3>
                                <p>info@mail.com</p>
                            </div>
                            <div class="contact-widget-block">
                                <h3 class="title">Our Address</h3>
                                <p>34 Madison Street,NY, USA 10005</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="contact-form">
                            <form class="form" method="post" action="https://demo.graygrids.com/themes/eventgrids/assets/mail/mail.php">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="name" type="text" placeholder="Your Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="subject" type="text" placeholder="Your Subject"
                                                required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input name="email" type="email" placeholder="Your Email" required="required">
                                </div>
                                <div class="form-group">
                                    <textarea placeholder="Write your message here" name="Message" id="message-area"
                                        class="form-control"></textarea>
                                </div>
                                <div class="button">
                                    <button type="submit" class="btn ">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Google-map Area -->
    <div class="map-section">
        <div class="map-container">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://123movies-to.com/">123movies old site</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google-map Area -->

    <!--/ End Footer Area -->
    @include('frontend.partials.footer')
    @include('frontend.partials.script')
</body>


<!-- Mirrored from demo.graygrids.com/themes/eventgrids/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 12:17:23 GMT -->
</html>