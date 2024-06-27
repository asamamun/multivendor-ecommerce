@extends('layouts.vendorLayout', ['title' =>'View Subcategory'])
@section('content')
    <div>
        <a class="btn btn-primary" href="{{route('subcategories.index')}}">Back</a>
        <div class="card m-3 p-3">
            <h1 class="text-center">View Subcategory</h1>
            <h3 class="text-center">Subcategory:{{ $subcategory->name }}</h3>
            <h3 class="text-center">slug:{{ $subcategory->slug }}</h3>
    
            <p class="text-center h5">status:{{ $subcategory->status }}</p>
            <p class="text-center h5">created at:{{ $subcategory->created_at }}</p>
            <p class="text-center h5">updated at:{{ $subcategory->updated_at }}</p>
        </div>
        <hr>
        <a class="btn btn-primary" href="{{route('subcategories.edit', $subcategory)}}">Edit</a>
    
    </div>

@endsection