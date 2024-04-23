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
        body {
            font-family: 'Source Sans Pro', sans-serif;
        }
        .non-clickable-button{
            display: inline-block;
            padding: 8px;
            width:100px;
            font-weight: bold;
            background-color: #05CCC0;
            color: #333;
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif; /* Ganti dengan nama font yang Anda inginkan */
            cursor: default; /* Optional: Change cursor style to indicate non-clickable */
            pointer-events: none; /* Make the element non-clickable */
            border-radius: 20px;
        }

        .left-column {
            flex: 1;
        }

        .right-column {
            flex: 1;
            display: flex;
            justify-content: flex-end;
        }

    </style>
</head>
<body style=" font-family: 'Source Sans Pro', sans-serif; background-color: #FAFAFE;">
    @section('content')
    <div class="text-center">
        <a href="#" style="font-size:12px; margin-top:120px; " class="non-clickable-button">{{ $product->kategori }}</a>
        <p class="text-gray-500 mt-4">We are available for stories, and Instagram Feed design projects:</p>
        <h3 class="text-4xl font-source-serif-4" style="margin-top:32px; font-style:underline; font-weight:bold;">{{ $product->name_product }}</h3>
        <div style="background-color: #F8F7F4; border-radius: 16px; margin-top:60px; margin-left: 350px; height: 400px; width:600px; display: flex; align-items: center; justify-content: center;">
            <img src="{{ url('uploads/'.$product->image_product) }}" alt="image" class="img-fluid" style="max-height: 90%; max-width: 90%; border-radius: 16px;">
        </div>
    </div>
    <h5 class="text-3xl font-source-serif-4" style="margin-top:32px; margin-left:400px; font-weight:bold;">About</h5>
    <p class="text-blask-800 mt-4" style="margin-left:400px;">{{ $product->description }}</p>
    <p class="text-gray mt-4" style="margin-left:400px;"><b>Creator :  </b>{{ $product->creator }}</p>
    <p class="text-gray mt-4" style="margin-left:400px;"><b>Kami Menyediakan : </b> Dokumentadi png foto & Figma link akses edit</p>


    <div style="background-color: #05ccbf27; border-radius: 16px; margin-top:60px; margin-left: 350px; width:600px; padding:30px; padding-bottom:40px; display: flex; align-items: center; justify-content: space-between;">
        <div class="left-column">
            <p style="font-weight:bold;">Interested in the design?</p>
            <p style="color:grey; font-weight:bold;">Let's get it..</p>
        </div>

        <div class="right-column" style="display: flex; flex-direction: column; align-items: center;">
            <h4 style="font-weight:bold; color:rgb(128, 3, 3); margin-bottom: 8px; margin-left:40px;" >Rp {{ $product->price }}</h4>

            <form action="{{ route('add_to_cart', $product) }}" method="post">
                @csrf
                <button class="btn" style="background-color: #0D0C22; width:110%; color:#ffffff; margin-left:40px;" type="submit" data-toggle="modal" data-target="#cardModal">Add to cart</button>
            </form>
        </div>
    </div>

    <div class="modal fade" id="cardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><b>April'Studio</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Product berhasil ditambahkan ke card!
            </div>
          </div>
        </div>
    </div>
    @endsection

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
