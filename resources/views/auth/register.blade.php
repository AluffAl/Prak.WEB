<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <div class="navbar">
        <div class="logo-navbar">
            <button class="logo-button">LOGO</button>
        </div>
    </div>

    <div class="container">
        <div class="login-box">
            <div class="logo">
                <span>LOGO</span>
            </div>
            <form>
                <div class="input-group">
                    <label for="username">Username :</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password :</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <label for="password_confirmation">Confirm Password :</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button type="submit" class="login-button">DAFTAR</button>
            </form>
            <div class="register-link">
                <p>Sudah memiliki akun? <a href="">Register di sini</a></p>
            </div>
        </div>
    </div>
</body>

</html>
