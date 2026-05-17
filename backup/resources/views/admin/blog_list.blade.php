@extends('admin.app')

@section('content')
<style>
    .ck-editor__editable_inline {
        min-height: 300px; /* or 500px, depending on need */
        max-height: 800px;
        overflow-y: auto;
    }
</style>

<div class="container-fluid">
    <h4 class="mb-3">Blog Management</h4>

    <form id="blogForm" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="blog_id" name="blog_id">

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Slug <span class="text-danger">*</span></label>
                <input type="text" name="slug" id="slug" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Meta Title</label>
                <input type="text" name="meta_title" id="meta_title" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label>Meta Description</label>
                <textarea name="meta_description" id="meta_description" class="form-control" rows="2"></textarea>
            </div>

            <div class="col-md-6 mb-3">
                <label>Keywords (comma separated)</label>
                <input type="text" name="keywords" id="keywords" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label>Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label for="blog_content">Blog Content</label>
                    <textarea name="blog_content" id="blog_content" rows="10" class="form-control"></textarea>
                </div>
            </div>

         
            
            <div class="col-md-6 mb-3">
                <label>Feature Image</label>
                <input type="file" name="feature_image" id="feature_image" class="form-control">
                <img id="previewImage" src="" alt="Preview" style="height: 80px; margin-top: 10px; display: none;">
            </div>

            <div class="col-md-12 mb-3">
                <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary" onclick="resetForm()">Clear</button>
            </div>
        </div>
    </form>

    <hr>

    <div class="table-responsive">
        <table class="table table-bordered" id="blogTable">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@section('custom-js')
	<!-- Data Tables -->
	<script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
	<script src="{{asset('assets/plugins/data-tables/datatables.bootstrap5.min.js')}}"></script>
	<script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>


    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>



<script>

function generateSlug(text) {
    return text
        .toString()
        .toLowerCase()
        .trim()
        .replace(/[\s\W-]+/g, '-')   // Replace spaces and non-word characters with hyphens
        .replace(/^-+|-+$/g, '');    // Remove leading/trailing hyphens
}

$('#name').on('keyup change', function () {
    let slug = generateSlug($(this).val());
    $('#slug').val(slug);
});

$(document).ready(function () {
   
    let blogEditor;
    ClassicEditor
    .create(document.querySelector('#blog_content'), {
        simpleUpload: {
            uploadUrl: '{{ route("admin.blog.uploadImage") }}',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }
    })
    .then(editor => {
        blogEditor = editor;
    })
    .catch(error => {
        console.error(error);
    });



    const table = $('#blogTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route("admin.blogs.data") }}',
        columns: [
            { data: 'feature_image', name: 'feature_image' },
            { data: 'name', name: 'name' },
            { data: 'slug', name: 'slug' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });

    $('#blogForm').submit(function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        $.ajax({
            url: '{{ route("admin.blogs.store") }}',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (res) {
                Swal.fire('Success!', res.message, 'success');
                $('#blogForm')[0].reset();
                $('#blog_id').val('');
                if (blogEditor) {
                    blogEditor.setData('');
                }
                $('#submitBtn').text('Submit');
                $('#previewImage').attr('src', '').hide();
                table.ajax.reload();
            },
            error: function (xhr) {
                Swal.fire('Error!', 'Something went wrong', 'error');
            }
        });
    });

    $(document).on('click', '.editBlog', function () {
        const id = $(this).data('id');
        let url = '{{ url("/blogs") }}/' + id + '/edit';

        $.get(url, function (data) {
            $('#blog_id').val(data.id);
            $('#name').val(data.name);
            $('#slug').val(data.slug);
            $('#meta_title').val(data.meta_title);
            $('#meta_description').val(data.meta_description);
            $('#keywords').val(data.keywords);
            blogEditor.setData(data.blog_content); // ✔ This is key
            $('#status').val(data.status);

            if (data.feature_image) {
                $('#previewImage').attr('src', '/' +  data.feature_image).show();
            }

            $('#submitBtn').text('Update');
            $('html, body').animate({ scrollTop: 0 }, 'fast');
        });
    });

    $(document).on('click', '.deleteBlog', function () {
        const id = $(this).data('id');
        let url = '{{ url("/blogs") }}/' + id;

        Swal.fire({
            title: 'Are you sure?',
            text: "This blog will be permanently deleted.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!'
        }).then(result => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (res) {
                        Swal.fire('Deleted!', res.message, 'success');
                        table.ajax.reload();
                    },
                    error: function () {
                        Swal.fire('Error!', 'Failed to delete blog.', 'error');
                    }
                });
            }
        });
    });

    $('#feature_image').change(function () {
        const reader = new FileReader();
        reader.onload = function (e) {
            $('#previewImage').attr('src', e.target.result).show();
        }
        reader.readAsDataURL(this.files[0]);
    });
});

function resetForm() {
    $('#blog_id').val('');
    $('#previewImage').hide().attr('src', '');
    $('#submitBtn').text('Submit');
}
</script>
@endsection
