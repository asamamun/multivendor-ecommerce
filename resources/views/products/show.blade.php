@extends('layouts.vendorLayout', ['title' =>'View Subcategory'])
@section('content')
    <div>
        <a class="btn btn-primary" href="{{route('products.index')}}">Back</a>
        <div class="card m-3 p-3">
            <h1 class="text-center">View Products</h1>
            <h3 class="text-center">Product Name:{{ $product->product_name }}</h3>
            <h3 class="text-center">Product Code:{{ $product->product_code}}</h3>
            <p class="text-center h5">Product Quantity:{{ $product->product_quantity }}</p>
            <h3 class="text-center">Product Details:{{ $product->product_details}}</h3>
            <h3 class="text-center">Product Color:{{ $product->product_color}}</h3>
    
            <p class="text-center h5">Product Size:{{ $product->product_size}}</p>
            <p class="text-center h5">Selling Price:{{ $product->selling_price}}</p>
            <p class="text-center h5">created at:{{ $product->created_at }}</p>
            <p class="text-center h5">updated at:{{ $product->updated_at }}</p>
        </div>
        <hr>
        <a class="btn btn-primary" href="{{route('products.edit', $product)}}">Edit</a>
    </div>
@endsection