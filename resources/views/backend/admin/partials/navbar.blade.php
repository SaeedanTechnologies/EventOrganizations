<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">

            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="{{asset('backend/assets/images/user/avatar-2.jpg')}}"
                        alt="User-Profile-Image">
                    <div class="user-details">
                        <span>Admin</span>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="user-profile.html"><i
                                    class="feather icon-user m-r-5"></i>View Profile</a></li>
                        <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a>
                        </li>
                        <li class="list-group-item"><a href="{{route('admin.logout')}}"><i
                                    class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                
                <!-- <li class="nav-item pcoded-menu-caption">
                    <label>UI Element</label>
                </li> -->
                <li class="nav-item">
                    <a href="{{route('admin.organizers.index')}}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-box"></i></span><span class="pcoded-mtext">Organizer</span></a>
                </li>
                <!-- <li class="nav-item pcoded-menu-caption">
                    <label>Forms &amp; table</label>
                </li> -->
                <li class="nav-item">
                    <a href="{{route('admin.users.index')}}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-file-text"></i></span><span class="pcoded-mtext">Users</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.events.index')}}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-align-justify"></i></span><span
                            class="pcoded-mtext">Events</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.all_booking')}}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-layout"></i></span><span class="pcoded-mtext">Booking</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Newsletter</label>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.all_subscriber')}}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Subscribed
                            User</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.newsletter')}}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-map"></i></span><span class="pcoded-mtext">Send
                            Newsletter</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Pages</label>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.profile')}}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-lock"></i></span><span class="pcoded-mtext">Profile</span></a>
                </li>
                <!-- <li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample
                            page</span></a></li> -->

            </ul>
        </div>
    </div>
</nav>
