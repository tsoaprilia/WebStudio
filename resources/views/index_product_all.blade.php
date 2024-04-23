@extends('layouts.app_admin')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Product</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

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

        .nav-item, .nav-link {
            background-color: transparent !important;
        }

        .navbar-nav .nav-item a {
            color: #6b7280; /* Warna abu-abu saat tidak di-hover */
            font-weight: normal; /* Tulisan tidak tebal saat tidak di-hover */
            transition: color 0.3s, font-weight 0.3s;
        }

        .navbar-nav .nav-item a:hover {
            color: #000; /* Warna hitam saat di-hover */
            font-weight: bold; /* Tulisan menjadi tebal saat di-hover */
        }

        .navbar-nav .nav-item.active a {
            color: #000; /* Warna hitam saat di halaman aktif */
            font-weight: bold; /* Tulisan menjadi tebal saat di halaman aktif */
            background-color: transparent; /* Pastikan warna latar belakang transparan */
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

        .search-input {
            margin-top:60px;
            width: 350px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 20px;
            border: 1px solid #ccc;
            border-radius: 30px;
            outline: none;
            font-size: 12px;
            transition: border-color 0.3s;
        }

        .search-input:focus {
            border-color: #05CCC0;
        }

        .category {
                margin-left:10px;
            width: 200px; /* Menambah sedikit lebar dropdown agar tidak mepet */
            padding-top: 10px;
            padding-left: 10px;
            padding-bottom: 10px;
            padding-right: 30px; /* Menambah padding-right untuk memberikan ruang pada dropdown arrow */
            border: 1px solid #ccc;
            border-radius: 30px;
            outline: none;
            font-size: 12px; /* Sesuaikan ukuran font sesuai kebutuhan */
            transition: border-color 0.3s;
            appearance: none;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23111111" width="18px" height="18px"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/></svg>') no-repeat right 10px center;
            background-size: 18px;
            background-color: #fff;
            cursor: pointer;
        }

        .filter {
                margin-left:10px;
                width: 120px;
                padding:10px;
                border-radius: 30px; /* Sesuaikan radius border sesuai kebutuhan */
                outline: none; /* Hilangkan outline pada focus */
                font-size: 12px; /* Sesuaikan ukuran font sesuai kebutuhan */
                font-weight: bold;
                color: #ffffff;
                background-color: #05CCC0;
            }
            .search-input-1{
                    margin-top:60px;
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

        .search-input-1:focus {
            border-color: #0D0C22;
        }


        .category-1{
            margin-left:10px;
            width: 200px;
            padding-top: 10px;
            padding-left: 10px;
            padding-bottom: 10px;
            padding-right: 30px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            font-size: 12px;
            transition: border-color 0.3s;
            appearance: none;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23111111" width="18px" height="18px"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/></svg>') no-repeat right 10px center;
            background-size: 18px;
            background-color: #fff;
            cursor: pointer;
        }

        .filter-1{
                margin-left:10px;
                width: 120px;
                padding:10px;
                outline: none;
                font-size: 12px;
                font-weight: bold;
                color: #ffffff;
                background-color: #0D0C22;
        }

        .add{
            margin-left:10px;
            width: 120px;
            padding:10px;
            border-radius: 8px;
            outline: none;
            font-size: 12px;
            font-weight: bold;
            color: #ffffff;
            background-color: #12938B;
        }
    </style>

    <style>
        :root {
        --btnbg: #ffcc00;
        --btnfontcolor: rgb(61, 61, 61);
        --btnfontcolorhover: rgb(255, 255, 255);
        --btnbghover: #ffc116;
        --btnactivefs: rgb(241, 195, 46);


        --label-index: #05CCC0;
        --danger-index: #5bc257;

        --link-color: #000;
        --link-color-hover: #fff;
        --bg-content-color: #ffcc00;

        }

        .container-fluid {
            max-width: 1400px;

        }

        .card {
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            border: 0;
            border-radius: 1rem;
        }

        .card-img,
        .card-img-top {
            border-top-left-radius: calc(1rem - 1px);
            border-top-right-radius: calc(1rem - 1px);
        }


        .card h5 {
            overflow: hidden;
            height: 55px;
            font-weight: 300;
            font-size: 1rem;
        }

        .card h5 a {
        color: black;
        text-decoration: none;
        }

        .card-img-top {
            width: 100%;
            min-height: 250px;
            max-height: 250px;
            object-fit: contain;
            padding: 30px;
        }

        .card h2 {
            font-size: 1rem;
        }


        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }

        /* Centered text */
        .label-top {
            position: absolute;
            background-color: var(--label-index);
            color: #fff;
            top: 8px;
            right: 8px;
            padding: 5px 10px 5px 10px;
            font-size: .7rem;
            font-weight: 600;
            border-radius: 3px;
            text-transform: uppercase;
        }

        .top-right {
            position: absolute;
            top: 24px;
            left: 24px;

            width: 90px;
            height: 90px;
            border-radius: 50%;
            font-size: 1rem;
            font-weight: 900;
            background: #8bc34a;
            line-height: 90px;
            text-align: center;
            color: white;
        }

        .top-right span {
            display: inline-block;
            vertical-align: middle;
        }

        .aff-link {
            font-weight: 500;
        }

        .over-bg {
            background: rgba(53, 53, 53, 0.85);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(0.0px);
            -webkit-backdrop-filter: blur(0.0px);
            border-radius: 10px;
        }
        .bold-btn {

            font-size: 1rem;
            font-weight: 500;
            text-transform: uppercase;
            padding: 5px 50px 5px 50px;
        }
        .box .btn {
            font-size: 1.5rem;
        }

        @media (max-width: 1025px) {
            .btn {
                padding: 5px 40px 5px 40px;
            }
        }
        @media (max-width: 250px) {
            .btn {
                padding: 5px 30px 5px 30px;
            }
        }

        .btn-warning {
            background: var(--btnbg);
            color: var(--btnfontcolor);
            fill: #ffffff;
            border: none;
            text-decoration: none;
            outline: 0;
            border-radius: 100px;
        }
        .btn-warning:hover {
            background: var(--btnbghover);
            color: var(--btnfontcolorhover);
        }
        .btn-check:focus + .btn-warning, .btn-warning:focus {
            background: var(--btnbghover);
            color: var(--btnfontcolorhover);
        }
        .btn-warning:active:focus {
            box-shadow: 0 0 0 0.25rem var(--btnactivefs);
        }
        .btn-warning:active {
            background: var(--btnbghover);
            color: var(--btnfontcolorhover);
        }

        .bg-success {
            font-size: 1rem;
            background-color: var(--btnbg)!important;
            color: var(--btnfontcolor)!important;
        }
        .bg-danger {
            font-size: 1rem;
        }


        .price-hp {
            font-size: 1rem;
            font-weight: 600;
            color: darkgray;
        }

        .amz-hp {
            font-size: .7rem;
            font-weight: 600;
            color: darkgray;
        }

        .fa-question-circle:before {
            color: darkgray;
        }

        .fa-heart:before {
            color:crimson;
        }
        .fa-chevron-circle-right:before {
            color: darkgray;
        }
    </style>
</head>
<body style=" font-family: 'Source Sans Pro', sans-serif; background-color: #FAFAFE;">
        @section('content')

        <div class="container mx-auto mt-8">
            <div class="text-center">
                <h1 class="text-4xl font-source-serif-4" style="margin-top:120px;">Find the best design</h1>
                <p class="text-gray-500 mt-4">April’Studio is the ultimate destination for discovering the world's best design creatives.</p>

               
            </div>
            <!-- Rest of your table -->
            <br>
            <div class="container-fluid bg-transparent my-4 p-3" style="position: relative">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3" >
                    @foreach ($products as $product)
                        <div class="col" style="margin-top: 30px;">
                            <div class="card h-100 shadow-sm" >
                                <form action="{{ route('show_product_user', $product) }}" method="get">
                                    <button type="submit" style="border: none; outline: none; background: none; padding: 0; margin: 0;">
                                        <img src="{{ url('uploads/'.$product->image_product) }}" alt="image" class="card-img-top" alt="product.title">
                                    </button>
                                </form>

                                <div class="label-top shadow-sm">
                                    <a class="text-white">{{ $product->kategori }}</a>
                                </div>
                                <div class="card-body" style="margin-top:-50px;">
                                    <div class="clearfix mb-3">
                                        <span class="float-start badge" style="padding:5px; background-color:#F46B69; color:#ffffff; border-radius: 5px;"> Rp {{ $product->price }}</span>
                                        <span class="float-end"><a class="small text-muted">{{ $product->creator }}</a></span>
                                    </div>
                                    <h6><b>{{ $product->name_product }}</b></h6>
                                    <p>{{ $product->description }}</p>

                                    <form  action="{{ route('add_to_cart', $product) }}" method="post">
                                        @csrf
                                        <button class="btn" style="background-color: #0D0C22; width:100%; color:#ffffff;" type="submit">Add to cart</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    @endsection
</body>
</html>
