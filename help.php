<?php include "dbpart1.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    

<?php include "stylo.php" ?>

    <script>
    $(document).ready(function(){
    $("#item1").hide();
    $( "#button1" ).click(function() {
    $( "#item1" ).toggle();
    });
    $("#item2").hide();
    $( "#button2" ).click(function() {
    $( "#item2" ).toggle();
    });
    $("#item3").hide();
    $( "#button3" ).click(function() {
    $( "#item3" ).toggle();
    });
    $("#item4").hide();
    $( "#button4" ).click(function() {
    $( "#item4" ).toggle();
    });
    });
    </script>
    
  </head>
  <body>
    <div id="ducks">
      <?php include "header.php" ?>
    </div>
    <div class="row content">
      <div class="col-sm-8 text-left" >
        <div id="smborder" >
          <h1>Help/Manual Page</h1>
          <div id="imagerss">
            <div class="row equal-height">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <a id="button1" class= 'helpu' href="#">How to use Random: Show/Hide</a>
                <div class="thumbnail" id="item1">
                  Press on checkbox, add number of waypoints that go random, add start and end point of your journey, press build route
                </div>
                <a id="button2" class= 'helpu' href="#">Add own waypoints: Show/Hide</a>
                <div class="thumbnail" id="item2">
                  First of all enter to the system(if you didn't registered yet, please Registrate yourself )
                  then go to places and press here and then fill the form(image should smaller than 800x800)
                </div>
                <a id="button3" class= 'helpu' href="#">How to add slices: Show/Hide</a>
                <div class="thumbnail" id="item3">
                  After you pressed checked the rounded checkbox, you are able to fill the enter waypoints/number of waypoints
                  there you need to enter number of slices(no more than the number of waypoints in box)
                </div>
                <a id="button4" class= 'helpu' href="#">Problem: Show/Hide</a>
                <div class="thumbnail" id="item4">
                  Directions request failed due to NOT_FOUND:
                  it means that u need to add original and destination point
                </div>
              </div>
            </div>
          </div>
        </div></div>
      </div></div>
    </body>
  </html>