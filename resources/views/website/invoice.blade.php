<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Invoice</title>
</head>
<body style="margin:0; padding:0; background-color:#f6f6f6; font-family: Arial, sans-serif;">
    @php
        $address = \App\Models\DeliveryAddress::find($order->address_id);

    @endphp
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f6f6f6;">
        <tr>
            <td align="center">
                <table width="100%" style="max-width:600px; margin:20px auto; background-color:#ffffff; border-radius:8px; overflow:hidden;">
                    <!-- Header -->
                    <tr>
                        <td style="background-color:#7e57c2; color:white; padding:20px; font-size:20px;">
                            <strong>Order ID :</strong> #{{ $order->payment_id }}<br>
                             <strong>Payment Type:</strong> #{{ $order->payment_type }}<br>
                              <strong>Mobile Number : {{ $address->mobile ?? 'N/A' }}</strong><br>
                              <span><strong>Delivery Location:</strong> {{ $address->address ?? 'N/A' }}</span><br>


                        </td>
                       
                    </tr>

                    <!-- Order Info -->
                    <tr>
                        <td style="padding:20px; font-size:14px; color:#333;">
                            <p style="margin:0 0 5px;">You've received the following order from <strong>{{ $order->user->name }}</strong>:</p>
                            <p style="margin:0; font-size:13px;">Order <a href="#" style="color:#7e57c2; text-decoration:none;">#{{ $order->payment_id }}</a> ({{ \Carbon\Carbon::parse($order->created_at)->format('F j, Y') }})</p>
                        </td>
                    </tr>
                @php $grandTotal = 0; @endphp

                    <!-- Products Table -->
                    @foreach($order->items as $item)
                        @php
                            $product = $item->product;
                            $variant = \App\Models\ProductVariant::find($item->variant_id);
                            $address = \App\Models\DeliveryAddress::find($order->address_id);
                            $image = \App\Models\ProductImage::where('product_id', $item->product_id)->first();
                            $subtotal = $item->quantity * $item->price_per_unit;
                            $grandTotal += $subtotal;

                            $flavourName = \DB::table('flavours')->where('id', $item->cake_flavour)->value('flavour_name'); 
                        @endphp
                        <tr>
                            <td style="padding:15px 20px; border-top:1px solid #eee;">
                                <table width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="80" valign="top">
                                            <img src="{{ asset($image->image) }}" width="60" style="border-radius:5px;" alt="Product Image">
                                        </td>
                                        <td style="padding-left:10px; font-size:13px;">
                                            <strong>{{ $product->name ?? 'N/A' }}</strong><br>
                                          
                                          @if(!empty($variant->size) && $variant->size!='0')
                                            <span>Weight: {{ $variant->size }}</span><br>
                                        @endif

@if(!empty($item->product_message))
    <span>Message: {{ $item->product_message }}</span><br>
@endif

@if(!empty($flavourName))
    <span>Flavour: {{ $flavourName }}</span><br>
@endif

@if(!empty($order->shipping_type_message))
    <span><strong>Delivery Type:</strong> {{ $order->shipping_type_message }}</span><br>
@endif

@if(!empty($order->delivery_date) || !empty($order->time_slot))
    <span>
        <strong>Selected Date and Time:</strong> 
        {{ $order->delivery_date ?? '' }}{{ !empty($order->delivery_date) && !empty($order->time_slot) ? ' | ' : '' }}{{ $order->time_slot ?? '' }}
    </span>
@endif

                                        </td>
                                        <td align="right" valign="top" style="font-size:13px; white-space:nowrap;">
                                            <p>Qty: {{ $item->quantity }}</p>
                                            <p style="margin:0;">₹{{ number_format($item->price_per_unit, 2) }}</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                    @php
                        $shippingChargeTotal = $order->shipping_charge;
                        $grandTotal += $shippingChargeTotal;
                    @endphp
                    <!-- Price Summary -->
                    <tr>
                        <td style="padding:20px; font-size:14px;">
                            <table width="100%" cellpadding="5" cellspacing="0" style="border-collapse:collapse;">
                                <tr>
                                    <td align="right" style="color:#555;">Subtotal:</td>
                                    <td align="right" style="white-space:nowrap;">₹{{ number_format($order->items->sum(fn($item) => $item->quantity * $item->price_per_unit), 2) }}</td>
                                </tr>
                                
                                <tr>
                                    <td align="right" style="color:#555;">Shipping Charges:</td>
                                    <td align="right">₹{{ number_format($shippingChargeTotal, 2) }}</td>
                                </tr>
                                <tr>
                                    <td align="right" style="color:#555;">Payment method:</td>
                                    <td align="right">{{ $order->payment_type ?? 'N/A' }}</td>
                                </tr>
                                <tr style="font-weight:bold;">
                                    <td align="right">Total:</td>
                                    <td align="right">₹{{ number_format($grandTotal, 2) }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                               <td style="padding:15px 20px; font-size:12px; color:#999;">
    Thank you for your order<br><br>
    Regards,<br>
    <strong>Cake Plaza Team</strong><br>
    9873739058<br>
    <a href="https://www.cakeplaza.in" style="color:#999; text-decoration:none;">www.cakeplaza.in</a>
</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
