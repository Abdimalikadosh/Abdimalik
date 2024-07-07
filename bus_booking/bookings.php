<?php
include 'db.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: loginn.php");
    exit();
}

$username = $_SESSION['username'];
$sql = "SELECT * FROM booking WHERE user_id = (SELECT id FROM users WHERE username = '$username')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Bus Number</th><th>Seat Number</th><th>Date</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["bus_number"] . "</td><td>" . $row["seat_number"] . "</td><td>" . $row["date"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No bookings found";
}

$conn->close();
?>
