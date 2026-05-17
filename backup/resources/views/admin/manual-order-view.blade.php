@extends('admin.app')
@section('content')

<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Product Detail</h1>
                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Manual Order
                </p>
            </div>
            <div>
                <a href="{{ route('admin.manualOrder') }}" class="btn btn-primary"> View All
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Manual Order Detail</h2>
                    </div>

                    <div class="card-body product-detail">
                        <h5 class="mb-3">Order Details</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Date:</strong> {{ $manualOrderDetail->date }}</li>
                            <li class="list-group-item"><strong>Timing:</strong> {{ $manualOrderDetail->timing }}</li>
                            <li class="list-group-item"><strong>Address:</strong> {{ $manualOrderDetail->address }}</li>
                            <li class="list-group-item"><strong>Receiver Name:</strong> {{ $manualOrderDetail->receiver_name }}</li>
                            <li class="list-group-item"><strong>Contact Number:</strong> {{ $manualOrderDetail->contact_number }}</li>
                            <li class="list-group-item"><strong>Alternate Number:</strong> {{ $manualOrderDetail->alternate_number }}</li>
                            <li class="list-group-item"><strong>Occasion:</strong> {{ $manualOrderDetail->occasion }}</li>
                            <li class="list-group-item"><strong>Cake Message:</strong> {{ $manualOrderDetail->cake_message }}</li>
                            <li class="list-group-item"><strong>Flavour:</strong> {{ $manualOrderDetail->flavour }}</li>
                            <li class="list-group-item"><strong>Weight:</strong> {{ $manualOrderDetail->weight }}</li>
                            <li class="list-group-item">
                                <strong>Reference Photo:</strong><br>
                                @if($manualOrderDetail->reference_photo)
                                    <img src="{{ asset('manual-document/'.$manualOrderDetail->reference_photo) }}" alt="Reference Photo" class="img-fluid mt-2" style="max-height: 200px;">
                                @else
                                    N/A
                                @endif
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div> <!-- End Content Wrapper -->


@endsection
