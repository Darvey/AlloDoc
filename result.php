<?php
	require_once 'includes/config.php';
	require_once 'includes/htmlElmt.php';

	displayHead("result");

	$month = false;
	$year = false;
	$day = null;

	if ( isset($_GET['m']) )
	{
		$month = $_GET['m'];
	}

	if ( isset($_GET['y']) )
	{
		$year = $_GET['y'];
	}
	if ( isset ($_GET['d']) )
	{
		$day = $_GET['d'];
	}

	echo '<body onload = "codeAddress()">';
		displayHeader();
		echo '<section>';
			echo '<div id ="blocMedecins">';
			echo '<p>Selectionnez un MEDECIN dans la liste pour faire apparaitre ses DISPONIBILITES</p>';
			for($i=0;$i<10;$i++){
				displayMedecin();
			}
			echo '</div>';
			displayCalendarWeek($day);
		echo '</section>';

?>

		<div id="map"></div>
		<script type="text/javascript">

			var map;
			var geocoder;

			function initMap() {

			 geocoder = new google.maps.Geocoder();

			  map = new google.maps.Map(document.getElementById('map'), {
			    center: {lat: -34.397, lng: 150.644},
			    zoom: 14
			  });
			}

			 function codeAddress() {
			    var address = "Besançon rue des granges";
			    geocoder.geocode( { 'address': address}, function(results, status) {
			      if (status == google.maps.GeocoderStatus.OK) {
			        map.setCenter(results[0].geometry.location);
			        var marker = new google.maps.Marker({
			            map: map,
			            position: results[0].geometry.location
			        });
			      } else {
			        alert("Geocode was not successful for the following reason: " + status);
			      }
			    });
			  }


		</script>

		<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaCslbhbWGYa7iBEuCatwUI9iyRHC1xvc&callback=initMap">
		</script>

<?php
	displayFooter();
?>

</body>
</html>
