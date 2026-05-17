@extends('admin.app')

@section('content')
<div class="container mt-4">
    <h2>Order Detail (ID: ORD-{{ $order->id }})</h2>

    <p><strong>Payment ID:</strong> {{ $order->payment_id }}</p>
    <p><strong>User:</strong> {{ $order->user->name ?? 'N/A' }}</p>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price Per Unit</th>
                <th>Subtotal</th>
                <th>Order Image</th>
            </tr>
        </thead>
        <tbody>
            @php $grandTotal = 0; @endphp

            @foreach($order->items as $key => $item)
                @php
                    $subtotal = $item->quantity * $item->price_per_unit;
                    $grandTotal += $subtotal;
                @endphp
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->product->name ?? 'N/A' }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ number_format($item->price_per_unit, 2) }}</td>
                    <td>{{ number_format($subtotal, 2) }}</td>
                    <td><a href="{{asset($item->order_image)}}">Link</a></td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4" class="text-end">Total Amount:</th>
                <th>{{ number_format($grandTotal, 2) }}</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
