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
                <th>Image</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price Per Unit</th>
                <th>Subtotal</th>
                <th>Weight</th>
                <th>Message</th>
                <th>Flavour</th>
                <th>Order Image</th>
            </tr>
        </thead>
        <tbody>
            @php $grandTotal = 0; @endphp

            @foreach($order->items as $key => $item)
                @php
                    $subtotal = $item->quantity * $item->price_per_unit;
                    $grandTotal += $subtotal;
                    $image = \App\Models\ProductImage::where('product_id', $item->product_id)->first();
                     $varient_data = \App\Models\ProductVariant::where('id', $item->variant_id)->first();
                    $flavourName = \DB::table('flavours')->where('id', $item->cake_flavour)->value('flavour_name'); 
                @endphp
                <tr>
                    <td>{{ $key + 1 }}</td>
                     <td>
                                            <img src="{{ asset($image->image) }}" width="60" style="border-radius:5px;" alt="Product Image">
                                        </td>
                    <td>{{ $item->product->name ?? 'N/A' }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ number_format($item->price_per_unit, 2) }}</td>
                    <td>{{ number_format($subtotal, 2) }}</td>
                      <td>{{ $varient_data->size ?? 'N/A' }}</td>
                     <td>{{ $item->product_message ?? 'N/A' }}</td>
                     <td>{{ $flavourName ?? 'N/A' }}</td>
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
