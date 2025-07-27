<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    
    // Basic email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.']);
        exit;
    }
    
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'egjini17@gmail.com';
        $mail->Password   = 'fbhsjanskmsrdtfh';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->CharSet = 'UTF-8';
        
        // Recipients
        $mail->setFrom('egjini17@gmail.com', 'TF Schwimmbadbau');
        $mail->addAddress('egjini17@gmail.com', 'TF Schwimmbadbau');
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Neue Newsletter-Anmeldung';
        
        // Email body
        $mail->Body = "
        <html lang='de'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Neue Newsletter-Anmeldung</title>
            <style>
                body { font-family: 'Arial', sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 0; background-color: #f8f9fa; }
                .container { background-color: #ffffff; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); border-radius: 12px; overflow: hidden; }
                .header { background: linear-gradient(135deg, #0d6efd, #0b5ed7); color: white; padding: 40px 30px; text-align: center; }
                .logo { width: 100px; height: auto; margin: 0 auto 10px; display: block; }
                .header h1 { color: white; font-size: 28px; margin: 0 0 10px 0; font-weight: 600; }
                .header p { color: rgba(255, 255, 255, 0.9); margin: 0; font-size: 16px; }
                .content { padding: 18px 12px; font-size: 14px; }
                .highlight { background: linear-gradient(135deg, #0d6efd, #0b5ed7); color: white; padding: 10px 8px; border-radius: 8px; margin: 10px 0; text-align: center; }
                .highlight h3 { margin: 0 0 10px 0; font-size: 18px; }
                .highlight p { margin: 0; opacity: 0.9; }
                .info-box { background: #f8f9fa; padding: 10px 8px; border-radius: 8px; border-left: 4px solid #0d6efd; margin: 10px 0; }
                .info-label { font-weight: 600; color: #495057; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px; }
                .info-value { color: #212529; font-size: 16px; margin-top: 5px; }
                .footer { background: linear-gradient(135deg, #343a40, #495057); color: #ffffff; padding: 30px; text-align: center; }
                .footer p { margin: 5px 0; font-size: 14px; color: #adb5bd; }
                .copyright { border-top: 1px solid #495057; padding-top: 20px; font-size: 12px; color: #6c757d; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <img src='img/TF Logo mit Schrift 20_1_23.jpg' alt='TF Schwimmbadbau Logo' class='logo'>
                    <h1>🎉 Neue Newsletter-Anmeldung</h1>
                    <p>TF Schwimmbadbau - Ihr Partner für exklusiven Poolbau</p>
                </div>
                
                <div class='content'>
                    <div class='highlight'>
                        <h3>📧 Neuer Newsletter-Abonnent</h3>
                        <p>Ein Interessent hat sich für Ihren Newsletter angemeldet!</p>
                    </div>

                    <div class='info-box'>
                        <div class='info-label'>E-Mail-Adresse</div>
                        <div class='info-value'>{$email}</div>
                    </div>

                    <div class='info-box'>
                        <div class='info-label'>Anmeldedatum</div>
                        <div class='info-value'>" . date('d.m.Y H:i:s') . "</div>
                    </div>

                    <div class='highlight'>
                        <h3>💡 Nächste Schritte</h3>
                        <p>Erwägen Sie, den neuen Abonnenten mit einem Willkommensangebot zu begrüßen.</p>
                    </div>
                </div>

                <div class='footer'>
                    <p>TF Schwimmbadbau</p>
                    <p>Werkstraße 7, 93326 Abensberg</p>
                    <p>Tel: 09443/916 999-0 | info@tfschwimmbadbau.de</p>
                    <div class='copyright'>
                        <p>© 2024 TF Schwimmbadbau. Alle Rechte vorbehalten.</p>
                    </div>
                </div>
            </div>
        </body>
        </html>";
        
        $mail->send();
        
        // Send confirmation email to subscriber
        $confirmationMail = new PHPMailer(true);
        $confirmationMail->SMTPDebug = 0;
        $confirmationMail->isSMTP();
        $confirmationMail->Host       = 'smtp.gmail.com';
        $confirmationMail->SMTPAuth   = true;
        $confirmationMail->Username   = 'egjini17@gmail.com';
        $confirmationMail->Password   = 'fbhsjanskmsrdtfh';
        $confirmationMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $confirmationMail->Port       = 587;
        $confirmationMail->CharSet = 'UTF-8';
        
        $confirmationMail->setFrom('egjini17@gmail.com', 'TF Schwimmbadbau');
        $confirmationMail->addAddress($email);
        
        $confirmationMail->isHTML(true);
        $confirmationMail->Subject = 'Newsletter-Anmeldung bestätigt';
        
        $confirmationMail->Body = "
        <html lang='de'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Newsletter-Anmeldung bestätigt</title>
            <style>
                body { font-family: 'Arial', sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 0; background-color: #f8f9fa; }
                .container { background-color: #ffffff; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); border-radius: 12px; overflow: hidden; }
                .header { background: linear-gradient(135deg, #0d6efd, #0b5ed7); color: white; padding: 40px 30px; text-align: center; }
                .logo { width: 100px; height: auto; margin: 0 auto 10px; display: block; }
                .header h1 { color: white; font-size: 28px; margin: 0 0 10px 0; font-weight: 600; }
                .header p { color: rgba(255, 255, 255, 0.9); margin: 0; font-size: 16px; }
                .content { padding: 18px 12px; font-size: 14px; }
                .welcome-box { background: linear-gradient(135deg, #e3f2fd, #f3e5f5); border: 1px solid #e1f5fe; border-radius: 12px; padding: 10px 8px; margin: 10px 0; text-align: center; }
                .welcome-box h2 { color: #0d6efd; margin-bottom: 15px; font-size: 24px; }
                .welcome-box p { color: #37474f; font-size: 16px; margin-bottom: 10px; }
                .features { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin: 30px 0; }
                .feature { background: #f8f9fa; padding: 8px; border-radius: 8px; border-left: 4px solid #0d6efd; text-align: center; }
                .feature-icon { font-size: 32px; margin-bottom: 10px; }
                .feature h3 { color: #0d6efd; margin-bottom: 10px; font-size: 18px; }
                .feature p { color: #495057; font-size: 14px; }
                .cta-box { background: linear-gradient(135deg, #0d6efd, #0b5ed7); color: white; padding: 10px 8px; border-radius: 12px; margin: 30px 0; text-align: center; }
                .cta-box h3 { margin-bottom: 15px; font-size: 20px; }
                .cta-box p { margin-bottom: 20px; opacity: 0.9; }
                .cta-button { display: inline-block; background: white; color: #0d6efd; padding: 12px 30px; text-decoration: none; border-radius: 25px; font-weight: bold; font-size: 16px; }
                .footer { background: linear-gradient(135deg, #343a40, #495057); color: #ffffff; padding: 30px; text-align: center; }
                .footer-content { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-bottom: 20px; }
                .footer-section h4 { color: #0d6efd; margin-bottom: 10px; font-size: 16px; }
                .footer-section p { margin: 2px 0; font-size: 12px; color: #adb5bd; }
                .social-link { display: inline-block; margin: 0 5px; color: #adb5bd; text-decoration: none; font-size: 18px; }
                .copyright { border-top: 1px solid #495057; padding-top: 20px; font-size: 12px; color: #6c757d; }
                .disclaimer { background: #fff3cd; border: 1px solid #ffeaa7; border-radius: 8px; padding: 10px 8px; margin: 10px 0; font-size: 12px; color: #856404; }
                @media (max-width: 600px) { .features { grid-template-columns: 1fr; } .footer-content { grid-template-columns: 1fr; text-align: center; } }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <img src='img/TF Logo mit Schrift 20_1_23.jpg' alt='TF Schwimmbadbau Logo' class='logo'>
                    <h1>🎉 Willkommen bei TF Schwimmbadbau!</h1>
                    <p>Ihre Newsletter-Anmeldung wurde erfolgreich bestätigt</p>
                </div>
                
                <div class='content'>
                    <div class='welcome-box'>
                        <h2>Vielen Dank für Ihr Interesse!</h2>
                        <p>Sehr geehrte Damen und Herren,</p>
                        <p>wir freuen uns, Sie als neuen Newsletter-Abonnenten begrüßen zu dürfen. Ihre Anmeldung wurde erfolgreich bestätigt.</p>
                    </div>

                    <div class='features'>
                        <div class='feature'>
                            <div class='feature-icon'>🏊‍♂️</div>
                            <h3>Exklusive Pool-Inspirationen</h3>
                            <p>Entdecken Sie die neuesten Trends und Designs im Poolbau</p>
                        </div>
                        <div class='feature'>
                            <div class='feature-icon'>💎</div>
                            <h3>Premium Dienstleistungen</h3>
                            <p>Erfahren Sie zuerst von unseren exklusiven Angeboten</p>
                        </div>
                        <div class='feature'>
                            <div class='feature-icon'>📸</div>
                            <h3>Projekt-Galerie</h3>
                            <p>Bestaunen Sie unsere neuesten Referenzprojekte</p>
                        </div>
                        <div class='feature'>
                            <div class='feature-icon'>🎯</div>
                            <h3>Professionelle Beratung</h3>
                            <p>Erhalten Sie wertvolle Tipps von unseren Experten</p>
                        </div>
                    </div>

                    <div class='cta-box'>
                        <h3>🚀 Bereit für Ihren Traumpool?</h3>
                        <p>Lassen Sie uns gemeinsam Ihren Garten in eine Oase verwandeln</p>
                        <a href='https://tfschwimmbadbau.de/contact.php' class='cta-button'>Kontakt aufnehmen</a>
                    </div>

                    <div class='disclaimer'>
                        <strong>Hinweis:</strong> Diese E-Mail wurde automatisch generiert. Bitte antworten Sie nicht auf diese Nachricht.
                    </div>
                </div>

                <div class='footer'>
                    <div class='footer-content'>
                        <div class='footer-section'>
                            <h4>📞 Kontakt</h4>
                            <p>TF Schwimmbadbau</p>
                            <p>Werkstraße 7, 93326 Abensberg</p>
                            <p>Tel: 09443/916 999-0</p>
                            <p>info@tfschwimmbadbau.de</p>
                        </div>
                        <div class='footer-section'>
                            <h4>🌐 Social Media</h4>
                            <p>Folgen Sie uns</p>
                            <a href='https://www.facebook.com/profile.php?id=100067726475675' class='social-link'>📘</a>
                            <a href='https://www.instagram.com/tf_schwimmbadbau/' class='social-link'>📷</a>
                            <a href='https://wa.me/4917623768429' class='social-link'>💬</a>
                        </div>
                    </div>
                    <div class='copyright'>
                        <p>© 2024 TF Schwimmbadbau. Alle Rechte vorbehalten.</p>
                        <p>Entworfen mit ❤️ für exklusiven Poolbau</p>
                    </div>
                </div>
            </div>
        </body>
        </html>";
        
        $confirmationMail->send();
        
        echo json_encode(['success' => true, 'message' => 'Newsletter-Anmeldung erfolgreich! Sie erhalten eine Bestätigungs-E-Mail.']);
        
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => "Newsletter-Anmeldung fehlgeschlagen. Fehler: {$mail->ErrorInfo}"]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Ungültige Anfragemethode']);
} 