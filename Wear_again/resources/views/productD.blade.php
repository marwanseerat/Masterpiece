@extends('layout.master')
@section('title', 'Product-detail.')
@section('content')
	

<div class="colorlib-product">
	<div class="container">
		<div class="card-body">
			@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
			@endif
		</div>
		<div class="row row-pb-lg product-detail-wrap">
			<div class="col-sm-8">
				<div class="owl-carousel">
					<div class="item">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{URL::asset('/images/product/'.$product_details[0]->image)}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
						</div>
					</div>
					{{-- <div class="item">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="/images/product/{{$product_details[0]->image}}"
								 class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
						</div>
					</div> --}}
					<div class="item">
						{{-- <div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="images/item-3.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
						</div> --}}
					</div>
					{{-- <div class="item">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="images/item-4.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
						</div>
					</div> --}}
				</div>
			</div>
			
			<div class="col-sm-4">
				
						<!-- end row -->
						<div class="row">
								<div class="text-center card-box ml-5">
									<div class="member-card pt-1 pb-1">
										<div class="thumb-lg member-thumb mx-auto"><img src="https://st3.depositphotos.com/6672868/13701/v/450/depositphotos_137014128-stock-illustration-user-profile-icon.jpg" class="rounded-circle img-thumbnail" alt="profile-image" style="    height: 20vh;"></div>
										<div class="col-sm-12">
											<br>
											<h4>{{ $user->name }}</h4>
											<p class="text-muted">{{ $user->address}} <span>| </span><span><a href="#" class="text-pink">{{ $user->email }}</a></span></p>
										</div>
									</div>
								</div>
						</div>
						<hr>
							<!-- end col -->
				<div class="product-desc">
					<h3>{{$product_details[0]->name}}</h3>
					<p class="price">
						<span>JD {{$product_details[0]->price}}</span> 
						
					</p>
					<div class="w-100"></div>
					<p>{{$product_details[0]->description}}</p>
					<div class="size-wrap">
						<div class="block-29 mb-2">
							<h4>Size</h4>
					   <ul>
						  <li><a href="#">{{$product_details[0]->size}}</a></li>
					   </ul>
					</div>
					<div class="block-29 mb-4">
							<h4>Condition</h4>
					   <ul>
						  <li><a href="#">{{$product_details[0]->condition}}</a></li>
						  
					   </ul>
					</div>
					</div>
			 
			  <div class="row">
				  		<div class="col-sm-12 text-center">
							<p class="addtocart"><a href="/addToCart/{{$product_details[0]->id}}" class="btn btn-primary btn-addtocart p-2 w-100 "><i class="icon-shopping-cart"></i> Add to Cart</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	</div>
</div>

		@endsection

