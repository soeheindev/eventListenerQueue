<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Link your custom CSS here -->
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="{{ route('register') }}" method="POST">
            <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <br>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <br>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <br>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <br>

            <button type="submit">Register</button>
        </form>
        {{-- <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p> --}}
        <p>Already have an account? <a href="">Login here</a></p>

    </div>
</body>
</html>
