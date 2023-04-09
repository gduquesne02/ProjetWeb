<?php

require_once './vendor/autoload.php';
session_start();

// Récupération des données envoyées par Ajax avec la méthode POST
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Création d'un objet de transport SMTP avec les informations du serveur SMTP
$transport = (new Swift_SmtpTransport('smtp.ionos.fr', 587, 'tls'))
    ->setUsername('')
    ->setPassword('');

// Création de l'objet Mailer avec le transport SMTP
$mailer = new Swift_Mailer($transport);

// Création de l'objet Message avec les informations du mail à envoyer
$message = (new Swift_Message('Nouveau message'))
    ->setFrom(['' => 'Admnistrateur'])
    ->setTo([''])
    ->setBody("Email: $email\nMessage: $message");

// Envoi du mail avec SwiftMailer
if ($mailer->send($message)) {
    echo 'Le message a bien été envoyé';
    $_SESSION['envoie'] = "1";
    header('Location: contactform.html');
} else {
    echo 'Une erreur est survenue lors de l\'envoi du message';
}
