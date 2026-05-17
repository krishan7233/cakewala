@extends('admin.app')

@section('content')
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Order</h1>
                <p class="breadcrumbs">
                    <span><a href="{{ url('/dashboard') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>
                    Order
                </p>
            </div>
        </div>

        <div class="card card-default">
            <div class="card-body">
                <table id="manual-order-table" class="table table-bordered nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>Sr.No.</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Payment ID</th>
                            <th>Payment Status</th>
                            <th>Amount</th>
                            <th>Order Status</th>
                            <th>Created At</th>
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
    $(function () {
        $('#manual-order-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.orders') }}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'name', name: 'user.name' },
                { data: 'email', name: 'user.email' },
                { data: 'payment_id', name: 'payment_id' },
                { data: 'payment_status', name: 'payment_status' },
                { data: 'payment_amount', name: 'payment_amount' },
                { data: 'order_status', name: 'order_status' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action' },
            ]
        });

        // Handle order status change
        $(document).on('change', '.order-status-dropdown', function () {
            var orderId = $(this).data('id');
            var status = $(this).val();

            $.ajax({
                url: '{{ route('admin.order.update_status') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    order_id: orderId,
                    order_status: status
                },
                success: function (response) {
                    messageSweetalert(response);
                },
                error: function () {
                   messageSweetalert(response);
                }
            });
        });
    });
</script>
@endsection
