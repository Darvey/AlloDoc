<?php
session_start();

try{
	$bdd = new PDO ('mysql:host=localhost;dbname=docapp', 'root', 'root');
}
catch(Exception $e){
  	die('Erreur :'.$e->getMessage());
}

if(!empty($_POST['Connexion'])){ // Si le formulaire est envoyé.

	if(!empty($_POST['s_mail']) && !empty($_POST['s_pass'])) {

		$password = md5($_POST['s_pass']);
		$mail = $_POST['s_mail'];

		if(isset($_POST['medecin'])) {
			$req = $bdd->prepare('SELECT * FROM medecin WHERE m_mail = (:mail) LIMIT 1;');
		} else{
			$req = $bdd->prepare('SELECT * FROM patient WHERE p_mail = (:mail) LIMIT 1;');
		}
		
		$req->execute(array("mail" => $mail));

		$res = $req->fetch();

		if(isset($_POST['medecin'])) {
			if($res['m_mdp'] != $password) {
				echo 'Probleme Mail/Mot de passe';
			} else{
				$_SESSION["id"] = $res['m_id'];
				$_SESSION["nom"] = $res['m_nom'];
				$_SESSION["prenom"] = $res['m_prenom'];
				
				header('location: compteMedecin.php');
			}
		} else {
			if($res['p_mdp'] != $password) {
				echo 'Probleme Mail/Mot de passe';
			} else{
				$_SESSION["id"] = $res['p_id'];
				$_SESSION["nom"] = $res['p_nom'];
				$_SESSION["prenom"] = $res['p_prenom'];

				/*$req = $bdd->prepare('SELECT * FROM rdv WHERE idPatient = (:id) ORDER BY jour;');
				$req->execute(array("id" => $_SESSION["id"]));
				echo "Vos différents rendez-vous sont : <br>";
				while($res = $req->fetch()){
					$doc = $bdd->prepare('SELECT m_nom FROM medecin WHERE m_id = (:id);');
					$doc->execute(array("id" => $res['idMedecin']));
					$resM = $doc->fetch();
					echo "avec Dr {$resM['m_nom']} le {$res['jour']} à {$res['heure']} <br>";
				}*/

				header('location: recherche.php');
			}
		}
	}
}

if(ISSET($_POST['Inscription'])){
	//On crée les variables
	$prenom =   $_POST['s_prenom'];
	$nom = $_POST['s_nom'];
	$password = md5($_POST['s_pass']);
	$mail = $_POST['s_mail'];
	$ville = $_POST['s_city'];
	
	
	//vérification que le mail n'existe pas déjà
	if(isset($_POST['medecin'])) {
		$verif = $bdd->prepare('SELECT * FROM medecin WHERE m_mail = :mail');
	} else {
		$verif = $bdd->prepare('SELECT * FROM patient WHERE p_mail = :mail');
	}
	$verif->execute(array("mail"=>$mail));
	
	if ($verif->fetch()){
		echo "mail deja existant";
	} else {	
	
		if(isset($_POST['medecin'])) {
			$spe = $_POST['s_spé'];
			
			$req = $bdd->prepare('INSERT INTO `medecin`(`m_nom`, `m_prenom`, `m_ville`, `m_mail`, `m_mdp`, `m_spe`) VALUES(:nom, :prenom, :ville, :mail, :password, :spe)');

			$req->execute(array("nom" => $nom, "prenom" => $prenom, "password" => $password, "mail" => $mail, "ville" => $ville, "spe" => $spe));
		
			header('Location: compteMedecin.php'); 
		} else {
			$req = $bdd->prepare('INSERT INTO `patient`(`p_nom`, `p_prenom`, `p_ville`, `p_mail`, `p_mdp`) VALUES (:nom, :prenom, :ville, :mail, :password)');

			$req->execute(array("nom" => $nom, "prenom" => $prenom, "password" => $password, "mail" => $mail, "ville" => $ville));
			
			echo "Inscription effectué !";
		}
	}
}
?>
