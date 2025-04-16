<!DOCTYPE html>
<html>
<head>
    <title>Payment Result</title>
</head>
<body>
    <h1>Payment Status</h1>
    <p><strong>Status:</strong> {{ $status }}</p>
    <p><strong>Amount:</strong> {{ $amount / 100 }} SAR</p>

    @if($status === 'paid')
        <p style="color:green;">🎉 Your payment was successful!</p>
    @else
        <p style="color:red;">❌ Payment failed. Please try again.</p>
    @endif
</body>
</html>
