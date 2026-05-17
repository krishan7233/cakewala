@extends('admin.app')

@section('content')
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Cart Order</h1>
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
                            <th>Phone</th>
                            <th>Payment Status</th>
                            <th>Amount</th>
                            <th>Created At</th>
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
            ajax: '{{ route('admin.cart-orders') }}',
            columns: [
                      { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
        { data: 'name', name: 'name' },
        { data: 'email', name: 'email' },
        { data: 'delivery_mobile_number', name: 'delivery_mobile_number' },
        { data: 'payment_status', name: 'payment_status' },
        { data: 'payment_amount', name: 'payment_amount' },
        { data: 'created_at', name: 'created_at' },
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
