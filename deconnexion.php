<?php
if (session_status() == PHP_SESSION_NONE) { session_start(); }


// Démarrer la session
session_start();

// Supprimer toutes les données de session
$_SESSION = array();

// Détruire la session
session_destroy();

header('Location:./passerelle.php');

?>