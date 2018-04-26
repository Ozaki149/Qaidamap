<?php include "dbpart1.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MarshMello_DJ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/login.js"></script>
<?php include "stylo.php" ?>
   

</head>
<body>
  <div id="ducks">
  <?php include "header.php" ?>
  </div>
<!-- MAIN PART -->

<form class="regiform" method="post" action="" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputdefault" >Email:</label>
    <input name="email" type="text" class="form-control" id="emai" size="15" maxlength="25" required>
  </div>
    <div class="form-group">
      <label for="inputdefault" >Name:</label>
      <input name="username" type="text" class="form-control" id="uname" size="15" maxlength="15" required>
    </div>
    <div class="form-group">
      <label for="inputsm">Password:</label>
      <input name="password" type="password" class="form-control input-sm" id="psw" size="15" maxlength="15" required>
    </div>
    <div class="form-group">
      <label for="inputsm">Repeate Password:</label>
      <input name="rpass" type="password" class="form-control input-sm"  style="height:30px;" id="rpassword"  size="15" maxlength="15" required>
    </div>
    <div>
      <label >
        <input name="privac" type="checkbox" value="1"> By checking this, you agree with <a href="privac.php" style="color:black"> Terms and conditions</a>
      </label>
    </div>


    <div class="clearfix">
      <button type="submit" name="register" class="btn btn-default" value="Submit"  style="width:400px;"  onclick="validate(); myFunction();">Join</button>
      <button class="btn btn-default" style="background-color:black; width:400px;"><a href="contact.php">                                     Back                                     </a></button>
      <div>                                                                                                                                        </div>

      <p id="er"></p>
    </div>



</form>




<script src="js/jquery-animate-css-rotate-scale.js" type="text/javascript"></script>
 <script src="js/roti.js" type="text/javascript"></script>
</body>

</html>
<?php



 if(isset($_POST['register'])){
  if(isset($_POST['privac'])){
   if (isset($_POST['username'])) { $username = $_POST['username']; if ($username == '') { unset($username);} } //заносим введенный пользователем логин в переменную $username, если он пустой, то уничтожаем переменную
   if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
   if (isset($_POST['rpass'])) { $rpass=$_POST['rpass']; if ($rpass =='') { unset($rpass);} }
   //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

   if (empty($username) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
   {
         echo ("<script>document.getElementById('er').innerHTML = 'You entered not all information, go back and fill all of them')</script>"); //останавливаем выполнение сценариев

   }

 if ($password != $rpass){
     exit ("<script>document.getElementById('er').innerHTML = 'password and repeat password not same'</script>");}
 if (strlen($username) < 6 or strlen($username) > 15) {
     exit ("<script>document.getElementById('er').innerHTML = 'Username need be longer than 6'</script>"); //останавливаем выполнение сценариев

 }
 if (strlen($password) < 6 or strlen($password) > 15) {
     exit ("<script>document.getElementById('er').innerHTML = 'Password need be longer than 6'</script>");//останавливаем выполнение сценариев

 }
 // подключаемся к базе
 // проверка на существование пользователя с таким же логином
 include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь

 // проверка на существование пользователя с таким же логином
 $result = mysqli_query($db,"SELECT id FROM users WHERE username='$username'");
 if(!$result)
   die("Error: ".mysqli_error($db));
 $myrow = mysqli_fetch_array($result);
 if (!empty($myrow['id'])) {
   exit ("<script>document.getElementById('er').innerHTML = 'Occupied username, take another'</script>");
 }

 // если такого нет, то сохраняем данные
 $result2 = mysqli_query ($db,"INSERT INTO users (username,password) VALUES('$username','$password')");
 // Проверяем, есть ли ошибки
 if ($result2=='TRUE')
 {
   ?>
<script type="text/javascript">
window.location.href = 'contact.php';
</script>
<?php
   exit;
 }else {

   exit ("<script>document.getElementById('er').innerHTML = 'Error, ur not logged in'</script>");


      }
 }
 else {
  exit ("<script>document.getElementById('er').innerHTML = 'Please agree with our Terms and conditions, if you already read it'</script>");
}
} 
?>
