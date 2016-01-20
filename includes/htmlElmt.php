
<?php

function displayHead($pageName)
{
	echo '<!DOCTYPE html>';
	echo '<head>';
	echo '	<meta charset="utf-8">';
	echo '	<title>'.$pageName.'</title>';
	echo '	<link rel="stylesheet" href="stylesheets/calendar.css"/>';
	echo '	<link rel="stylesheet" href="stylesheets/form.css"/>';
	echo '</head>';
}

function displayHeader()
{
	echo '<header>';
	echo '<div class = "title">  <a class="btnAccueil" href="index.php" >Allodoc. </a></div>';
	echo '<a class = "btnConnexion" href="connect.php">Connexion</a>';
	echo '</header>';
}

function displayFooter()
{
    echo '<footer>';
    echo '</footer>';
}

?>
