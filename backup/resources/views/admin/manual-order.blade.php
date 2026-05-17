@extends('admin.app')
@section('content')
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Manual Order</h1>
                <p class="breadcrumbs"><span><a href=""{{ url('/dashboard') }}"">Home</a></span> <span><i class="mdi mdi-chevron-right"></i></span> Manual Order</p>
            </div>
        </div>

        <div class="card card-default">
            <div class="card-body">
                <table id="manual-order-table" class="table table-bordered nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Timing</th>
                            <th>Receiver Name</th>
                            <th>Contact Number</th>
                            <th>Alternate Phone Number</th>
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
        $('#manual-order-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.manualOrder') }}',
            columns: [
                { data: 'date', name: 'date'},
                { data: 'timing', name: 'timing' },
                { data: 'receiver_name', name: 'receiver_name' },
                { data: 'contact_number', name: 'contact_number' },
                { data: 'alternate_number', name: 'alternate_number' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>
@endsection
