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

		$req = $bdd->prepare('SELECT * FROM patient WHERE p_mail = (:mail) LIMIT 1;');

		$req->execute(array("mail" => $mail));

		$res = $req->fetch();

		if($res['p_mdp'] != $password) {
			echo 'Probleme Mail/Mot de passe';
		} else{
			$_SESSION["id"] = $res['p_id'];
			$_SESSION["nom"] = $res['p_nom'];
			$_SESSION["prenom"] = $res['p_prenom'];

			$req = $bdd->prepare('SELECT * FROM rdv WHERE idPatient = (:id) ORDER BY jour;');
			$req->execute(array("id" => $_SESSION["id"]));
			echo "Vos différents rendez-vous sont : <br>";
			while($res = $req->fetch()){
				$doc = $bdd->prepare('SELECT m_nom FROM medecin WHERE m_id = (:id);');
				$doc->execute(array("id" => $res['idMedecin']));
				$resM = $doc->fetch();
				echo "avec Dr {$resM['m_nom']} le {$res['jour']} à {$res['heure']} <br>";
			}

			header('location: recherche.php');
			echo "Vous etes connecté";
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

	$req = $bdd->prepare('INSERT INTO `patient`(`p_nom`, `p_prenom`, `p_ville`, `p_mail`, `p_mdp`) VALUES (:nom, :prenom, :ville, :mail, :password)');

	$req->execute(array("nom" => $nom, "prenom" => $prenom, "password" => $password, "mail" => $mail, "ville" => $ville));

	echo "Inscription effectué !";
}
?>
