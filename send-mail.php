<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Change to your email address
    $to = "ameensulthan369@gmail.com";

    $mail_subject = "New Contact Form Message: " . $subject;

    $body = "
    Name: $name

    Email: $email

    Subject: $subject

    Message:
    $message
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $mail_subject, $body, $headers)) {
        echo "<script>
                alert('Message sent successfully!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "<script>
                alert('Failed to send message.');
                window.history.back();
              </script>";
    }
}

?>