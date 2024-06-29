<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">

  <!-- Navbar -->

  <!-- End Navbar -->
  <div class="content">
    <div class="row" style="overflow:hidden">

      <div class="col-md-4 position-relative">

        <form class="form-style-9" method="post" enctype="multipart/form-data" action="updateimage.php" style=" width:100%; padding:10px;  margin-top:0.5%;  ">
          <div class="col-lg-12">

            <div class="card ">

              <div class="card-body text-center">

                <img width="100%" height="100%" class="img-account-profile  rounded-circle mb-3" src="<?php
                                                                                                      echo $row['image'];
                                                                                                      ?> " alt="">
                <div class="mb-3 col-md-12">
                  <label for="exampleInputPassword1" class="form-label">Upload Profile Image</label>
                  <input type="file" name="image" value="$folder" accept=".jpg,.png" class="form-control">
                </div>
                <button type="submit" name="updateimage" style="text-align:center; height: 40px;" class="btn btn-primary w-90">Update Image</button>
              </div>
            </div>
          </div>
        </form>


      </div>


      <div class="col-md-8 ">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Edit Profile</h5>
          </div>
          <div class="card-body">




            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <form class="form-style-9" method="post" enctype="multipart/form-data" action="updateprofile.php" style=" width:100%; padding:10px;  margin-top:0.5%;  ">


              <div id="personal" class=" row ">
                <h2 class="form-label" style="font-size: xx-large;">
                  Personal Details
                </h2>
                <div class="mb-3 col-md-6">
                  <label for="exampleInputEmail1" class="form-label">
                    Name
                  </label>
                  <input type="text" name="name" value="<?php if (!empty($row['name'])) {
                                                          echo $row['name'];
                                                        } ?>" class="form-control">
                </div>
                <div class="mb-3 col-md-6 ">
                  <label for="exampleInputPassword1" class="form-label">
                    Job Title
                  </label>
                  <input type="text" name="headline" value="<?php if (!empty($row['headline'])) {
                                                              echo $row['headline'];
                                                            } ?>" class="form-control">
                </div>
                <div class="mb-3 col-md-6">
                  <label for="exampleInputPassword1" class="form-label">
                    E-mail Id
                  </label>
                  <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" class="form-control">
                </div>
                <div class="mb-3 col-md-6">
                  <label for="exampleInputPassword1" class="form-label">
                    Phone No.
                  </label>
                  <input type="number" name="phone" value="<?php if (!empty($row['phone'])) {
                                                              echo $row['phone'];
                                                            } ?>" class="form-control">
                </div>
                <div class="mb-3 col-md-6">
                  <label for="exampleInputPassword1" class="form-label">
                    Address
                  </label>
                  <input type="text" name="address" value="<?php if (!empty($row['address'])) {
                                                              echo $row['address'];
                                                            } ?>" class="form-control">
                </div>
              </div>




              <button type="submit" name="update" style="text-align:center; height: 40px; width:30%;" class="btn btn-primary w-30">Update Profile</button>

          </div>


          

          </form>
        </div>
      </div>
    </div>
  </div>
  </div>

  </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>