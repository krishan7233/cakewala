@extends('admin.app')

@section('content')
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Edit Coupon</h1>
                <p class="breadcrumbs">
                    <span><a href="{{ url('/dashboard') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>
                    <a href="{{ route('admin.coupons') }}">Coupons</a>
                    <span><i class="mdi mdi-chevron-right"></i></span>
                    Edit
                </p>
            </div>
        </div>

        <div class="card card-default">
            <div class="card-body">
                <form action="{{ route('admin.coupons.update',$coupon->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="code" class="form-label">Code</label>
                            <input type="text" name="code" id="code" class="form-control" value="{{ $coupon->code }}" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="discount_type" class="form-label">Discount Type</label>
                            <select name="discount_type" id="discount_type" class="form-control" required>
                                <option value="percentage" {{ $coupon->discount_type == 'percentage' ? 'selected' : '' }}>Percentage</option>
                                <option value="flat" {{ $coupon->discount_type == 'flat' ? 'selected' : '' }}>Flat</option>
                                <option value="fixed" {{ $coupon->discount_type == 'fixed' ? 'selected' : '' }}>Fixed</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="discount_value" class="form-label">Discount Value</label>
                            <input type="number" name="discount_value" id="discount_value" class="form-control" value="{{ $coupon->discount_value }}" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="max_discount" class="form-label">Max Discount</label>
                            <input type="number" name="max_discount" id="max_discount" class="form-control" value="{{ $coupon->max_discount }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="min_order_value" class="form-label">Min Order Value</label>
                            <input type="number" name="min_order_value" id="min_order_value" class="form-control" value="{{ $coupon->min_order_value }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="usage_limit" class="form-label">Usage Limit</label>
                            <input type="number" name="usage_limit" id="usage_limit" class="form-control" value="{{ $coupon->usage_limit }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="used_count" class="form-label">Used Count</label>
                            <input type="number" name="used_count" id="used_count" class="form-control" value="{{ $coupon->used_count }}" readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" {{ $coupon->status ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ !$coupon->status ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $coupon->start_date }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" name="end_date" id="end_date" class="form-control" value="{{ $coupon->end_date }}">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="3">{{ $coupon->description }}</textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Update Coupon</button>
                    <a href="{{ route('admin.coupons') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
