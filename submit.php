<?php
// submit.php

// 1. Check if the form was actually submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. Basic Server-Side Validation
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
        // Redirect back to the index page with an error status
        header("Location: index.html?status=error&msg=All fields are required.");
        exit;
    }

    // 3. Sanitize and Collect Data (A good practice for security)
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    // 4. Validate Email Format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.html?status=error&msg=Invalid email format.");
        exit;
    }

    // --- Core Processing Logic Goes Here ---

    // In a real-world scenario, you would:
    // a) Send an email (using PHPMailer or the built-in mail() function)
    // b) Save the data to a database

    // For this beginner project, we will just simulate success:
    
    // Log the received data (optional - for debugging)
    $log_entry = date('Y-m-d H:i:s') . " - Name: $name, Email: $email, Message: $message\n";
    // For a real project, you might use error_log() or file_put_contents()
    // file_put_contents('submissions.log', $log_entry, FILE_APPEND);

    // 5. Success Feedback and Redirection
    header("Location: index.html?status=success&msg=Thank you, your message has been sent successfully!");
    exit;

} else {
    // If someone tries to access submit.php directly without form submission
    header("Location: index.html");
    exit;
}




?>