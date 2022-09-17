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
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div>
                                <button class="btn btn-primary btn-round">Edit Profile</button>
                                <button class="btn btn-primary btn-round btn-simple">Start Sell</button>
                            </div>
                            
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-2">
                                <div class="mt-3">
                                    <h5>All Products</h5>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="mt-3">
                                    <h5>Selling</h5>
                                  
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="mt-3">
                                    <h5>Sold</h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
       
@endsection
