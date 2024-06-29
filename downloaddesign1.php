<?php
include "../Security/connection.php";
include "../Security/controllerUserData.php";
$email = $_SESSION['email'];
$sql = mysqli_query($con, "SELECT * FROM users WHERE email='$email' ORDER BY id DESC LIMIT 1");
$row = $sql->fetch_assoc();

$eduname = json_decode($row["eduname"], true);
$edulocation = json_decode($row["edulocation"], true);
$edufield = json_decode($row["edufield"], true);
$edusd = json_decode($row["edusd"], true);
$edued = json_decode($row["edued"], true);

$exp = json_decode($row["exp"], true);
$companyname = json_decode($row["companyname"], true);
$expsd = json_decode($row["expsd"], true);
$exped = json_decode($row["exped"], true);

$project = json_decode($row["project"], true);
$projectdesc = json_decode($row["projectdesc"], true);

$skill = json_decode($row["skill"], true);
$skillrangearray = json_decode($row["skillrange"], true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SmartFolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: SmartFolio
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="../assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">SmartFolio</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="../<?php if (!empty($row['image'])) {
                                            echo $row['image'];
                                        } ?>" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php if (!empty($row['name'])) {
                                                                                    echo $row['name'];
                                                                                } ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php if (!empty($row['name'])) {
                                    echo $row['name'];
                                } ?></h6>
                            <span><?php if (!empty($row['headline'])) {
                                        echo $row['headline'];
                                    } ?></span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="../profile.php">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="Security/logoutuser.php">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <div class="row">
        <div class="col-2">
            <aside id="sidebar" class="sidebar">

                <ul class="sidebar-nav" id="sidebar-nav">

                    <li class="nav-item">
                        <a class="nav-link " href="http://localhost/competetion/profile.php">
                            <i class="bi bi-grid"></i>
                            <span>Profile</span>
                        </a>
                    </li><!-- End Dashboard Nav -->

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="http://localhost/competetion/generate.php">
                            <i class="bi bi-dash-circle"></i>
                            <span>Generate</span>
                        </a>
                    </li><!-- End Error 404 Page Nav -->

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="http://localhost/competetion/template.php">
                            <i class="bi bi-file-earmark"></i>
                            <span>Templates</span>
                        </a>
                    </li><!-- End Blank Page Nav -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="http://localhost/competetion/chatbot/bot.php">
                            <i class="bi bi-file-earmark"></i>
                            <span>Help</span>
                        </a>
                    </li><!-- End Blank Page Nav -->
                </ul>

            </aside><!-- End Sidebar-->
        </div>
        <div class="col-9">
            <div class="card">
                <div style="width: 100%;margin:100px; float:left">
                    <img width="1000px" height="500px" src="../Templateimg/temp1.png" class="img-fluid" alt="...">
                    <br><br>
                    <h3>Click on Preview button to view website live.</h3>
                    <br><a href="index.php"><button type="button" class="btn btn-primary align-content-center ">Preview</button></a><br><br>
                    <div style="width:200px">
                        <h3>Sections :</h3>
                        <ul class="list-group-numbered list-group-flush ">
                            <li class="list-group-item">Introduction</li>
                            <li class="list-group-item">About</li>
                            <li class="list-group-item">Skills</li>
                            <li class="list-group-item">Education</li>
                            <li class="list-group-item">Projects</li>
                        </ul>
                    </div>
                  <a href="Portfolio.zip"><button type="button" class="btn btn-warning">Download</button></a>  
                    
                </div>
            </div>
        </div>

    </div>
    <?php include "../Components/footer.php"; ?>