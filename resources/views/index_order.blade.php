@extends('layouts.app_admin')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Index Order</title>
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

            .nav-link-nav {
                color: #6b7280;
                font-weight: bold;
                padding: 10px;
                transition: color 0.3s, font-weight 0.3s;
             }

            .nav-link-nav:hover {
                color: #000;
                font-weight: bold;
                text-decoration: none;
            }

            .nav-link-nav.active {
                color: #000;
                font-weight: bold;
                background-color: transparent;
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
                z-index: 1000;
            }

            .paid {
                color: #58D09D;
            }

            .unpaid {
                color: #F46B69;
            }

            .success {
                color: #58D09D;
            }

            .clickable-button-2{
                padding: 10px;
                font-weight: bold;
                font-size: 12px;
                width:100px;
                background-color: #0D0C22;
                color: #ffffff;
                text-decoration: none;
                font-family: 'Source Sans Pro', sans-serif;
                border-radius: 8px;
                text-align: center;
            }

            .clickable-button{
                padding: 10px;
                font-weight: bold;
                font-size: 12px;
                width:100px;
                background-color: #12938B;
                color: #ffffff;
                text-decoration: none;
                font-family: 'Source Sans Pro', sans-serif;
                border-radius: 8px;
                text-align: center;
            }

            .clickable-button-1{
                padding: 10px;
                font-weight: bold;
                font-size: 12px;
                width:100px;
                background-color: #E8B873;
                color: #ffffff;
                text-decoration: none;
                font-family: 'Source Sans Pro', sans-serif;
                border-radius: 8px;
                text-align: center;
            }
            .search-input {
                        margin-left:130px;
                        margin-top:30px;
                        width: 350px;
                        padding-top: 10px;
                    padding-bottom: 10px;
                    padding-left: 20px;
                    border: 1px solid #ccc;
                    border-radius: 8px;
                    outline: none;
                    font-size: 12px;
                    transition: border-color 0.3s;
            }

            .search-input:focus {
                border-color: #05CCC0;
            }

            .a-receipt{
                text-decoration: none;
                color: #000000;
                font-weight: bold;
                transition: color 0.3s ease;
            }


            .a-receipt:hover {
                color: #2980b9;
            }
        </style>
    </head>
    <body style=" font-family: 'Source Sans Pro', sans-serif; background-color: #FAFAFE;">
        @section('content')
        <div style="background-color: #FAFAFE; height: 160px; width: 100%; position: fixed; top: 0; left: 0;">
            <div class="container-nav">
                <div class="links-container-nav">
                    @if(!Auth::user()->is_admin)
                        <a href="{{ url('/cart') }}" class="nav-link-nav {{ Request::is('cart*') ? 'active' : '' }}" onclick="changeColor(this)">YOUR CART</a>
                        <a href="{{ url('/order') }}" class="nav-link-nav {{ Request::is('order*') ? 'active' : '' }}" onclick="changeColor(this)">YOUR ORDERED</a>
                    @else
                        <a href="{{ url('/admin/dashboard') }}" class="nav-link-nav {{ Request::is('admin/dashboard*') ? 'active' : '' }}" onclick="changeColor(this)">DASHBOARD</a>
                        <a href="{{ url('/product') }}" class="nav-link-nav {{ Request::is('product*') ? 'active' : '' }}" onclick="changeColor(this)">PRODUCT</a>
                        <a href="{{ url('/order') }}" class="nav-link-nav {{ Request::is('order*') ? 'active' : '' }}" onclick="changeColor(this)">TRANSACTION</a>
                        <a href="{{ url('/user') }}" class="nav-link-nav {{ Request::is('user*') ? 'active' : '' }}" onclick="changeColor(this)">USERS</a>
                    @endif
                </div>
            </div>
        </div>
        <form style="margin-top:150px;" action="{{ route('index_order') }}" method="GET">
            <input type="text" name="search" class="search-input" placeholder="Search by id, name, or other attributes">
            <button class="clickable-button-2" type="submit">Search</button>
        </form>
        <table style="margin-top:40px;">
            <thead>
                <tr style="font-size:13px; font-weight:bold;">
                    <th>ID</th>
                    <th>USER</th>
                    <th>DATE ORDER</th>
                    <th>PRODUCT NAMES</th>
                    <th>TOTAL ORDER</th>
                    <th>ORDERED</th>
                    <th>STATUS PAYMENT</th>
                    @if($is_admin)
                        <th>ACTION</th>
                        <th>SEND PROJECT</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>
                            @foreach ($order->transactions as $transaction)
                                {{ $transaction->product->name_product}}<br>
                            @endforeach
                        </td>
                        <td>
                            @php
                                $totalOrderPrice = 0; // Initialize the total order price
                                foreach ($order->transactions as $transaction) {
                                    $totalOrderPrice += $transaction->product->price;
                                }
                            @endphp
                            Rp {{ $totalOrderPrice }} <!-- Display the total order price -->
                        </td>
                        <td>
                            <form action="{{ route('show_order', $order) }}" method="get">
                                @csrf
                                <button class="clickable-button-1" type="submit">Show Order</button>
                            </form>

                        </td>
                        <td>
                            @if ($order->is_paid)
                                <span class="paid"><b>Paid</b></span>
                            @else
                                <span class="unpaid"><b>Unpaid</b></span>
                            @endif
                            @if ($order->payment_receipt && Storage::disk('public_uploads')->exists($order->payment_receipt))
                                <button onclick="window.location.href='{{ url('uploads/'.$order->payment_receipt) }}'" style="border-radius: 2px; outline: none; margin-left:5px; width:32px; height:32px; background-color: #58D09D;">
                                    <img style="width: 16px; height: 15px;" src="{{ asset('images/invoice.png')}}" alt="Edit">
                                </button>
                            @else
                                <button style="border-radius: 2px; outline: none; margin-left:5px; width:32px; height:32px; background-color: #F46B69;">
                                    <img style="width: 16px; height: 15px;" src="{{ asset('images/invoice.png')}}" alt="Edit">
                                </button>
                            @endif
                        </td>
                        @if($is_admin)
                            <td>
                                @if ($order->is_paid)
                                    <span class="success"><b>Success</b></span>
                                @else
                                    <form action="{{ route('confirm_payment', $order) }}" method="post">
                                        @csrf
                                        <button class="clickable-button" type="submit">Confirm</button>
                                    </form>
                                @endif
                            </td>
                            <td>
                            <!-- ... -->
                                <form action="{{ route('sendEmail', $order) }}" method="post">
                                    @csrf
                                    <button class="clickable-button-2" type="submit">Send Email</button>
                                </form>
                            <!-- ... -->
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
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
