<?php

include_once('./DAO.php');


if(isset($_POST['email'], $_POST['password'] ,$_POST['firstName'],$_POST['lastName'], $_POST['iut'], $_POST['status'])){

$DAO = new DAO;
$usr = $DAO->insertUser($_POST['email'], hash('sha256', $_POST['password']),$_POST['firstName'],$_POST['lastName'], $_POST['iut'], $_POST['status'] );
header('Location: accueil.php');

}else{


    header('Location:./error.php');

   
}

?>
