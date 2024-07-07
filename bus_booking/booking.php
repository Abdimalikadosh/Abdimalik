<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
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
        <h1>Book a Ticket</h1>
        <form action="book_ticket.php" method="post">
            <label for="bus_number">Bus Number:</label>
            <input type="text" id="bus_number" name="bus_number" required>
            
            <label for="departure_city">Departure City:</label>
            <input type="text" id="departure_city" name="departure_city" required>
            
            <label for="arrival_city">Arrival City:</label>
            <input type="text" id="arrival_city" name="arrival_city" required>
            
            <label for="departure_time">Departure Time:</label>
            <input type="datetime-local" id="departure_time" name="departure_time" required>
            
            <label for="arrival_time">Arrival Time:</label>
            <input type="datetime-local" id="arrival_time" name="arrival_time" required>
            
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>
            
            <button type="submit">Book Ticket</button>
        </form>
    </main>
</body>
</html>
