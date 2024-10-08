<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
                    <input type="text" id="username" name="username">
                </div>
                <div class="input-group">
                    <label for="password">Password :</label>
                    <input type="password" id="password" name="password">
                </div>
                <button type="submit" class="login-button">LOGIN</button>
            </form>
            <div class="register-link">
                <p>Belum punya akun? <a href="register">Register di sini</a></p>
            </div>
        </div>
    </div>
</body>
</html>
