// ----------------------- [START MAP]

var map;
var geocoder;

function initMap()
{
   geocoder = new google.maps.Geocoder();

   map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 14
   });
}

function codeAddress() {
   var address = "Besançon rue des granges";
   geocoder.geocode( { 'address': address}, function(results, status){
      if (status == google.maps.GeocoderStatus.OK) {
         map.setCenter(results[0].geometry.location);
         var marker = new google.maps.Marker({
         map: map,
         position: results[0].geometry.location
      });
      }else{
         alert("Geocode was not successful for the following reason: " + status);
      }
   });
}
