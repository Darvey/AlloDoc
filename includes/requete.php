<?php

function getMedByAdresse($p_ville,$p_lat,$p_lng){

   $result = array();
   $sql = '
      SELECT m_nom , m_prenom , m_ville , m_cp , m_adresse
      FROM MEDECIN
      WHERE m_ville = '.$ville.'
      GROUP BY
	';
}

?>
