@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Add category</h4>
        </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($category as $item)
                    <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->name}}</td>
                        <td>
                            <img src="{{asset('asset/uplode/category'.$item->image)}}" alt="">
                        </td>

                        <td>
                            <a href="{{url('edit-cate'.$item->id)}}" class="btn btn-primary">Edit</a >
                            <a href="" class="btn btn-danger">Delete</a >

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection