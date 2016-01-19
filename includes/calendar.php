<?php
require_once 'config.php';

// $heure de la forme hh:mm:ss
// on enleve les secondes
function tohm($heure) {
   $arrayheure = explode(':',$heure);
   $newheure = $arrayheure[0].':'.$arrayheure[1];
   return $newheure; // de la forme hh:mm
}


/// Récupère les horaires disponible d'un medecin pour un jour donné
function getHorairesDispo($day, $month, $year)
{
	$result = array();

	$date = $year.'-'.$month.'-'.$day;
	//$formatDate = $day.'-'.$month.'-'.$year;

	$sql = '
		SELECT h_time
		FROM HORAIRE
		WHERE h_date = \''.$date.'\'
	';

	$querry = mysql_query($sql) or die("Une requête à échouée.");

	while ($row = mysql_fetch_assoc($querry))
	{
		$result[] = $row;
	}
	mysql_free_result($result);
	return $result;

}

function calendarHead($dates){

	$strDays = array();
	$strDays = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
	$strMonth = ' '.date('F',$dates[0]);

	echo '<div id="calendar">';
	echo '<table>';
	echo 	'<caption>'.strtoupper($strMonth).'</caption>';
	echo 		'<thead class = "calendar-head">';
	echo 			'<tr>';

	$lastWeek = $dates[0] - (7*3600*24);
	$nextWeek = $dates[0] + (7*3600*24);

	echo '<th>';
		echo '<a class ="pastWeek" href="'.$_SERVER['PHP_SELF'].'?d='.$lastWeek.'&amp"><</a>';
	echo '</th>';

	for($i=0;$i<7;$i++){
		echo '<th>'.$strDays[$i].'<br><p>'.date('d',$dates[$i]).'</p></th>';
	}
		echo '<th>';
			echo '<a class ="nextWeek" href="'.$_SERVER['PHP_SELF'].'?d='.$nextWeek.'&amp">></a>';
		echo '</th>';

	echo 			'</tr>';
	echo 		'</thead>';
}

/// Affiche les disponibilitées d'un medecin sur une semaine

function displayCalendarWeek($_fDay = null)
{
	if(null == $_fDay){
		$_fDay = strtotime("last Monday");
	}

	$dates = array();
	$events = array();

	for($i=0; $i<7; $i++)
	{
		$dates[$i] = $_fDay + ($i*3600*24);
	}

	calendarHead($dates);

	echo '<tbody class = "calendar-body">';
	echo 	'<tr>';
	foreach($dates as $_d)
	{
		echo'<td>';
		$events = getHorairesDispo(date('d',$_d),date('m',$_d),date('Y',$_d));
		foreach ($events as $e){
			echo '<a class = "sHoraire" href="includes/recherche.php">'.tohm($e['h_time']).'</a><br>';
		}
		echo '</td>';
	}
	echo 	'</tr>';
	echo '</tbody>';
	echo '</table>';
	echo '</div>';

}

function getMedecin($id){

	$result = array();

	$sql = '
		SELECT m_nom , m_prenom , m_ville , m_cp , m_adresse
		FROM MEDECIN
		WHERE m_id = '.$id.'
	';
	$querry = mysql_query($sql) or die("Une requête à échouée.");

	while ($row = mysql_fetch_assoc($querry))
	{
		$result = $row;
	}
	return $result;
}

function displayMedecin()
{
	$id = 1;
	$medecin = getMedecin($id);

	echo '<a href="#"><div class = "vignetteMedecin">';
	echo '<img src="./img/icnMedecin.svg" class ="icnMedecin">';
	echo '<p>Dr '.$medecin['m_prenom'].' '.$medecin['m_nom'].'<br>'.$medecin['m_cp'].' '.utf8_encode($medecin['m_ville']).
		'<br>'.$medecin['m_adresse'].'</p>';
	echo '</div></a>';
}
?>
