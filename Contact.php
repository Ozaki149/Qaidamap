<?php include "dbpart1.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "stylo.php" ?>
    <script>
    $(document).ready(function(){
    $("#directions-panel").hide();
    $("#submit").click(function(){
    $("#directions-panel").show();
    });
    });
    </script>
  </head>
  <body>
    <div id="ducks">
      <?php include "header.php" ?>
    </div>
    <div id="map"></div>
    <div id="right-panel">
      <div id="smborder">
        <div>
          <input id="start" type="text"  class="form-control" placeholder="Origin">
          <hr>
          <!--  Choose/Random waypoints<label class="switch"  >
            <input type="checkbox" id ="myCheck" >
            <span class="slider round"></span>
          </label> -->
          <input style="margin-bottom:3px" class="form-control" placeholder="Enter intermediate points" id ="test1" type="text">
          <select multiple id="waypoints" class="form-control">
            <?php include "dbpart2.php" ?>
          </select>
          <button type="submit" name="submit" class="btn btn-default" id="submit1"  style="margin-bottom:3px">Add waypoint</button>
          <hr>
          <input id="end" type="text" class="form-control" style="margin-bottom:3px" placeholder="Destination">
          <button type="submit"  class="btn btn-default" id="submit" >Build route</button>
        </div>
        <div id="directions-panel" class="form-control" style="height:120px;width:240px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">Enter origin and destination point</div>
      </div>
    </div>
    <?php include "js/mapi.php" ?>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyA-LW6fyInExELEgImDzU1sQ7jtSRTokOo&callback=initMap""></script>
  </body>
</html>