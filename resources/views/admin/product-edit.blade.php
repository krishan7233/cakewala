@extends('admin.app')
@section('content')
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Edit Product</h1>
                <p class="breadcrumbs"><span><a href="{{ url('/dashboard') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Product</p>
            </div>
            <div>
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary"> View All
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Edit Product</h2>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row ec-vendor-uploads">
                               

                                <div class="col-lg-4">
                                    <div class="ec-vendor-img-upload">
                                        <div class="ec-vendor-main-img">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="imageUpload" class="ec-image-upload" accept=".png, .jpg, .jpeg" name="product_photo[]" />
                                                    <label for="imageUpload">
                                                        <img src="{{ asset('assets/img/icons/edit.svg') }}" class="svg_img header_svg" alt="edit" />
                                                    </label>
                                                </div>
                                                <div class="avatar-preview ec-preview">
                                                    <div class="imagePreview ec-div-preview">
                                                        @if($product->images->count())
                                                            {{-- Show first image as big --}}
                                                            <img class="ec-image-preview mb-2" src="{{ asset($product->images[0]->image) }}" alt="Main Product Image" style="width:100%; max-height:200px; object-fit:contain;" />
                                                        @else
                                                            <img class="ec-image-preview" src="{{ asset('assets/img/products/vender-upload-preview.jpg') }}" alt="preview" />
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                
                                            {{-- Thumbnail images and inputs below --}}
                                            <div class="thumb-upload-set col-md-12 mt-3 d-flex flex-wrap gap-2">
                                                @php
                                                    $thumbs = $product->images->slice(1); // all except first image
                                                    $thumbCount = max(6, $thumbs->count()); // show at least 6 inputs
                                                @endphp
                                
                                                @for ($i = 0; $i < $thumbCount; $i++)
                                                    <div class="thumb-upload" style="width: 80px;">
                                                        <div class="thumb-edit">
                                                            <input
                                                                type='file'
                                                                id="thumbUpload{{ $i + 1 }}"
                                                                class="ec-image-upload"
                                                                accept=".png, .jpg, .jpeg"
                                                                name="product_photo[]" />
                                                            <label for="thumbUpload{{ $i + 1 }}">
                                                                <img src="{{ asset('assets/img/icons/edit.svg') }}" class="svg_img header_svg" alt="edit" />
                                                            </label>
                                                        </div>
                                                        <div class="thumb-preview ec-preview">
                                                            <div class="image-thumb-preview">
                                                                @if(isset($thumbs[$i]))
                                                                    <img
                                                                        class="image-thumb-preview ec-image-preview"
                                                                        src="{{ asset($thumbs[$i]->image) }}"
                                                                        alt="Thumbnail Image" />
                                                                        
                                                                        <button 
                                                                            class="btn btn-danger delete-thumb-btn p-5 py-5 rounded" 
                                                                            data-id="{{ $thumbs[$i]->id }}" 
                                                                            data-type="product"
                                                                            type="button"
                                                                            >
                                                                            Delete
                                                                      </button>
                                                                @else
                                                                    <img
                                                                        class="image-thumb-preview ec-image-preview"
                                                                        src="{{ asset('assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                        alt="thumb preview" />
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="col-lg-8">
                                    <div class="ec-vendor-upload-detail">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="product_name" class="form-label">Product Name</label>
                                                <input type="text" class="form-control slug-title" id="product_name" name="name" required value="{{ old('name', $product->name) }}">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="category_id" class="form-label">Select Category</label>
                                                <select name="category_id" id="category_id" class="form-select" required>
                                                    <option value="">Select Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="slug" class="form-label">Slug</label>
                                                <input id="slug" name="slug" class="form-control here set-slug" type="text" required value="{{ old('slug', $product->slug) }}">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="subcategory_id" class="form-label">Select SubCategory</label>
                                                <select name="subcategory_id" id="subcategory_id" class="form-select" >
                                                    <option value="">Select Subcategory</option>
                                                    @foreach($subcategories as $subcategory)
                                                        <option value="{{ $subcategory->id }}" {{ old('subcategory_id', $product->subcategory_id) == $subcategory->id ? 'selected' : '' }}>
                                                            {{ $subcategory->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="short_description" class="form-label">Short Description</label>
                                                <textarea class="form-control" name="short_description" id="short_description" rows="2">{{ old('short_description', $product->short_description) }}</textarea>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="long_description" class="form-label">Long Description</label>
                                                <textarea class="form-control" name="long_description" id="long_description" rows="4">{{ old('long_description', $product->long_description) }}</textarea>
                                            </div>

                                            {{-- Product Variants Section --}}
                                            <div class="col-md-12">
                                                <label class="form-label">Product Variants (Size wise)</label>

                                                <div id="variants-wrapper">
                                                    @php $oldVariants = old('variants', $product->variants->toArray()); @endphp
                                                    @foreach($oldVariants as $i => $variant)
                                                        <div class="variant-row row g-3 mb-3 align-items-end">
                                                            <div class="col-md-3">
                                                                <input type="text" name="variants[{{ $i }}][size]" class="form-control" placeholder="e.g. S, M, 1kg"  value="{{ $variant['size'] }}">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="number" name="variants[{{ $i }}][price]" class="form-control" placeholder="Enter Price" step="0.01" min="0" required value="{{ $variant['price'] }}">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="number" name="variants[{{ $i }}][stock]" class="form-control" min="0" required value="{{ $variant['stock'] }}">
                                                            </div>
                                                            <div class="col-md-2">
                                                                <input type="number" name="variants[{{ $i }}][discount]" class="form-control" min="0" max="100" value="{{ $variant['discount'] ?? 0 }}" placeholder="Discount %">
                                                            </div>
                                                            <div class="col-md-1">
                                                                <button type="button" class="btn btn-danger btn-sm remove-variant">X</button>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <button type="button" class="btn btn-primary btn-sm" id="add-variant">Add Variant</button>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="flavours" class="form-label">Product Flavours</label>
                                                <select name="flavours[]" id="flavours" class="form-select select2" multiple >
                                                    @foreach($flavours as $flavour)
                                                    <option value="{{ $flavour->id }}"
                                                        @if(!empty($product) && in_array($flavour->id, explode(',', $product->flavours ?? '')))
                                                            selected
                                                        @endif
                                                    >{{ $flavour->flavour_name }}</option>
                                                @endforeach
                                                
                                                </select>
                                            </div>
    

                                            <div class="col-12 mt-3">
                                                <button type="submit" class="btn btn-primary">Update Product</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
  
        $('#flavours').select2({
            placeholder: "Select Flavours",
            allowClear: true
        });
    // Dynamic slug generation on product name keyup
    $('.slug-title').on('keyup', function() {
        var val = $(this).val();
        val = val.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');
        $('.set-slug').val(val);
    });

    // On category change, update subcategory dropdown via AJAX (if you want)
    $('#category_id').on('change', function() {
        var catId = $(this).val();
        let url = '{{ url("/admin/products/subcategories-by-category") }}/' + catId;
        if (catId) {
            $.ajax({
                url: url,
                method: 'GET',
                success: function(data) {
                    var html = '<option value="">Select Subcategory</option>';
                    $.each(data, function(key, subcategory) {
                        html += `<option value="${subcategory.id}">${subcategory.name}</option>`;
                    });
                    $('#subcategory_id').html(html);
                }
            });
        } else {
            $('#subcategory_id').html('<option value="">Select Subcategory</option>');
        }
    });


    

    // Add Variant Row
    let variantIndex = {{ count(old('variants', $product->variants)) }};
    $('#add-variant').on('click', function() {
        let html = `
        <div class="variant-row row g-3 mb-3 align-items-end">
            <div class="col-md-3">
                <input type="text" name="variants[${variantIndex}][size]" class="form-control" placeholder="e.g. S, M, 1kg" required>
            </div>
            <div class="col-md-3">
                <input type="number" name="variants[${variantIndex}][price]" class="form-control" step="0.01" min="0" required>
            </div>
            <div class="col-md-3">
                <input type="number" name="variants[${variantIndex}][stock]" class="form-control" min="0" required>
            </div>
            <div class="col-md-2">
                <input type="number" name="variants[${variantIndex}][discount]" class="form-control" min="0" max="100" placeholder="Discount %">
            </div>
            <div class="col-md-1">
                <button type="button" class="btn btn-danger btn-sm remove-variant">X</button>
            </div>
        </div>`;
        $('#variants-wrapper').append(html);
        variantIndex++;
    });

    // Remove Variant Row
    $(document).on('click', '.remove-variant', function() {
        $(this).closest('.variant-row').remove();
    });

</script>
@endsection
