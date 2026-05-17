@extends('admin.app')
@section('content')
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Product</h1>
                <p class="breadcrumbs"><span><a href=""{{ url('/dashboard') }}"">Home</a></span> <span><i class="mdi mdi-chevron-right"></i></span> Product</p>
            </div>
            <div>
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add Product</a>
            </div>
        </div>

        <div class="card card-default">
            <div class="card-body">
                <table id="product-table" class="table table-bordered nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Subcategory</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-js')
<!-- DataTables -->
<script src="{{ asset('assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/data-tables/datatables.bootstrap5.min.js') }}"></script>
<script>
    $(function() {
        $('#product-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.products.productlist_data') }}',
            columns: [
                { data: 'image', name: 'image', orderable: false, searchable: false },
                { data: 'name', name: 'name' },
                { data: 'category', name: 'category.name' },
                { data: 'subcategory', name: 'subcategory.name' },
                { data: 'price', name: 'variants.price' },
                { data: 'stock', name: 'stock' },
                { data: 'status', name: 'status' },
                { data: 'date', name: 'created_at' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });


        $('#product-table').on('click', '.delete-btn', function () {
            let id = $(this).data('id');
            let url = '{{ url("/admin/products/") }}/' + id;

            Swal.fire({
                title: 'Are you sure?',
                text: "This product will be deleted!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
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
                        error: function (err) {
                            Swal.fire('Error!', 'Something went wrong.', 'error');
                        }
                    });
                }
            });
        });
    });
</script>
@endsection
