<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login.css') }}">
</head>

<body>
<div class="form-login-container" id="formLogin">
    <form action="" class="form-login" method="post">
        {{ csrf_field() }}
        <h1 id="login-title">Login<h1><br>

        <label for="email">E-mail</label><br>
        <input type="text" placeholder="masukkan e-mail" name="email" id="" required><br>

        <div class="white-space"></div>

        <label for="pw">Password</label><br>
        <input type="password" name="pw" id="" required><br>

        <button type="submit" class="green btn-in-form" value="simpan">Log-in</button>
    </form>
</div>
</body>