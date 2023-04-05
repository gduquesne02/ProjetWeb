<?php
    $name = $_POST['name'];
    $description = $_POST['description'];
    $dateEvent = $_POST['dateEvent'];
    $registrationEndDate = $_POST['registrationEndDate'];
    $location = $_POST['location'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $workshop = $_POST['workshop'];
    $goodies = $_POST['goodies'];
    $coffeeBreak = $_POST['coffeeBreak'];
    $lunchBreak = $_POST['lunchBreak'];
    $maxMember = $_POST['maxMember'];
    $hotel_prix = $_POST['hotel_prix'];
    $hotel_name = $_POST['hotel_name'];
    $hotel_address = $_POST['hotel_address'];
    $event_id = $_POST['id']; // ajout de l'identifiant de l'événement
    session_start();
  
    include('../DAO.php');
    $dao = new DAO();
    if($dao->UpdateEvent($name, $description, $dateEvent, $registrationEndDate, $location, $latitude, $longitude, $workshop, $goodies, $coffeeBreak, $lunchBreak, $maxMember, $hotel_prix, $hotel_name, $hotel_address, $event_id)){
        header("location:../gestion");
    } else {
        header("location:../gestion_event.php?erreur=2");
        die();
    }
?>
