<?php
session_start();
include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
if (isset($_COOKIE['auto']) and    isset($_COOKIE['username']) and isset($_COOKIE['password']))
{//если есть    необходимые переменные
if ($_COOKIE['auto'] == 'yes') { // если    пользователь желает входить автоматически, то запускаем сессии
$_SESSION['password']=$_COOKIE['password']; //в куках    пароль был не зашифрованный, а в сессиях обычно храним зашифрованный
$_SESSION['username']=$_COOKIE['username'];//сессия с логином
$_SESSION['id']=$_COOKIE['id'];//идентификатор    пользователя
}
}
if (!empty($_SESSION['username']) and !empty($_SESSION['password']))
{
//если существет логин и пароль в сессиях, то проверяем их и извлекаем аватар
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$result = mysqli_query($db,"SELECT id FROM users WHERE username='$username' AND password='$password'");
$myrow = mysqli_fetch_array($result);
//извлекаем нужные данные о пользователе
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>QaidA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/marsh.css">
    <?php include "stylo.php" ?>
    
  </head>
  <body>
    <?php include "header.php" ?>
    <div class="container">
      <?php
      $host = "localhost";
      $user = "root";
      $psw = "";
      $db = "mysqlq";
      $con = mysqli_connect($host , $user , $psw , $db);
      if(!$con)
      die("Could not connect to DB".mysqli_connect_error());
      $sql = "select * from item where item_id=".$_GET['id'];
      $items = mysqli_query($con,$sql);
      $count = count($items);
      $sql2 = "select * from comments WHERE item_id=".$_GET['id'];
      $comments = mysqli_query($con,$sql2);
      $count2 = count($comments);
      if($count <= 0){
      echo "0";
      }else{
      while($row = mysqli_fetch_assoc($items)){
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="thumbnail">
            <img src="Upload/<?php echo $row['item_image']; ?>">
            <div class="caption">
              <h2>Title: <?php echo $row['item_art']; ?></h2>
              <h3>Place: <?php echo $row['item_place']; ?></h3>
              <h3>Description: <?php echo $row['item_descr']; ?></h3>
            </div>
          </div>
        </div>
      </div>
      <?php
      }
      }
      mysqli_close($con);
      ?>
      <div style="clear:both;">
        <div class="thumbnail">
          <div class="row">
            <center>
            <form action="addComments.php?id=<?php echo $_GET['id']?>" method="POST" >
              <textarea  rows="4" class="cmys" name="cbody" placeholder="Enter your comment ..." ></textarea><br/>
              <button type="submit" name="cadd" class="btn btn-default" style="width:30%; float: left; margin-left:3%; ">Add</button>
            </form>
            </center>
          </div>
          
          <?php
          if($count2<=0){
          echo "Be First";
          }else{
          while($row2 = mysqli_fetch_assoc($comments)){
          ?>
          <hr style="width:95%;">
          <h3 style="text-align:left; margin-left:1.5%;">Author:<?php echo $row2['comment_owner']; ?></h3>
          <h4 style="text-align:left; margin-left:1.5%;"><?php echo $row2['comment_date']; ?></h4>
          <h4 style="text-align:left; margin-left:1.5%;"><?php echo $row2['comment_info']; ?></h4>
          <?php
          }
          }
          ?>
          <div>                                                                                                                                        </div>
        </div>
      </div></div>
      <script src="js/marsh.js"></script>
      <script src="js/bootstrap.js"></script>
    </body>
  </html>