@extends('layouts.app_admin')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit {{ $product->name_product }}</title>

        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Tautan ke Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <style>
        .content {
            margin-top: 160px; /* Sesuaikan margin top agar konten dimulai di bawah container-nav */
        }

        .card{
            width:70%;
            margin: auto;
            margin-top:100px;
        }

        .form-control:hover {
            border-color: #12938B;
            box-shadow: 0 0 0 0.2rem rgba(5, 204, 191, 0.15);
        }

        .clickable-button{
            padding: 10px; /* Sesuaikan dengan kebutuhan Anda */
            font-weight: bold;
            font-size: 14px;
            width:795px;
            background-color: #12938B;
            color: #ffffff;
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif;
            border-radius: 5px;
            text-align: center;
            outline: none;
            border:none;
            margin-bottom: 20px;
        }
    </style>
    <body style=" font-family: 'Source Sans Pro', sans-serif; background-color: #FAFAFE;">
        @section('content')
        <div class="card">
            <h4 style="padding: 25px; padding-left:40px; background-color:#05ccbf27;"><b><a href="{{ route('index_product') }}" style="color: #000000; text-decoration: none;">Edit Product</a></b></h4>

            <div class="content" style="margin-top: 20px;">
                <form style="width:90%; margin:auto;  z-index: 999;" action="{{ route('update_product', $product) }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name Product</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name_product" value="{{ $product->name_product }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="link" value="{{ $product->link }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Creator</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="creator" value="{{ $product->creator }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Category</div>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" name="kategori" value="ui/ux" type="checkbox" {{ $product->kategori === 'ui/ux' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gridCheck1">UI/UX Design</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="kategori" value="feeds" type="checkbox" {{ $product->kategori === 'feeds' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gridCheck1">Feeds Instagram</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image_product">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="clickable-button">Save Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>
</html>
