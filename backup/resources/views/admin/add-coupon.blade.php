@extends('admin.app')

@section('content')
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Add Coupon</h1>
                <p class="breadcrumbs">
                    <span><a href="{{ url('/dashboard') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>
                    <a href="{{ route('admin.coupons') }}">Coupons</a>
                    <span><i class="mdi mdi-chevron-right"></i></span>
                    Add
                </p>
            </div>
        </div>

        <div class="card card-default">
            <div class="card-body">
                <form action="{{ route('admin.coupons.save') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="code" class="form-label">Code</label>
                            <input type="text" name="code" id="code" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="discount_type" class="form-label">Discount Type</label>
                            <select name="discount_type" id="discount_type" class="form-control" required>
                                <option value="percentage">Percentage</option>
                                <option value="flat">Flat</option>
                                <option value="fixed">Fixed</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="discount_value" class="form-label">Discount Value</label>
                            <input type="number" name="discount_value" id="discount_value" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="max_discount" class="form-label">Max Discount</label>
                            <input type="number" name="max_discount" id="max_discount" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="min_order_value" class="form-label">Min Order Value</label>
                            <input type="number" name="min_order_value" id="min_order_value" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="usage_limit" class="form-label">Usage Limit</label>
                            <input type="number" name="usage_limit" id="usage_limit" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="used_count" class="form-label">Used Count</label>
                            <input type="number" name="used_count" id="used_count" class="form-control" value="0" readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" selected>Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" name="end_date" id="end_date" class="form-control">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Create Coupon</button>
                    <a href="{{ route('admin.coupons') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
