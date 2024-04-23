@extends('layouts.app_admin')

<!-- show_product.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Order</title>

    <!-- Tautkan Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Tautkan Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.21.0/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
        }

        .card{
            width:70%;
            margin: auto;
            margin-top:100px;
        }
        .green-text {
            color: #12938B;
            font-weight: bold;
        }

        .red-text {
            color: #EF9D9C;
            font-weight: bold;
        }

        .total-price {
            display: flex;
            justify-content: space-between;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 15px;
            border: 1px solid #dddddd; /* Add border */
            border-radius: 5px; /* Add border radius for a rounded appearance */
            margin-left: 25px;
            margin-right: 25px;
        }

        .total-label {
            font-weight: bold;
        }

        .red-text {
            color: #EF9D9C;
        font-weight: bold;
        }

        .custom-file-upload input[type="file"] {
            background-color:  #12938B;
            width: 100%;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .clickable-button-2{
            padding-top: 15px;
            padding-bottom: 15px;
            font-weight: bold;
            font-size: 14px;
            width:242px;
            background-color: #0D0C22;
            color: #ffffff;
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif;
            border-radius: 5px;
            text-align: center; /* Menengahkan teks di dalam tombol */
        }

        .bank-payment {
            margin-top:15px;
            display: flex;
            flex-direction: column; /* Display items in a column */
            align-items: flex-start;
            margin-left: 25px;
            margin-right: 25px;
            border: 1px solid #dddddd; /* Add border */
            border-radius: 5px; /* Add border radius for a rounded appearance */
        }

        .bank-label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .clickable2 {
            font-weight: bold;
            font-size: 32px;
            background-color: transparent;
            color: #12938B;
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif;
            outline: none; /* Menonaktifkan focus outline */
        }

        .clickable2,
        .clickable2:focus,
        .clickable2:active {
            outline: none !important;
            box-shadow: none !important;
        }

    </style>
</head>
<body style=" font-family: 'Source Sans Pro', sans-serif; background-color: #FAFAFE;">
    @section('content')
    @php
        $total_price=0;
    @endphp

    <div class="card">

        <div style="display: flex; padding: 25px; background-color: #05ccbf27;">
            <button class="clickable2" style="margin-right: 0;" onclick="window.location.href='{{ route('index_order') }}'"><<</button>
            <h4 style="margin-left: 0; margin-top:10px;"><b>Order Detail & Payment</b></h4>
        </div>


        <p style="padding-top:25px; padding-left:25px;"><b>Order Id :</b> {{ $order->id }}</p>
        <p style="padding-left:25px;"><b>User : </b> {{ $order->user->name }}</p>
        <p style="padding-left:25px;"><b>Tanggal order : </b> {{ $order->created_at }}</p>

        <div>
            <p style="padding-left:25px;"><b>Products :</b></p>
            <ul style="padding-left:70px;" >
                @foreach ($order->transactions as $transaction)
                    <li style="padding-left:10px;">
                        {{ $transaction->product->name_product }} = <span class="green-text">Rp {{ $transaction->product->price }}</span>
                    </li>
                    @php
                        $total_price += $transaction->product->price;
                    @endphp
                @endforeach
            </ul>
        </div>


        <div class="total-price">
            <p class="total-label">Total Price:</p>
            <p><span class="red-text">RP {{ $total_price }}</span></p>
        </div>


        @if(Auth::user()->is_admin)
        <div style="margin-top:15px; margin-bottom:20px;" class="total-price">
            @if($order->is_paid)
                <p class="total-label green-text">LUNAS</p>
            @else
                <p class="total-label red-text">Pembayaran belum dilakukan.</p>
            @endif
        </div>
        @else
            @if ($order->is_paid == false && $order->payment_receipt == null)
                    <div class="bank-payment">
                        <br>
                        <p style="padding-left:25px; padding-top:px;"><b>Metode Pembayaran :</b></p>
                        <ul style="padding-left:70px;" >
                                <li style="padding-left:10px;">
                                    <p><b>Transfer Bank BRI :</b> 128156667632 (Aprilia Dwi Cristyana)</p>
                                </li>
                                <li style="padding-left:10px;">
                                    <p><b>Transfer Bank BCA :</b> 233156777638 (Aprilia Dwi Cristyana)</p>
                                </li>
                                <li style="padding-left:10px;">
                                    <p><b>Transfer Bank BNI :</b> 091029888699 (Aprilia Dwi Cristyana)</p>
                                </li>
                                <li style="padding-left:10px;">
                                    <p><b>Transfer Bank MANDIRI :</b> 999156777638 (Aprilia Dwi Cristyana)</p>
                                </li>
                                <li style="padding-left:10px;">
                                    <p><b>Transfer OVO :</b> 081336730560 (Aprilia Dwi Cristyana)</p>
                                </li>
                                <li style="padding-left:10px;">
                                    <p><b>Transfer SHOPEE PAY :</b> 082336730560 (Aprilia Dwi Cristyana)</p>
                                </li>
                        </ul>
                        <p style="padding-left:25px; padding-top:15px;">Pilih salah satu metode pembayarannya, kemudian kirim bukti transfernya</b></p>
                    </div>
                        <form style="margin-bottom:10px;" action="{{ route('submit_payment_receipt', $order) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="payment_receipt" style="padding-left:25px; padding-top:30px;"><b>Upload payment receipt here</b></label>
                            <label for="payment_receipt" class="custom-file-upload">
                                <input type="file" name="payment_receipt" id="payment_receipt" required>
                            </label>
                            <button class="clickable-button-2" type="submit" >Submit payment</button>
                        </form>
            @else
            <div style="margin-top:30px;" class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Bukti Pembayaran telah terkirim!</strong> Tunggu konfirmasi dari kami...  Apabila status sudah "Paid" cek email segera.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                    <div style="margin-top:15px; margin-bottom:20px;" class="total-price">
                        <p class="total-label green-text">Project dikirim melalui email Anda.</p>
                    </div>
            @endif
            @endif
    </div>
    @endsection
</body>
</html>
