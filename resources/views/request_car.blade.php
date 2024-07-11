
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>OnlineBid</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" type="image/x-icon">
</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
 <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="customer-support">
                        <li class="cmn-support-text">
                            <a href="#0" class="mr-3"><i class="fas fa-phone-alt"></i><span class="ml-2 d-none d-sm-inline-block">Customer Support</span></a>
                        </li>
                        <li class="customer-cupport-lang">
                            <i class="fas fa-globe"></i>
                            <select name="language" class="select-bar">
                                <option value="en">En</option>
                                <option value="Bn">Bn</option>
                                <option value="Rs">Rs</option>
                                <option value="Us">Us</option>
                                <option value="Pk">Pk</option>
                                <option value="Arg">Arg</option>
                            </select>
                        </li>
                    </ul>
                    <ul class="cart-button-area">
                        <li class="custom-button" style="padding: 0%">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        </li>
                        {{-- <li>
                            <a href="#0" class="cart-button"><i class="flaticon-shopping-basket"></i><span class="amount">08</span></a>
                        </li> --}}
                        <li>
                            <a href="{{ route('dashboard') }}" class="user-button"><i class="flaticon-user"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/images/logo/logo.png')}}" alt="logo">
                        </a>
                    </div>
                    <ul class="ml-auto menu">
                        <li>
                            <a href="index.html">Home</a>

                        </li>
                        <li>
                            <a href="product.html">Auction</a>
                        </li>
						{{-- <li>
							<a href="#0">Dashboard</a>
							<ul class="submenu">

								<li>
									<a href="dashboard.html">Dashboard</a>
								</li>

								<li>
									<a href="profile.html">Personal Profile</a>
								</li>
								<li>
									<a href="my-bid.html">My Bids</a>
								</li>
								<li>
									<a href="winning-bids.html">Winning Bids</a>
								</li>
								<li>
									<a href="notifications.html">My Alert</a>
								</li>
								<li>
									<a href="my-favorites.html">My Favorites</a>
								</li>
								<li>
									<a href="referral.html">Referrals</a>
								</li>
							</ul>
                             </li>

						<li> --}}
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <form class="search-form">
                        <input type="text" placeholder="Search for brand, model....">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="search-bar d-md-none">
                        <a href="#0"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

    <!--============= Cart Section Starts Here =============-->
    <div class="cart-sidebar-area">
        <div class="top-content">
            <a href="index.html" class="logo">
                <img src="{{ asset('assets/images/logo/logo2.png')}}" alt="logo">
            </a>
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products">
                <h4 class="title">Shopping cart</h4>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="{{ asset('assets/images/shop/shop01.jpg')}}" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Color Pencil</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="{{ asset('assets/images/shop/shop02.jpg')}}" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Water Pot</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="{{ asset('assets/images/shop/shop03.jpg')}}" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Art Paper</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="{{ asset('assets/images/shop/shop04.jpg')}}" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Stop Watch</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <a href="#0"><img src="{{ asset('assets/images/shop/shop05.jpg')}}" alt="shop"></a>
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Comics Book</a></h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="text-center btn-wrapper">
                    <a href="#0" class="custom-button"><span>Checkout</span></a>
                </div>
            </div>
        </div>
    </div>
    <!--============= Cart Section Ends Here =============-->


    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2 pb-lg-400">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#0">My Account</a>
                </li>
                <li>
                    <span>Dashboard</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="{{ asset('assets/images/banner/hero-bg.png')}}"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Dashboard Section Starts Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-7 col-lg-4">
                    <div class="dashboard-widget mb-30 mb-lg-0">
                        <div class="user">
                            <div class="thumb-area">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/dashboard/user.png')}}" alt="user">
                                </div>
                                <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                                <input type="file" id="profile-pic" class="d-none">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#0">{{ Auth::user()->name }}</a></h5>
                                <span class="username">({{ Auth::user()->role }})</span>
                            </div>
                        </div>
                        <ul class="dashboard-menu">
                            <li>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </li>
                            <li>
                                <a href="{{ route('dashboard') }}" class="active"><i class="flaticon-dashboard"></i>Dashboard</a>
                            </li>
                            @can('isCustomer')
                            <li>
                                <a href="{{ route('customer.request_car') }}"><i class="flaticon-auction"></i>Request a Car</a>
                            </li>
                            @endcan
                            @can('isDealer')

                            <li>
                                <a href="{{ route('car_dealer.select_cars') }}"><i class="flaticon-settings"></i>Choose Your Cars </a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('dashboard') }}"><i class="flaticon-best-seller"></i>Car Request notificaion</a>
                            </li> --}}
                            <li>
                                <a href="{{ route('dashboard') }}"><i class="flaticon-alarm"></i>My Alerts</a>
                            </li>
                            @endcan
                            <li>
                                <a href="#"><i class="flaticon-star"></i>My Favorites</a>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-shake-hand"></i>Referrals</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    {{-- <div class="mb-40 dashboard-widget">
                        <div class="dashboard-title mb-30">
                            <h5 class="title">Notifications</h5>
                        </div>
                                @if($notifications->isEmpty())
                                    <p>No notifications.</p>
                                @else
                                    <form action="{{ route('car_dealer.notifications.markAsRead') }}" method="POST">
                                        @csrf
                                        <button type="submit">Mark All as Read</button>
                                    </form>
                                    <ul>
                                        @foreach ($notifications as $notification)
                                            <li>
                                                A customer {{ $notification->data['customer_name'] }} requested the car: {{ $notification->data['car_make'] }} {{ $notification->data['car_model'] }}
                                                at {{ $notification->created_at }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif

                    </div> --}}
                    <div class="dashboard-widget">
                        <h5 class="mb-10 title">Request Car</h5> <br>
                        <div>

                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            
                            @foreach ($cars as $car)
                            <div>
                                <form action="{{ route('customer.save_car_request', $car) }}" method="POST">
                                    @csrf


                                <div class="col-sm-10 col-md-6">
                                    <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                        <div class="auction-thumb">
                                            <a href="product-details.html"><img src="{{ asset('assets/images/auction/car/auction-1.jpg') }}" alt="car"></a>
                                            {{-- <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a> --}}
                                        </div>
                                        <div class="auction-content">
                                            <h6 class="title">
                                                <a>{{ $car->make }} {{ $car->model }}</a>
                                            </h6>
                                            {{-- <div class="bid-area">
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-auction"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Current Bid</div>
                                                        <div class="amount">$876.00</div>
                                                    </div>
                                                </div>
                                                <div class="bid-amount">
                                                    <div class="icon">
                                                        <i class="flaticon-money"></i>
                                                    </div>
                                                    <div class="amount-content">
                                                        <div class="current">Buy Now</div>
                                                        <div class="amount">$5,00.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="countdown-area">
                                                <div class="countdown">
                                                    <div id="bid_counter26"></div>
                                                </div>
                                                <span class="total-bids">30 Bids</span>
                                            </div> --}}
                                            <div class="text-center">
                                                <button class="custom-button" type="submit">Request Inquiry</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </form>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Dashboard Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img padding-top oh" data-background="{{ asset('assets/images/footer/footer-bg.jpg')}}">
        <div class="footer-top-shape">
            <img src="{{ asset('assets/css/img/footer-top-shape.png')}}" alt="css">
        </div>
        <div class="anime-wrapper">
            <div class="anime-1 plus-anime">
                <img src="{{ asset('assets/images/footer/p1.png')}}" alt="footer">
            </div>
            <div class="anime-2 plus-anime">
                <img src="{{ asset('assets/images/footer/p2.png')}}" alt="footer">
            </div>
            <div class="anime-3 plus-anime">
                <img src="{{ asset('assets/images/footer/p3.png')}}" alt="footer">
            </div>
            <div class="anime-5 zigzag">
                <img src="{{ asset('assets/images/footer/c2.png')}}" alt="footer">
            </div>
            <div class="anime-6 zigzag">
                <img src="{{ asset('assets/images/footer/c3.png')}}" alt="footer">
            </div>
            <div class="anime-7 zigzag">
                <img src="{{ asset('assets/images/footer/c4.png')}}" alt="footer">
            </div>
        </div>
        <div class="newslater-wrapper">
            <div class="container">
                <div class="newslater-area">
                    <div class="newslater-thumb">
                        <img src="{{ asset('assets/images/footer/newslater.png')}}" alt="footer">
                    </div>
                    <div class="newslater-content">
                        <div class="section-header left-style mb-low" data-aos="fade-down" data-aos-duration="1100">
                            <h5 class="cate">Subscribe to OnlineBid</h5>
                            <h3 class="title">To Get Exclusive Benefits</h3>
                        </div>
                        <form class="subscribe-form">
                            <input type="text" placeholder="Enter Your Email" name="email">
                            <button type="submit" class="custom-button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top padding-bottom padding-top">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1000">
                        <div class="footer-widget widget-links">
                            <h5 class="title">Auction Categories</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0">Ending Now</a>
                                </li>
                                <li>
                                    <a href="#0">Vehicles</a>
                                </li>
                                <li>
                                    <a href="#0">Watches</a>
                                </li>
                                <li>
                                    <a href="#0">Electronics</a>
                                </li>
                                <li>
                                    <a href="#0">Real Estate</a>
                                </li>
                                <li>
                                    <a href="#0">Jewelry</a>
                                </li>
                                <li>
                                    <a href="#0">Art</a>
                                </li>
                                <li>
                                    <a href="#0">Sports & Outdoor</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1300">
                        <div class="footer-widget widget-links">
                            <h5 class="title">About Us</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0">About OnlineBid</a>
                                </li>
                                <li>
                                    <a href="#0">Help</a>
                                </li>
                                <li>
                                    <a href="#0">Affiliates</a>
                                </li>
                                <li>
                                    <a href="#0">Jobs</a>
                                </li>
                                <li>
                                    <a href="#0">Press</a>
                                </li>
                                <li>
                                    <a href="#0">Our blog</a>
                                </li>
                                <li>
                                    <a href="#0">Collectors' portal</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1600">
                        <div class="footer-widget widget-links">
                            <h5 class="title">We're Here to Help</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0">Your Account</a>
                                </li>
                                <li>
                                    <a href="#0">Safe and Secure</a>
                                </li>
                                <li>
                                    <a href="#0">Shipping Information</a>
                                </li>
                                <li>
                                    <a href="#0">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#0">Help & FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1800">
                        <div class="footer-widget widget-follow">
                            <h5 class="title">Follow Us</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0"><i class="fas fa-phone-alt"></i>(+61) 987654321</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-blender-phone"></i>(+61) 987654321</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-envelope-open-text"></i><span class="__cf_email__" data-cfemail="f69e939a86b693989199829e939b93d895999b">[email&#160;protected]</span></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-location-arrow"></i>123 Abc Suite</a>
                                </li>
                            </ul>
                            <ul class="social-icons">
                                <li>
                                    <a href="#0" class="active"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-area">
                    <div class="footer-bottom-wrapper">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('assets/images/logo/footer-logo.png')}}" alt="logo"></a>
                        </div>
                        <ul class="gateway-area">
                            <li>
                                <a href="#0"><img src="{{ asset('assets/images/footer/paypal.png')}}" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="{{ asset('assets/images/footer/visa.png')}}" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="{{ asset('assets/images/footer/discover.png')}}" alt="footer"></a>
                            </li>
                            <li>
                                <a href="#0"><img src="{{ asset('assets/images/footer/mastercard.png')}}" alt="footer"></a>
                            </li>
                        </ul>
                        <div class="copyright"><p>&copy; Copyright 2024 | <a href="#0">OnlineBid</a> By <a href="#0">Octagen</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->



    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/js/aos.js')}}"></script>
    <script src="{{ asset('assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('assets/js/waypoints.js')}}"></script>
    <script src="{{ asset('assets/js/nice-select.js')}}"></script>
    <script src="{{ asset('assets/js/counterup.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.min.js')}}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/yscountdown.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>

