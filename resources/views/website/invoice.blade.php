<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Order Invoice</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; color: #333;">
    <div style="max-width: 800px; margin: auto; background-color: #ffffff; padding: 30px; border-radius: 8px; border: 1px solid #ddd;">
        <h2 style="margin-top: 0; color: #4CAF50;">Order Invoice</h2>
        <p><strong>Order ID:</strong> {{ $order->payment_id }}</p>
        <p><strong>User:</strong> {{ $order->user->name ?? 'N/A' }}</p>

        <table width="100%" cellpadding="10" cellspacing="0" style="border-collapse: collapse; margin-top: 20px; font-size: 14px;">
            <thead>
                <tr style="background-color: #f0f0f0; text-align: left;">
                    <th style="border: 1px solid #ddd;">#</th>
                    <th style="border: 1px solid #ddd;">Product Name</th>
                    <th style="border: 1px solid #ddd;">Delivery Date Time</th>
                    <th style="border: 1px solid #ddd;">Shipping Charge</th>
                    <th style="border: 1px solid #ddd;">Product Message</th>
                    <th style="border: 1px solid #ddd;">Quantity</th>
                    <th style="border: 1px solid #ddd;">Price Per Unit</th>
                    <th style="border: 1px solid #ddd;">Subtotal</th>
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
                        <td style="border: 1px solid #ddd;">{{ $key + 1 }}</td>
                        <td style="border: 1px solid #ddd;">{{ $item->product->name ?? 'N/A' }}</td>
                        <td style="border: 1px solid #ddd;">{{ $item->delivery_date ?? 'N/A' }}</td>
                        <td style="border: 1px solid #ddd;">{{ number_format($item->shipping_charge ?? 0, 2) }}</td>
                        <td style="border: 1px solid #ddd; word-break: break-word;">{{ $item->product_message ?? 'N/A' }}</td>
                        <td style="border: 1px solid #ddd;">{{ $item->quantity }}</td>
                        <td style="border: 1px solid #ddd;">{{ number_format($item->price_per_unit, 2) }}</td>
                        <td style="border: 1px solid #ddd;">{{ number_format($subtotal, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr style="background-color: #f9f9f9;">
                    <td colspan="7" style="border: 1px solid #ddd; text-align: right; font-weight: bold;">Total Amount:</td>
                    <td style="border: 1px solid #ddd; font-weight: bold;">{{ number_format($grandTotal, 2) }}</td>
                </tr>
            </tfoot>
        </table>

        <p style="margin-top: 30px; font-size: 13px; color: #777;">Thank you for your order!</p>
    </div>
</body>
</html>
