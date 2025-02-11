<?php
    // Get sender and receiver names
    $receiver = isset($_POST['receiver']) ? htmlspecialchars($_POST['receiver']) : "My Love ❤️";
    $sender = isset($_POST['sender']) ? htmlspecialchars($_POST['sender']) : "Your Secret Admirer 💌";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valentine's Message</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="floating-hearts"></div> <!-- Floating hearts & flowers -->
    
    <div class="container">
        <div class="envelope" onclick="toggleEnvelope()">
            <div class="flap"></div>
            <div class="body"></div>
            <div class="letter">
                <h1>Will You Be My Valentine? 💘</h1>
                <p>Dear <strong><?php echo $receiver; ?></strong>,</p>
                <p>Every moment with you is magical. Will you be my Valentine? 💖</p>
                <p>With all my heart, <br> <strong><?php echo $sender; ?></strong> ❤️</p>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
