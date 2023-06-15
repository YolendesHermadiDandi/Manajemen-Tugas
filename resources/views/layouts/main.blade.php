<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
</head>

<body>
    @include('partials.navbar')
    <div class="main-container">
        @yield('container')
    </div>
    <script src="{{ asset('assets\js\jquery-3.7.0.js') }}"></script>
    <script src="{{ asset('assets\js\dashboard_script.js') }}"></script>
    <script src="https://kit.fontawesome.com/33a42c8835.js" crossorigin="anonymous"></script>


</body>

</html>
