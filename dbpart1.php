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
else if ($_COOKIE['auto'] == 'no')
{
$_SESSION['username'] = $_COOKIE['username'];
$_SESSION['password']=$_COOKIE['password'];
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