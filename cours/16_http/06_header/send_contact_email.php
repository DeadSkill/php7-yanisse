<?php
    $email = $_POST['contact_email'];
    $message = $_POST['contact_message'];

    // mail('contact@gabrielpillet.com', 'Message de contact de '.$email, $message);

    header('Location: /cours/16_http/06_header/success.php?email='.$email);
?>
