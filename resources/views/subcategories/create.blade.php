@extends('layouts.adminLayout1', ['title' => 'Subcategories Management'])

@section('content')
<h1 class="text-center">Subcategory Table</h1>
 {{-- {{ html()->form()->route('subcategories.store')->open() }} --}}
 {{ html()->form('post')->route('subcategories.store')->open() }} 
        <div class="form-group">
            {{ html()->label('Category')->for('category_id') }} 
            {{ html()->select('category_id', $categories)->class('form-select') }}
        </div> 
        <div class="form-group">
            {{ html()->label('Type Subcategory')->for('name') }} 
            {{ html()->text('name')->class('form-control') }} 
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
{{-- {{html()->closeModelForm()}}
            {{ html()->submit('Submit')->class('btn btn-primary') }}
{{ html()->form()->close() }} --}}
<hr>
@endsection

@section('script')
<script>
    alert(5);
</script>
@endsection


