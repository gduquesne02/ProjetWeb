<?php


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once "facture.php";
include_once "DAO.php";

$DAO = new DAO;
$val = $DAO->EventById($_POST['id']);

$id  = $val[0][0];
$name = $val[0][1];
$description = $val[0][2];
$dateEvent = $val[0][3];
$registrationEndDate = $val[0][4];
$location = $val[0][5];
$latittude = $val[0][6];
$longitude = $val[0][7];
$workshop = $val[0][8];
$goodies =  $val[0][9];
$coffeBreak = $val[0][10];
$lunchBreak = $val[0][11];
$numberMember = $val[0][12];
$maxMember = $val[0][13];
$hotel_prix = $val[0][14];
$hotel_name = $val[0][15];
$hotel_address = $val[0][16];

$ligne_commande =
    array(
        array(
            "designation" => "Hotel",
            "montantHT" => ($hotel_prix * 90) / 100,
            "montantTTC" => $hotel_prix
        ),
        array(
            "designation" => "Repas",
            "montantHT" => "28,33",
            "montantTTC" => "34"
        )
    );
$lieu = [
    $name,
    $location
];
$a = create_facture($_SESSION['idUser'], $ligne_commande, $date = date('d/m/Y'), $lieu);

$val = $DAO->addUserEvent($_POST['id'], $_POST["idUser"]);

header('Location:accueil.php');
