<?php
  require_once 'includes/htmlElmt.php';

  displayHead("Connect");
  echo '<body>';
  displayHeader();
?>

<form method="post" action="">
	
<div class ="bloc-connect">
    <form method="post" action="traitement.php">
           <label for="prenom">Prenom </label>
           <input type="text" name="s_prenom" id="s_prenom" />
           <br />
		   <label for="nom">Nom </label>
           <input type="text" name="s_nom" id="s_nom" />
           <br />
           <label for="pass">Mot de passe </label>
           <input type="password" name="s_pass" id="s_pass" />
		   <br/>
		   <label for="mail">Mail </label>
           <input type="text" name="s_mail" id="s_mail" />
           <br />
		   <label for="ville">Ville </label>
           <input type="text" name="s_city" id="s_city" />
           <br />
		   <input type="submit" name="Envoyer" value="Inscription" />
    </form>
  </div>

<?php
//Connexion à la BDD
try{
	$bdd = new PDO ('mysql:host=localhost;dbname=docapp', 'root', 'root');
}
catch(Exception $e){
  die('Erreur :'.$e->getMessage());
}

if(ISSET($_POST['Envoyer'])){
	//On créer les variables
	$prenom =   $_POST['s_prenom'];
	$nom = $_POST['s_nom'];
	$password = $POST['s_pass'];
	$password = hash("sha256", $password);
	$mail = $_POST['s_mail'];
	$ville = $_POST['s_city'];

	$req = $bdd->prepare('INSERT INTO `patient`(`p_nom`, `p_prenom`, `p_ville`, `p_mail`, `p_mdp`) VALUES (:nom, :prenom, :ville, :mail, :password)');

	$req->execute(array("nom" => $nom, "prenom" => $prenom, "password" => $password, "mail" => $mail, "ville" => $ville));

	/*if(!empty($login) && !empty($password))
	{

	}else{
	?>

	<b>Pseudo ou MDP vide !</b>

	<?php
	}

	//if(empty($login) && empty($password)){

	//}else{
		//session_start();
		//$_SESSION['login'] = $_POST['login'];
		//header('Location: index.php');
	//}*/
}
   
   ?>