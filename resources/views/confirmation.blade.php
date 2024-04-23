<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Confirmation and Product Link</title>
</head>
<body>
    <p>Thank you for your payment. Your order has been confirmed.</p>
    <p>Product: {{ $productName }}</p>
    <p>Product Link: <a href="{{ $productLink }}">{{ $productLink }}</a></p>

    <form action="{{ route('confirm_payment', $order) }}" method="post">
        @csrf
        <button type="submit">Confirm</button>
    </form>
</body>
</html>
