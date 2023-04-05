<?php
include './DAO.php';

// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }
// include_once "facture.php";
// $ligne_commande =
//     array(
//         array(
//             "designation" => "Hotel",
//             "montantHT" => "58,33",
//             "montantTTC" => "70"
//         ),
//         array(
//             "designation" => "Repas",
//             "montantHT" => "28,33",
//             "montantTTC" => "34"
//         )
//     );
// $lieu = [
//     "5 rue des fleurs",
//     "59800 Lille"
// ];
// $a = create_facture($_SESSION['idUser'], $ligne_commande, "12/12/1999", $lieu);
// echo $_SESSION['idUser'];



// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }
// include_once "facture.php";
// include_once "DAO.php";
// $id = 100;
// $idEvent = 100;
// $DAO = new DAO;
// $val = $DAO->EventById($id);


// $val = $DAO->addUserEvent($id, $idEvent);
// header('Location: accueil.php');
$dao = new DAO();
$list = $dao->listParticipant();
var_dump($list);