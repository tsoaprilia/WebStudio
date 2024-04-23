<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
        img {
            max-width: 80px;
            height: 60px;
        }
    </style>
</head>
<body style=" font-family: 'Source Sans Pro', sans-serif; background-color: #FAFAFE;">
    @php
        $total_price=0;
    @endphp
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Link</th>
                <th>Creator</th>
                <th>Price</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carts as $cart)
                <tr>
                    <td><img src="{{ url('storage/'.$cart->product->image_product) }}" alt="Product Image"></td>
                    <td><a href="{{ $cart->product->link }}" target="_blank">{{ $cart->product->link }}</a></td>
                    <td>{{ $cart->product->creator }}</td>
                    <td>{{ $cart->product->price }}</td>
                    <td>{{ $cart->product->kategori }}</td>
                    <td>
                        <form action="{{ route('delete_cart', $cart) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @php
                    $total_price += $cart->product->price;
                @endphp
            @endforeach
            <p>RP {{ $total_price }}</p>
            <form action="{{ route('checkout') }}" method="post">
                @csrf
                <button type="submit">Check out</button>
            </form>
        </tbody>
    </table>
</body>
</html>
