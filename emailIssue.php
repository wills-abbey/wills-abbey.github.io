<?php

if($_POST["submit"]) {
    $recipient="wills.abbey@coxautoinc.com";
    $subject="572 BEB S6 Helpdesk Ticket";
    $sender=$_POST["inputFirstName1"];
    $senderEmail=$_POST["inputEmail1"];
    $message=$_POST["textArea1"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>",$headers);

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>