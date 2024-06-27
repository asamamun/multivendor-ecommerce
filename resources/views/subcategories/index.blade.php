@extends('layouts.adminLayout1', ['title' => 'Subcategories Management'])

@section('content')
<h1 class="text-center">Subcategories Page</h1>
<a class="btn btn-primary w-25" href="{{route('subcategories.create')}}">Create subcategory</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Serial</th>
            <th>Category Name</th>
            <th>Subcategory Name</th>
            <th>Slug</th>
      
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($subcategories as $subcategory)
        <tr class="{{$subcategory->deleted_at ? 'table-danger' : ''}}">
            <td>{{ $loop->index + 1 }}</td>
          
            <td>{{ $subcategory->category->name }}</td>
            <td>{{ $subcategory->name }}</td>
            <td>{{ $subcategory->slug }}</td>
          
            <td>{{ $subcategory->status == 1 ? 'Active' : 'Not Active' }}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('subcategories.edit', $subcategory->id) }}" class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <form action="{{ route('subcategories.destroy', $subcategory) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data?')">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                    <a href="{{ route('subcategories.show', $subcategory) }}" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                </div>
        </tr>
        @empty
        <tr>
            <td colspan="3">No Subcategories Available</td>
        </tr>
        @endforelse
    </tbody>
</table>


@endsection

@section('script')
<script>
    alert(6);
</script>
@endsection


