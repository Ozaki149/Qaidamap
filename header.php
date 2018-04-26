<div id="header">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a id="logi" href="contact.php"><img src="images/logo.gif" height="50em"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="Contact.php">Map</a></li>
          <li>
            <?php
            if(isset($_SESSION['username']))
            {
            echo "<a href='arty.php'>Places</a>";
            }
            ?>
          </li>
          <li>
            <?php
            if(isset($_SESSION['username']))
            {
              echo "";
            
            }else
            {
            echo
            "<a href='Regform.php'>Registration</a>";
            }
            ?>
          </li>
          <li><a href="help.php">FAQ</a></li>
          <li><a href="abus.php">About Us</a></li>
          <li><a href="conus.php">Contact Us</a></li>
          
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          <li>
            <?php
            if(isset($_SESSION['username']))
            {
              echo "<a href='logout.php'>";
              echo "Logout ".$_SESSION['username'];
              echo " ";
            echo"</a>";
            }
            else
            {
            echo
            "<a href='login.php'> Login</a>";
            }
          ?></li>
        </ul>
      </div>
    </div>
  </nav>
</div>