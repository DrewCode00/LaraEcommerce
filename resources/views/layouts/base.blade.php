<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Smaster shop</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	{{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">--}}
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" integrity="sha512-WWc9iSr5tHo+AliwUnAQN1RfGK9AnpiOFbmboA0A0VJeooe69YR2rLgHw13KxF1bOSLmke+SNnLWxmZd8RTESQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.css" integrity="sha512-40vN6DdyQoxRJCw0klEUwZfTTlcwkOLKpP8K8125hy9iF4fi8gPpWZp60qKC6MYAFaond8yQds7cTMVU8eMbgA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    @livewireStyles
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
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
					<div class="mid-section main-info-area">

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

				<div class="nav-section "><!--header-sticky removed-->

					<div class="primary-nav-section">
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



    {{$slot}}

	@livewire('footer-component')

	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	{{-- <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script> --}}
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js" integrity="sha512-jWNpWAWx86B/GZV4Qsce63q5jxx/rpWnw812vh0RE+SBIo/mmepwOSQkY2eVQnMuE28pzUEO7ux0a5sJX91g8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.tiny.cloud/1/u739sx3kjt7rc1qocfgw99iatzlmq9wmp9lm42hxl5tvumvo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" integrity="sha512-Y+0b10RbVUTf3Mi0EgJue0FoheNzentTMMIE2OreNbqnUPNbQj8zmjK3fs5D2WhQeGWIem2G2UkKjAL/bJ/UXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @livewireScripts

	@stack('scripts')
</body>
</html>
