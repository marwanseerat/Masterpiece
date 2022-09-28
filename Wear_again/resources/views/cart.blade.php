@php
$total=0;

@endphp

@extends('layout.master')
@section('title', 'Cart')

@section('content')

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Shopping Cart</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="product-name d-flex">
							<div class="one-forth text-left px-4">
								<span>Product Details</span>
							</div>
							<div class="one-eight text-center">
								<span>Price</span>
							</div>
							
							<div class="one-eight text-center px-4" style="display: none;">
								<span>Remove</span>
							</div>
						</div>
						@foreach ($items as $item)
							@php
								$total+=$item->price;

							@endphp
						
						<div class="product-cart d-flex">
							<div class="one-forth">
								<img class="product-img" src="{{URL::asset('/images/product/'.$item->image)}}">
								
								<div class="display-tc">
									<h3>{{$item->name}}</h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">{{$item->price}}</span>
								</div>
							</div>
							
							<div class="one-eight text-center" style="display: none;">
								<div class="display-tc">
									<a href="#" class="closed"></a>
								</div>
							</div>
						</div>
						@endforeach
						
						
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="total-wrap">
							<div class="row">
							<div class="col-sm-6 text-center">
							</div>
								<div class="col-sm-6 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Subtotal:</span> <span>JD {{$total}}</span></p>
											<p><span>Delivery:</span> <span>JD 5.00</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Total:</strong></span> <span>JD {{$total+5}}</span></p>
										</div>
									</div>
									<br>
									<br>
								</div>
									<form action="/checkout" method="POST">
										@csrf
										<input type="hidden" value="{{$total}}" name='total'>
										<div class="form-group">
											<button type="submit" class="button button-login w-100">
											   Checkout
											</button>
										</div>
									</form>
									
								</div>
								
							</div>
						</div>
					</div>
				</div>

			
			</div>
		</div>

		@endsection
