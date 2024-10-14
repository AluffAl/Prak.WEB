<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            border-radius: 30px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 20px;
            margin: 10px 5px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-green {
            background-color: #4CAF50;
            color: white;
        }

        .btn-gray {
            background-color: #b70000;
            color: rgb(255, 255, 255);
        }

        .result {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Penjumlahan</h2>
        <label for="bilangan1">Angka pertama</label>
        <input type="number" id="bilangan1" placeholder="Masukkan Angka pertama">
        <label for="bilangan2">Angka kedua</label>
        <input type="number" id="bilangan2" placeholder="Masukkan Angka kedua">
        <div style="text-align: center;">
            <button class="btn-green" onclick="hitung()">Jumlahkan</button>
            <button class="btn-gray" onclick="reset()">Reset</button>
        </div>
        <div class="result">
            Hasil: <span id="hasil">0</span>
        </div>
    </div>

    <script>
        function hitung() {
            var bilangan1 = parseFloat(document.getElementById('bilangan1').value);
            var bilangan2 = parseFloat(document.getElementById('bilangan2').value);
            var hasil = bilangan1 + bilangan2;
            document.getElementById('hasil').innerText = hasil;
        }

        function reset() {
            document.getElementById('bilangan1').value = '';
            document.getElementById('bilangan2').value = '';
            document.getElementById('hasil').innerText = '0';
        }
    </script>
</body>

</html>
