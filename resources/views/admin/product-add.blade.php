@extends('admin.app')
@section('content')
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Add Product</h1>
                <p class="breadcrumbs"><span><a href="{{ url('/') }}">Home</a></span>
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
                        <h2>Add Product</h2>
                    </div>

                    <div class="card-body">
                    <form  method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                                @csrf
                        <div class="row ec-vendor-uploads">
                            <div class="col-lg-4">
                                <div class="ec-vendor-img-upload">
                                    <div class="ec-vendor-main-img">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' id="imageUpload" class="ec-image-upload"
                                                    accept=".png, .jpg, .jpeg" name="product_photo[]" />
                                                <label for="imageUpload"><img
                                                        src="{{asset('assets/img/icons/edit.svg')}}"
                                                        class="svg_img header_svg" alt="edit" /></label>
                                            </div>
                                            <div class="avatar-preview ec-preview">
                                                <div class="imagePreview ec-div-preview">
                                                    <img class="ec-image-preview"
                                                        src="{{asset('assets/img/products/vender-upload-preview.jpg')}}"
                                                        alt="edit" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="thumb-upload-set colo-md-12">
                                            <div class="thumb-upload">
                                                <div class="thumb-edit">
                                                    <input type='file' id="thumbUpload01"
                                                        class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg"  name="product_photo[]" />
                                                    <label for="imageUpload"><img
                                                            src="{{asset('assets/img/icons/edit.svg')}}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview">
                                                        <img class="image-thumb-preview ec-image-preview"
                                                            src="{{asset('assets/img/products/vender-upload-thumb-preview.jpg')}}"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload">
                                                <div class="thumb-edit">
                                                    <input type='file' id="thumbUpload02"
                                                        class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg" name="product_photo[]" />
                                                    <label for="imageUpload"><img
                                                            src="{{asset('assets/img/icons/edit.svg')}}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview">
                                                        <img class="image-thumb-preview ec-image-preview"
                                                            src="{{asset('assets/img/products/vender-upload-thumb-preview.jpg')}}"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload">
                                                <div class="thumb-edit">
                                                    <input type='file' id="thumbUpload03"
                                                        class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg"  name="product_photo[]" />
                                                    <label for="imageUpload"><img
                                                            src="{{asset('assets/img/icons/edit.svg')}}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview">
                                                        <img class="image-thumb-preview ec-image-preview"
                                                            src="{{asset('assets/img/products/vender-upload-thumb-preview.jpg')}}"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload">
                                                <div class="thumb-edit">
                                                    <input type='file' id="thumbUpload04"
                                                        class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg" name="product_photo[]" />
                                                    <label for="imageUpload"><img
                                                            src="{{asset('assets/img/icons/edit.svg')}}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview">
                                                        <img class="image-thumb-preview ec-image-preview"
                                                            src="{{asset('assets/img/products/vender-upload-thumb-preview.jpg')}}"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload">
                                                <div class="thumb-edit">
                                                    <input type='file' id="thumbUpload05"
                                                        class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg" name="product_photo[]" />
                                                    <label for="imageUpload"><img
                                                            src="{{asset('assets/img/icons/edit.svg')}}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview">
                                                        <img class="image-thumb-preview ec-image-preview"
                                                            src="{{asset('assets/img/products/vender-upload-thumb-preview.jpg')}}"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload">
                                                <div class="thumb-edit">
                                                    <input type='file' id="thumbUpload06"
                                                        class="ec-image-upload"
                                                        accept=".png, .jpg, .jpeg" name="product_photo[]" />
                                                    <label for="imageUpload"><img
                                                            src="{{asset('assets/img/icons/edit.svg')}}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview">
                                                        <img class="image-thumb-preview ec-image-preview"
                                                            src="{{asset('assets/img/products/vender-upload-thumb-preview.jpg')}}"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="ec-vendor-upload-detail">
                                  
                                        <div class="row">
                                        <div class="col-md-6">
                                            <label for="product_name" class="form-label">Product Name</label>
                                            <input type="text" class="form-control slug-title" id="product_name" name="name" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="category_id" class="form-label">Select Category</label>
                                            <select name="category_id" id="category_id" class="form-select" required>
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input id="slug" name="slug" class="form-control here set-slug" type="text" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="subcategory_id" class="form-label">Select SubCategory</label>
                                            <select name="subcategory_id" id="subcategory_id" class="form-select" >
                                                <option value="">Select Subcategory</option>
                                                {{-- Subcategories will be loaded dynamically --}}
                                            </select>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="short_description" class="form-label">Short Description</label>
                                            <textarea class="form-control" name="short_description" id="short_description" rows="2"></textarea>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="long_description" class="form-label">Long Description</label>
                                            <textarea class="form-control" name="long_description" id="long_description" rows="4"></textarea>
                                        </div>

                                        {{-- Product Variants Section --}}
                                        <div class="col-md-12">
                                            <label class="form-label">Product Variants (Size wise)</label>

                                            <div id="variants-wrapper">
                                                <div class="variant-row row g-3 mb-3 align-items-end">
                                                    <div class="col-md-3">
                                                        <label class="form-label">Size</label>
                                                        <input type="text" name="variants[0][size]" class="form-control" placeholder="e.g. S, M, 1kg" >
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="form-label">Price (Rs)</label>
                                                        <input type="number" name="variants[0][price]" class="form-control" step="0.01" min="0" required>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="form-label">Quantity</label>
                                                        <input type="number" name="variants[0][stock]" class="form-control" min="0" required>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="form-label">Discount (%)</label>
                                                        <input type="number" name="variants[0][discount]" class="form-control" step="0.01" min="0" max="100" value="0" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" id="add-variant-btn" class="btn btn-sm btn-secondary">Add Another Variant</button>
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

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                 
                                </div>
                            </div>
                        
                        </div>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div> <!-- End Content Wrapper -->
@endsection
{{-- JS for dependent subcategories and adding variants --}}
@section('custom-js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
  
        $('#flavours').select2({
            placeholder: "Select Flavours",
            allowClear: true
        });
  
  $('#product_name').on('input', function() {
    const slug = $(this).val().toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');
    $('#slug').val(slug);
});


  // Dependent subcategories load on category change
$('#category_id').on('change', function() {
    const categoryId = $(this).val();
    const $subcategorySelect = $('#subcategory_id');

    $subcategorySelect.html('<option value="">Loading...</option>');

    if (!categoryId) {
        $subcategorySelect.html('<option value="">Select Subcategory</option>');
        return;
    }
    let url = '{{ url("/admin/products/subcategories-by-category") }}/' + categoryId;
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            let options = '<option value="">Select Subcategory</option>';
            $.each(data, function(index, subcat) {
                options += `<option value="${subcat.id}">${subcat.name}</option>`;
            });
            $subcategorySelect.html(options);
        },
        error: function() {
            $subcategorySelect.html('<option value="">Select Subcategory</option>');
        }
    });
});

// Add new variant rows dynamically

let variantIndex = 1;
$('#add-variant-btn').on('click', function() {
    const $wrapper = $('#variants-wrapper');

    const variantHTML = `
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
            <input type="number" name="variants[${variantIndex}][discount]" class="form-control" step="0.01" min="0" max="100" value="0" required>
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-danger btn-sm remove-variant">X</button>
        </div>
    </div>`;
    
    $wrapper.append(variantHTML);
    variantIndex++;
});

// Remove


$(document).on('click', '.remove-variant', function() {
    $(this).closest('.variant-row').remove();
});


  </script>
@endsection
