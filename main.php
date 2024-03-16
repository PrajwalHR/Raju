<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'prajwalravikumar10gamil.com'; // Replace with your email address
    $subject = 'New Client';

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    $mailBody = "User Name: $username\nContact Number: $contactNumber\nEmail ID: $email\n\n$message";

    mail($to, $subject, $mailBody, $headers);
    
    // You can customize the response message here if needed
    echo 'Email sent successfully!';
} else {
    // Handle invalid requests
    echo 'Invalid request!';
}
?>

