<?php
    // Define sender and receiver names
    $receiver = "Juliet ❤️";
    $sender = "Romeo";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valentine's Day Surprise</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!-- Floating Flowers & Hearts -->
        <img src="flower1.png" class="floating flower1">
        <img src="flower1.png" class="floating flower2">
        <img src="heart.png" class="floating heart1">
        <img src="heart.png" class="floating heart2">

        <div class="envelope" onclick="toggleEnvelope()">
            <div class="flap"></div>
            <div class="body"></div>
            <div class="letter">
                <h1>Will You Be My Valentine?</h1>
                <p>Dear <strong><?php echo $receiver; ?></strong>,</p>
                <p>Every day with you is a dream come true. Will you be my Valentine forever?</p>
                <p>With all my heart, <br> <strong><?php echo $sender; ?></strong> ❤️</p>
            </div>
        </div>
    </div>

    <script>
        function toggleEnvelope() {
            document.querySelector('.envelope').classList.toggle('open');
        }
    </script>
</body>
</html>
