<?php
if(isset($_POST['send'])){
    $username = $_POST['name'];
    $contact = $_POST['contact'];
    $user_email = $_POST['email'];
    $user_message = $_POST['message'];


    $email = "servify.24x7@gmail.com";
    $subject = "Message from $username";
    $message = "
    User name: $username
    User Contact: $contact
    User Email: $user_email

    User Message: 

    $user_message
    ";
    $sender = "From: $user_email";
    if(mail($email, $subject, $message, $sender)){
        
        header('location: ../contact-us.php?msg=success');
    }else{
        header('location: ../contact-us.php?msg=failed');
    }
}

?>