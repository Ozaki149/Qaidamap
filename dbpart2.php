<?php
$host = "localhost";
$user = "root";
$psw = "";
$db = "mysqlq";
$con = mysqli_connect($host , $user , $psw , $db);
if(!$con)
die("Could not connect to DB".mysqli_connect_error());
$sql = "select * from item";
$items = mysqli_query($con,$sql);
$count = count($items);
if($count <= 0){
echo "0";
}else{
while($row = mysqli_fetch_assoc($items)){
if(isset($_SESSION['username']))
{
echo "<option>";
	echo $row['item_place'];
echo "</option>";
}
}
}
mysqli_close($con);
?>