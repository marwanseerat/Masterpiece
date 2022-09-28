@extends('layout.master')

@section('title', 'Home')
@section('content')
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	{{-- <li style="background-image: url(images/slide-04.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Men's</h1>
					   					<h2 class="head-2">Shoes</h2>
					   					<h2 class="head-3">Collection</h2>
					   					<p class="category"><span>New trending shoes</span></p>
					   					<p><a href="#" class="btn btn-primary">Shop Collection</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li> --}}
			   	{{-- <li style="background-image: url(images/slide-03.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Huge</h1>
					   					<h2 class="head-2">Sale</h2>
					   					<h2 class="head-3"><strong class="font-weight-bold">50%</strong> Off</h2>
					   					<p class="category"><span>Big sale sandals</span></p>
					   					<p><a href="#" class="btn btn-primary">Shop Collection</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li> --}}
			   	<li style="background-image: url(images/hero.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-left slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">BUY. SELL.</h1>
					   					<h2 class="head-1">DO IT ALL OVER.</h2>
					   					<h5 class="head-6" style="color: #fff">Welcome to the community-powered circular fashion marketplace.</h5>
					   					<p><a href="#" class="btn btn-primary">Shop Now</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h3 class="intro">It started with a simple idea: Create quality, well-designed products that I wanted myself.</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="colorlib-product">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="#" class="featured-img" style="background-image: url(images/men1.jpg); background-position:center center;"></a>
							<div class="desc">
								<h2><a href="/men">Shop Men's Collection</a></h2>
							</div>
						</div>
					</div>
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="/women" class="featured-img" style="background-image: url(images/women2.jpg); background-position:center center;"></a>
							<div class="desc">
								<h2><a href="#">Shop Women's Collection</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		{{-- <div class="top_catagory_area section-padding-80 clearfix">
			<div class="container">
				<div class="row justify-content-center">
					<!-- Single Catagory -->
					<div class="col-12 col-sm-6 col-md-4">
						<div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(images/bg-2.jpg); height: 30vh;">
							<div class="catagory-content">
								<a href="#">Clothing</a>
							</div>
						</div>
					</div>
					<!-- Single Catagory -->
					<div class="col-12 col-sm-6 col-md-4">
						<div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(images/bg-3.jpg);height: 30vh;">
							<div class="catagory-content">
								<a href="#">Shoes</a>
							</div>
						</div>
					</div>
					<!-- Single Catagory -->
					<div class="col-12 col-sm-6 col-md-4">
						<div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(images/bg-4.jpg);height: 30vh;">
							<div class="catagory-content">
								<a href="#">Accessories</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}

		<div class="colorlib-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
						<h2>Popular Products</h2>
					</div>
				</div>
				<div class="row row-pb-md">
					@foreach ($product as $item)
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="productD/{{$item->id}}" class="prod-img">
								<img src="images/product/{{$item->image}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">{{$item->name}}</a></h2>
								<span class="price">JD{{$item->price}}</span>
							</div>
						</div>
					</div>
					@endforeach
					<div class="w-100"></div>
				</div>
			</div>
		</div>
	
		

@endsection

