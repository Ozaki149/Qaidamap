<?php include "dbpart1.php" ?>
<html lang="en">
  <head>
    <?php include "stylo.php" ?>
  </head>
  <body>
    <div id="ducks">
      <?php include "header.php" ?>
    </div>
    <div class="login">
      <form method="post" action="" class="regiform">
        <div class="form-group">
          <h3>Login</h3>
          <label>Username</label>
          <input name="username" type="text" size="15" maxlength="15" placeholder="Username" class="form-control"  id="uname" required>
        </div><div class="form-group">
        <label>Password</label>
        <input name="password" type="password" size="15" maxlength="15" placeholder="Password" class="form-control" id="psw" required>
      </div>  <div class="form-group">
      <label >
        <input name="autovhod" type="checkbox" value="1"> Remember me
      </label>
    </div>
    <div class="clearfix">
      <br>
      <button type="submit" name="submit" class="btn btn-default" id="btnLogin" value="Login"  style=" margin-right:100px; width:300px;">Enter</button>
      <button type="submit" class="btn btn-default" style="background-color:black; margin-left:100px; width:300px;"><a href="contact.php">                               Back                               </a></button>
      <p id="er"></p>
    </div>
  </form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
if (isset($_POST['username'])) { $username = $_POST['username']; if ($username == '') { unset($username);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (empty($username) or empty($password))
{
exit ("<script>document.getElementById('er').innerHTML = 'Fill all fields'</script>");
}
include ("bd.php");
$result = mysqli_query($db,"SELECT * FROM users WHERE username='$username' AND password='$password'");
if(!$result)
die("Error: ".mysqli_error($db));
$myrow = mysqli_fetch_array($result);
if (empty($myrow['id']))
{
exit ("<script>document.getElementById('er').innerHTML = 'Wrong login or password'</script>");
}
else {
$_SESSION['password']=$myrow['password'];
$_SESSION['username']=$myrow['username'];
$_SESSION['id']=$myrow['id'];
if    (isset($_POST['autovhod'])){
setcookie("auto", "yes",    time()+9999999);
setcookie("username",    $_POST["username"], time()+9999999);
setcookie("password",    $_POST["password"], time()+9999999);
setcookie("id",    $myrow['id'], time()+9999999);}
else{
setcookie("auto", "no",    time()+90);
setcookie("username",    $_POST["username"], time()+1);
setcookie("password",    $_POST["password"], time()+1);
setcookie("id",    $myrow['id'], time()+1);
}
}
echo "<html><head><meta http-equiv='Refresh' content='0; URL=contact.php'></head></html>";
}
?>