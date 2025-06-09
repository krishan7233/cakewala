@extends('admin.app')
@section('content')

	<!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                <h1>Main Category</h1>
                <p class="breadcrumbs"><span><a href="{{ route('admin.dashbord') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Main Category</p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            <div class="ec-cat-form">
                                <h4> Category</h4>

                                <form id="categoryForm" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="category_id" id="category_id">

                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">Name</label> 
                                        <div class="col-12">
                                            <input id="category_name" name="category_name"  class="form-control here slug-title" type="text">
                                        </div>
                                    </div>
                                    
                                     <div class="form-group row">
                                        <label class="col-12 col-form-label">Slug</label>
                                        <div class="col-12">
                                            <input id="cat_slug" name="cat_slug" readonly class="form-control" type="text">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">Photo</label> 
                                        <div class="col-12">
                                            <div class="row ec-vendor-uploads">
                                            <div class="ec-vendor-img-upload">
                                                <div class="ec-vendor-main-img">
                                                    
                                                    <div class="thumb-upload-set colo-md-12">
                                                        <div class="thumb-upload">
                                                            <div class="thumb-edit">
                                                                <input type='file' id="thumbUpload01"
                                                                    class="ec-image-upload"
                                                                    accept=".png, .jpg, .jpeg"  name="category_photo"/>
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
                                        </div>
                                    </div>
                                   

                                    <div class="form-group row">
                                        <label class="col-12 col-form-label">Description</label> 
                                        <div class="col-12">
                                            <textarea id="cat_description" name="cat_description" cols="40" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div> 

                                    

                                    <div class="row">
                                        <div class="col-12">
                                            <button name="submit" type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
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
                                                <table id="categoryTable" class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Image</th>
                                                            <th>Name</th>
                                                            <th>Slug</th>
                                                            <th>Description</th>
                                                     
                                                            <th>Status</th>
                                                           
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                
                                                    <tbody>
                                                        {{-- <tr>
                                                            <td><img class="cat-thumb" src="assets/img/category/clothes.png" alt="Product Image" /></td>
                                                            <td>Clothes</td>
                                                           
                                                            <td>ffffffffffff</td>
                                                    
                                                            <td>ACTIVE</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button"
                                                                        class="btn btn-outline-success">Info</button>
                                                                    <button type="button"
                                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false" data-display="static">
                                                                        <span class="sr-only">Info</span>
                                                                    </button>
                
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr> --}}
                                                       
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->

@endsection



@section('custom-js')

	<!-- Data Tables -->
	<script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
	<script src="{{asset('assets/plugins/data-tables/datatables.bootstrap5.min.js')}}"></script>
	<script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>

    <script>
        $(document).ready(function() {
                  $('#category_name').on('input', function() {
                const slug = $(this).val().toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');
                $('#cat_slug').val(slug);
            });
            
                 // Initialize DataTable
                 let table = $('#categoryTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route("admin.categories.data") }}',
                columns: [
                    { data: 'image', name: 'image' },
                    { data: 'name', name: 'name' },
                    { data: 'cat_slug', name: 'cat_slug' },
                    { data: 'description', name: 'description' },
                    { data: 'status', name: 'status' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });




            $(document).on('click', '.editCategory', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            let url = '{{ url("/admin/categories") }}/' + id + '/edit';
            

            $.ajax({
                url: url,
                type: 'GET',
                success: function (data) {
                    console.log(data.id);
                    $('#category_id').val(data.id);
                    $('#category_name').val(data.name);
                      $('#cat_slug').val(data.cat_slug);
                    $('#cat_description').val(data.description);
                    
                    if (data.photo) {
                        $('#previewImage').attr('src',  '/' + data.photo).show();
                    } else {
                        $('#previewImage').hide();
                    }

                    $('#submitBtn').text('Update');
                },
                error: function () {
                    alert('Failed to fetch category data.');
                }
            });
        });

        // Submit form (Add or Update)
        $('#categoryForm').on('submit', function (e) {
            e.preventDefault();

            let id = $('#category_id').val();
            let url = id 
                ? '{{ url("/admin/categories") }}/' + id + '/update'
                : '{{ route("admin.categories.store") }}';

            let formData = new FormData(this);

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    Swal.fire('Success!', res.message ?? 'Category saved successfully.', 'success');

                    // Reset form
                    $('#categoryForm')[0].reset();
                    $('#category_id').val('');
                    $('#submitBtn').text('Submit');
                    $('#previewImage').attr('src', '').hide();

                    // Reload datatable
                    $('#categoryForm')[0].reset();
                    table.ajax.reload();

                },
                error: function (xhr) {
                    Swal.fire('Error', 'Something went wrong', 'error');
                }
            });
        });




        $(document).on('click', '.deleteCategory', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    let url = '{{ url("/admin/categories") }}/' + id;

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
                url: url,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    Swal.fire('Deleted!', response.message, 'success');
                    table.ajax.reload();
                },
                error: function () {
                    Swal.fire('Error!', 'Failed to delete the category.', 'error');
                }
            });
        }
    });
});



       
        });
        </script>
@endsection