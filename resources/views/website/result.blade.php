@extends('website.website_app')
@section('content')
request()->is('offline-confiramtion')
<style>

.card.shadow.p-4 {
    padding: 10px;
}
h4 {
    font-size: 25px;
  
}
.container3 {
    margin-top: 190px!important;
    width: 95%;
    margin: auto;
    padding-bottom: 65px;
}
    @media only screen and (max-width: 600px) {
 .container3 {
    margin-top: 120px!important;
}
}
</style>
<div class="container3 mt-5">
    <div class="shadow p-4" style="text-align:center;align-item:center">
        <h4 class="mb-3">Order Id: {{ $data['order_id'] ?? $data['tracking_id'] }}</h4>
        <h4 class="mb-3">Order successfully Placed</h4>
       <!-- <h4 class="mb-3">Payment Details:</h4>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Order ID</th>
                    <td>{{ $data['order_id'] ?? $data['tracking_id'] }}</td>
                </tr>
                <tr>
                    <th>Tracking ID</th>
                    <td>{{ $data['tracking_id'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Bank Reference No</th>
                    <td>{{ $data['bank_ref_no'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Payment Mode</th>
                    <td>{{ $data['payment_mode'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Card Name</th>
                    <td>{{ $data['card_name'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Currency</th>
                    <td>{{ $data['currency'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td>{{ $data['amount'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Billing Name</th>
                    <td>{{ $data['billing_name'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Billing Phone</th>
                    <td>{{ $data['billing_tel'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Billing Email</th>
                    <td>{{ $data['billing_email'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Status Message</th>
                    <td>{{ $data['status_message'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Transaction Date</th>
                    <td>{{ $data['trans_date'] ?? '-' }}</td>
                </tr>
            </tbody>
        </table>
-->
        <a href="{{ url('/') }}" class="btn btn-primary mt-3">Go to Home</a>
    </div>
</div>
@endsection
