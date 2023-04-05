<?php
	$nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
	$email=$_POST['email'];
    $iut=$_POST['iut'];
    $idUser=$_POST['idUser'];
    session_start();
 
	include('../DAO.php');
	$dao=new DAO();
	if($dao->EditUser($nom, $prenom, $email, $iut, $idUser)){
		header("location:../gestion_event.php");
	}else{
		header("location:../gestion_event.php?erreur=2");
		die();
	}

?>