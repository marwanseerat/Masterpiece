
@extends('layout.master')
@section('title', 'Checkout')
@section('content')
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Checkout</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-sm-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center active">
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
				<div class="row">
					<div class="col-lg-8">
						<form action="/order" method="post" class="colorlib-form">
							@csrf
							<input type="hidden" value="{{$total}}" name='subtotal'>
							
							<h2>Billing Details</h2>
		              	<div class="row">
			               

								<div class="col-md-12">
									<div class="form-group">
										<label for="fname"> Name</label>
										<input type="text" id="fname" value="{{ Auth::user()->name }}" class="form-control" >
									</div>
								</div>
								

								

			               <div class="col-md-12">
									<div class="form-group">
										<label for="fname">Address</label>
			                    	<input type="text" id="address" value="{{ Auth::user()->address }}"class="form-control" placeholder="Enter Your Address">
			                  </div>
			                  
			               </div>

								<div class="col-md-12">
									<div class="form-group">
										<label for="email">E-mail Address</label>
										<input type="text" id="email" value="{{ Auth::user()->email }}" class="form-control" placeholder="State Province">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="Phone">Phone Number</label>
										<input type="number" id="zippostalcode" class="form-control" placeholder="" name='phone'>
									</div>
								</div>

								{{-- <div class="col-md-12">
									<div class="form-group">
										<div class="radio">
										  <label><input type="radio" name="optradio"> Create an Account? </label>
										  <label><input type="radio" name="optradio"> Ship to different address</label>
										</div>
									</div>
								</div> --}}
		               </div>
		            
					</div>

					<div class="col-lg-4">
						<div class="row">
							<div class="col-md-12">
								<div class="cart-detail">
									<h2>Cart Total</h2>
									<ul>
										<li>
											<li class="d-flex justify-conent-between">
											<span>Subtotal</span> <span>JD {{$total}}</span></li>
											<li>
											<ul>
												@foreach ($items as $item)
												<li class="d-flex justify-conent-between"><span> JD {{$item->name}}</span> <span>JD {{$item->price}}</span></li>
												@endforeach
												
												
											</ul>
										</li>
										<li><span>Shipping</span> <span>JD 5.00</span></li>
										<li><span>Order Total</span> <span>{{$total +5}}</span></li>
									</ul>
								</div>
						   </div>

						   <div class="w-100"></div>

						   <div class="col-md-12">
								<div class="cart-detail">
									<h2>Payment Method</h2>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" value="bank"> Direct Bank Tranfer</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" value="check"> Check Payment</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio"  value="paypal"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" value=""> I have read and accept the terms and conditions</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<p><button type="submit" class="btn btn-primary">Place an order</button></p>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
		</div>

		@endsection
