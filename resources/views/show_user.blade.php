@extends('layouts.app_admin')

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .card{
            width:70%;
            margin: auto;
            margin-top:100px;
            margin-bottom:25px;
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
    </style>
</head>
<body>
    @section('content')

    <div class="card">
        <h4 style="padding: 25px; padding-left:40px; background-color:#05ccbf27;"><b><a href="{{ route('index_user') }}" style="color: #000000; text-decoration: none;">Detail User</a></b></h4>
        <div class="content" style="margin-top: 20px;">
        <p style="margin-left:30px;"><b>Name : </b>{{ $user->name }}</p>
        <p style="margin-left:30px;"><b>Email : </b>{{ $user->email }}</p>
        <p style="margin-left:30px;"><b>Phone : </b>{{ $user->telp }}</p>
        <p style="margin-left:30px; margin-bottom:30px;"><b>Role : </b>{{ $user->is_admin ? 'Admin' : 'Member' }}</p>
        <p style="margin-left:30px; margin-top:-20px; margin-bottom:30px;"><b>Created at : </b>
            @if ($user->created_at)
                {{ $user->created_at->format('d M Y H:i:s') }}
            @else
                Not available
            @endif
        </p>


</div>
</div>
    @endsection

</body>
</html>
