@extends('admin.app')
@section('content')
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Query</h1>
                <p class="breadcrumbs"><span><a href="{{ url('/dashboard') }}">Home</a></span> <span><i class="mdi mdi-chevron-right"></i></span> Query</p>
            </div>
        </div>

        <div class="card card-default">
            <div class="card-body">
                <table id="query-table" class="table table-bordered nowrap" width="100%">
                   <thead>
                        <tr>
                            <th>Reference Photo</th>
                            <th>Weight</th>
                            <th>Details</th>
                            <th>Receiver Name</th>
                            <th>Contact Number</th>
                            <th>City</th>
                            <th>Date & Time</th>
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
        $('#query-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.queryList') }}',
            columns: [
                { data: 'reference_photo', name: 'reference_photo' },
                { data: 'weight', name: 'weight'},
                { data: 'details', name: 'details' },
                { data: 'receiver_name', name: 'receiver_name' },
                { data: 'contact_number', name: 'contact_number' },
                { data: 'city', name: 'city' },
                { data: 'date_time', name: 'date_time' },
            ]
        });
    });
</script>
@endsection
