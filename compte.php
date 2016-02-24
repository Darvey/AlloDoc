<?php
   session_start();
   if($_SESSION["pro"]==1){
      header('location: compteMedecin.php');
   }else{
      header('location: comptePatient.php');
   }
 ?>
