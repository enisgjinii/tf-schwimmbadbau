<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
header('Content-Type: application/json');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $constructionAddress = $_POST['constructionAddress'];
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'egjini17@gmail.com';
        $mail->Password   = 'kqmrecahvsqeqfmo';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        // Recipients
        $mail->setFrom('egjini17@gmail.com', 'Enis Gjini');
        $mail->addAddress('egjini17@gmail.com', 'Recipient Name');
        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = file_get_contents('email_template.php');
        $mail->Body = str_replace('<?php echo $name; ?>', $name, $mail->Body);
        $mail->Body = str_replace('<?php echo $email; ?>', $email, $mail->Body);
        $mail->Body = str_replace('<?php echo $subject; ?>', $subject, $mail->Body);
        $mail->Body = str_replace('<?php echo $message; ?>', $message, $mail->Body);
        $mail->Body = str_replace('<?php echo $constructionAddress; ?>', $constructionAddress, $mail->Body);
        $mail->send();
        echo json_encode(['success' => true, 'message' => 'Nachricht wurde erfolgreich gesendet!']);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => "Nachricht konnte nicht gesendet werden. Fehler: {$mail->ErrorInfo}"]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Ungültige Anfragemethode']);
}
