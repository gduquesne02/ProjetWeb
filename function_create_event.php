<?php

include_once('./DAO.php');

if (isset($_POST['name'], $_POST['description'], $_POST['dateEvent'], $_POST['registrationEndDate'], $_POST['location'], $_POST['lattitude'], $_POST['longitude'], $_POST['workshop'], $_POST['goodies'], $_POST['coffeeBreak'], $_POST['lunchBreak'], 0, $_POST['maxMember'], $_POST['hotel_price'], $_POST['hotel_name'], $_POST['hotel_address'])){

$dao = new Dao();
$dao->AddEvent($_POST['name'], $_POST['description'], $_POST['dateEvent'], $_POST['registrationEndDate'], $_POST['location'], $_POST['lattitude'], $_POST['longitude'], $_POST['workshop'], $_POST['goodies'], $_POST['coffeeBreak'], $_POST['lunchBreak'], 0, $_POST['maxMember'], $_POST['hotel_price'], $_POST['hotel_name'], $_POST['hotel_address'] );


header('Location: liste_evenement.php');
var_dump($_POST);
}else{
    header('Location: liste_evenement.php');
}



?>