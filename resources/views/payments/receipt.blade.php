<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Payment Receipt</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .receipt-container { padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
        h2 { text-align: center; }
        table { width: 100%; margin-top: 20px; border-collapse: collapse; }
        td, th { border: 1px solid #ccc; padding: 8px; }
        .footer { margin-top: 30px; text-align: center; font-size: 0.9em; color: #777; }
    </style>
</head>
<body>
    <div class="receipt-container">
        <h2>Payment Receipt</h2>
        <p><strong>Receipt ID:</strong> {{ $payment->id }}</p>
        <p><strong>Date:</strong> {{ $payment->created_at->format('d M Y, H:i') }}</p>
        <p><strong>Paid By:</strong> {{ auth()->user()->name }}</p>
        
        <table>
            <tr>
                <th>Description</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>{{ $payment->description }}</td>
                <td>${{ number_format($payment->amount, 2) }}</td>
            </tr>
        </table>

        <div class="footer">
            Thank you for your payment!
        </div>
    </div>
</body>
</html>
