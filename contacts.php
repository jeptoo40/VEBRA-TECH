<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Process the form, e.g., send an email or store the data
    mail("contact@yourdomain.com", "New Message from Contact Form", $message, "From: $email");
}
?>
