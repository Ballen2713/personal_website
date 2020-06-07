<?php
if(isset($_POST['submit'])) { 
    $to = "bart.allen27@outlook.com";
    $from = $_POST['email'];
    $full_name = $_POST['full_name'];
    $subject = $_POST['subject'];
    $message = $full_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    echo "Mail Sent. Thank you"
}
?>