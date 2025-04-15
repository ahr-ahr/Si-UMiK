<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="/register">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="/login">Login here</a></p>
</body>
</html>
