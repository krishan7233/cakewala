@extends('admin.app')
@section('content')

	<!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                <h1>Banner</h1>
                <p class="breadcrumbs"><span><a href="{{ route('admin.dashbord') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Banner</p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            <div class="ec-cat-form">
                                <h4> Banner</h4>

                                <form id="BannerForm" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="banner_id" id="banner_id">

                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">Name</label> 
                                        <div class="col-12">
                                            <input id="banner_name" name="banner_name" class="form-control here slug-title" type="text">
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
                                                                    accept=".png, .jpg, .jpeg"  name="image"/>
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
                                                <table id="BannerTable" class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Image</th>
                                                            <th>Banner Name</th>
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

@endsection



@section('custom-js')

	<!-- Data Tables -->
	<script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
	<script src="{{asset('assets/plugins/data-tables/datatables.bootstrap5.min.js')}}"></script>
	<script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>

    <script>
        $(document).ready(function() {

                 // Initialize DataTable
                 let table = $('#BannerTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route("admin.banners.data") }}',
                columns: [
                    { data: 'image', name: 'image' },
                    { data: 'name', name: 'name' },
                    { data: 'status', name: 'status' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });




            $(document).on('click', '.editBanner', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            let url = '{{ url("/banners") }}/' + id + '/edit';


            $.ajax({
                url: url,
                type: 'GET',
                success: function (data) {
                    console.log(data.id);
                    $('#banner_id').val(data.id);
                    $('#banner_name').val(data.name);                    
                    if (data.image) {
                        $('#previewImage').attr('src', '/' + data.image).show();
                    } else {
                        $('#previewImage').hide();
                    }


                    $('#submitBtn').text('Update');
                },
                error: function () {
                    alert('Failed to fetch Banner data.');
                }
            });
        });

        // Submit form (Add or Update)
        $('#BannerForm').on('submit', function (e) {
            e.preventDefault();

            let id = $('#banner_id').val();
            let url = id 
                ? '{{ url("/banners") }}/' + id + '/update'
                : '{{ route("admin.banners.store") }}';

            let formData = new FormData(this);

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    Swal.fire('Success!', res.message ?? 'Banner saved successfully.', 'success');

                    // Reset form
                    $('#BannerForm')[0].reset();
                    $('#banner_id').val('');
                    $('#submitBtn').text('Submit');
                    $('#previewImage').attr('src', '').hide();

                    // Reload datatable
                    $('#BannerForm')[0].reset();
                    table.ajax.reload();

                },
                error: function (xhr) {
                    Swal.fire('Error', 'Something went wrong', 'error');
                }
            });
        });




        $(document).on('click', '.deleteBanner', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    let url = '{{ url("/banners") }}/' + id;

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