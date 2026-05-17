@extends('admin.app')
@section('content')

<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
            <h1>User Management</h1>
            <p class="breadcrumbs"><span><a href="{{ route('admin.dashbord') }}">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Users</p>
        </div>

        <div class="row">
            <!-- Left: Form -->
            <div class="col-xl-4 col-lg-12">
                <div class="card card-default mb-24px">
                    <div class="card-body">
                        <h4>Add / Edit User</h4>
                        <form id="userForm">
                            @csrf
                            <input type="hidden" name="user_id" id="user_id">

                            <div class="form-group row">
                                <label class="col-12 col-form-label">Name</label>
                                <div class="col-12">
                                    <input id="name" name="name" class="form-control" type="text" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-form-label">Email</label>
                                <div class="col-12">
                                    <input id="email" name="email" class="form-control" type="email" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-form-label">Mobile</label>
                                <div class="col-12">
                                    <input id="mobile" name="mobile" class="form-control" type="text">
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label class="col-12 col-form-label">Role</label>
                                <div class="col-12">
                                    <select name="role" id="role" class="form-control">
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                    </select>
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <label class="col-12 col-form-label">Password</label>
                                <div class="col-12">
                                    <input id="password" name="password" class="form-control" type="password">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right: DataTable -->
            <div class="col-xl-8 col-lg-12">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="userTable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Role</th>
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
<!-- DataTables Scripts -->
<script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>

<script>
$(document).ready(function () {
    let table = $('#userTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route("users.data") }}',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'mobile', name: 'mobile' },
            { data: 'role', name: 'role' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });

    $('#userForm').on('submit', function (e) {
        e.preventDefault();
        let id = $('#user_id').val();

        let url = id 
        ? '{{ url("/admin/users") }}/' + id + '/update'
        : '{{ route("users.store") }}';
        
        // let url = id ? '/admin/users/' + id + '/update' : '/admin/users/store';
        let formData = new FormData(this);

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (res) {
                Swal.fire('Success!', res.message, 'success');
                $('#userForm')[0].reset();
                $('#user_id').val('');
                $('#submitBtn').text('Submit');
                table.ajax.reload();
            },
            error: function () {
                Swal.fire('Error!', 'Something went wrong', 'error');
            }
        });
    });

    $(document).on('click', '.editUser', function () {
        let id = $(this).data('id');
        let url = '{{ url("/admin/users") }}/' + id + '/edit';

        $.get(url, function (data) {
            $('#user_id').val(data.id);
            $('#name').val(data.name);
            $('#email').val(data.email);
            $('#mobile').val(data.mobile);
            $('#role').val(data.role);
            $('#submitBtn').text('Update');
        });
    });

    $(document).on('click', '.deleteUser', function () {
        let id = $(this).data('id');
        let url = '{{ url("/admin/users") }}/' + id;

        Swal.fire({
            title: 'Are you sure?',
            text: "This will delete the user.",
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
                    data: { _token: '{{ csrf_token() }}' },
                    success: function (res) {
                        Swal.fire('Deleted!', res.message, 'success');
                        table.ajax.reload();
                    },
                    error: function () {
                        Swal.fire('Error!', 'Failed to delete user.', 'error');
                    }
                });
            }
        });
    });
});
</script>
@endsection
