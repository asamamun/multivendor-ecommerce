    <div class="form-group field-product-category_id required has-error">
        <label class="control-label" for="product-category_id">Category Select</label>
        {!! html()->select('category_id',$categories,old('category_id'))->class('form-select')->placeholder("Select....") !!}
        <div class="help-block"></div>
    </div>
    <div class="form-group field-product-subcategory_id required">
        <label class="control-label" for="product-subcategory_id">Subcategory Select</label>
        {!! html()->select('subcategory_id',$subcategories,null )->class('form-select')->placeholder("select....") !!}
        <div class="help-block"></div>
    </div>
    <div class="form-group field-product-name required">
        <label class="control-label" for="product_name">Product Name</label>
        {!! html()->text('product_name',old('product_name'))->class('form-control')->attributes(['maxlength'=>'255']) !!}
        <div class="help-block"></div>
    </div>
    <div class="form-group field-product-name required">
        <label class="control-label" for="product_code">Product Code</label>
        {!! html()->text('product_code',old('product_code'))->class('form-control')->attributes(['maxlength'=>'255']) !!}
        <div class="help-block"></div>
    </div>
    <div class="form-group">
        <label class="control-label" for="image">Image Choose</label>
        <input type="file" name="image[]" id="image" class="form-control" multiple>
        <hr>
       
        @if ($product && $product->images)
            @forelse ($product?->images as $img)
               <div class="d-inline-block position-relative p-3">
                <img src="{{asset('storage/'.$img->name)}}" width="100px" alt="" loading="lazy"> 
                <span data-id="{{$img->id}}" style="right:-10px;top:15px"  class="pimage position-absolute translate-middle badge rounded-pill bg-danger" title="delete image">&times;</span>  
            </div> 
            @empty   
            @endforelse
        @endif
    </div>
    <div class="form-group field-product-name required">
        <label class="control-label" for="product_color">Product Color</label>
        {!! html()->text('product_color',old('product_color'))->class('form-control')->attributes(['maxlength'=>'255']) !!}
        <div class="help-block"></div>
    </div>
    <div class="form-group field-product-name required">
        <label class="control-label" for="product_size">Product Size</label>
        {!! html()->text('product_size',old('product_size'))->class('form-control')->attributes(['maxlength'=>'255']) !!}
        <div class="help-block"></div>
    </div>

    <div class="form-group field-product-quantity required">
        <label class="control-label" for="product_quantity">Product Quantity</label>
        {!! html()->text('product_quantity',old('product_quantity'))->class('form-control')->attributes(['min'=>'1'])->placeholder("1") !!}
        <div class="help-block"></div>
    </div>
    <div class="form-group field-product-details required">
        <label class="control-label" for="product_details">Product Details</label>
        {!! html()->textarea('product_details',old('product_details'))->class('form-control')->attributes([])->required() !!}
        <div class="help-block"></div>
    </div>
    <div class="form-group field-product-price required">
        <label class="control-label" for="selling_price">Selling Price</label>
        {!! html()->text('selling_price',old('selling_price'))->class('form-control')->attributes(['min'=>'1'])->placeholder("0.00") !!}
        <div class="help-block"></div>
    </div>
   
    <div class="form-group field-product-hot">
        <label class="control-label" for="hot_deal">Hot</label>
        {!! html()->select('hot_deal',['1'=>"Hot",'0'=>"Normal"],old('hot_deal'))->class('form-select')->placeholder("Select....") !!}
        <div class="help-block"></div>
    </div>
    <div class="form-group field-product-new">
        <label class="control-label" for="hot_new">New</label>
        {!! html()->select('hot_new',['1'=>"New",'0'=>"Normal"],old('hot_new'))->class('form-select')->placeholder("Select....") !!}
        <div class="help-block"></div>
    </div>
    <div class="form-group field-product-status">
        <label class="control-label" for="status">Status</label>
        {!! html()->select('status',['1'=>"Active",'0'=>"Inactive"],old('status'))->class('form-select')->placeholder("Select....") !!}
        <div class="help-block"></div>
    </div>
  