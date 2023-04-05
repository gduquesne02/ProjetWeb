<?php
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
    $email=$_POST['email']; 
    $iut=$_POST['iut'];
    $password=$_POST['mdp'];
    $status=$_POST['status'];
    session_start();
	include('../DAO.php');
	$dao=new DAO();
	if($dao->AddUser($nom,$prenom,$email,$iut,$status,hash('sha256', $password))){
		header("location:../GestionUser.php");
	}else{
		header("location:../GestionUser.php?erreur=2");
		die();
	}   

?>