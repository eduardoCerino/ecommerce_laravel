<!DOCTYPE html>
<html>
<head>
    <title>Formulario de inicio de sesión</title>
    <link rel="stylesheet" href="{{ asset('css/login/login.css') }}">
</head>
<body>
    <div class="left">
        <h1> Login 🤟</h1>
        <h3> Start today to buy some good sneakers</h3>

        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <input type="submit" value="Login" class="btn-submit" style="margin-bottom:15px;">
            @if (isset($password_error))
                <span id="password-error" style="color: red;">{{ $password_error }}</span>
            @endif

        </form>

        <p>Don't have an account? <a href="{{ route('signup') }}">Register here.</a></p>

    </div>
    <div class="right">
        <div class="content">
            <img src="https://seeklogo.com/images/N/nike-jordan-air-shoe-logo-3F633DDA45-seeklogo.com.png" alt="">
        </div>
    </div>

</body>
</html>
