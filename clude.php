<?php include "dbpart1.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "stylo.php" ?>
  </head>
  <body>
    <div id="ducks">
      <?php include "header.php" ?>
    </div>
  <div id="smborder">
    <div class="thumbnail">
      <h3>Please show us your lovely place</h3>
      <hr class="style14">
      <div id='oops'>
        <form action='' method='post' class="form-horizontal" name="myForm" enctype='multipart/form-data' >
          <p id="er"></p>
          <label for="message-text" class="control-label">Name:</label>
          <input type="text" class="form-control" name="art">
          <label for="message-text" class="control-label">Place/Concert:</label>
          <input type="text" class="form-control" name="place">
          <label for="message-text" class="control-label">Description:</label>
          <input type="text" class="form-control" name="descr">
          <label for='upload'>Select image to upload: </label>
          <input type='file' name='fileToUpload' id='fileToUpload'> <br>
          <input type='submit' value='Upload Image' class="btn btn-default" style=" margin-right:100px; width:300px;" name='submit1'>
          <p id="er"></p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$name = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit1"])) {
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {
$uploadOk = 1;
} else {
$uploadOk = 0;
}
// Check if file already exists
if (file_exists($target_file)) {
exit ("<script>document.getElementById('er').innerHTML = 'Sorry, someone already pinned that place'</script>");
$uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
echo "<script> alert( 'Sorry, your file is too large.' );     </script>";
$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
echo "<script> alert( 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.' );      </script>";
$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
echo "<script> alert( 'Sorry, your file was not uploaded.' );     </script>";
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
echo "<script> alert( 'The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.' );     </script>";
} else {
echo "<script> alert( 'Sorry, there was an error uploading your file.' );     </script>";
}
}
if($uploadOk == 1){
if(isset($_POST['submit1'])){
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'mysqlq';
$connection = mysqli_connect($host , $username , $password , $db);
$art = $_POST['art'];
$place = $_POST['place'];
$descr = $_POST['descr'];
$item_image = $target_dir;
if($art == ''|| $place == '' || $descr == ''){
echo "Error";
}else{
if(!$connection){
echo 'Error: '.mysqli_error();
}
else{
$DB = "INSERT INTO item(item_art , item_place , item_descr , item_image) VALUES ('".$art."','".$place."','".$descr."','".$name."')";
mysqli_query($connection , $DB);
header("location: arty.php");
}
mysqli_close($connection);
}
}}
}
}
?>