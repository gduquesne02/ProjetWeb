<?php


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once "facture.php";
include_once "DAO.php";

$DAO = new DAO;
$val = $DAO->EventById($_POST['id']);

$val = $DAO->addUserEvent($_POST["idUser"], $_POST['id']);
header('Location: accueil.php');
exit();
