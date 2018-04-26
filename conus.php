<?php include "dbpart1.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.44.2/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v0.44.2/mapbox-gl.css' rel='stylesheet' />

<?php include "stylo.php" ?>    
  </head>
  <body>
    <div id="ducks">
      <?php include "header.php" ?>
    </div>

    <div class="row content">
      <div class="col-sm-8 text-left" >
        <div id="smborder" >
          <h1>Contact us</h1>
          <div id="imagerss">
            <div class='blueText'><strong>Contacting Us</strong></div><br /><div class='innerText'>If there are any questions regarding this privacy policy, you may contact us using the information below.<br><br></div><div class='innerText'>Qaida</div><div class='innerText'>Timiryazeva 70 Str, Almaty</div>Almaty District, Almaty A05C2X4<div class='innerText'>Kazakhstan</div><div class='innerText'>ozaki149@gmail.com</div><div class='innerText'> or call +77011330941</div>
            
              </div>

            </div>
          </div>
          <div id="map" style="margin:0 17.5%;height: 250px; width: 830px"></div>
        </div></div>
      </div></div>
      
      <?php include "js/mapi.php" ?>
      <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyA-LW6fyInExELEgImDzU1sQ7jtSRTokOo&callback=initMap""></script>
    </body>
  </html>