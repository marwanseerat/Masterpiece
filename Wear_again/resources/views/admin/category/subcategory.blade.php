@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Subcategory</h4>
        </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Category_id</th>
                    <th  style="display: none;">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($category as $item)
                    <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->name}}</td>
                        <td>
                            {{$item->category_id}}
                        </td>

                        <td style="display: none;">
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