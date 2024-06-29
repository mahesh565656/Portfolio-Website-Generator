<?php
include "Security/connection.php";
include "Security/controllerUserData.php";


if(isset($_POST['updateimage'])){
  
  $filename = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];
  $folder = "upload/" . $filename;
  move_uploaded_file($tempname, $folder);
  
  $query = $con->prepare("UPDATE users SET image=?  WHERE email = '$email'  ");
  $query->bind_param("s",$folder);
  $query->execute();
$query->close();
header("Location:profile.php");
  
  
  
}
