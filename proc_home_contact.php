<?php
// Capture and sanitize incoming POST fields
$Name    = trim($_POST['name'] ?? '');
$Email   = trim($_POST['email'] ?? '');
$Subject = trim($_POST['subject'] ?? '');
$Message = trim($_POST['message'] ?? '');

// 1. Check for required fields
if (empty($Name) || empty($Email) || empty($Subject) || empty($Message)) {
    $error = 'Your Name, Email, Subject, and Message are required.';
    include('index.php');
    exit;
}

// 2. Validate email format
if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    $error = 'Please enter a valid email address.';
    include('index.php');
    exit;
}

// 3. Configure email parameters
$to       = "info@seafuelsvof.com";
$mail_sub = "Homepage Inquiry: " . $Subject;
$from     = "From: no-reply@seafuelsvof.com\r\n" .
            "Reply-To: " . $Email . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

$body = "You have received a new inquiry from the SEA FUELS V.O.F. homepage:\n\n"
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

// 5. Append backup entry to text file
$file = fopen('contact_requests.txt', 'a');
if ($file) {
    fwrite($file, $body);
    fclose($file);
}

// 6. Return response to index.php
if ($mailSent) {
    $success = 'Thank you! Your message has been sent successfully. Our team will contact you shortly.';
} else {
    $success = 'Thank you for your message. Your inquiry has been logged and our team will get back to you soon.';
}

include('index.php');
exit;
?>  