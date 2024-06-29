<?php

include "Security/connection.php";
//include "Security/controllerUserData.php";

$email=$_SESSION['email'];
$sql = mysqli_query($con,"SELECT u.* FROM users u INNER JOIN usertable ut ON u.email = ut.email  WHERE ut.email = '$email' ORDER BY id DESC LIMIT 1");
$row = $sql->fetch_assoc();


if(!empty($eduname)){
$eduname = json_decode($row["eduname"], true);
$edulocation = json_decode($row["edulocation"], true);
$edufield = json_decode($row["edufield"], true);
$edusd = json_decode($row["edusd"], true);
$edued = json_decode($row["edued"], true);
}

if(!empty($exp)){
$exp = json_decode($row["exp"], true);
$companyname = json_decode($row["companyname"], true);
$expsd = json_decode($row["expsd"], true);
$exped = json_decode($row["exped"], true);
}

if(!empty($project)){
$project = json_decode($row["project"], true);
$projectdesc = json_decode($row["projectdesc"], true);
}

if(!empty($skill)){
$skill = json_decode($row["skill"], true);
$skillrangearray = json_decode($row["skillrange"], true);
}

?>