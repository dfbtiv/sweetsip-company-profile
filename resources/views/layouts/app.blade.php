<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Judul -->
    <title>@yield('title', 'Sweet&Sip')</title>
    <!-- Panggil Css -->
    <link rel="stylesheet" href=" {{ asset('css/style.css') }}">
    <link rel="icon" type="image" href=" {{ asset('assets/oval-logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
        @yield('content')

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
