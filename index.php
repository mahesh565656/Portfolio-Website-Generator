<?php
include "../Security/connection.php";
include "../Security/controllerUserData.php";
$email=$_SESSION['email'];
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

include "header.php";

?>




<?php

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

<header id="header" class=" row header  fixed-top d-flex align-items-center">
<div class="col-10"></div>
<div class="icon col-2 mb-5">

<a class="btn btn-primary m-3" href="downloaddesign1.php" role="button"><i class="bi bi-download"></i> Download</a>
</div>
</header>
    <!-- ======= Header ======= -->
    <header id="header" class="header align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="../assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">SmartFolio</span>
            </a>

        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">

            <ul class="d-flex align-items-center">
               
               

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="../<?php if (!empty($row['image'])) {
                                            echo $row['image'];
                                        } ?>" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $row['name']; ?></span>
                    </a><!-- End Profile Iamge Icon -->





                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $row['name']; ?></h6>
                            <span><?php echo $row['headline']; ?></span>
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
                            <a class="dropdown-item d-flex align-items-center" href="../Security/logout.php">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header>


    <div class="main-content">
       
            <div class="container-fluid bg-light my-6 mt-0" id="home">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                            <h3 class="text-primary mb-3">I'm</h3>
                            <h1 class="display-3 mb-3"><?php echo $row['name']; ?></h1>
                            <h2 class="typed-text-output d-inline"></h2>
                            <div class="typed-text d-none"><?php echo $row['headline']; ?></div>
                            <?php ?>
                            <div class="d-flex align-items-center pt-5">
                                <a href="../resume.php" class="btn btn-primary py-3 px-4 me-5">Download CV</a>
                            </div>
                            <?php  ?>
                        </div>
                        <div class="col-lg-6">
                            <img width="100%" src="../<?php echo $row['image']; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->



        <!-- Expertise Start -->
        <div class="container-xxl py-6 pb-5" id="skill">
            <div class="container">
                <div class="row g-5">
                    <?php if (!empty($skill)) { ?>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="display-5 mb-5">Skills & Experience</h1>

                            <h3 class="mb-4">My Skills</h3>
                            <div class="row align-items-center">
                                <div class="col-md-12">


                                    <?php for ($i = 0; $i < count($skill); $i++) { ?>
                                        <div class="skill mb-4">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="font-weight-bold"><?php echo $skill[$i]; ?></h6>


                                                <h6 class="font-weight-bold"><?php echo $skillrangearray[$i]; ?>%</h6>

                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="<?php echo $skillrangearray[$i]; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    <?php } ?>



                                </div>

                            </div>
                        </div>
                    <?php } ?>
                    <?php if (!empty($eduname)) { ?>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                            <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                                <li class="nav-item w-50">
                                    <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">Education</button>
                                </li>
                                <li class="nav-item w-50">
                                    <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Experience</button>
                                </li>
                            </ul>
                            <div class="tab-content">

                                <div id="tab-1" class="tab-pane fade show p-0 active">

                                    <div class="row gy-5 gx-4">
                                        <?php for ($i = 0; $i < count($eduname); $i++) { ?>
                                            <div class="col-sm-6">
                                                <h5><?php echo $edufield[$i]; ?></h5>
                                                <hr class="text-primary my-2">
                                                <p class="text-primary mb-1"><?php echo $edulocation[$i]; ?></p>
                                                <p class="text-primary mb-1"><?php echo $edusd[$i]; ?> <span style="color: black;"> To </span> <?php echo $edued[$i]; ?></p>
                                                <h6 class="mb-0"><?php echo $eduname[$i]; ?></h6>
                                            </div>
                                        <?php }  ?>
                                    </div>

                                </div>

                                <div id="tab-2" class="tab-pane fade show p-0">
                                    <div class="row gy-5 gx-4">
                                        <?php for ($i = 0; $i < count($exp); $i++) { ?>
                                            <div class="col-sm-6">
                                                <h5><?php echo $exp[$i]; ?></h5>
                                                <hr class="text-primary my-2">
                                                <p class="text-primary mb-1"><?php echo $expsd[$i]; ?><span style="color: black;"> To </span><?php echo $exped[$i]; ?></p>
                                                <h6 class="mb-0"><?php echo $companyname[$i]; ?></h6>
                                            </div>
                                        <?php }  ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Expertise End -->


        <!-- Service Start -->
        <?php if (!empty($project)) { ?>
            <div class="container-fluid bg-light my-5 py-6" id="service">
                <div class="container">
                    <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-6">
                            <h1 class="display-5 mb-0">My Projects</h1>
                        </div>

                    </div>

                    <div class="row g-4">

                        <?php for ($i = 0; $i < count($project); $i++) { ?>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                                    <div class="bg-icon flex-shrink-0 mb-3">
                                        <i class="fa fa-crop-alt fa-2x text-dark"></i>
                                    </div>
                                    <div class="ms-sm-4">
                                        <h4 class="mb-3"><?php
                                                            echo $project[$i];
                                                            ?></h4>
                                        <div style="text-align:justify; scrollbar-width:none; height:250px;overflow:scroll; ">
                                            <span><?php echo $projectdesc[$i]; ?>
                                            </span>

                                        </div>
                                        <span>read more...</span>
                                        <div class="d-flex align-items-center pt-5">
                                            <a href="" class="btn btn-primary py-3 px-4 me-5">View project </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>



                    </div>
                </div>
            </div>
        <?php } ?>



        <div class="container-xxl pb-5" id="contact">
            <div class="container py-5">
                <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">Let's Work Together</h1>
                    </div>

                </div>
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="mb-2">My office:</p>
                        <h3 class="fw-bold"><?php echo $row['address']; ?></h3>
                        <hr class="w-100">
                        <p class="mb-2">Call me:</p>
                        <h3 class="fw-bold"><?php echo $row['phone']; ?></h3>
                        <hr class="w-100">
                        <p class="mb-2">Mail me:</p>
                        <h3 class="fw-bold"><?php echo $row['email']; ?></h3>
                        <hr class="w-100">
                        <p class="mb-2">Follow me:</p>
                        <div class="d-flex pt-2">

                            <a class="btn btn-square btn-primary me-2" href="<?php echo $row['github']; ?>"><i class="fab fa-github"></i></a>
                            <a class="btn btn-square btn-primary me-2" href="<?php echo $row['linkedin']; ?>"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-square btn-primary me-2" href="<?php echo $row['instagram']; ?>"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary me-2" href="<?php echo $row['facebook']; ?>"><i class="fab fa-facebook"></i></a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Contact End -->




        <!-- Copyright Start -->
        <div class="container-fluid bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom text-secondary" href="#">SmartFolio</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom text-secondary" href="#">SmartFolio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </div>
</body>

</html>