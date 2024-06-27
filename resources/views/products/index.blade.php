@extends('layouts.adminLayout1', ['title' => 'Products Management'])

@section('content')
<a class="btn btn-primary p-2 text-bold mt-2" style="width: 160px" href="{{route('products.create')}}">Create New Product</a>
<h1 class="text-center pb-2">PRODUCTS DETAILS</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Serial</th>
                <th><span class="text-danger">Category</span>/<span class="mx-1">Subcategory(names)</span></th>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Product Images</th>
                
                <th>Product Color</th>
                <th>Product Quantity</th>
                <th>Product Details</th>
                <th>Selling Price</th>
                <th>Hot</th>
                <th>New</th>
                <th>Status</th>
                
                <th>Action</th>   
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><span class="text-danger">{{ $product->category->name }} </span><br>{{ $product->subcategory->name }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->product_code }}</td>
                <td>
                    @if ($product->images)
                        @foreach ($product->images as $image)
                            <a href="{{ asset('storage/'.$image->name) }}" data-lightbox="image-{{$product->id}}" data-title="{{$product->name}}"><img src="{{ asset('storage/'.$image->name) }}" width="50px"></a>
                        @endforeach
                    @endif
                </td>
                <td>{{ $product->product_color}}</td>
                <td>{{ $product->product_size}}</td>
                <td>{{ $product->product_details}}</td>
                <td>{{ $product->selling_price}}</td>
                <td>{{ $product->product_quantity}}</td>
                <td @class(['text-danger' => $product->hot_deal])>{{ $product->hot_deal == 1 ? 'hot' : 'not hot' }}</td>
                <td @class(['text-danger' => $product->hot_new, 'text-success' => !$product->hot_new])>{{ $product->hot_new == 1 ? 'new' : 'not new' }}</td>
                <td @class(['bg-info','text-success' => $product->status, 'text-danger' => !$product->status])>{{ $product->status == 1 ? 'active' : 'inactive' }}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('products.edit', $product->id) }}">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block" class="d-flex mx-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                    <a class="btn btn-sm btn-primary" href="{{ route('products.show', $product->id) }}"> 
                        <i class="bi bi-eye-fill"></i> 
                    </a>
                </td>   
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection