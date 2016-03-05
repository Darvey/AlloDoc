<?php 
	session_start();
	unset($_SESSION["Medecin"]);
	unset($_SESSION["id"]);
	unset($_SESSION["nom"]);
	unset($_SESSION["prenom"]);
	unset($_SESSION["pro"]);
	unset($_SESSION["Adresse"]);
	$_SESSION["connect"] = false;
	header('location: inscription.php');
?>
