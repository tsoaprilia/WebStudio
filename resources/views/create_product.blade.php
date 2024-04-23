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
        .clickable-button{
            padding: 10px; /* Sesuaikan dengan kebutuhan Anda */
            font-weight: bold;
            font-size: 14px;
            width:824px;
            background-color: #12938B;
            color: #ffffff;
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif;
            border-radius: 5px;
            text-align: center;
            outline: none;
            border:none;
        }

        .clickable-button:focus {
            outline: none;
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
            z-index: 1000;
        }

        .container-nav {
            background-color: #05ccbf27;
            width: 100%;
            height: 100px;
            position: fixed;
            z-index: 1000;
        }



        .form-control:hover {
            border-color: #12938B;
            box-shadow: 0 0 0 0.2rem rgba(5, 204, 191, 0.15);
        }


    </style>

    <body style=" font-family: 'Source Sans Pro', sans-serif; background-color: #FAFAFE;">
        @section('content')
        <form style="width:70%; margin:auto; margin-top:70px; z-index: 999;  border-radius: 10px; padding:30px; border: 1px solid #12938B;" action="{{ route('store_product') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h5 style="margin-bottom: 30px; color: #12938B;">
                <b><a href="{{ route('index_product') }}" style="color: #12938B; text-decoration: none;">Tambah Product</a></b>
            </h5>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name Product</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name_product" placeholder="Name Product">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" placeholder="Description Product">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Link</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="link" placeholder="Link Product">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Creator</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="creator" placeholder="Creator Product">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="price" placeholder="Price Product">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Category</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" name="kategori" value="ui/ux" type="checkbox">
                        <label class="form-check-label" for="gridCheck1">UI/UX Design</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="kategori" value="feeds" type="checkbox">
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
            <div style="outline: none;"  class="form-group row">
                <div style="outline: none;" class="col-sm-10">
                    <button type="submit" class="clickable-button">Create Product</button>
                </div>
            </div>
        </form>
        @endsection

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
