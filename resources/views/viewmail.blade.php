<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terima Kasih!</title>
    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
            background-color: #FAFAFE;"
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header {
            background-color: #05CCC0;
            padding: 10px;
            color: white;
            font-size: 24px;
        }

        section {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .left-column {
            width: 45%;
            text-align: left;
            margin-bottom: 20px;
        }

        .right-column {
            width: 45%;
            text-align: left;
            margin-bottom: 20px;
        }

        h4 {
            color: #333;
        }

        p {
            color: #555;
            font-size: 16px;
            margin-bottom: 10px;
        }

    </style>
</head>
    <body>
        <header>
            <b style="color: #fffffff">Terima Kasih!</b>
        </header>

        <p style="margin-top: 50px;"><b style="color: #333;">Terimakasih telah membeli produk di April'Studio</b></p>
            <section>
            <div class="left-column">
                <h4><b>Product Names</b></h4>
                <p>{{ $productNames }}<br></p>
            </div>
            <div class="right-column">
                <h4><b>Product Links</b></h4>
                <p>{{ $productLinks }}</p>
            </div>
        </section>
        <div style="width: 100%; text-align: left;">
            <h4><b>Penjelasan:</b></h4>
            <p>Anda dapat mengakses dan mengedit desain tersebut sesuai kebutuhan dengan akses selamanya menggunakan Figma.</p>
        </div>
        <p style="margin-top: 50px;"><b style="color: #333;">Selamat Menikmati :)</b></p>

    </body>
</html>
