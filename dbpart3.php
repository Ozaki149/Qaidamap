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
if(!$items)
die("Error: ".mysqli_error($db));
$count = count($items);
if($count <= 0){
echo "0";
}else{
while($row = mysqli_fetch_assoc($items)){
?>
<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="thumbnail">
    <a href="Upload/<?php echo $row['item_image']; ?>">
      <img src="Upload/<?php echo $row['item_image']; ?>" alt="" margin="50" height="200" width="350" /><br>
    </a>
    <div class="caption">
      <a href="pages.php?id=<?php echo $row['item_id']; ?>" class="btn btn-info"><i style = "color: white;"><?php echo $row['item_art']; ?></i></a>
    </div>
  </div>
</div>
<?php
}
}
?>