<!doctype html>

<head>
  <meta charset="utf-8" />
  <!--Meta tag to allow for mobile accessibility -->
  <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
  <title>L2Moto</title>
  <meta name="description" content="Queensland's greatest motorbike teachers" />
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="images/favicon.ico" type="image/ico" />
  <link rel="stylesheet" href="css/styles.css">
  <link href="images/Twitter.png" type="image/png" rel="stylesheet" />
  <link href="images/Facebook.png" type="image/png" rel="stylesheet" />
  <link href="images/Instagram.png" type="image/css" rel="stylesheet" />
  <link href="images/LinkedIn.png" type="image/css" rel="stylesheet" />
  <link rel="stylesheet" href="css/magic.css"></link>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPQhe1MxS69bPLryapwhD6f-rF1TlJR5Q&libraries=places,geometry"></script>
</head>

<body>
  <section class="SectionOne">

    <div id="tabcontainer">
      <a href="index.html">Home</a>
      <a href="about.html">About</a>
      <button id="browsebutton" type="button" data-toggle="modal" data-target="#myModalG">Browse</button>
      <button type="button" class="buttonimposter" data-toggle="modal" data-target="#myModal">Ride Now</button>

      <!-- ModalG -->
          <div class="modal fade" id="myModalG" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>

                  <h4 class="modal-title">Browse All QRide Providers</h4>

                </div>
                <div class="modal-body">
    			  <div class="modal-upper">
    				<!-- main provider info section -->
    				<div  id="providerInfoContainer">
    				  <div class="providerInfoTextColumn">
    					<p class="modal-providerName" id="modal-providerName"></p>
    					<p class="modal-providerInfo" id="modal-providerAddress"></p>
    					<p class="modal-providerInfo" id="modal-providerSuburb"></p>
    					<p class="modal-providerInfo" id="modal-providerPhone"></p>
    					<p class="modal-providerInfo" id="modal-providerEmail"></p>
    					<p class="modal-providerInfo" id="modal-providerWebsite"></p>
    				  </div>
    				  <div class="providerInfoImageColumn">
    				    <div id="providerInfoImage">
    					</div>
    				  </div>
    				</div>
    			  </div>
    			  <div class="modal-lower">
    				<!-- provider nav buttons -->
    				<button type="button" id="btn_previousProvider" class="btn_providerNav">&#60</button>
    				<button type="button" id="btn_nextProvider" class="btn_providerNav">&#62</button>
    			  </div>

                </div>
              </div>

            </div>
          </div>

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"> Web feature </h4>
            </div>
          <!--  <div class="modal-body"> -->

              <div class="first-column">
                <!-- Your first column here -->

                <div id="secondmap">
                <!--Add second map, for seeing the clicked locations -->
                </div>

              </div>
              <div class="second-column">
                <!-- Your second column here -->
                <p> Queensland's Top 5 Providers </p>
                <br> </br>
                <br> </br>
              <?php include("populate_feature_list.php"); ?>
             <div id="rating-web-feature">
               <!-- Here make calls to the DB and display the data visually. -->
             </div>
          </div>
          <!--  </div> -->
            <div class="modal-footer">
            <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            </div>
          </div>
        </div>
      </div>


    </div>
    <div id="namecontainer">
      <h1 id="websitename">L2Moto</h1>
      <p id="description">Helping you find Queensland's best QRide Providers</p>
    </div>
  </section>

  <section class="SectionTwo">
    <div id="missionpiccontainer">
      <div id="missionpic1">
      </div>
      <div id="missionpic2">
      </div>
      <div id="missionpic3">
      </div>
    </div>
    <h1 id="missionstatement">Ride with Confidence</h1>
  </section>

  <section class="SectionThree">
    <p>Scroll down to see your nearest QRide Provider!</p>

  </section>

  <section class="SectionFour" id="feature">
    <br>
    <br>
    <!--first map-->
    <div id="map"></div>
    <p>Seeing blank? Your location settings are currently turned off</p>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>

  </section>

  <section class="SectionFive">
    <p>Find us on Social Media</p>
    <div id="iconpiccontainer">
      <div id="icon1">
      </div>
      <div id="icon2">
      </div>
      <div id="icon3">
      </div>
      <div id="icon4">
      </div>
    </div>

  </section>

  <script src="js/scripts.js"></script>
  <script src="js/browse.js"></script>
</body>
</html>
