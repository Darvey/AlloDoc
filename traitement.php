<?php if(!empty($_POST['Envoyer'])) // Si le formulaire est envoyé.          
{  
echo "Chaine de caracteres";
}?>

<?php
// on se connecte à MySQL 
$db = mysql_connect('localhost', 'root', 'root'); 
mysql_select_db('docapp',$db); 

if(isset($_POST) && !empty($_POST['s_login']) && !empty($_POST['password'])) {
$_POST['password'] = hash("sha256", $_POST['password']);
  extract($_POST);
  
  // on recupére le password de la table qui correspond au login du visiteur
  $sql = "select password from membre where s_login='".$login."'";
  $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

  $data = mysql_fetch_assoc($req);

  if($data['password'] != $password) {
    echo '<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Oh Non !</strong> Mauvais login / password. Merci de recommencer !
</div>';
  }
  
  else {
    session_start();
    $_SESSION['s_login'] = $login;
    
    echo '<div class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Yes !</strong> Vous etes bien logué, Redirection dans 5 secondes ! <meta http-equiv="refresh" content="5; URL=dashboard">
</div>';
    // ici vous pouvez afficher un lien pour renvoyer
    // vers la page d'accueil de votre espace membres 
  }    
}
else {
  $champs = '<p><b>(Remplissez tous les champs pour vous connectez !)</b></p>';
}


?>