<?php
include "Security/controllerUserData.php";
include "Components/header.php";
include "Components/sidebar.php";
include "fetchdata.php";
?>

<main id="main" class="main">


  <?php if (empty($row['email'])) { ?>
    <form class="form-style-9" method="post" enctype="multipart/form-data" action="createprofile.php" style=" width:100%; padding:20px; margin-right:5%;  ">
      <div class="container py-3">
        <div class="row">

          <div class="col-lg-12 card bg-white  border-round">
            <h4 class="form-label card-title">
              Create New Account
            </h4>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <div id="personal" class=" row ">

              <div class="mb-3 col-md-6">
                <label for="exampleInputEmail1" class="form-label">
                  Name
                </label>
                <input type="text" name="name" value="<?php echo $_SESSION['name']; ?><?php //if (!empty($row['name'])) {
                                                       // echo $row['name'];
                                                      //} ?>" class="form-control">
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
                <input type="number" name="phone"  class="form-control">
              </div>

              <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">
               Upload Image
                </label>
                <input type="file" name="image" accept=".jpg,.png"  class="form-control">
              </div>
              
              
              <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">
                  Address
                </label>
                <input type="text" name="address"  class="form-control">
              </div>
              
            </div>
            <div class="mb-3 col-md-6 mt-3">
            <button type="submit" name="createaccount" style="text-align:center; height: 40px;" class="btn btn-primary w-20">Create Profile</button>
            </div>
          </div>
        </div>
      </div>


    </form>




  <?php } else { ?>

    <?php include "user.php"; ?>






  <?php } ?>






  </div>
  </div>
  </div>



</main>

<?php include "Components/footer.php"; ?>