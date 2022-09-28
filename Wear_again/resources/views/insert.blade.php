
@extends('layout.master')
@section('title', 'Add Product')
@section('content')
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Add Product</span></p>
					</div>
				</div>
			</div>
		</div>


		@if (count($errors) > 0)
		<div class = "alert alert-danger">
		   <ul>
			  @foreach ($errors->all() as $error)
				 <li>{{ $error }}</li>
			  @endforeach
		   </ul>
		</div>
	 @endif
		
		<div class="colorlib-product">
			<div class="container">

				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-md-12 pills">
								<div class="bd-example bd-example-tabs">
									<form action="{{url('/product')}}" method="POST" class="colorlib-form" enctype="multipart/form-data">
										@csrf
								  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

								    <li class="nav-item">
								      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true"><i class="fa-solid fa-1"></i> - Add Your Image</a>
								    </li>
								    <li class="nav-item">
								      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true"><i class="fa-solid fa-2"></i> - Choose Category</a>
								    </li>
								    <li class="nav-item">
								      <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true"><i class="fa-solid fa-3"></i> - Add Information</a>
								    </li>
								  </ul>

								  <div class="tab-content" id="pills-tabContent">
								    <div class="tab-pane border fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
										
														
															<h2>Add Your Image</h2>
														  <div class="row">
														   <div class="col-md-6">
															<div class="form-group">
																<label for="fname"> Image</label>
																<input type="file" multiple class="form-control" name="image" accept="image/*">
															</div>
														   </div>
														
											
								    </div>
								  </div>

								    <div class="tab-pane border fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
										
											<h2>Add Your Category</h2>
										  <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="category">Category</label>
												   <div class="form-field">
													   <i class="icon icon-arrow-down3"></i>
													  <select name="category" id="people" class="form-control">
															<option value="#">Select category</option>
															@foreach ($category as $category)
															<option value="{{$category->id}}">{{$category->name}}</option>
															@endforeach
														  
												
													  </select>
												   </div>
												</div>
											</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="subcategory">Subcategory</label>
													   <div class="form-field">
														   <i class="icon icon-arrow-down3"></i>
														  <select name="subcategory" id="people" class="form-control">
																<option value="">Select subcategory</option>
																@foreach ($subcategory as $subcategory)
																<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
																@endforeach
														  </select>
													   </div>
													</div>
										   </div>
									   </div>
										
								    </div>

								    <div class="tab-pane border fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
										
											<h2>Add Your Information</h2>
										  <div class="row">
										    <div class="col-md-6">
												<div class="form-group">
													<label for="fname"> Name</label>
													<input type="text" id="fname" class="form-control"  name="name">
												</div>
												
											   </div>
					
													<div class="col-md-6">
														<div class="form-group">
															<label for="lname">Description</label>
															<textarea  class="form-control" name="description" id="" cols="30" rows="10"></textarea>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="Price">Price</label>
															<input type="text" id="Price" class="form-control" name="price">
														</div>
													</div>
					
													<div class="col-md-6">
														<div class="form-group">
															<label for="country">Condition</label>
														   <div class="form-field">
															   <i class="icon icon-arrow-down3"></i>
															  <select name="condition" id="people" class="form-control">
																	<option value="#">Select condition</option>
																  <option value="Brand New">Brand New</option>
																  <option value="Like New">Like New</option>
																  <option value="Used-Excellent">Used-Excellent</option>
																  <option value="Used-Good">Used-Good</option>
																
															  </select>
														   </div>
														</div>
											   </div>

											   <div class="col-md-12">
												<div class="form-group">
													<label for="Price">Size</label>
													<input type="text" id="Price" class="form-control" name="size">
												</div>
											</div>
											   <div class="col-sm-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
												</div>
											</div>
								    </div>
								  </div>
								</div>
									</form>
				         </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
		@endsection
