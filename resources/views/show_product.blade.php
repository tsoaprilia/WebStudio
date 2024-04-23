@extends('layouts.app_admin')

<!-- show_product.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $product->name_product }}</title>
    <style>

.card{
            width:70%;
            margin: auto;
            margin-top:100px;
        }
        .content {
    margin-top: 160px; /* Sesuaikan margin top agar konten dimulai di bawah container-nav */
}


        .card p {
            margin: 10px 0;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        .total-price {
            display: flex;
            justify-content: space-between;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 10px;
            padding-bottom: 10px;
            border: 1px solid #dddddd; /* Add border */
            border-radius: 5px; /* Add border radius for a rounded appearance */
            margin-left: 30px;
            margin-right: 30px;
            margin-bottom: 30px;

        }
        .about {
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 10px;
            padding-bottom: 10px;
            border: 1px solid #dddddd; /* Add border */
            border-radius: 5px; /* Add border radius for a rounded appearance */
            margin-top: 30px;
            margin-left: 30px;
            margin-right: 30px;
            margin-bottom: 30px;

        }
        .red-text {
            color: #EF9D9C;
        font-weight: bold;
        }
    </style>
</head>
<body style=" font-family: 'Source Sans Pro', sans-serif; background-color: #FAFAFE;">
    @section('content')

    <div class="card">
        <h4 style="padding: 25px; padding-left:40px; background-color:#05ccbf27;"><b><a href="{{ route('index_user') }}" style="color: #000000; text-decoration: none;">{{ $product->name_product }}</a></b></h4>
        <div class="content" style="margin-top: 20px;">
            <div style="background-color: #F8F7F4; border-radius: 5px; margin-left:30px;  margin-right:30px;  height: 300px; display: flex; align-items: center; justify-content: center;">
                <img src="{{ url('uploads/'.$product->image_product) }}" style="max-width: 30%; border-radius: 5px;   margin: auto; display:flex;">
            </div>

        <div class="about">
        <p ><b>About : </b>{{ $product->description }}</p>
        <p ><b>Creator : </b>{{ $product->creator }}</p>
        <p ><b>Kategori : </b>{{ $product->kategori }}</p>
        <p ><b>Link project : </b><a href="{{ $product->link }}" target="_blank">{{ $product->link }}</a></p>
    </div>
        <div class="total-price">
            <p><b>Price :</b></p>
            <p><span class="red-text">RP {{ $product->price }}</span></p>
        </div>
</div>
</div>
    @endsection

</body>
</html>
