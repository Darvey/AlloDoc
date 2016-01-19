
<?php

function displayHead($pageName)
{
	echo '<!DOCTYPE html>';
	echo '<head>';
	echo '	<meta charset="utf-8">';
	echo '	<title>'.$pageName.'</title>';
	echo '	<link rel="stylesheet" href="stylesheets/calendar.css"/>';
	echo '</head>';
}

function displayHeader()
{
	echo '<header>';
	echo '<div class = "title">Allodoc.</div>';
	echo '<a class = "btnConnexion" href="connect.php">Connexion</a>';
	echo '</header>';
}

function displayFooter()
{
    echo '<footer>';
    echo '</footer>';
}

?>
