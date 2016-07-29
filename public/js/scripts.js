//Google provided function to initialise Google geolocation API
//Reference: https://developers.google.com/maps/documentation/javascript/examples/map-geolocation
function initMap() {

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {

      //Gets the current position of the user
      var currPos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

      var map = new google.maps.Map(document.getElementById('map'), {
        center: currPos,
        zoom: 40
      });
      var infoWindow = new google.maps.InfoWindow({
        map: map
      });

      var marker = null;

      //updates the current position every 5 seconds on the google map
      function autoUpdate() {
        navigator.geolocation.getCurrentPosition(function(position) {
          var newPos = new google.maps.LatLng(position.coords.latitude,
                                                position.coords.longitude);
          if (marker) {
            // Marker already created - Move it
            marker.setPosition(newPos);
          }
          else {

            // Marker does not exist - Create it
            marker = new google.maps.Marker({
              position: newPos,
              map: map

            });
          }

          // Center the map on the new position
          map.setCenter(newPos);
        });

        // Call the autoUpdate() function every 5 seconds
        setTimeout(autoUpdate, 5000);
      }
      autoUpdate();

    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
    'Error: The Geolocation service failed.' :
    'Error: Your browser doesn\'t support geolocation.');
}

// helper function for getting the data set
function httpGet() {
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open("GET", "put url here", false);
  xmlHttp.send(null);
  return xmlHttp.responseText;
}
