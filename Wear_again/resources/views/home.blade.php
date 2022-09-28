@extends('layout.master')
@section('title', 'User Profile')

@section('content')

<div class="container profile-page">
    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="https://st3.depositphotos.com/6672868/13701/v/450/depositphotos_137014128-stock-illustration-user-profile-icon.jpg" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>{{ Auth::user()->name }}</strong></h4>
                            <span class="job_post">{{ Auth::user()->email }}</span>
                            <p>{{ Auth::user()->address }}</p>
                            <div>
                               <a href="#"><button class="btn btn-primary btn-round" id="edit-button">Edit Profile</button></a> 
                              <a href="{{url('/product')}}"><button class="btn btn-primary btn-round btn-simple">Start Sell</button></a>  
                            </div>
                            
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>

        <div class="col-lg-8">
            <form action="{{url('update/'.Auth::user()->id)}}" method="POST" class="colorlib-form" id="edit-form">
                @csrf
                @method('PUT')
                <h2>Edit User Data</h2>
              <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="companyname"> Name</label>
                        <input type="text" id="companyname" class="form-control" value="{{ Auth::user()->name }}" placeholder="Company Name" name="name">
                  </div>
               </div>
        
               <div class="col-md-12">
                <div class="form-group">
                    <label for="companyname">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Email"  name="email" value="{{ Auth::user()->email }}">
          </div>
        </div>
        
               <div class="col-md-12">
                        <div class="form-group">
                            <label for="fname">Address</label>
                        <input type="text" id="address" class="form-control" placeholder="Enter Your Address" name="address" value="{{ Auth::user()->address }}">
                  </div>
                  
               </div>
               <div class="col-md-12 mb-3">
                <button type="submit" class="btn btn-primary" >Save changes</button>
            </div>
                   
                    
        
                    
           </div>
        </form>
        </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  
       
                    <script>
                        document.getElementById('edit-form').style.display='none';
                        document.getElementById('edit-button').addEventListener('click',()=>{
                            document.getElementById('edit-form').style.display='block';
                        });
                    </script>
@endsection
