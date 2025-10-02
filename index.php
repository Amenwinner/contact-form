<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Contact Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Get in Touch</h1>
         <?php 
        // Start of PHP block
        if (isset($_GET['status']) && isset($_GET['msg'])) {
            $status = htmlspecialchars($_GET['status']);
            $message = htmlspecialchars($_GET['msg']);

            if ($status === 'success') {
                echo "<div class='message success'>{$message}</div>";
            } else if ($status === 'error') {
                echo "<div class='message error'>{$message}</div>";
            }
        }
        // End of PHP block
        ?>

        <form action="submit.php" method="POST">
            </form>
    </div>
        <form action="submit.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Send Message</button>
        </form>
    </div>

   
       
</body>
</html>