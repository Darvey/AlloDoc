var geocoder;

function popupGPS(){

   geocoder = new google.maps.Geocoder();

   var address = document.getElementById("pac-input").value;
   var loc=[];

    // next line creates asynchronous request
    geocoder.geocode( { 'address': address}, function(results, status) {
      // and this is function which processes response
      if (status === google.maps.GeocoderStatus.OK) {
         if(results[0]){
           loc[0]=results[0].geometry.location.lat();
           loc[1]=results[0].geometry.location.lng();
           alert(loc[0]);
        }
     }
     alert('Geocoder failed due to: ' + status);
  });

 }
