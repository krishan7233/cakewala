@extends('admin.app')

@section('content')
<style>
    .wrap-text {
        white-space: normal !important;
        word-wrap: break-word;
        max-width: 300px;
    }
</style>

<div class="ec-content-wrapper">
    <div class="content">
       <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
    <div>
        <h1>Coupons</h1>
        <p class="breadcrumbs">
            <span><a href="{{ url('/dashboard') }}">Home</a></span>
            <span><i class="mdi mdi-chevron-right"></i></span>
            Coupons
        </p>
    </div>
    <div>
        <a href="{{ route('admin.coupons.add') }}" class="btn btn-primary">
            <i class="mdi mdi-plus"></i> Add Coupon
        </a>
    </div>
</div>

        <div class="card card-default">
            <div class="card-body">
                <table id="manual-order-table" class="table table-bordered nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Discount Type</th>
                            <th>Discount Value</th>
                            <th>Max Discount</th>
                            <th>Min Order Value</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Usage Limit</th>
                            <th>Used Count</th>
                            <th>Status</th>
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
<script src="{{ asset('assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/data-tables/datatables.bootstrap5.min.js') }}"></script>
<script>
    $(function () {
        $('#manual-order-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.coupons') }}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'code', name: 'code' },
                { data: 'description', name: 'description' },
                { data: 'discount_type', name: 'discount_type' },
                { data: 'discount_value', name: 'discount_value' },
                { data: 'max_discount', name: 'max_discount' },
                { data: 'min_order_value', name: 'min_order_value' },
                { data: 'start_date', name: 'start_date' },
                { data: 'end_date', name: 'end_date' },
                { data: 'usage_limit', name: 'usage_limit' },
                { data: 'used_count', name: 'used_count' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });
        $(document).on('click', '.delete-btn', function () {
            var url = $(this).data('url');
            Swal.fire({
                title: 'Are you sure?',
                text: "This action cannot be undone.",
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
                            $('#manual-order-table').DataTable().ajax.reload();
                            Swal.fire('Deleted!', response.success, 'success');
                        },
                        error: function () {
                            Swal.fire('Error!', 'Something went wrong.', 'error');
                        }
                    });
                }
            });
        });
    });
</script>
@endsection
