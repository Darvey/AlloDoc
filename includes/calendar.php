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
function getHorairesDispo($day, $month, $year, $id)
{
	$result = array();

	$date = $year.'-'.$month.'-'.$day;
	//$formatDate = $day.'-'.$month.'-'.$year;

	$sql = 'SELECT h_time FROM HORAIRE WHERE h_m_id = '.$id.' ORDER BY h_time';

	$querry = mysql_query($sql) or die(mysql_error());

	while ($row = mysql_fetch_assoc($querry))
	{
		$result[] = $row;
	}
	mysql_free_result($result);
	return $result;

}

function calendarHead($dates){

	$strDays = array();
	$strDays = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'];
	$strMonth = ' '.date('F',$dates[0]);

	$lastWeek = $dates[0] - (7*3600*24);
	$nextWeek = $dates[0] + (7*3600*24);

	echo'<div class = "nextWeek_btn"> <a href="'.$_SERVER['PHP_SELF'].'?d='.$nextWeek.'&amp">></a> </div>';
   	echo'<div class="calendar">';
   	echo'  <table>';

   	echo'    <thead class = "calendar-head">';
   	echo'     <tr>';
	for($i=0;$i<6;$i++){
		echo '<th>'.$strDays[$i].'<br><p>'.date('d',$dates[$i]).'</p></th>';
	}
   	echo'     </tr>';
   	echo'    </thead>';
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


function displayMedecin($day, $id)
{
	$medecin = getMedecin($id);

	if(null == $day){
		$day = strtotime("last Monday");
	}

	$dates = array();
	for($i=0; $i<7; $i++){
		$dates[$i] = $day + ($i*3600*24);
	}

   echo'<div class="blocMedecin">';
   echo'<img src="img/128.png" class ="icnMedecin">';
   echo'<div class="infosMedecin">';
   echo'<p class = "nameMedecin"> Dr '.$medecin[m_prenom].' '.$medecin[m_nom].'</p>';
   echo'<p> Spécialité : généraliste<br>';
   echo $medecin[m_adresse].' '.$medecin[m_ville].'</p>';

   echo'</div>';
   calendarHead($dates);
   echo'    <tbody class = "calendar-body">';
   echo'       <tr>';
   for($cnt=0;$cnt<6;$cnt++)
   {
      echo'    <td>';
      $events = getHorairesDispo(date('d',$dates[$cnt]),date('m',$dates[$cnt]),date('Y',$dates[$cnt]), $id);
      foreach ($events as $e)
      {
         echo '   <a class = "s-horraire" href="rdv.php">'.tohm($e['h_time']).'</a><br>';
      }
      echo'       </td>';
   }
   echo'         </tr>';
   echo'       </tbody>';
   echo'      </table>';
   echo'     </div>';
   echo'    </div>';
}

?>
