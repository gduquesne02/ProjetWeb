<?php

// Chargez la bibliothèque SwiftMailer
require_once './vendor/autoload.php';


session_start();


// Créez un objet de transport SMTP
$transport = (new Swift_SmtpTransport('smtp.ionos.fr', 465, 'ssl')) //Ici (adresse SMTP, le Port utilisé, la sécurité ssl)
    ->setUsername('contact@antoine-lamesch.fr') //votre identifiant SMTP, souvent le mail par lequel vous voulez envoyer le message
    ->setPassword('Baptiste14Adrien29.@'); //Votre mot de passe SMTP

// Créez l'objet Mailer avec le transport SMTP
$mailer = new Swift_Mailer($transport);

// Créez l'objet Message avec les détails du mail
$message = (new Swift_Message('Sujet du mail'))
    ->setFrom(['contact@antoine-lamesch.fr' => 'Antoine Lamesch'])
    ->setTo(['antoine.lamesch@live.fr' => 'Utilisateur'])
    ->setBody('Votre code de validation est : 123');

// Envoyez le message
$result = $mailer->send($message);
ob_start();

// Vérifiez si le mail a été envoyé avec succès
if ($result) {
    return 'Le mail a été envoyé avec succès';
} else {
    return 'Une erreur est survenue lors de l\'envoi du mail';
}