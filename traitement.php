<?php if(!empty($_POST['Envoyer'])){ // Si le formulaire est envoyé.

	// on se connecte à MySQL 	
	$mysqli = new mysqli("localhost", "root", "root", "docapp");
	
	if ($mysqli->connect_errno) {
		echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

		
	if(!empty($_POST['s_mail']) && !empty($_POST['s_pass'])) {
	
		$password = md5($_POST['s_pass']);
		$mail = $_POST['s_mail'];

		if (!($data = $mysqli->prepare( "SELECT p_mdp FROM patient WHERE p_mail = (?) LIMIT 1;"))) {
			echo "Echec de la préparation : (" . $mysqli->errno . ") " . $mysqli->error;
		};
        if (!($data->bind_param("i", $mail))){
			echo "Echec lors du liage des paramètres : (" . $data->errno . ") " . $data->error;
		};
        if(!($data->execute())){
			echo "Echec lors de l'exécution : (" . $data->errno . ") " . $data->error;
		};
		
		$data->bind_result($name);
		
		// Lecture des valeurs 
		while ($data->fetch()) {
			$mdp =  $name;
		}

		if($mdp != $password) {
			echo 'Probleme Mail/Mot de passe';
		} else{
			echo "Vous etes connecté";
		}
	}
}
?>