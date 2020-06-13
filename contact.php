<?php
if(isset($_POST['submit'])) { 
    $mailTo = "ballen7294@gmail.com";
    $mailFrom = $_POST['email'];
    $full_name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: " .$mailFrom;
    $txt = "You have recieved an e-mail from " .$full_name.".\n\n" .$message;
    //header("Location: index.html");

    

    //Error Handling
    $errorEmpty = false;
    $errorEmail = false;

    if(empty($full_name)|| empty($mailFrom) || empty($message)){ 
        echo "<span class='form-error'> Fill in all fields! </span>";
        $errorEmpty = true;
    }
    elseif(!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) { 
        echo "<span class='form-error'>Write a valid e-mail address! </span>";
        $errorEmail = true;
    }else { 
        mail($mailTo, $subject, $txt, $headers);
        echo "<span class='form-success'> Email Sent sucessfully! </span>";
    }
}
else { 
    echo "There was an error sending an e-mail";
}
?>

<script>
    $("#mail-full_name, #mail-email_address, #mail-subject, #mail-msg").removeClass("input-error");
    var errorEmpty = "<?php echo $errorEmpty;?>";
    var errorEmail = "<?php echo $errorEmail;?>";

    if(errorEmpty == true) { 
        $("#mail-full_name, #mail-email_address, #mail-subject, #mail-msg").addClass("input-error")
        console.log("No fields filled out");
    }
    if(errorEmail == true) { 
        $("#mail-email_address").addClass("input-error");
    }
    if (errorEmpty == false & errorEmail == false) { 
        $("#mail-full_name, #mail-email_address, #mail-subject, #mail-msg").val("");
    }
</script>