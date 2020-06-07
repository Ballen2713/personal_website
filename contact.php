<?php
if(isset($_POST['submit'])) { 
    $to = "bart.allen27@outlook.com";
    $from = $_POST['email'];
    $full_name = $_POST['full_name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $full_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $full_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    // $headers .="MIME-Version: 1.0\r\n";
    // $headers .= "Content-type: text/html; charset=utf-8";
    $headers2 = "From:" . $to;
    if(mail($to, $subject, $message, $headers)){ 
        echo "<h1>Sent Succesfully! Thank You". " ".$full_name.", I shall respond shortly</h1>";
    }else { 
        echo "Something went wrong 😥";
    }
    
    // mail($from, $subject2, $message2, $headers2);
    // echo "Mail Sent. Thank you";
}
?>