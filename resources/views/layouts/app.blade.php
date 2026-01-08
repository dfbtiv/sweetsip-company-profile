<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('sweetnsipcompany-profile')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <nav>
        <a href="/home">Home</a>
        <a href="/about">About</a>
        <a href="/menu">Menu</a>
        <a href="/contact-us">Contact Us</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p> © 2026 Sweet&Sip Company Profile</p>
</footer>

<script src=" {{asset('js/script.js') }} "></script>

</body>
</html>
