<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TF Schwimmbadbau - Kontaktanfrage</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #0d6efd, #0b5ed7);
            color: white;
            padding: 40px 30px;
            text-align: center;
            position: relative;
        }
        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/><circle cx="10" cy="60" r="0.5" fill="white" opacity="0.1"/><circle cx="90" cy="40" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }
        .header-content {
            position: relative;
            z-index: 1;
        }
        .logo {
            width: 100px;
            height: auto;
            margin: 0 auto 10px;
            display: block;
        }
        .header h1 {
            color: white;
            font-size: 28px;
            margin: 0 0 10px 0;
            font-weight: 600;
        }
        .header p {
            color: rgba(255, 255, 255, 0.9);
            margin: 0;
            font-size: 16px;
        }
        .content {
            padding: 18px 12px;
            font-size: 14px;
        }
        .section {
            margin-bottom: 12px;
            padding: 10px 8px;
        }
        .section-title {
            color: #0d6efd;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        .section-title::before {
            content: '';
            width: 4px;
            height: 20px;
            background: #0d6efd;
            margin-right: 10px;
            border-radius: 2px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
            margin-bottom: 20px;
        }
        .info-item {
            background: #f8f9fa;
            padding: 8px;
            border-radius: 8px;
            border-left: 4px solid #0d6efd;
        }
        .info-label {
            font-weight: 600;
            color: #495057;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .info-value {
            color: #212529;
            font-size: 16px;
            margin-top: 5px;
        }
        .message-box {
            background: linear-gradient(135deg, #e3f2fd, #f3e5f5);
            border: 1px solid #e1f5fe;
            border-radius: 12px;
            padding: 20px;
            margin: 20px 0;
            position: relative;
        }
        .message-box::before {
            content: '"';
            position: absolute;
            top: -10px;
            left: 20px;
            font-size: 40px;
            color: #0d6efd;
            background: white;
            padding: 0 10px;
        }
        .message-content {
            font-style: italic;
            color: #37474f;
            line-height: 1.8;
            margin-top: 10px;
        }
        .address-box {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
            padding: 15px;
            margin: 15px 0;
        }
        .address-title {
            font-weight: 600;
            color: #856404;
            margin-bottom: 8px;
        }
        .footer {
            background: linear-gradient(135deg, #343a40, #495057);
            color: #ffffff;
            padding: 30px;
            text-align: center;
        }
        .footer-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
            margin-bottom: 20px;
        }
        .footer-section h4 {
            color: #0d6efd;
            margin-bottom: 10px;
            font-size: 16px;
        }
        .footer-section p {
            margin: 2px 0;
            font-size: 12px;
            color: #adb5bd;
        }
        .contact-info {
            text-align: left;
        }
        .social-links {
            text-align: right;
        }
        .social-link {
            display: inline-block;
            margin: 0 5px;
            color: #adb5bd;
            text-decoration: none;
            font-size: 18px;
        }
        .social-link:hover {
            color: #0d6efd;
        }
        .copyright {
            border-top: 1px solid #495057;
            padding-top: 20px;
            font-size: 12px;
            color: #6c757d;
        }
        .highlight {
            background: linear-gradient(135deg, #0d6efd, #0b5ed7);
            color: white;
            padding: 15px 20px;
            border-radius: 8px;
            margin: 20px 0;
            text-align: center;
        }
        .highlight h3 {
            margin: 0 0 10px 0;
            font-size: 18px;
        }
        .highlight p {
            margin: 0;
            opacity: 0.9;
        }
        @media (max-width: 600px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .content {
                padding: 30px 20px;
            }
            .header {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-content">
                <img src="img/TF Logo mit Schrift 20_1_23.jpg" alt="TF Schwimmbadbau Logo" class="logo">
                <h1>Neue Kontaktanfrage</h1>
                <p>TF Schwimmbadbau - Ihr Partner für exklusiven Poolbau</p>
            </div>
        </div>
        
        <div class="content">
            <div class="highlight">
                <h3>🎉 Neue Anfrage erhalten!</h3>
                <p>Ein potenzieller Kunde hat sich über Ihr Kontaktformular gemeldet.</p>
            </div>

            <div class="section">
                <div class="section-title">Kontaktdaten</div>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Name</div>
                        <div class="info-value"><?php echo $name; ?></div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">E-Mail</div>
                        <div class="info-value"><?php echo $email; ?></div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Betreff</div>
                        <div class="info-value"><?php echo $subject; ?></div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Datum</div>
                        <div class="info-value"><?php echo date('d.m.Y H:i'); ?></div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section-title">Nachricht</div>
                <div class="message-box">
                    <div class="message-content"><?php echo $message; ?></div>
                </div>
            </div>

            <?php if (!empty($constructionAddress)): ?>
            <div class="section">
                <div class="section-title">Baustellenadresse</div>
                <div class="address-box">
                    <div class="address-title">📍 Projektstandort</div>
                    <div class="info-value"><?php echo $constructionAddress; ?></div>
                </div>
            </div>
            <?php endif; ?>

            <div class="highlight">
                <h3>📞 Sofortige Reaktion empfohlen</h3>
                <p>Bitte kontaktieren Sie den Interessenten innerhalb von 24 Stunden für eine professionelle Betreuung.</p>
            </div>
        </div>

        <div class="footer">
            <div class="footer-content">
                <div class="footer-section contact-info">
                    <h4>📞 Kontakt</h4>
                    <p>TF Schwimmbadbau</p>
                    <p>Werkstraße 7, 93326 Abensberg</p>
                    <p>Tel: 09443/916 999-0</p>
                    <p>info@tfschwimmbadbau.de</p>
                </div>
                <div class="footer-section social-links">
                    <h4>🌐 Social Media</h4>
                    <p>Folgen Sie uns</p>
                    <a href="https://www.facebook.com/profile.php?id=100067726475675" class="social-link">📘</a>
                    <a href="https://www.instagram.com/tf_schwimmbadbau/" class="social-link">📷</a>
                    <a href="https://wa.me/4917623768429" class="social-link">💬</a>
                </div>
            </div>
            <div class="copyright">
                <p>© 2024 TF Schwimmbadbau. Alle Rechte vorbehalten.</p>
                <p>Entworfen mit ❤️ für exklusiven Poolbau</p>
            </div>
        </div>
    </div>
</body>
</html>