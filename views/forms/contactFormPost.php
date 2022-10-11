<?php

if(isset($_POST['contactFormSubmit'])) {
    $fullname = $_POST['fullname'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['messageBox'];

    $mailTo = "s1154705@student.windesheim.nl";
    $headers = "Van: " . $emailFrom;
    $txt = "U heeft een email ontvangen van " . $fullname . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../views/contact.view.php?mailsend");
}