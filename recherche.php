<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Allodoc</title>
	<link rel="stylesheet" href="stylesheets/recherche.css"/>
	<link rel="stylesheet" href="stylesheets/normalize.css"/>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script type='text/javascript' src="js/location.js"></script>
	<script type='text/javascript' src="js/autocomplete.js"></script>

	<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaCslbhbWGYa7iBEuCatwUI9iyRHC1xvc&signed_in=true&libraries=places&callback=initAutocomplete"
		async defer>
	</script>


</head>

<body>
	<header>
		<a class="title" href="index.php"> Allodoc. </a>
		<a class="textInscription" href="inscription.php" >Mon compte</a>
	</header>

	<div class='text-recherche'>
		<h1> Trouvez votre medecin </h1>
		<p> Et prenez rendez vous immédiatement </p>
		<div class="form-recherche">
			<form  method="post" action="traitement.php">
				<input type="text" name="spe" placeholder="Spécialité">
				<input type="text" name="ville" placeholder="Ville">
				<input type="text" id="pac-input" placeholder="Adresse" onFocus="geolocate()">
				<input type="submit" name="Rechercher" value="Rechercher" /><!--onclick="popupGPS()"--> 
			</form>
		</div>
	</div>

<?php
	$geocoder = "http://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false";

	$arrAddresses = Address::LoadAll(); // Notre collection d'objets Address

	foreach ($arrAddresses as $address) {

	        if (strlen($address->Lat) == 0 && strlen($address->Lng) == 0) {

	            $adresse = $address->Rue;
	            $adresse .= ', '.$address->CodePostal;
	            $adresse .= ', '.$address->Ville;

	            // Requête envoyée à l'API Geocoding
	            $query = sprintf($geocoder, urlencode(utf8_encode($adresse)));

	            $result = json_decode(file_get_contents($query));
	            $json = $result->results[0];

	            $adress->Lat = (string) $json->geometry->location->lat;
	            $adress->Lng = (string) $json->geometry->location->lng;
	            $adress->Save();

	         }
	}
?>


</body>

</html>
