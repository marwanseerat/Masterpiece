@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
    <h4>Add Subcategory</h4>
    </div>
    <div class="card-body">
        <form action="url{{('insert_subcategory')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-5">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="col-md-12 mb-5">
                    <select name="category" id="people" class="form-control">
                        <option value="#">Select category</option>
                        @foreach ($category as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      
            
                  </select>
                </div>

                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
            </div>
        </form>

    </div>
</div>
    
@endsection