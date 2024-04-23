@extends('layouts.app_admin')

<!DOCTYPE html>
<html lang="en">
<head>
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

        .clickable-button{
            padding: 10px; /* Sesuaikan dengan kebutuhan Anda */
            font-weight: bold;
            font-size: 12px;
            width:100px;
            background-color: #0D0C22;
            color: #ffffff;
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif;
            border-radius: 8px;
            text-align: center; /* Menengahkan teks di dalam tombol */
        }
        .clickable-button-1{
            padding: 10px; /* Sesuaikan dengan kebutuhan Anda */
            font-weight: bold;
            font-size: 12px;
            width:100px;
            background-color: #12938B;
            color: #ffffff;
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif;
            border-radius: 8px;
            text-align: center; /* Menengahkan teks di dalam tombol */
        }

        .clickable-button-2{
            padding: 10px; /* Sesuaikan dengan kebutuhan Anda */
            font-weight: bold;
            font-size: 12px;
            width:100px;
            background-color: #F46B69;
            color: #ffffff;
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif;
            border-radius: 8px;
            text-align: center; /* Menengahkan teks di dalam tombol */
        }
        .search-input {
                    margin-left:125px;
                    margin-top:30px;
                    width: 350px;
                    padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 20px;
                border: 1px solid #ccc; /* Sesuaikan warna dan ketebalan border */
                border-radius: 8px; /* Sesuaikan radius border sesuai kebutuhan */
                outline: none; /* Hilangkan outline pada focus */
                font-size: 12px; /* Sesuaikan ukuran font sesuai kebutuhan */
                transition: border-color 0.3s; /* Efek transisi pada perubahan border-color */
        }

        .search-input:focus {
            border-color: #05CCC0; /* Sesuaikan warna border saat focus */
        }

        .button-container {
            display: flex; /* Menjadikan kontainer tombol sebagai flex container */
            gap: 10px; /* Memberikan jarak antara tombol-tombol */
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
    <form style="margin-top:150px;" action="{{ route('index_user') }}" method="GET">
        <input type="text" name="search" class="search-input" placeholder="Search by name, email, or other attributes">
        <button class="clickable-button" type="submit">Search</button>
    </form>

    <br>
    <table style="margin-top:20px;">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->telp }}</td>
                    <td class="button-container">
                        <form action="{{ route('edit_user', $user) }}" method="get" style="display: inline-block; margin-right: 10px;">
                            <button type="submit" style="border-radius: 2px; outline: none; width:32px; height:32px; background-color: #58D09D; ">
                                <img style="width: 16px; height: 15px;" src="{{ asset('images/edit.png')}}" alt="Edit">
                            </button>
                        </form>

                        <form action="{{ route('show_user', $user) }}" method="get" style="display: inline-block; margin-right: 10px;">
                            <button type="submit" style="border: none; outline: none; background: none; padding: 0;">
                                <img style="width: 16px; height: 16px;" src="{{ asset('images/show.png')}}" alt="Show">
                            </button>
                        </form>

                        <form action="{{ route('delete_user', $user) }}" method="post" style="display: inline-block;">
                            @method('delete')
                            @csrf
                            <button type="submit" style="border: none; outline: none; background: none; padding: 0;" data-toggle="modal" data-target="#hapusModal">
                                <img style="width: 16px; height: 16px;" src="{{ asset('images/delete.png')}}" alt="Delete">
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><b>April'Studio</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              User berhasil dihapus!
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
