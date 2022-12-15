<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Smaster shop</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    @livewireStyles

</head>
<body class="home-page home-01">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->{{--}}
	<header id="header" class="header" header-style-1 style="background-color: #094943"> <!--class="header header-style-1" -->
		<div class="container-fluid" style="background-color: #094943">
			<div class="row">
				<div class="topbar-menu-area" style="background-color: #094943">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul><!--
								<li class="menu-item" >
									<a title="Hotline: (+971)58 572 9822" href="#" >
                                        <span class="icon label-before fa fa-mobile"></span>
                                        Hotline: (+971)58 572 9822
                                    </a>
								</li>-->
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item" ><a title="Register or Login" href="login.html">Login</a></li>
								<li class="menu-item" ><a title="Register or Login" href="register.html">Register</a></li>
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="Arabic" href="#"><span class="img label-before"></span>Arabic</a></li>
										<li class="menu-item" ><a title="Chinese" href="#"><span class="img label-before"></span>Chinese</a></li>
										<li class="menu-item" ><a title="Russian" href="#"><span class="img label-before"></span>Russian</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Dhilam (AED)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Pound (GBP)" href="#">Dollar (USD)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Yen (Z)</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area" style="background-color: #094943">

						<div class="wrap-logo-top left-section">
                        <a href="{{'/'}}" class="link-to-home"><img src="{{ asset('assets/img/icon-img/LOGO ICON-1.png') }}" alt="" width="100px" height="100px"></a>
						</div>

                        @livewire('header-search-component')

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									<!--<i class="fa fa-heart" aria-hidden="true"></i>-->
                                    <i><img src="{{ asset('assets/img/icon-img/1652866787882_TRACE ORDER ICON.png') }}"
                                         alt="" width="50px" height="50px"></i>
									<div class="left-info">
										<span class="index">0 item</span>
										<span class="title">trace</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section minicart">

								<a href="/cart" class="link-direction">
									<!--<i class="fa fa-shopping-basket" aria-hidden="true"></i>-->
                                    <i><img src="{{ asset('assets/img/icon-img/CART ICON.png') }}" alt="" width="50px" height="50px"></i>
									<div class="left-info">
										<span class="index">
                                            @auth
                                            {{Cart::session(auth()->id())->getContent()->count()}}
                                            @else
                                            0
                                            @endauth
                                            items</span>
										<span class="title">CART</span>
									</div>
								</a>

							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section " style="background-color: #094943">
                    <!--
					<div class="header-nav-section">
						<div class="container">
							<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
								<li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top rated items</a><span class="nav-label hot-label">hot</span></li>
							</ul>
						</div>
					</div>-->

					<div class="primary-nav-section" style="background-color: #094943">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item "><!--home-icon-->
									<a href="/shop" class="link-term mercado-item-title"><!--<i class="fa fa-home" aria-hidden="true"></i> was inside link-->
                                        <img src="{{ asset('assets/img/icon-img/1652866836159_SHOP ICON.png') }}" alt=""
                                        width="60px" height="70px">
                                    </a>
                                </li>
								<li class="menu-item">
									<a href="/home" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/1653158099019_HOME ICON.png') }}" alt=""
                                         width="60px" height="60px">
                                    </a>
								</li>
								<li class="menu-item">
                                    <a href="/super" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/1653158120074_GROCERY ICON.png') }}" alt=""
                                         width="60px" height="60px">
                                    </a>
								</li>
								<li class="menu-item">
                                    <a href="/live" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/1652866796814_LIVE ICON.png') }}" alt=""
                                         width="60px" height="60px">
                                    </a>
								</li>
								<li class="menu-item">
                                    <a href="/ancient" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/1652885571483_ANCIENT ICON.png') }}" alt=""
                                        width="60px" height="60px">
                                    </a>
								</li>
								<li class="menu-item">
                                    <a href="/auctions" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/1653157948772_AUCTION ICON.png') }}" alt=""
                                        width="60px" height="60px">
                                    </a>
								</li>
                                <li class="menu-item">
                                    <a href="/realestate" class="link-term mercado-item-title">
                                         <img src="{{ asset('assets/img/icon-img/1652866802752_REAL ESTATE ICON.png') }}" alt=""
                                         width="60px" height="60px">
                                    </a>
								</li>
                                <li class="menu-item">
                                    <a href="/luxury" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/luxury_coin_icon.png') }}" alt=""
                                         width="60px" height="60px">
                                    </a>
								</li>
                                <li class="menu-item">
                                    <a href="/discover" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/1653158177121_DISCOVER LOVE ICON.png') }}" alt=""
                                        width="60px" height="60px">
                                    </a>
								</li>
                                <li class="menu-item">
                                    <a href="/member" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/MEMBER ICON.png') }}" alt=""
                                         width="60px" height="60px"></a>
                                    </a>
								</li>
                                <li class="menu-item">
                                    <a href="/smasterway" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/1652866058166_SMASTR WAY ICON.png') }}" alt=""
                                        width="60px" height="60px">
                                    </a>
								</li>
                                <li class="menu-item">
                                    <a href="/smasterspace" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/SMASTER SPACE ICON.png') }}" alt=""
                                        width="60px" height="60px">
                                    </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>--}}
    <!--end of header-->
    	<!--header-->
	<header id="header" class="header header-style-1" style="background-color: #094943">
		<div class="container-fluid" style="background-color: #094943">
			<div class="row">
				<div class="topbar-menu-area" style="background-color: #094943">
					<div class="container">
						<div class="topbar-menu left-menu">
                            <!--
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
								</li>
							</ul>-->
						</div>
                        <div class="topbar-menu ">
                            <!-- smaster heading here--
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
								</li>
							</ul>-->
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="Arabic" href="#"><span class="img label-before"></span>Arabic</a></li>
										<li class="menu-item" ><a title="Chinese" href="#"><span class="img label-before"></span>Chinese</a></li>
										<li class="menu-item" ><a title="Russian" href="#"><span class="img label-before"></span>Russian</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dhilam (AED)" href="#">Dhilam (AED)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Yen (Y)" href="#">Yen (Y)</a>
										</li>
										<li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
									</ul>
								</li>
								@if(Route::has('login'))
									@auth
										@if(Auth::user()->utype === 'ADM')
											<li class="menu-item menu-item-has-children parent" >
												<a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
													</li>

													<li class="menu-item">
														<a title="Categories" href="{{ route('admin.categories') }}">Categories</a>
													</li>

													<li class="menu-item">
														<a title="Products" href="{{route('admin.products')}}">All Products</a>
													</li>

													<li class="menu-item">
														<a title="Manage Home Slider" href="{{route('admin.homeslider')}}">Manage Home Slider</a>
													</li>

													<li class="menu-item">
														<a title="Manage Home Categories" href="{{route('admin.homecategories')}}"> Manage Home Categories</a>
													</li>

                                                    <li class="menu-item">
														<a title="Home Sales' setting" href="{{route('admin.sale')}}"> Home Sales' setting</a>
													</li>

													<li class="menu-item">
														<a title="All Coupons" href="{{route('admin.coupons')}}">All Coupon</a>
													</li>

													<li class="menu-item">
														<a title="All Orders" href="{{route('admin.orders')}}">All Orders</a>
													</li>

													<li class="menu-item">
														<a title="Settings" href="{{route('admin.settings')}}">Settings</a>
													</li>

													<li class="menu-item">
														<a title="Contact Messages" href="{{route('admin.contact')}}">Contact Messages</a>
													</li>

													<li class= "menu-item">
														<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
													</li>

													<form id="logout-form" method="POST" action="{{ route('logout') }}">
													@csrf
													</form>
												</ul>
											</li>
										@else
											<li class="menu-item menu-item-has-children parent" >
												<a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
													</li>
													<li class="menu-item" >
														<a title="My orders" href="{{ route('user.orders') }}">My Orders</a>
													</li>
													<li class="menu-item" >
														<a title="Change password" href="{{ route('user.changepassword') }}">Change Password</a>
													</li>
													<li class= "menu-item">
														<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
													</li>

													<form id="logout-form" method="POST" action="{{ route('logout') }}">
													@csrf
													</form>
												</ul>
											</li>
										@endif
									@else
										<li class="menu-item" ><a title="Login to your Account" href="{{ route('login') }}">Login</a></li>
										<li class="menu-item" ><a title="Register & create Account" href="{{ route('register') }}">Register</a></li>
									@endif
								@endif
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area" style="background-color: #094943">

						<div class="wrap-logo-top left-section">
							<a href="/" class="link-to-home"><img src="{{ asset('assets/img/icon-img/logo_esmaster_3.png') }}" alt="" width="700px" height="100px"></a>
						</div>

						@livewire('header-search-component')

						<div class="wrap-icon right-section">
							@livewire('wishlist-count-component')

							@livewire('cart-count-component')

							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section " style="background-color: #094943"><!--header-sticky removed-->

					<div class="primary-nav-section" style="background-color: #094943">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item "><!--home-icon-->
									<a href="/shop" class="link-term mercado-item-title"><!--<i class="fa fa-home" aria-hidden="true"></i> was inside link-->
                                        <img src="{{ asset('assets/img/icon-img/1652866836159_SHOP ICON.png') }}" alt=""
                                        width="60px" height="70px">
                                    </a>
                                </li>
								<li class="menu-item">
									<a href="/" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/1653158099019_HOME ICON.png') }}" alt=""
                                         width="60px" height="60px">
                                    </a>
								</li>
								<li class="menu-item">
                                    <a href="/super" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/1653158120074_GROCERY ICON.png') }}" alt=""
                                         width="60px" height="60px">
                                    </a>
								</li>
								<li class="menu-item">
                                    <a href="/live" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/1652866796814_LIVE ICON.png') }}" alt=""
                                         width="60px" height="60px">
                                    </a>
								</li>
								<li class="menu-item">
                                    <a href="/ancient" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/1652885571483_ANCIENT ICON.png') }}" alt=""
                                        width="60px" height="60px">
                                    </a>
								</li>
								<li class="menu-item">
                                    <a href="/auctions" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/1653157948772_AUCTION ICON.png') }}" alt=""
                                        width="60px" height="60px">
                                    </a>
								</li>
                                <li class="menu-item">
                                    <a href="/realestate" class="link-term mercado-item-title">
                                         <img src="{{ asset('assets/img/icon-img/1652866802752_REAL ESTATE ICON.png') }}" alt=""
                                         width="60px" height="60px">
                                    </a>
								</li>
                                <li class="menu-item">
                                    <a href="/luxury" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/lUXURY ICON_new.png') }}" alt=""
                                         width="60px" height="60px">
                                    </a>
								</li>
                                <li class="menu-item">
                                    <a href="/discover" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/DISCOVER LOVE ICON_new.png') }}" alt=""
                                        width="60px" height="60px">
                                    </a>
								</li>
                                <li class="menu-item">
                                    <a href="/member" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/MEMBER ICON_new.png') }}" alt=""
                                         width="60px" height="60px"></a>
                                    </a>
								</li>
                                <li class="menu-item">
                                    <a href="/smasterway" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/SMASTR WAY ICON_new.png') }}" alt=""
                                        width="60px" height="60px">
                                    </a>
								</li>
                                <li class="menu-item">
                                    <a href="/smasterspace" class="link-term mercado-item-title">
                                        <img src="{{ asset('assets/img/icon-img/SMASTER SPACE ICON_new.png') }}" alt=""
                                        width="60px" height="60px">
                                    </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>



    <!----------- Main Page content section -------->
    @yield('content')



    <!-- start of footer-->
	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Free Shipping</h4>
								<p class="fc-desc">Free On Oder Over $99</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Guarantee</h4>
								<p class="fc-desc">30 Days Money Back</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Safe Payment</h4>
								<p class="fc-desc">Safe your online payment</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Online Suport</h4>
								<p class="fc-desc">We Have Support 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contact Details</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">&nbsp;229, Block B, Al Shafa Investment Building
                                                    <br>Sheikh Zayed Road,
                                                    <br>Dubai, United Arab Emirates</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">+971-58-572-9822 &
                                                    +971-55-669-0929</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">smasterbtb@gmail.com
                                                    <br>sales@smaster.live</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header">Hot Line</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Call Us On</span>
										<b class="phone-number">+971-58-572-9822
									</div>
								</div>
							</div>

							<div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">Sign up for newsletter</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
											<button class="btn-submit">Subscribe</button>
										</form>
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">My Account</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">My Account</a></li>
												<li class="menu-item"><a href="#" class="link-term">Brands</a></li>
												<li class="menu-item"><a href="#" class="link-term">Gift Certificates</a></li>
												<li class="menu-item"><a href="#" class="link-term">Affiliates</a></li>
												<li class="menu-item"><a href="#" class="link-term">Wish list</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">Infomation</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">Contact Us</a></li>
												<li class="menu-item"><a href="#" class="link-term">Returns</a></li>
												<li class="menu-item"><a href="#" class="link-term">Site Map</a></li>
												<li class="menu-item"><a href="#" class="link-term">Specials</a></li>
												<li class="menu-item"><a href="#" class="link-term">Order History</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">We Using Safe Payments:</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="{{ asset('assets/images/payment.png') }}" style="max-width: 260px;">
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Social network</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
                        {{--
						<!--apps download section--
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Dowload App</h3>
								<div class="item-content">
									<div class="wrap-list-item apps-list">
										<ul>
											<li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="{{ asset('ssets/images/brands/apple-store.png') }}" alt="apple store" width="128" height="36"></figure></a></li>
											<li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="{{ asset('ssets/images/brands/google-play-store.png') }}" alt="google play store" width="128" height="36"></figure></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div> -->--}}

					</div>
				</div>
				<!-- quick links--
				<div class="wrap-back-link">
					<div class="container">
						<div class="back-link-box">
							<h3 class="backlink-title">Quick Links</h3>
							<div class="back-link-row">
								<ul class="list-back-link" >
									<li><span class="row-title">Mobiles:</span></li>
									<li><a href="#" class="redirect-back-link" title="mobile">Mobiles</a></li>
									<li><a href="#" class="redirect-back-link" title="yphones">YPhones</a></li>
									<li><a href="#" class="redirect-back-link" title="Gianee Mobiles GL">Gianee Mobiles GL</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Karbonn">Mobiles Karbonn</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Viva">Mobiles Viva</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Intex">Mobiles Intex</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Micrumex">Mobiles Micrumex</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Bsus">Mobiles Bsus</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Samsyng">Mobiles Samsyng</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Lenova">Mobiles Lenova</a></li>
								</ul>

								<ul class="list-back-link" >
									<li><span class="row-title">Tablets:</span></li>
									<li><a href="#" class="redirect-back-link" title="Plesc YPads">Plesc YPads</a></li>
									<li><a href="#" class="redirect-back-link" title="Samsyng Tablets" >Samsyng Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Qindows Tablets" >Qindows Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Calling Tablets" >Calling Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Micrumex Tablets" >Micrumex Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Lenova Tablets Bsus" >Lenova Tablets Bsus</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets iBall" >Tablets iBall</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets Swipe" >Tablets Swipe</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets TVs, Audio" >Tablets TVs, Audio</a></li>
								</ul>

								<ul class="list-back-link" >
									<li><span class="row-title">Fashion:</span></li>
									<li><a href="#" class="redirect-back-link" title="Sarees Silk" >Sarees Silk</a></li>
									<li><a href="#" class="redirect-back-link" title="sarees Salwar" >sarees Salwar</a></li>
									<li><a href="#" class="redirect-back-link" title="Suits Lehengas" >Suits Lehengas</a></li>
									<li><a href="#" class="redirect-back-link" title="Biba Jewellery" >Biba Jewellery</a></li>
									<li><a href="#" class="redirect-back-link" title="Rings Earrings" >Rings Earrings</a></li>
									<li><a href="#" class="redirect-back-link" title="Diamond Rings" >Diamond Rings</a></li>
									<li><a href="#" class="redirect-back-link" title="Loose Diamond Shoes" >Loose Diamond Shoes</a></li>
									<li><a href="#" class="redirect-back-link" title="BootsMen Watches" >BootsMen Watches</a></li>
									<li><a href="#" class="redirect-back-link" title="Women Watches" >Women Watches</a></li>
								</ul>

							</div>
						</div>
					</div>
				</div>-->

			</div>

			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2022 Smaster LLC. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>
								<li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
								<li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>
								<li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
     <!--end of footer-->

               {{--display success message--}}
               @if(session()->has('message'))
               <div class="alert alert-success" role="alert">
                   {{session('message')}}
               </div>
               @endif

               {{--display error message--}}
               @if(session()->has('error'))
               <div class="alert alert-danger" role="alert">
                   {{session('error')}}
               </div>
               @endif

	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
    @livewireScripts
</body>
</html>


{{--<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Esmaster Shop Online</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/logo/logo_esmaster_1.png">

    <!-- all css here -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/assets/css/icofont.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="/assets/css/bundle.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

    @livewireStyles

    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header start -->
    <!--Notification Section-->
    <!--
    <div class="notification-section notification-section-padding  notification-img ptb-10">
        <div class="container-fluid">
            <div class="notification-wrapper">
                <div class="notification-pera-graph">
                    <p>Get A big Discount for Gadgets. 10% to 70% Discount for all products. Save money</p>
                </div>
                <div class="notification-btn-close">
                    <div class="notification-btn">
                        <a href="#">Shop Now</a>
                    </div>
                    <div class="notification-close notification-icon">
                        <button><i class="pe-7s-close"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <header style="background-color: #094943">
        <div class="container-fluid cont_color">
                <div class="header-top-wrapper-22 border-bottom-21">
                    <div class="header-info-wrapper22 pl-200 pr-200">
                        <div class="logo-321">
                            <a href="{{route('home')}}">
                                <img src="/assets/img/icon-img/LOGO ICON-1.png" alt="" width="100px" height="100px">
                            </a>
                        </div>
                        <div class="header-contact-info22">
                            <ul>
                                <!--<i class="pe-7s-call"></i>-->
                                <li>
                                    <!--
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        English
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button">French</button>
                                        <button class="dropdown-item" type="button">Arabic</button>
                                        <button class="dropdown-item" type="button">Chinese</button>
                                        </div>
                                    </div>-->
                                <!-- added nav-->
                                        @if(count(config('app.languages')) > 1)
                                        <li class="nav-item dropdown d-md-down-none">
                                            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                                {{ strtoupper(app()->getLocale()) }}
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                @foreach(config('app.languages') as $langLocale => $langName)
                                                    <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                                                @endforeach
                                            </div>

                                        </li>
                                    @endif
                                </li>
                                <!--<li><i class="pe-7s-mail"></i> <a href="#">Contact us</a></li>-->
                            <!-- <li> <a href="#"><img src="/assets/img/icon-img/contact.jpg" alt="" width="30px" height="30px">Contact us</a></li>-->
                            </ul>

                        </div>
                        <div class="smaster-heading22">
                            <div class="container">
                                <div class="row">
                                <div class="col-lg-12">
                                <!-- <img src="/assets/img/icon-img/1652885545423_BE SHOPPING MASTER ICON.png" alt="" width="300px" height="100px"> -->
                                <h4><img src="/assets/img/icon-img/1652885571483_ANCIENT ICON.png" alt="" width="60px" height="60px">ANCIENT COLLECTION</h4>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4 col-sm-12">-->
                        <div class="electronics-login-register22">
                            <ul>
                                <!--<li><a href="#"><i class="pe-7s-users"></i>My Account</a></li>-->
                                <!--<li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i class="pe-7s-repeat"></i>Compare</a></li>-->
                                <!--<li><a href="wishlist.html"><i class="pe-7s-like"></i>Wishlist</a></li>-->
                                <!--<li><a href="#"><i class="pe-7s-flag"></i>US</a></li>-->
                                <!--<li><a class="border-none" href="#"><span>$</span>USD</a></li>-->
                                <!--<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">-->


                                    <!--<li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline"><i class="pe-7s-users"></i>Login</a></li>-->

                                    <div class="trace-cart-wrapper22">
                                        <div class="trace same-style22">
                                            <div class="same-style-icon22">
                                                <!--<a href="#"><i class="pe-7s-plane"></i></a>-->
                                                <a href="#"><img src="/assets/img/icon-img/1652866847812_SIGN IN ICON.png" alt="" width="50px" height="50px"> Signin</a>
                                            </div>
                                            <!--
                                            <div class="same-style-text">
                                                <a href="#">Signin </a>
                                            </div>-->
                                        </div>
                                        <div class="trace same-style22">
                                            <div class="same-style-icon22">
                                                <!--<a href="#"><i class="pe-7s-plane"></i></a>-->
                                                <a href="#"><img src="/assets/img/icon-img/1652866787882_TRACE ORDER ICON.png" alt="" width="50px" height="50px">Trace</a>
                                            </div><!--
                                            <div class="same-style-text">
                                                <a href="#">trace</a>
                                            </div>-->
                                        </div>
                                        <div class="categories-cart same-style22">
                                            <div class="same-style-icon22">
                                                <!--<a href="#"><i class="pe-7s-cart"></i></a>-->
                                                <a href="#"><img src="/assets/img/icon-img/CART ICON.png" alt="" width="50px" height="50px"></a>
                                            </div>
                                            <div class="same-style-text22">
                                                <a href="/cart"> Cart <br>

                                                    @auth
                                                    {{Cart::session(auth()->id())->getContent()->count()}}
                                                    @else
                                                    0
                                                    @endauth

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </ul>

                            </div>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>

        </div>
        <div class="header-bottom22 clearfix">
            <div class="header-bottom-wrapper22 pr-200 pl-200">

                            <div class="col-lg-12 col-sm-9 col-md-9">
                                <div id="" class="subscribe-form-4 ">
                                    <form action="{{route('products.search')}}" method="GET">
                                        <div id="" class="mc-form">
                                            <input name="query" placeholder="I am Searching for . . ." type="text">
                                            <div class="mc-news" aria-hidden="true">
                                                <input type="text" name="" tabindex="-1" value="">
                                            </div>
                                            <div class="clear">
                                                <input type="submit" class="button">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

            </div>
        </div>
        <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
            <div class="mobile-menu">
                <nav id="mobile-menu-active">
                    <ul class="menu-overflow">

                <li><a href="#">HOME <i class="pe-7s-angle-down"></i></a>
                    <ul class="single-dropdown">
                        <li><a href="{{ route('about.us') }}">About us</a></li>
                        <li><a href="{{ route('about.new_projects') }}">New projects</a></li>
                        <li><a href="{{ route('about.membership') }}">Be Smaster Member</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('realestate.index') }}">Real Estate</a></li>
                <li><a href="/auctions">AUCTIONS <span class="sticker-new">hot</span></a></li>
                <li><a href="#">ESMASTER WAY<i class="pe-7s-angle-down"></i> <span class="sticker-new">new</span> </a>
                    <ul class="single-dropdown">
                        <li><a href="#">Insurance</a></li>
                        <li><a href="#">Procurement Consultancy</a></li>
                        <li><a href="#">Marketing Public Relations</a></li>
                        <li><a href="#">Solar Systems</a></li>
                    </ul>
                </li>
                <li><a href="#">LUXURY <i class="pe-7s-angle-down"></i> </a>
                    <ul class="single-dropdown">
                        <li><a href="{{ route('luxury.car_ceramics_coating') }}">Car Ceramic Coating</a></li>
                        <li><a href="{{ route('luxury.watch_coating') }}">Watch Coating</a></li>
                        <li><a href="{{ route('luxury.customizations') }}">Customizations</a></li>
                    </ul>
                </li>
                <li><a href="#">EVENTS <i class="pe-7s-angle-down"></i> </a>
                    <ul class="single-dropdown">
                        <li><a href="{{ route('events.live_auctions') }}">Live Auctions</a></li>
                        <li><a href="{{ route('events.videos') }}">Videos</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact.index') }}">CONTACT </a>

                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- header end -->


    <!-- content section -->
     @yield('content')


    <footer class="footer-area">
        <div class="footer-top-3 black-bg pt-75 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xl-4">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3">Contact Us</h3>
                            <div class="footer-info-wrapper-2">
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span>Address: </span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p> &nbsp;229, Block B, Al Shafa Investment Building
                                            <br>Sheikh Zayed Road,
                                            <br>Dubai, United Arab Emirates
                                        </p>
                                    </div>
                                </div>
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span>Phone:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p>+971-58-572-9822  <br>
                                            +971-55-669-0929</p>
                                    </div>
                                </div>
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span>Email:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p><a href="#">smasterbtb@gmail.com</a>
                                            <br><a href="#">info@smaster.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3">information</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="login.html">About Us</a></li>
                                    <li><a href="cart.html">Become an affiliate member</a></li>
                                    <li><a href="checkout.html"> Vendor details</a></li>
                                    <li><a href="shop.html">Business formation licence</a></li>
                                    <li><a href="shop.html">Terms and Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-xl-2">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3">My Account</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="about-us.html">register</a></li>
                                    <li><a href="#">Create your Shop</a></li>
                                    <li><a href="#">Pricing Plan</a></li>
                                    <li><a href="#"> Vendor Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3">
                        <div class="footer-widget widget-right mb-40">
                            <h3 class="footer-widget-title-3">Services</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="#"> Discount Coupon Service</a></li>
                                    <li><a href="#">Auction Services</a></li>
                                    <li><a href="#">Online Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="footer-middle black-bg-2 pt-35 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-car"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3>Free Shipping</h3>
                                <p>Free Shipping on Bangladesh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-shield"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3>Money Guarentee</h3>
                                <p>Free Shipping on Bangladesh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-headphones"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3>Online Support</h3>
                                <p>Free Shipping in Dubai</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="footer-bottom  black-bg pt-25 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <div class="footer-menu">
                            <nav>
                                <ul>
                                    <li><a href="#">Privacy Policy </a></li>
                                    <li><a href="#">Help Center</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright f-right mrg-5">
                            <p>
                                Copyright ©
                                Smaster llc. All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- modal -->
    <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-compare-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#">
                        <div class="table-content compare-style table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <a href="#">Remove <span>x</span></a>
                                            <img src="assets/img/cart/4.jpg" alt="">
                                            <p>Blush Sequin Top </p>
                                            <span>$75.99</span>
                                            <a class="compare-btn" href="#">Add to cart</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Description </h4></td>
                                        <td class="compare-dec compare-common">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Sku </h4></td>
                                        <td class="product-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Availability  </h4></td>
                                        <td class="compare-stock compare-common">
                                            <p>In stock</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Weight   </h4></td>
                                        <td class="compare-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Dimensions   </h4></td>
                                        <td class="compare-stock compare-common">
                                            <p>N/A</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>brand   </h4></td>
                                        <td class="compare-brand compare-common">
                                            <p>esmaster</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>color   </h4></td>
                                        <td class="compare-color compare-common">
                                            <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>size    </h4></td>
                                        <td class="compare-size compare-common">
                                            <p>XS, S, M, L, XL, XXL </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title"></td>
                                        <td class="compare-price compare-common">
                                            <p>$75.99 </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-quickview-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="qwick-view-left">
                        <div class="quick-view-learg-img">
                            <div class="quick-view-tab-content tab-content">
                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                    <img src="/assets/img/quick-view/l1.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="/assets/img/quick-view/l2.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="/assets/img/quick-view/l3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-list nav" role="tablist">
                            <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                <img src="/assets/img/quick-view/s1.jpg" alt="">
                            </a>
                            <a href="#modal2" data-toggle="tab" role="tab">
                                <img src="/assets/img/quick-view/s2.jpg" alt="">
                            </a>
                            <a href="#modal3" data-toggle="tab" role="tab">
                                <img src="/assets/img/quick-view/s3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="qwick-view-right">
                        <div class="qwick-view-content">

                            <h3>smaster product</h3>
                            <div class="price">
                                <span class="new">$ 7000</span>
                                <!--<span class="old">$120.00  </span>-->
                            </div>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur, aisicing elit. Earum sit molestias saepe,
                                ab non similique recusandae doloribus quis debitis maxime, culpa iusto?</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">900</option>
                                        <option value="">700</option>
                                    </select>
                                </div>
                                <div class="select-option-part">
                                    <label>Color*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">orange</option>
                                        <option value="">pink</option>
                                        <option value="">yellow</option>
                                    </select>
                                </div>
                            </div>
                            <!--
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                </div>
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="">add to cart</a>
                                </div>
                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

           {{--display success message
           @if(session()->has('message'))
           <div class="alert alert-success" role="alert">
               {{session('message')}}
           </div>
           @endif

           {{--display error message--
           @if(session()->has('error'))
           <div class="alert alert-danger" role="alert">
               {{session('error')}}
           </div>
           @endif




    <!-- all js here -->
    <script src="/assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/ajax-mail.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>

    @livewireScripts

</body>

</html>--}}
