<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- logo admin -->
    <div class="logo-admin">
        <img src="{{ asset('assets/oval-logo.png') }}" alt="logo">
    </div>

    <!-- login admin -->
     <div class="login-admin">
        <div class="icon-admin">
            <i class="fas fa-user-shield"></i>
        </div>
        <h2> Sign In with Email </h2>
        <p> Enter your email & password to access the admin panel </p>
        <form class="login-form" method="POST" action="{{ route('admin.login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
                <button type="submit"> Sign In </button>
        </form>
     </div>
</body>
</html>
