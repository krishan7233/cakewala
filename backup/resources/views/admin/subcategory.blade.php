@extends('admin.app')
@section('content')

<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
            <h1>Sub Category</h1>
            <p class="breadcrumbs"><span><a href="{{ route('admin.dashbord') }}">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Sub Category</p>
        </div>

        <div class="row">
            <div class="col-xl-4 col-lg-12">
                <div class="ec-cat-list card card-default mb-24px">
                    <div class="card-body">
                        <div class="ec-cat-form">
                            <h4>Sub Category</h4>
                            <form id="subcategoryForm" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="subcategory_id" id="subcategory_id">

                                <div class="form-group row">
                                    <label class="col-12 col-form-label">Main Category</label> 
                                    <div class="col-12">
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option value="">Select Main Category</option>
                                            @foreach($categories as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-form-label">Name</label>
                                    <div class="col-12">
                                        <input id="subcategory_name" name="subcategory_name" class="form-control" type="text">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-12 col-form-label">Slug</label>
                                    <div class="col-12">
                                        <input id="subcat_slug" name="subcat_slug" readonly class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-form-label">Photo</label>
                                    <div class="col-12">
                                        <div class="row ec-vendor-uploads">
                                            <div class="ec-vendor-img-upload">
                                                <div class="ec-vendor-main-img">
                                                    
                                                    <div class="thumb-upload-set colo-md-12">
                                                        <div class="thumb-upload">
                                                            <div class="thumb-edit">
                                                                <input type='file' id="thumbUpload01"
                                                                    class="ec-image-upload"
                                                                    accept=".png, .jpg, .jpeg"  name="subcategory_photo"/>
                                                                <label for="imageUpload"><img
                                                                        src="{{asset('assets/img/icons/edit.svg')}}"
                                                                        class="svg_img header_svg" alt="edit" /></label>
                                                            </div>
                                                            <div class="thumb-preview ec-preview">
                                                                <div class="image-thumb-preview">
                                                                    <img  id="previewImage" class="image-thumb-preview ec-image-preview"
                                                                        src="{{asset('assets/img/products/vender-upload-thumb-preview.jpg')}}"
                                                                        alt="edit" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        {{-- <input type="file" id="subcategory_photo" name="subcategory_photo" class="form-control" accept=".jpg,.jpeg,.png"> --}}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-form-label">Description</label>
                                    <div class="col-12">
                                        <textarea name="subcat_description" id="subcat_description" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" name="submit" id="submitBtn" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-lg-12">
                <div class="ec-cat-list card card-default">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="subcategoryTable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Main Category</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div> 
@endsection

@section('custom-js')

	<!-- Data Tables -->
	<script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
	<script src="{{asset('assets/plugins/data-tables/datatables.bootstrap5.min.js')}}"></script>
	<script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>
<script>
    $(document).ready(function () {
        
         $('#subcategory_name').on('input', function() {
                const slug = $(this).val().toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');
                $('#subcat_slug').val(slug);
            });
            
            
        let table = $('#subcategoryTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route("admin.subcategories.data") }}',
            columns: [
                { data: 'image', name: 'image' },
                { data: 'category_name', name: 'category_name' },
                { data: 'name', name: 'name' },
                { data: 'description', name: 'description' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });

        $('#subcategoryForm').on('submit', function (e) {
           
            
            e.preventDefault();
            let id = $('#subcategory_id').val();
            let url = id ? '/admin/subcategories/' + id + '/update' : '/admin/subcategories/store';
            let formData = new FormData(this);

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    Swal.fire('Success!', res.message, 'success');
                    $('#subcategoryForm')[0].reset();
                    $('#subcategory_id').val('');
                    $('#submitBtn').text('Submit');
                    table.ajax.reload();
                },
                error: function () {
                    Swal.fire('Error!', 'Something went wrong', 'error');
                }
            });
        });

        $(document).on('click', '.editSubCategory', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            $.get('/admin/subcategories/' + id + '/edit', function (data) {
                $('#subcategory_id').val(data.id);
                $('#category_id').val(data.category_id);
                $('#subcategory_name').val(data.name);
                $('#subcat_slug').val(data.subcat_slug);
                $('#subcat_description').val(data.description);
                if (data.photo) {
                        $('#previewImage').attr('src', '/' +  data.photo).show();
                    } else {
                        $('#previewImage').hide();
                    }
                    
                $('#submitBtn').text('Update');
            });
        });

        $(document).on('click', '.deleteSubCategory', function () {
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/admin/subcategories/' + id,
                        type: 'DELETE',
                        data: { _token: '{{ csrf_token() }}' },
                        success: function (res) {
                            Swal.fire('Deleted!', res.message, 'success');
                            table.ajax.reload();
                        },
                        error: function () {
                            Swal.fire('Error!', 'Failed to delete subcategory.', 'error');
                        }
                    });
                }
            });
        });
    });
</script>
@endsection
