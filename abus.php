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
          <h1>About us</h1>
          <div id="imagerss">
            <div class='grayText'><strong>Financial goal</strong></div>
            <div class='innerText'>to receive a profit every month, sales growth and increase profits every year 
Strategic goal – to become the leader among the Kazakhstani applications <br></div>
<br>
<div class='grayText'><strong>Customer-related goal</strong></div><div class='innerText'>To meet all of the necessities of our customers; Increase in new customers </div>
<br>
<div class='grayText'><strong>Market-share goal</strong></div><div class='innerText'>Become a popular application in many countriesCreation of a Feature Table of the product – this include all features (sky is the limit, dream big) Make planning route faster and easier</div>
<hr>
<div id='ppHeader' style="margin: 0 30%">Less Time, More Route</div>


              </div>
            </div>
          </div>
        </div></div>
      </div></div>
    </body>
  </html>