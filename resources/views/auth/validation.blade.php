<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #c0a9a9;
    }

    .container {
        background-color: #3b7b3b;
        padding: 30px;
        border-radius: 30px;
        width: 400px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: white;
        margin-bottom: 20px;
    }

    label {
        color: white;
        display: block;
        margin-bottom: 5px;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 30px;
        border: 1px solid #ccc;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    button {
        width: 50%;
        padding: 10px;
        background-color: black;
        color: white;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        text-align: center;
    }

    button:hover {
        background-color: #000000;
    }
</style>

<body>
    <div class="container">
        <form id="registrationForm">
            <h2>Form Pendaftaran</h2>
            <label for="name">Nama</label>
            <input type="text" id="name" name="name">

            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="address">Alamat Lengkap</label>
            <textarea id="address" name="address"></textarea>

            <button type="submit" id="submitBtn">Daftar</button>
        </form>
    </div>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault();


            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const address = document.getElementById('address').value.trim();


            if (name === '' || email === '' || address === '') {
                alert('Semua data harus diisi.');
            } else {
                alert('Form submitted successfully.');
                location.reload();

            }
        });
    </script>
</body>

</html>
