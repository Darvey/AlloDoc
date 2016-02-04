<?php

// Connexion à la db
mysql_connect('localhost', 'root', 'root')
	or die('Impossible de se connecter à la base de donnée');

mysql_select_db('docapp') or die('Impossible de sélectionner une base de donnée');

// Script du calendrier
require_once 'calendar.php';

?>
