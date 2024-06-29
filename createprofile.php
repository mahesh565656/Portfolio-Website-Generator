<?php
include "Security/connection.php";
if (isset($_POST['createaccount'])) {
  $name = $_POST['name'];
  $headline = $_POST['headline'];
  
  $phone=$_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];

   $filename = $_FILES["image"]["name"];
   $tempname = $_FILES["image"]["tmp_name"];
   $folder = "upload/" . $filename;
   move_uploaded_file($tempname, $folder);

  // $filename2 = $_FILES["resume"]["name"];
  // $tempname2 = $_FILES["resume"]["tmp_name"];
  // $folder2 = "Resume/" . $filename2;
  // move_uploaded_file($tempname2, $folder2);


  $query = $con->prepare("INSERT INTO users(name,headline,address,email,phone,image) VALUES('$name','$headline','$address','$email','$phone','$folder')");
  $query->execute();
  $query->close();
  header("Location:profile.php");
}
