<?php

    $idUser=$_GET['id'];
    session_start();
 
	include('../DAO.php');
	$dao=new DAO();
	if($dao->deleteUser($idUser)){
		header("location:../GestionUser.php");
	}else{
		header("location:../GestionUser.php?erreur=2");
		die();
	}

?>

