<!doctype html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/styles.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</head>

<body>
  <?php
/*
  $ch = curl_init("http://131940.qld.gov.au/DMR.Modules/TTIEvents/RSS/RSS.aspx");
  $output = curl_exec($ch);
  echo($output);
*/
  ?>
  <div id="floating-panel">

   <b>End: </b>
   <select id="end">
     <option value="melbourne, vic">Melbourne</option>

   </select>
   </div>

    <div id="map"></div>
    <p>Seeing blank? Your location settings are currently turned off</p>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDucDnICG42QY2r_zFaw3Go7taHYv6GLZ0&callback=initMap"></script>

</body>
</html>
