<?php if(!empty($_POST['Envoyer'])){ // Si le formulaire est envoyé.

	// on se connecte à MySQL 
	$db = mysql_connect('localhost', 'root', 'root'); 
	mysql_select_db('docapp',$db); 

	if(!empty($_POST['s_mail']) && !empty($_POST['s_pass'])) {
		//$password = $POST['s_pass'];
		//print_r($_POST);
		$password = md5($_POST['s_pass']);
		$mail = $_POST['s_mail'];
		
		$sql = "select p_mdp from patient where p_mail='".$mail."'";
		$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

		$data = mysql_fetch_assoc($req);

		if($data['p_mdp'] != $password) {
			echo 'Probleme Mail/Mot de passe';
		} else{
			echo "Vous etes connecté";
		}
		
	}
}
?>