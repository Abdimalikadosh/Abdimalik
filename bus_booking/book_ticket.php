<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bus_number = $_POST['bus_number'];
    $departure_city = $_POST['departure_city'];
    $arrival_city = $_POST['arrival_city'];
    $departure_time = $_POST['departure_time'];
    $arrival_time = $_POST['arrival_time'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO bookings (bus_number, departure_city, arrival_city, departure_time, arrival_time, username, email, phone) 
            VALUES ('$bus_number', '$departure_city', '$arrival_city', '$departure_time', '$arrival_time', '$username', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Ticket booked successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
$userEmail = $_POST['email'];

// Email details
$to = $userEmail;
$subject = 'Ticket Booking Confirmation';
$message = 'Dear User, your bus ticket has been successfully booked. Thank you for choosing our service!';

// Headers
$headers = 'From: your_email@example.com' . "\r\n" .
    'Reply-To: your_email@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Ticket booked successfully. Email notification sent.";
} else {
    echo "Error sending email.";
}
?>
