<!doctype html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/scripts.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!--todo: obtain another api key -->
  <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDucDnICG42QY2r_zFaw3Go7taHYv6GLZ0&libraries=places,geometry,directions"></script>
  -->
</head>

<body>
  <div id="floating-panel">

   <b>End: </b>
   <select id="end">
     <option value="chicago, il">Chicago</option>

   </select>
   </div>

    <div id="map"></div>
    <p>Seeing blank? Your location settings are currently turned off</p>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDucDnICG42QY2r_zFaw3Go7taHYv6GLZ0&callback=initMap"></script>

</body>
</html>
