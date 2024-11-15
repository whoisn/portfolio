<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $comment = htmlspecialchars(trim($_POST['comment']));

    $mail = new PHPMailer(true);

        // SMTP server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'nielcastillo00@gmail.com';
        $mail->Password = 'kltkjwvfiozctshf';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Send message to your email
        $mail->setFrom($email, $name);
        $mail->addAddress('nielcastillo00@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = "New Contact Message: " . $subject;
        $mail->Body = "<strong>Name:</strong> $name<br><strong>Email:</strong> $email<br><strong>Subject:</strong> $subject<br><strong>Message:</strong><br>" . nl2br($comment);

        $mail->send(); // Send main message

        // Send confirmation email to the user
        $mail->clearAddresses(); // Clear previous recipient
        $mail->addAddress($email); // User's email
        $mail->Subject = "Thank you for reaching out!";
        $mail->Body = "Dear $name,<br><br>Thank you for reaching out! I will respond as soon as possible.<br><br>Best regards,<br>Niel Castillo";
        $mail->send(); // Send confirmation message

    
}
?>
