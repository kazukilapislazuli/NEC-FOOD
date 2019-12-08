<?php  
require 'includes/form_handlers/farmerprofile_handler.php';
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="assets/css/farmer-profile.css">
    <title>portal</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
   <!--  <form>
  Lat:<br>
  <input type="text" name="lat"><br>
  Long:<br>
  <input type="text" name="long">
    </form> -->
<!--     <p>to get your location click here<button type="button" onclick=initMap()>Spank Me!</button></p>
 --><div id="header">    
    <div id="blank">
      </div>
      <div id="info">
          <img id="prfimg" alt="#" src="user-profile-svgrepo-com.svg" height="100px" width="100px">
          <h2><?php echo $user['first_name']; ?></h2>
          <br>
      </div>
  </div>
  <div id="nvbr">
      <div id="hm"></div>
      <h4 id="hm2">WELCOME</h4>
      <ul>
          <li><a href="#"><br>message</a></li>
          <li><a href="#"><br>MSP</a></li>
          <li><a href="#"><br>rate</a></li>
          <li><a href="#"><br>track</a></li>
          <li><a href="#"><br>contact us</a></li>
          
      </ul>
      <button id="lgot">LOG OUT</button>
  </div>  
  <div id="blah">
      <div id="hist">
          <h1 id="yld">YIELD DETAILS</h1><br><br>
          <form action="farmer-profilepage.php" method="POST">
              <label for="crops">CROPS</label><br>
              <select id="crp" name="crops">
              <option value="whe">wheat</option>
              <option value="ric">rice</option>
              <option value="sug">sugar cane</option>
              <option value="gro">ground nuts</option>
              <option value="len">lentils</option>
              <option value="gar">garlic</option>
              <option value="cau">cauliflowers</option>
              <option value="bro">broccoli</option>
              <option value="pea">peas</option>
              <option value="sea">seasam seed</option>
              <option value="cas">cashew</option>
              <option value="tee">tea</option>
              <option value="pop">potatoes</option>
              <option value="oni">onions</option>
              <option value="cot">cotton</option>
              <option value="egg">eggplant</option>
              <option value="nut">nutmeg</option>
              <option value="mac">mace</option>
              <option value="card">cardimom</option>
              <option value="cab">cabbage</option>
              <option value="pum">pumkin</option>
              <option value="squ">squash</option>
              <option value="tom">tomatoes</option>
              <option value="ban">bannanas</option>
              <option value="man">mangoes</option>
              <option value="gin">ginger</option>
              <option value="pap">papaya</option>
              <option value="chi">chillies</option>
              <option value="pep">pepper</option>
              <option value="lem">lemons</option>
              <option value="cor">coriander</option>
              <option value="sug">sugercane</option>
              </select><br><br>
          <label for="wght">WEIGHT</label><br>
          <input type="number" name="wght" placeholder="&nbsp;&nbsp;&nbsp;in Kgs."><br><br><br>
          <label for="ag">AGE OF CROPS</label><br>
          <input type="number" class="numinput" name="ag" placeholder="&nbsp;&nbsp;&nbsp;in months"><br><br><br>
          <label for="hl">HARVEST LOCATION</label><br>
          <input type="text" name="hl" placeholder="&nbsp;&nbsp;&nbsp;city or district"><br><br><br>
          <label for="long" id="lng">LONGITUDE</label><br>
          <input type="number" class="numinput" name="long" placeholder="&nbsp;&nbsp;&nbsp;LONGITUDE"><br><br><br>
          <label for="latt" id="ltt">LATTITUDE</label><br>
          <input type="number" class="numinput" step="0.000001" name="latt" id=lt placeholder="&nbsp;&nbsp;&nbsp;LATTITUDE"><br><br><br>
          <label for="inv">INVESTMENT</label><br>
          <input type="number" class="numinput" step="0.000001" name="inv" placeholder="&nbsp;&nbsp;&nbsp;money invest">
          <p>note:reciept will be verified</p><br>
          <input id="submit" type="submit" name="fsubmit" value="Submit">
      </div>
  </div>
       

    <!-- <div id="map"></div>  -->
    <div id="location">
        
    </div>
    <button id="mp">MAP</button>
    <script> 
           // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
    

      var map, infoWindow, pos;
      function initMap() {
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
             pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            console.log(pos);
            var str = `latitude : ${pos.lat} longitude : ${pos.lng}`;
            document.getElementById("location").innerHTML = str;


            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
        console.log("initmap called");
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC95sQMXYsOeQIDB3GHGRvc0vSRvpUIBeg&callback=initMap">
    </script>
  </body>
</html>