<?php
include "Security/connection.php";
include "Security/controllerUserData.php";


if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $headline = $_POST['headline'];
  $aboutdesc = $_POST['aboutdesc'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];

  // $filename1 = $_FILES["image"]["name"];
  // $tempname1 = $_FILES["image"]["tmp_name"];
  // $folder1 = "upload/" . $filename1;
  // move_uploaded_file($tempname1, $folder1);
  
  $filename2 = $_FILES["resume"]["name"];
  $tempname2 = $_FILES["resume"]["tmp_name"];
  $folder2 = "Resume/" . $filename2;
  move_uploaded_file($tempname2, $folder2);

  $linkedin = $_POST['linkedin'];
  $github = $_POST['github'];
  $instagram = $_POST['instagram'];
  $facebook = $_POST['facebook'];
  $website = $_POST['website'];

  $eduname = json_encode($_POST['eduname']);
  $edulocation = json_encode($_POST['edulocation']);
  $edufield = json_encode($_POST['edufield']);
  $edusd = json_encode($_POST['edusd']);
  $edued = json_encode($_POST['edued']);

  $exp = json_encode($_POST['exp']);
  $companyname = json_encode($_POST['companyname']);
  $expsd = json_encode($_POST['expsd']);
  $exped = json_encode($_POST['exped']);

  $skill = json_encode($_POST['skill']);
  $skillrange = json_encode($_POST['skillrange']);

  $project = json_encode($_POST['project']);
  $projectdesc = json_encode($_POST['projectdesc']);
  $email = $_SESSION['email'];
 

  $query = $con->prepare("UPDATE users SET name=?, headline=?, aboutdesc=?, eduname=?, edulocation=?, edufield=?, edusd=?, edued=?, exp=?, companyname=?, expsd=?, exped=?, skill=?, skillrange=?, project=?, projectdesc=?, address=?, phone=?, email=?, linkedin=?, github=?, resume=?, instagram=?, facebook=?, website=? WHERE email = '$email' ");

  $query->bind_param("sssssssssssssssssssssssss", $name, $headline, $aboutdesc, $eduname, $edulocation, $edufield, $edusd, $edued, $exp, $companyname, $expsd, $exped, $skill, $skillrange, $project, $projectdesc, $address, $phone, $email, $linkedin, $github, $folder2, $instagram, $facebook, $website);

$query->execute();
$query->close();
header("Location:profile.php");

  
}



