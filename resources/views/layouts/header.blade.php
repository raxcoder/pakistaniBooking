<header class="page-header">

    <div class="panel-fixed">
        <div class="page-header__top bg-white js-header-top js-top-panel">
            <div class="container">
                <div class="row justify-content-center justify-content-between">

                    <div class="col-12 col-md col-lg-3 d-flex justify-content-center justify-content-md-start">
                        <a class="navbar-logo d-inline-flex align-items-center" href="/travel/index.php">
                            <img class="img-fluid mr-3" src="{{ asset('images/logo.png') }}" alt="#"/>
                            <h4 class="m-0">Pakistani Booking</h4>
                        </a>
                    </div>

                    <div class="col col-lg-6 d-none d-md-flex align-items-center justify-content-center">
                        <a class="page-header__call d-flex align-items-center text-nowrap" href="tel:880000112222333">
                            <i class="fa fa-phone js-tooltip-call mr-3" data-toggle="tooltip" data-placement="bottom" title="Support 8-800-0011-2222-333"></i>
                            <div class="page-header__call-right">
                                <div class="title fz-small">Support</div>
                                <div class="phone fw-bold">8-800-0011-2222-333</div>
                            </div>
                        </a>
                        <div class="page-header__top-search d-none d-lg-block ml-4 display-none" id="navbarSearch">
                            <form class="navbar-search" action="#" method="GET">
                                <div class="input-group flex-nowrap">
                                    <input class="form-control pr-0 js-navbar-search-input" type="search" placeholder="Search on site"/>
                                    <div class="input-group-append">
                                        <button class="navbar-search__subject btn btn-light" type="button"><i class="fa fa-search text-gray"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col col-lg-3 d-none d-md-flex">
                        <ul class="nav nav-panel">
                            <li class="nav-item d-flex"><a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="login"><i class="text-gray icon icon-user mr-2"></i><span>log in</span></a>
                            </li>
                            <li class="nav-item d-flex"><a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="regist"><i class="text-gray icon icon-login mr-2"></i><span>sign up</span></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <button class="btn-toggle btn btn-light d-lg-none btn-toggle-nav" type="button" data-toggle="collapse" data-target="#navPanel"><span class="icon-bar"></span></button>
    <nav class="main-nav d-flex collapse d-lg-block" id="navPanel">
        <div class="main-nav__container d-flex">
            <div class="container">
                <div class="d-lg-none">

                    <div class="main-nav__search display-none">
                        <form class="navbar-search" action="#" method="GET">
                            <div class="input-group flex-nowrap">
                                <input class="form-control pr-0 js-navbar-search-input" type="search" placeholder="Search on site"/>
                                <div class="input-group-append">
                                    <button class="navbar-search__subject btn btn-light" type="button"><i class="fa fa-search text-gray"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <ul class="nav nav-panel">
                        <li class="nav-item d-flex"><a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="login"><i class="text-gray icon icon-user mr-2"></i><span>log in</span></a>
                        </li>
                        <li class="nav-item d-flex"><a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="regist"><i class="text-gray icon icon-login mr-2"></i><span>sign up</span></a>
                        </li>
                    </ul>
                </div>
                <ul class="main-nav__list nav d-flex" id="navMenu">

                    <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="/travel/index.php"><span>Home</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="hotel.html"><span>Hotel</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="#"><span>Cities</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="about.html"><span>about us</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="contacts.html"><span>contacts</span></a>
                    </li>

                    <li class="nav-item display-none"><a class="nav-link fw-bold text-uppercase" href="flights.html"><span>flights</span></a>
                    </li>
                    <li class="nav-item display-none"><a class="nav-link fw-bold text-uppercase" href="category.html"><span>best seller</span></a>
                    </li>
                    <li class="nav-item display-none"><a class="nav-link fw-bold text-uppercase" href="category.html"><span>hot deals</span></a>
                    </li>
                    <li class="nav-item display-none"><a class="nav-link fw-bold text-uppercase" href="category.html"><span>air tickets</span></a>
                    </li>
                    <li class="nav-item display-none"><a class="nav-link fw-bold text-uppercase" href="category.html"><span>rent a car</span></a>
                    </li>
                    <li class="nav-item dropdown display-none"><a class="nav-link fw-bold text-uppercase" href="#"><span>pages</span><i class="caret fa fa-angle-down ml-2"></i></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown"><a class="nav-link" href="#"><span>Home</span><i class="caret fa fa-angle-down ml-2"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="index-2.html"><span>Home</span></a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="index-account.html"><span>Home Login</span></a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="index-video.html"><span>Home Video</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="category.html"><span>Category</span></a>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link" href="#"><span>Blog</span><i class="caret fa fa-angle-down ml-2"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog-list.html"><span>Blog List</span></a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="blog-post.html"><span>Blog Post</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link" href="#"><span>Hotel</span><i class="caret fa fa-angle-down ml-2"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="hotel.html"><span>Hotel</span></a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="hotel-services.html"><span>Hotel Services</span></a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="hotel-accommodation.html"><span>Hotel Accommodation</span></a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="hotel-reviews.html"><span>Hotel Reviews</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="flights.html"><span>Flights</span></a>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link" href="#"><span>Booking</span><i class="caret fa fa-angle-down ml-2"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="booking-traveler.html"><span>Traveler</span></a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="booking-payment.html"><span>Payment</span></a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="booking-confirm.html"><span>Confirmation</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="about.html"><span>About us</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contacts.html"><span>Contacts</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item display-none"><a class="nav-link fw-bold text-uppercase" href="blog-list.html"><span>news</span></a>
                    </li>
                    <li class="nav-item display-none"><a class="nav-link fw-bold text-uppercase" href="shortcodes.html"><span>Shortcodes</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>