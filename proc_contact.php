<?php
// Capture and sanitize incoming POST inputs
$Name    = trim($_POST['name'] ?? '');
$Email   = trim($_POST['email'] ?? '');
$Subject = trim($_POST['subject'] ?? '');
$Message = trim($_POST['message'] ?? '');

// 1. Check for required fields
if (empty($Name) || empty($Email) || empty($Subject) || empty($Message)) {
    $error = 'Your Name, Email, Subject, and Message are required.';
    include('contact.php');
    exit;
}

// 2. Validate email format
if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    $error = 'Please enter a valid email address.';
    include('contact.php');
    exit;
}

// 3. Configure email settings for SEA FUELS V.O.F.
$to       = "info@seafuelsvof.com";
$mail_sub = "Website Contact Inquiry: " . $Subject;
$from     = "From: no-reply@seafuelsvof.com\r\n" .
            "Reply-To: " . $Email . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

$body = "You have received a new message from the SEA FUELS V.O.F. website contact form:\n\n"
      . "Name: " . $Name . "\n"
      . "Email: " . $Email . "\n"
      . "Subject: " . $Subject . "\n\n"
      . "Message:\n" . $Message . "\n\n"
      . "-----------------------------------\n"
      . "Submitted on: " . date("F j, Y, g:i a") . "\n"
      . "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n"
      . "***********************************\n\n";

// 4. Send email
$mailSent = @mail($to, $mail_sub, $body, $from);

// 5. Append backup record to text file
$file = fopen('contact_requests.txt', 'a');
if ($file) {
    fwrite($file, $body);
    fclose($file);
}

// 6. Set feedback message and include contact page
if ($mailSent) {
    $success = 'Thank you for contacting SEA FUELS V.O.F. Your message has been sent successfully, and our team will get back to you shortly.';
} else {
    // If the mail server fails, data remains preserved in the text file
    $success = 'Thank you for your inquiry. Your message has been received and logged, and our team will respond shortly.';
}

include('contact.php');
exit;
?>