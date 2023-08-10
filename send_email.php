<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["nameInput"];
    $email = $_POST["emailInput"];
    $message = $_POST["messageInput"];

    // Sanitize the data (this is a basic example, you should do more thorough validation and sanitization)
    $name = htmlspecialchars($name);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($message);

    // Send the email
    $to = "mr.amhorn@gmail.com"; // Replace with the recipient's email address
    $subject = "New contact from $name";
    $headers = "From: $email";

    // Use the mail() function to send the email
    mail($to, $subject, $message, $headers);

    // You can also handle success and error messages here
    // Redirect or display a thank you message to the user
    
}
?>
