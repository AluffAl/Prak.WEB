<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #2c2a5a;
            color: white;
        }

        header {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #ccc;
        }

        .logo-btn {
            background-color: black;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 20px;
        }

        .icons {
            display: flex;
            gap: 10px;
        }

        .icon-btn {
            background-color: black;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 50%;
        }

        .product-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
        }

        .product-item {
            background-color: #fff;
            color: black;
            text-align: center;
            margin: 10px;
            border-radius: 10px;
            width: 150px;
            padding: 10px;
        }

        .product-item img {
            max-width: 100%;
            border-radius: 10px;
        }

        .product-item.empty {
            background-color: #999;
            color: white;
        }

        .product-item p {
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <button class="logo-btn">LOGO</button>
        </div>
        <div class="icons">
            <button class="icon-btn">Keranjang</button>
            <button class="icon-btn">Akun</button>
        </div>
    </header>

    <section class="product-grid">
        <div class="product-item">
            <img src="{{ asset('img/t shirt.jpg') }}" alt="T-shirt">
            <p>T-shirt</p>
            <p>Rp. 200.000</p>
        </div>
        <div class="product-item">
            <img src="{{ asset('img/sweeter.jpg') }}" alt="Sweater">
            <p>Sweater</p>
            <p>Rp. 500.000</p>
        </div>
        <div class="product-item">
            <img src="{{ asset('img/sweeter crop.webp') }}" alt="Sweater Crop">
            <p>Sweater Crop</p>
            <p>Rp. 350.000</p>
        </div>
        <div class="product-item">
            <img src="{{ asset('img/hoodie.jpg') }}" alt="Hoodie">
            <p>Hoodie</p>
            <p>Rp. 550.000</p>
        </div>
        <!-- Tambahkan item produk kosong -->
        <div class="product-item empty">
            <p>???</p>
        </div>
        <div class="product-item empty">
            <p>???</p>
        </div>
        <div class="product-item empty">
            <p>???</p>
        </div>
    </section>
</body>

</html>
