<?php
if($_POST){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'dinglunz@usc.com';

    $subject = 'New Message Received';

    $headers = "From: ".$name." <".$email."> \r\n";

    $send_email = mail($to,$subject,$message,$headers);

    echo ($send_email) ? 'success' : 'error';
}
?>
