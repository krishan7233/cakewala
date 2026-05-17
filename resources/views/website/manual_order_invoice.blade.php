<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Manual Order Invoice</title>
</head>
<body style="margin:0; padding:0; background-color:#f6f6f6; font-family: Arial, sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f6f6f6;">
        <tr>
            <td align="center">
                <table width="100%" style="max-width:600px; margin:20px auto; background-color:#ffffff; border-radius:8px; overflow:hidden;">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background-color:#7e57c2; color:white; padding:20px; font-size:20px;">
                            <strong>New Manual Order</strong><br>
                            <strong>Order ID:</strong> #{{ $order->id }}<br>
                            <strong>Occasion:</strong> {{ $order->occasion }}
                        </td>
                    </tr>

                    <!-- Customer Info -->
                    <tr>
                        <td style="padding:20px; font-size:14px; color:#333;">
                            <p style="margin:0 0 5px;"><strong>Receiver:</strong> {{ $order->receiver_name }}</p>
                            <p style="margin:0 0 5px;"><strong>Contact:</strong> {{ $order->contact_number }}</p>
                            <p style="margin:0 0 5px;"><strong>Alternate:</strong> {{ $order->alternate_number ?? 'N/A' }}</p>
                            <p style="margin:0 0 5px;"><strong>Delivery Address:</strong> {{ $order->address }}</p>
                            <p style="margin:0 0 5px;"><strong>Date & Time:</strong> {{ \Carbon\Carbon::parse($order->date)->format('F j, Y') }} at {{ \Carbon\Carbon::parse($order->timing)->format('h:i A') }}</p>
                        </td>
                    </tr>

                    <!-- Cake Details -->
                    <tr>
                        <td style="padding:20px;">
                            <table width="100%" cellpadding="5" cellspacing="0" style="border-collapse: collapse; font-size:14px;">
                                <tr>
                                    <td><strong>Flavour</strong></td>
                                    <td>{{ $order->flavour }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Weight</strong></td>
                                    <td>{{ $order->weight }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Cake Message</strong></td>
                                    <td>{{ $order->cake_message ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Reference Photo</strong></td>
                                    <td>
                                        @if($order->reference_photo)
                                            <a href="{{ asset('manual-document/' . $order->reference_photo) }}" target="_blank">View Photo</a>
                                        @else
                                            No photo provided
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                       <td style="padding:15px 20px; font-size:12px; color:#999;">
    Thank you for your manual order. We will process it as per the provided schedule.<br><br>
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
