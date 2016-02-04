<?php 
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

		$req = $bdd->prepare('SELECT p_mdp FROM patient WHERE p_mail = (:mail) LIMIT 1;');

		$req->execute(array("mail" => $mail));
		
		$res = $req->fetch();

		if($res['p_mdp'] != $password) {
			echo 'Probleme Mail/Mot de passe';
		} else{
			echo "Vous etes connecté";
		}
	}
}

if(ISSET($_POST['Inscription'])){
	//On creer les variables
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