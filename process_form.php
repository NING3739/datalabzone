<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first-name"];
    $last_name = $_POST["second-name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "ln729500172@gmail.com";
    $subject = "New Contact Form Submission";
    $message_body = "First Name: $first_name\n"
                  . "Last Name: $last_name\n"
                  . "Email: $email\n\n"
                  . "Message:\n$message";

    // Send email
    mail($to, $subject, $message_body, "From: $email");

    // Redirect to success page
    header("Location: success.html");
    exit();
} else {
    header("Location: about.html");
    exit();
}
?>
