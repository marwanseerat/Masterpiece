

{{-- @extends('layout.master')
@section('content') --}}


{{-- <div class="colorlib-product">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-8">
                <form  action="{{url('update/'.Auth::user()->id)}}" method="POST" class="colorlib-form">
                    @csrf
                    @method('PUT')
                    <h2>Billing Details</h2>
                  <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="companyname"> Name</label>
                            <input type="text" id="companyname" value="{{ Auth::user()->name }}" class="form-control"name="name">
                      </div>
                   </div>

                   <div class="col-md-12">
                            <div class="form-group">
                                <label for="fname">Address</label>
                            <input type="text" id="address" class="form-control"  name="address" value="{{ Auth::user()->address }}">
                      </div>
                      
                   </div>
                
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">E-mail Address</label>
                                <input type="text" id="email" class="form-control"  name="email" value="{{ Auth::user()->email }}">
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary" >Save changes</button>
                        </div>
               </div>
            </form>
            </div>
        </div>
    </div>
</div> --}}

{{-- @endsection --}}