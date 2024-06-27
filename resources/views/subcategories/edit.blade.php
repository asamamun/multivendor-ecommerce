@extends('layouts.vendorLayout', ['title' => 'Edit Subcategory'])
@section('content')
<h1>Edit Subcategory</h1>
{{ html()->modelForm($subcategory, 'PUT', route('subcategories.update', $subcategory->id))}}
<div class="form-group">
    {{ html()->label('Name')->for('name') }} 
    {{ html()->text('name')->class('form-control') }} 
</div>   
<div class="form-group">
    {{ html()->label('Category')->for('category_id') }} 
    {{ html()->select('category_id', $categories)->class('form-select') }}
</div> 
<div class="form-group">
    {{ html()->label('Slug')->for('slug') }} 
    {{ html()->text('slug')->class('form-control') }} 
</div>   
 
<div class="form-group">
    {{ html()->label('Status')->for('status') }} 
    {{ html()->select('status', ['1' => 'Active', '0' => 'Inactive'])->class('form-select') }} 
</div>

<div class="form-group">
    {{ html()->submit('submit')->class('btn btn-primary') }} 
</div>    
{{ html()->closeModelForm() }}
@endsection