<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];

    // Traitement de l'email
    $to = 'philippeplaia@gmail.com';
    $subject = 'Nouveau message de formulaire';
    $headers = "From: $email\r\nReply-To: $email";
    $body = "Email: $email\nNuméro: $telephone\nMessage: $message";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Votre message a été envoyé avec succès';
    } else {
        echo 'Une erreur s\'est produite lors de l\'envoi de votre message';
    }
}
