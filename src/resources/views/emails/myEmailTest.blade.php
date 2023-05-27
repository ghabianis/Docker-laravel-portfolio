<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
        }
        
        h1 {
            color: #333;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .message {
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to my Porfolio!</h1>
        <div class="message">
            <p>Dear {{ $details['title'] }},</p>
            <p>Thank you for contacting me</p>
            <p>Feel free to explore my portfolio and checkout my porjects on github.</p>
            <p>If you have any questions or need assistance, please don't hesitate to reach me out.</p>
            <p>Once again, welcome aboard and enjoy your experience!</p>
            <p>Best regards,</p>
            <p>Ghabi Anis Backend-developer @tekab.dev</p>
        </div>
    </div>
</body>
</html>
