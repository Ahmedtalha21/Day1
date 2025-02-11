<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valentine's Invitation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>💌 Send a Valentine's Invitation 💌</h1>
        <form action="message.php" method="POST">
            <label for="receiver">Receiver's Name:</label>
            <input type="text" id="receiver" name="receiver" required>

            <label for="sender">Your Name:</label>
            <input type="text" id="sender" name="sender" required>

            <button type="submit">Send Invitation 💖</button>
        </form>
    </div>
</body>
</html>
