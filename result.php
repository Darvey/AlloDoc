<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>Allodoc</title>
  <link rel="stylesheet" href="stylesheets/result.css"/>
  <link rel="stylesheet" href="stylesheets/normalize.css"/>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <script type='text/javascript' src="js/scrollHeader.js"></script>
  <script type='text/javascript' src="js/map.js"></script>

  <script async defer
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaCslbhbWGYa7iBEuCatwUI9iyRHC1xvc&callback=initMap">
  </script>

</head>

<?php
	session_start();
	
if (!$_SESSION["connect"]){
	header('location: inscription.php');
}
  require_once 'includes/config.php';
  $month = false;
  $year = false;
  $day = null;

  if ( isset($_GET['m']) ){
    $month = $_GET['m'];
  }
  if ( isset($_GET['y']) )  {
    $year = $_GET['y'];
  }
  if ( isset ($_GET['d']) ){
    $day = $_GET['d'];
  }
?>

<body onload = codeAddress()>

  <header>
    <a class="title" href="index.php"> Allodoc. </a>
    <a class="textInscription" href="inscription.php">Mon compte</a>
    <a class="deconnexion" href="deconnection.php">Se deconnecter</a>
  </header>

  <section>
  </section>

  <div class="up1">
  </div>

  <div class="up2">
    <p class = "monthText"> <?php echo date("F",$day);?> </p>
  </div>

  <div class="blocMedecin-first"></div>

<?php

	for($i=0;$i<sizeof($_SESSION["Medecin"]);$i++){
		displayMedecin($day, $_SESSION["Medecin"][$i]);
	}
  ?>

  <div id="blocMap">
    <img src="img/mapIcon.png" id ="iconMap" width="50px">
    <div id="map"></div>
  </div>

  <!--<div id="blocSearch">
    <a href='#' name="Rechercher" id="iconSearch"><img src="img/searchIcon.png" width="46px"></a>
  		<form action="traitement.php" method="post" >
  		<table align="center" border="0" cellspacing="0"  cellpadding="0">
        <td><input classe = "searchSpeciality" type="text" name="spe" placeholder="Spécialité"></td>
		<td><input classe = "searchSpeciality" type="text" name="ville" placeholder="Ville"></td>
  		</table>
  </div>-->



</body>
</html>
