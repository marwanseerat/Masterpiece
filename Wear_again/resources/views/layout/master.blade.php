@php
	$number;
	if (isset($_SESSION["number"])) {
		$number=$_SESSION["number"];
	}else{
		$number=0;
	}
@endphp

<!DOCTYPE HTML>
<html>
	<head>
	<title>Wear Again - @yield('title')</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
    {{-- <script src="https://kit.fontawesome.com/4a27207296.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> --}}
	{{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
	<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css ">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style copy.css')}}">

	</head>
	<body>
		
	{{-- <div class="colorlib-loader"></div> --}}

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="index.html">Wear again</a></div>
						</div>
						{{-- <div class="col-sm-5 col-md-3">
			            <form action="#" class="search-wrap">
			               <div class="form-group">
			                  <input type="search" class="form-control search" placeholder="Search">
			                  <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
			               </div>
			            </form>
			         </div> --}}
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li class="active"><a class="link" href="{{url('/')}}">Home</a></li>
								<li class="has-dropdown">
									<a class="link" href="{{url('/men')}}">Shop</a>
									<ul class="dropdown">
										<li><a href="{{url('/men')}}">Menswear</a></li>
										<li><a href="{{url('/women')}}">Womenswear</a></li>
										 {{-- <li><a href="product-detail.html">Product Detail</a></li>
										<li><a href="cart.html">Shopping Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="order-complete.html">Order Complete</a></li>
										<li><a href="add-to-wishlist.html">Wishlist</a></li>  --}}
									</ul>
								</li>
								{{-- <li><a href="women.html">Women</a></li> --}}
								<li><a class="link" href="{{url('/about')}}">About</a></li>
								<li><a class="link" href="{{url('/contact')}}">Contact</a></li>
								@if (Route::has('login'))
								@auth
								
									{{-- <li class="cart has-dropdown " >
										<a href="{{url('/home')}}">  <i class="material-icons">person</i></a>
										<ul class="dropdown">
											<li> <a  href="{{ route('logout') }}"
												onclick="event.preventDefault();
															  document.getElementById('logout-form').submit();">
												 {{ __('Logout') }}
											 </a>
		 
											 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
												 @csrf
											 </form>
											</li>
											<li><a href="{{url('/home')}}">Profile</a></li>
										</ul>
									</li> --}}

									<li class="nav-item dropdown cart">
										<a class="dropdown" href="{{url('/home')}}" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  <i class="material-icons">person</i>
										  <p class="d-lg-none d-md-block">
											Account
										  </p>
										</a>
										<div class="dropdown-menu dropdown-menu-right profil-section" aria-labelledby="navbarDropdownProfile" >
										  <a class="dropdown-item " href="{{url('/home')}}">Profile</a>
										  <a class="dropdown-item " href="{{ route('logout') }}"
										  onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
										   {{ __('Logout') }}
									   </a>
							
									   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										   @csrf
									   </form>
										</div>
									  </li>
								
								@else
								<li><a class="link" href="{{url('/login')}}">Login</a></li>
								<li><a class="link" href="{{url('/register')}}">Register</a></li>
								@endauth
								@endif
								<li class="cart" ><a href="{{url('/cart')}}"><i class="icon-shopping-cart"></i> Cart [{{$number}}]</a></li>

								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">Sell a few items or build your empire. </a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Find your style.</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>                            
@yield('content')


        
		<footer id="colorlib-footer" role="contentinfo" style="padding-left: 7%">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col footer-col colorlib-widget">
						<h4>About Wear Again</h4>
						<p>We specialize in collections and recycling of used clothes for men and women, Our aim is to make sure our goods meet every customers’ expectations.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="https://github.com/marwanseerat/Masterpiece" target="_blank"><i class="icon-github"></i></a></li>
								<li><a href="https://www.facebook.com/depop" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://www.linkedin.com/in/marwa-nseerat-971057227/" target="_blank"><i class="icon-linkedin"></i></a></li>
								<li><a href="https://www.instagram.com/depop/" target="_blank"><i class="icon-instagram"></i></a></li>
							</ul>
						</p>
					</div>
					{{-- <div class="col footer-col colorlib-widget">
						<h4>Customer Care</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Contact</a></li>
								<li><a href="#">Returns/Exchange</a></li>
								<li><a href="#">Gift Voucher</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Special</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Site maps</a></li>
							</ul>
						</p>
					</div> --}}
					<div class="col footer-col colorlib-widget " style="padding-left: 10%">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="/about">About us</a></li>
								<li><a href="/contact">Contact us</a></li>
								<li><a href="/men">Shop</a></li>
								<li><a href="/login">Login</a></li>
								<li><a href="/register">Register</a></li>
							</ul>
						</p>
					</div>

					{{-- <div class="col footer-col">
						<h4>News</h4>
						<ul class="colorlib-footer-links">
							<li><a href="blog.html">Blog</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Exhibitions</a></li>
						</ul>
					</div> --}}

					<div class="col footer-col">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>Fifth Area <br> Aqaba Jordan</li>
							<li><a href="tel://1234567920">+962 778090532</a></li>
							<li><a href="mailto:info@yoursite.com">wear_again@gmail.com</a></li>
							<li><a href="#">wearagain.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row" style="padding-right: 7%">
					<div class="col-sm-12 text-center">
						<p>
							<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |<i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Wear again</a>

						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
   <!-- popper -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	
	
	</body>
</html>