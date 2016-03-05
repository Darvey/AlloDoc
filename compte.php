<?php
   session_start();
   if ($_SESSION["connect"]){
		if($_SESSION["pro"]==1){
			header('location: compteMedecin.php');
		}else{
			header('location: comptePatient.php');
		}
   } else {
	   header('location: inscription.php');
   }
  ?>
