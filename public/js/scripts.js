//Google provided function to initialise Google geolocation API
//Reference: https://developers.google.com/maps/documentation/javascript/examples/map-geolocation
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {
      lat: -34.397,
      lng: 150.644
    },
    zoom: 20
  });
  var infoWindow = new google.maps.InfoWindow({
    map: map
  });


  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {

      //Gets the current position of the user
      var currPos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
      //Q-Ride providers in Queensland dataset - file format: CSV
      var data = httpGet();
      //Parses CSV file, and returns list of each provider's position
      var providerCoordinates = parseData(data);
      //lastly, finds the closest QRide Provider
      var shortestPath = findShortestPath(currPos, providerCoordinates);

      infoWindow.setPosition(shortestPath);
      infoWindow.setContent('This is your closest QRide Provider.');
      map.setCenter(shortestPath);

      infoWindowTwo.setPosition(currPos);
      infoWindowTwo.setContent('You are currenlty here.');
      map.setCenter(currPos);

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
  xmlHttp.open("GET", "https://data.qld.gov.au/dataset/9b4990ba-c083-40bd-a52b-c59d8dd2e793/resource/0647759d-9f68-44f9-bd7e-eb96d37d11e4/download/20160323qrideprovider.csv", false);
  xmlHttp.send(null);
  return xmlHttp.responseText;
}
