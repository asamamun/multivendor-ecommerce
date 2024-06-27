@extends('layouts.vendorLayout', ['title' => 'Add New Product'])
@section('content')
<div class="d-flex justify-content-between">    
    {{-- <a title="back to index" style="font-size: 2em" href="{{route("products.index")}}"><i class="bi bi-backspace"></i></a> --}}
    <a title="back to index" href="{{route("products.index")}}" class="btn btn-outline-info my-2">Back</a>
</div>
<div class="product-form">
    {{ html()->form('post', route("products.store"))->acceptsFiles()->open() }}
    @include('products.form')    
        <div class="form-group">
        <button type="submit" class="btn btn-success my-3">Save</button>    
        </div>
    </form>
</div>    
@endsection






@section('script')
    <script>
        function decorate_subcat(d){
        $h = "<option value='-1'>Select</option>";
            for (const key in d) {
                console.log(d);
            $h += "<option value='"+key+"'>"+d[key]+"</option>"; 
            }
            $("#subcategory_id").html($h);
        }

        $(document).ready(function () {
        $("#category_id").change(function () {
            let id = $(this).val();
            
            if(id == "-1"){  return;}
            let url = "{{url("getsubcat")}}/"+id;
            $.get(url,{},function(d){            
                decorate_subcat(d);
            });
        })
        });
    </script>
@endsection