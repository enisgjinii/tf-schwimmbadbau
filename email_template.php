<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxurious Email Template</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            padding: 40px 20px;
            text-align: center;
        }
        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }
        .content {
            padding: 40px 20px;
        }
        .footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px;
            text-align: center;
        }
        h1,
        h2,
        h3 {
            color: #2c3e50;
        }
        .header h1 {
            color: white;
            font-size: 28px;
            margin: 0;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        .button {
            display: inline-block;
            padding: 12px 24px;
            background: linear-gradient(135deg, #ff6b6b, #ff8e53);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            margin-top: 20px;
            transition: transform 0.3s ease;
        }
        .button:hover {
            transform: translateY(-3px);
        }
        .testimonial {
            background-color: #f9f9f9;
            border-left: 4px solid #a777e3;
            padding: 20px;
            margin: 20px 0;
            font-style: italic;
        }
        .social-icons {
            margin-top: 20px;
        }
        .social-icons a {
            display: inline-block;
            margin: 0 10px;
            transition: transform 0.3s ease;
        }
        .social-icons a:hover {
            transform: scale(1.2);
        }
        .feature {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .feature img {
            width: 60px;
            margin-right: 20px;
        }
        .highlight-box {
            background-color: #e8f4fd;
            border: 2px solid #4a90e2;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="/api/placeholder/150/50" alt="Luxury Logo" class="logo">
            <h1>Welcome to the World of Luxury, <?php echo $name; ?>!</h1>
        </div>
        <div class="content">
            <img src="/api/placeholder/600/300" alt="Luxurious Header Image" style="width:100%; height:auto;">
            <h2>Thank You for Your Exclusive Inquiry</h2>
            <p>We are pleased to have received your message with the following details:</p>
            <ul>
                <li><strong>Name:</strong> <?php echo $name; ?></li>
                <li><strong>Email:</strong> <?php echo $email; ?></li>
                <li><strong>Subject:</strong> <?php echo $subject; ?></li>
            </ul>
            <div class="highlight-box">
                <h3>Your Message to Us:</h3>
                <p><?php echo $message; ?></p>
            </div>
            <div class="highlight-box">
                <h3>Construction Address:</h3>
                <p><?php echo $constructionAddress; ?></p>
            </div>
            <div class="testimonial">
                "The attention to detail and personal service exceeded my highest expectations. A truly luxurious experience!" - Dr. Sophia M., CEO
            </div>
        </div>
        <div class="footer">
            <p>© 2024 Luxury Ltd. All rights reserved.</p>
            <p>Golden Street 1, 10001 Luxury City, Germany</p>
            <p>Tel: +49 (0) 123 456789 | Email: <a href="mailto:vip@luxury-ltd.com" style="color: #ecf0f1;">vip@luxury-ltd.com</a></p>
            <div class="social-icons">
                <a href="#"><img src="/api/placeholder/32/32" alt="Facebook"></a>
                <a href="#"><img src="/api/placeholder/32/32" alt="Instagram"></a>
                <a href="#"><img src="/api/placeholder/32/32" alt="Twitter"></a>
                <a href="#"><img src="/api/placeholder/32/32" alt="LinkedIn"></a>
            </div>
        </div>
    </div>
</body>
</html>