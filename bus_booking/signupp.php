<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
            <li><a href="index.php">Home</a></li>
                <li><a href="booking.php">Bookings</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="loginn.php">Login</a></li>
                <li><a href="signupp.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Sign Up</h1>
        <form action="signup.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Sign Up</button>
        </form>
    </main>
</body>
</html>
