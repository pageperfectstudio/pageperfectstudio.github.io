<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailForm = $_POST['mailForm'];
    $message = $_POST['message'];
    

    $mailTo = "pageperfectstudio@.net";
    $headers = "From: ".$mailForm;
    $tex = "You have received an e-mail form ".$name.".\n\n".$message;

    mail($mailTo, $text, $headers)
}

?>