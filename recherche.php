<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Allodoc</title>
	<link rel="stylesheet" href="stylesheets/recherche.css"/>
	<link rel="stylesheet" href="stylesheets/normalize.css"/>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script type='text/javascript' src="js/map.js"></script>
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
			<form action="index.php" method="post" >
				<input type="text" placeholder="spécialité">
				<input type="text" id="pac-input" onFocus="geolocate()">
				<input type="submit" value="Rechercher"/>
			</form>
		</div>
	</div>




</body>

</html>
