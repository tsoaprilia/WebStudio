<!-- admin/dashboard.blade.php -->

@extends('layouts.app_admin')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create Product</title>

        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Tautan ke Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <style>
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

        .container-nav {
            background-color: #05ccbf27;
            width: 100%;
            height: 100px;
            position: fixed;
            z-index: 1000; /* Menetapkan nilai z-index yang lebih tinggi */
        }

        .container1 {
            width:80%;
            margin:auto;
        }

        .info-box {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .box {
            display: flex;
            align-items: center;
            background-color: #FFFFFF;
            border-radius: 8px;
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.05);

        }

        .box1 {
            background-color: #FFFFFF;
            border-radius: 8px;
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.05);
        }

        .box_div {
            margin-top:8px;
            height: 99%;
            width: 5px;
            border-radius: 10px;
        }

        .box-content {
            text-align: left;
            margin-left: 30px;
        }

        .h5_div{
            margin-top: 20px;
            font-weight: bold;
            font-size: 16px;
        }

        .box:nth-child(1),
        .box:nth-child(2),
        .box:nth-child(3),
        .box:nth-child(4) {
            grid-row: 1;
        }

        .box:nth-child(5){
            grid-column: span 2;
        }

        .box:nth-child(6) {
            grid-row: 2;
            grid-column: span 2;
        }

        .box:nth-child(7),
        .box:nth-child(8) {
            grid-row: 3;
            grid-column: span 2;
        }
    </style>

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
        <div class="container1">
            <h2 style="margin-top:190px; font-size:20px; font-weight:bold;">Point of Store </h2>
            <div style="margin-top:30px;" class="info-box">
                <div class="box">
                    <h5 class="box_div" style="background-color: #028C84;"></h5>
                    <div class="box-content">
                        <h5 class="h5_div" style="color: #028C84;">User Members</h5>
                        <p>{{ $userCount }}</p>
                    </div>
                </div>
                <div class="box">
                    <h5 class="box_div" style="background-color: #F6C785;"></h5>
                    <div class="box-content">
                        <h5 class="h5_div" style="color: #F6C785;">Orders</h5>
                        <p>{{ $orderCount }}</p>
                    </div>
                </div>
                <div class="box">
                    <h5 class="box_div" style="background-color: #335882;"></h5>
                    <div class="box-content">
                        <h5 class="h5_div" style="color: #335882; margin-right:160px;">UI/UX </h5>
                        <p>{{ $uiUxProductCount }} products</p>
                    </div>
                </div>
                <div class="box">
                    <h5 class="box_div" style="background-color: rgb(141, 149, 161);"></h5>
                    <div class="box-content">
                        <h5 class="h5_div" style="color: rgb(141, 149, 161); margin-right:160px;">Feeds </h5>
                        <p>{{ $feedsProductCount }} Products</p>
                    </div>
                </div>
                <div class="box" style="background-color: #F0F0F0;">
                    <h5 class="box_div" style="background-color: #0D0C22;"></h5>
                    <div class="box-content">
                        <h5 class="h5_div" style="color: #0D0C22;">Total Earnings</h5>
                        <p>Rp {{ $totalEarnings }}</p>
                    </div>
                </div>
                <div class="box" style="background-color: #F0F0F0;">
                    <h5 class="box_div" style="background-color: #0D0C22;"></h5>
                    <div class="box-content">
                        <h5 class="h5_div" style="color: #0D0C22;">Total Products</h5>
                        <p>{{ $totalProductsCount }}</p>
                    </div>
                </div>
                <div class="box" style="background-color: #E1E7F0">
                    <h5 class="box_div" style="background-color: #335882;"></h5>
                    <div class="box-content">
                        <h5 class="h5_div" style="color: #335882;">Most Active User</h5>
                        <p>{{ $mostActiveUser->name }} ({{ $mostActiveUser->email }})</p>
                    </div>
                </div>
                <div class="box" style="background-color: #E1E7F0">
                    <h5 class="box_div" style="background-color: #335882;"></h5>
                    <div class="box-content">
                        <h5 class="h5_div" style="color: #335882;">Best Selling Product</h5>
                        <p>{{ $mostPurchasedProduct->name_product }} ({{ $mostPurchasedProduct->kategori }})</p>
                    </div>
                </div>
            </div>

            <div style="margin-top:30px; background-color:#FCF6ED; padding-left:30px; padding-right:30px; padding-bottom:30px; padding-top:15px;" class="box1">
            <h5 class="h5_div" style="color: #ECBA73;">Product Sold</h5>
            <canvas id="salesChart" style="width:80%; height:80%;"></canvas>
        </div>
    </div>
    <script>
        var ctx = document.getElementById('salesChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($graphData['productName']) !!},
                datasets: [{
                    label: 'Total Penjualan',
                    data: {!! json_encode($graphData['totalSold']) !!},
                    backgroundColor: '#FFE3BB',
                    borderColor: '#ECBA73',
                    borderWidth: 1
                }]
            },
            options: {
            }
        });
    </script>
    @endsection

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </body>
</html>
