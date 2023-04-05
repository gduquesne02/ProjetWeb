<?php

    $idEvent=$_GET['id'];
    session_start();
 
	include('../DAO.php');
	$dao=new DAO();
	if($dao->deleteEvent($idEvent)){
		header("location:../gestion_event.php");
	}else{
		header("location:../gestion_event.php?erreur=2");
		die();
	}

?>