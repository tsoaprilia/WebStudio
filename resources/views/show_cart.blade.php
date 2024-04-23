@extends('layouts.app_admin')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <style>
        table {
            width: 80%;
            margin:auto;
        }
        th{
            padding: 8px;
            border-bottom: 2px solid #0d262427;
        }

        td {
            margin-top: 10px;
            padding: 10px;
        }
        .imgg{
            max-width: 100px;
            height: 100px;
            border-radius: 12px;
        }

        .nav-link-nav {
            text-decoration: none;
            padding: 10px;
            color: #7e7e7ed7;
            border-radius: 5px;
            font-weight: bold;
        }

        .nav-link-nav.active,
        .nav-link-nav:hover {
            color: rgb(8, 8, 8);
            text-decoration: none;
        }

        .container-nav {
            background-color: #05ccbf27;
            width: 100%;
            height: 100px;
            margin-top: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            z-index: 100}

        .clickable-button {
            padding: 5px 20px; /* Sesuaikan dengan kebutuhan Anda */
            font-weight: bold;
            font-size: 14px;
            background-color: #05CCC0;
            color: #ffffff;
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif;
            border-radius: 20px;
            text-align: center; /* Menengahkan teks di dalam tombol */
        }

        .clickable-button-2{
            padding: 10px 20px; /* Sesuaikan dengan kebutuhan Anda */
            font-weight: bold;
            font-size: 14px;
            width:180px;
            background-color: #0D0C22;
            color: #ffffff;
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif;
            border-radius: 8px;
            text-align: center; /* Menengahkan teks di dalam tombol */
        }

        .price {
            width: 80%;
            margin:auto;
        }
    </style>
</head>
<body style=" font-family: 'Source Sans Pro', sans-serif; background-color: #FAFAFE;">
    @section('content')
    @php
        $total_price=0;
    @endphp

    <div style="background-color: #FAFAFE; height: 160px; width: 100%; position: fixed; top: 0; left: 0;">
        <div class="container-nav">
            <div class="links-container-nav">
                <a href="{{ url('/cart') }}" class="nav-link-nav active" onclick="changeColor(this)">YOUR CART</a>
                <a href="{{ url('/order') }}" class="nav-link-nav" onclick="changeColor(this)">YOUR ORDER</a>
            </div>
        </div>
    </div>
    <table class="content-below" style="margin-top:200px;">
        <thead>
            <tr>
                <th>Image</th>
                <th>Creator</th>
                <th>Kategori</th>
                <th>Price</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carts as $cart)
                <tr>
                    <td><img class="imgg" src="{{ url('uploads/'.$cart->product->image_product) }}" alt="Product Image"></td>
                    <td>{{ $cart->product->creator }}</td>
                    <td>{{ $cart->product->kategori }}</td>
                    <td>{{ $cart->product->price }}</td>
                    <td style="text-align: center;">
                        <form action="{{ route('delete_cart', $cart) }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="clickable-button" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @php
                    $total_price += $cart->product->price;
                @endphp
            @endforeach
        </tbody>
    </table>
    <div class="price" style="border-top: 2px solid #0d262427; margin-top:40px; padding:20px;  display: flex; justify-content: space-between; align-items: center;">
        <p style="margin-top:20px;"><b>SHOPPING CART TOTAL</b></p>
        <p style="margin-left: 380px; margin-top:20px;">Rp {{ $total_price }}</p>
        <form action="{{ route('checkout') }}" method="post">
            @csrf
            <button  class="clickable-button-2" type="submit">Check out</button>
        </form>
    </div>
    @endsection
    <script>
        function changeColor(element) {
            // Menghapus kelas active dari semua elemen dengan kelas nav-link-nav
            var links = document.querySelectorAll('.nav-link-nav');
            links.forEach(function(link) {
                link.classList.remove('active');
            });

            // Menambahkan kelas active pada elemen yang diklik
            element.classList.add('active');
        }
    </script>
</body>
</html>
