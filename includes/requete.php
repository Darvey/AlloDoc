<?php

require_once 'config.php';

function getMedecinById($id){

	$result = array();

	$sql ='
		SELECT m_nom , m_prenom , m_ville , m_cp , m_adresse
		FROM medecin
		WHERE m_id = '.$id.'
	';
	$querry = mysql_query($sql) or die("Une requête à échouée.");

	while ($row = mysql_fetch_assoc($querry))
	{
		$result = $row;
	}
	return $result;
}

function getRDVbyPatientId($id){
   $result = array();
   $sql = '
      SELECT jour,heure,idMedecin
      FROM rdv
      WHERE idPatient = '.$id.'
   ';
   $querry = mysql_query($sql) or die("Une requête à échouée.");

   while ($row = mysql_fetch_assoc($querry))
   {
      $result[] = $row;
   }
   return $result;
}

function addRDV($p_id,$m_id,$jour,$heure){
   
}

?>
