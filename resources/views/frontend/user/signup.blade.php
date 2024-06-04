<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.graygrids.com/themes/eventgrids/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 12:17:18 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Signup - EventGrids Conference and Event HTML Template.</title>
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
                        <h1 class="page-title">Signup</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Signup</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Features Area -->

    <section class="signup section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
                    <div class="signup-form">
                        <h2>Signup</h2>
                        <form action="{{route('register')}}" method="post">
                            @csrf
                            @if(Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif
                            @if(Session::get('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="text" name="first_name" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="text" name="last_name" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="tel" name="phone" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn">Signup</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p>Already have an account? <a href="{{route('login_view')}}">Sign in</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- /End Features Area -->

    <!-- End Call Action Area -->

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