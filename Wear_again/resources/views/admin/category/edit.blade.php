@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
    <h4>Edit category</h4>
    </div>
    <div class="card-body">
        <form action="{{url('update-cate/'.$category->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12 mb-5">
                    <label for="">Name</label>
                    <input type="text" value="{{$category->name}}" class="form-control" name="name">
                </div>
                @if ($category->image)
                <img src="{{asset('asset'.$category->image)}}" alt="">
                @endif
                <div class="col-md-12 mb-5">
                    <input type="file"  class="form-control" name="image">
                </div>

                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
            </div>
        </form>

    </div>
</div>
    
@endsection