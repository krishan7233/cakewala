@extends('admin.app')
@section('content')
<style>
    .see-more {
        cursor: pointer;
        color: #007bff;
        text-decoration: underline;
    }
</style>

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
                                        <label class="col-12 col-form-label">Eggless Option</label> 
                                            <input type="checkbox" id="eggless_option" name="eggless_option" value="1" >
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-12 col-form-label">Meta Title</label> 
                                        <div class="col-12">
                                            <input type="text" id="meta_title" name="meta_title" class="form-control">
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-12 col-form-label">Meta Description</label> 
                                        <div class="col-12">
                                            <input type="text" id="cat_description" name="cat_description"  class="form-control">
                                        </div>
                                    </div> 

                                      <div class="form-group row">
                                        <label class="col-12 col-form-label">Google Analytics </label> 
                                        <div class="col-12">
                                            <textarea id="google_analytics" name="google_analytics" cols="40" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div> 
                                    
                                      <div class="form-group row">
                                        <label class="col-12 col-form-label">Footer Description</label> 
                                        <div class="col-12">
                                            <textarea id="footer_description" name="footer_description" cols="40" rows="4" class="form-control"></textarea>
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
                                                            
                                                            <th>Meta Description</th>
                                                         <th>Meta Title</th>
                                                          <th>Google Analytics</th>
                                                           <th>Footer Description</th>
                                                            <th>Status</th>
                                                           
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                
                                                    <tbody>
                                                       
                                                       
                                                        
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


<!-- Footer Description Modal -->
<div class="modal fade" id="footerModal" tabindex="-1" role="dialog" aria-labelledby="footerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Full Footer Description</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body" id="footerFullContent"></div>
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
                     { data: 'meta_title', name: 'meta_title' },
                      { data: 'google_analytics', name: 'google_analytics' },
                       { data: 'footer_description', name: 'footer_description' },
                    { data: 'status', name: 'status' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });


$(document).on('click', '.see-more', function(e) {
    e.preventDefault();
    let fullText = $(this).data('full');
    $('#footerFullContent').text(fullText);
    $('#footerModal').modal('show');
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
                    $('#eggless_option').prop('checked', data.eggless_option == 1);
                      $('#meta_title').val(data.meta_title);
                      $('#google_analytics').val(data.google_analytics);
                      $('#footer_description').val(data.footer_description);
                    
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