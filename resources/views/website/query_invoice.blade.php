<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Query Form Invoice</title>
</head>
<body style="margin:0; padding:0; background-color:#f6f6f6; font-family: Arial, sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f6f6f6;">
        <tr>
            <td align="center">
                <table width="100%" style="max-width:600px; margin:20px auto; background-color:#ffffff; border-radius:8px; overflow:hidden;">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background-color:#7e57c2; color:white; padding:20px; font-size:20px;">
                            <strong>New Query Submitted</strong><br>
                            <strong>Query ID:</strong> #{{ $query->id }}
                        </td>
                    </tr>

                    <!-- Customer Info -->
                    <tr>
                        <td style="padding:20px; font-size:14px; color:#333;">
                            <p style="margin:0 0 5px;"><strong>Receiver:</strong> {{ $query->receiver_name ?? 'N/A' }}</p>
                            <p style="margin:0 0 5px;"><strong>Contact:</strong> {{ $query->contact_number ?? 'N/A' }}</p>
                            <p style="margin:0 0 5px;"><strong>City:</strong> {{ $query->city ?? 'N/A' }}</p>
                            <p style="margin:0 0 5px;"><strong>Date & Time:</strong> {{ $query->date_time ?? 'N/A' }}</p>
                        </td>
                    </tr>

                    <!-- Query Details -->
                    <tr>
                        <td style="padding:20px;">
                            <table width="100%" cellpadding="5" cellspacing="0" style="border-collapse: collapse; font-size:14px;">
                                <tr>
                                    <td><strong>Weight</strong></td>
                                    <td>{{ $query->weight }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Details</strong></td>
                                    <td>{{ $query->details ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Reference Photo</strong></td>
                                    <td>
                                        @if($query->reference_photo)
                                            <a href="{{ asset('query-document/' . $query->reference_photo) }}" target="_blank">View Photo</a>
                                        @else
                                            No photo provided
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding:15px 20px; font-size:12px; color:#999;">
                            Thank you for your query. Our team will contact you shortly.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
