<?php
$to = "srna2305@gmail.com";
$subject = "Test Subject";
$message = "This is a test email sent from PHP.";
$headers = "From: your_email@gmail.com";

// Send email
$mailSent = mail($to, $subject, $message, $headers);

if ($mailSent) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
