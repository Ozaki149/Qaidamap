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