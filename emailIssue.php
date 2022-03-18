<?php

if($_POST["submit"]) {
    $recipient="willsabbey4@gmail.com";
    $subject="572 BEB S6 Helpdesk Ticket";
    $sender=$_POST["inputFirstName1"];
    $senderEmail=$_POST["inputEmail1"];
    $message=$_POST["textArea1"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>