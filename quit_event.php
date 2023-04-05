<?php


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once "facture.php";
include_once "DAO.php";

$DAO = new DAO;

$val = $DAO->deleteParticipant($_POST["idUser"], $_POST['id']);
header('Location: accueil.php');
exit();
