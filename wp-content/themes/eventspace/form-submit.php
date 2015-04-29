<?php
    if ($_POST) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $to = 'info@belfortagency.com'; 
        $subject = 'Message from Belfort Agency';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';


        }

// If there are no errors, send the email
if (!$errName && !$errEmail) {

    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You!</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
    echo $result;
}
    }


?>

