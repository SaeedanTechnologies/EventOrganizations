<header class="header navbar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">
                    <!-- Start Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="{{asset('frontend/assets/images/logo/logo.svg')}}" alt="Logo">
                        </a>
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="active" aria-label="Toggle navigation">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('about')}}" aria-label="Toggle navigation">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('events')}}" aria-label="Toggle navigation">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a href="speakers.html" aria-label="Toggle navigation">Blog</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('contact')}}" aria-label="Toggle navigation">Contact</a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                        <div class="button">
                            @if(auth()->user())
                            <!-- Check if a user is logged in -->
                            <a href="{{ route('user.logout') }}" class="btn">Logout<i class="lni lni-ticket"></i></a>
                            @else
                            <!-- User is not logged in -->
                            <a href="{{ route('register_view') }}" class="btn">Signup/Login<i
                                    class="lni lni-ticket"></i></a>
                            @endif
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</header>