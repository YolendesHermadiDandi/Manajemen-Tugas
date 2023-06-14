<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>

<body>
    <div class="login-container">
        <h1>Login</h1>
        @if (session()->has('LoginError'))
            <div class="err-message">
                {{ session('LoginError') }}

            </div>
        @endif
        <form id="login-form" method="POST" action="/login">
            @csrf
            @error('email')
                <div class="invalid-feedback">
                    {{ 'Email tidak boleh kosong' }}
                </div>
            @enderror
            <input type="text" class=" @error('username') is-invalid @enderror" id="username" placeholder="Username"
                name="email" autocomplete="none" autofocus>
            @error('password')
                <div class="invalid-feedback">
                    {{ 'Password tidak boleh kosong' }}
                </div>
            @enderror
            <input type="password" class=" @error('password') is-invalid @enderror" id="password" name="password"
                placeholder="Password">
            <button type="submit">Login</button>
        </form>
        <h4>Belum punya Akun? <a href="/register">Daftar</a></h3>
    </div>
</body>

</html>
