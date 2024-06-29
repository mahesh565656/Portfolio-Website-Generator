<?php
include "Security/connection.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $headline = $_POST['headline'];
    $aboutdesc = $_POST['aboutdesc'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "upload/" . $filename;
    move_uploaded_file($tempname, $folder);

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

    $query = $con->prepare("INSERT INTO users(name,headline,aboutdesc,eduname,edulocation,edufield,edusd,edued,exp,companyname,expsd,exped,skill,skillrange,project,projectdesc,address,phone,email,linkedin,github,image,resume,instagram,facebook,website) VALUES('$name','$headline','$aboutdesc',?,?,?,?,?,?,?,?,?,?,?,?,?,'$address','$phone','$email','$linkedin','$github','$folder','$folder2','$instagram','$facebook','website')");
    //Sequence of JSON encoded files should be same as above.
    $query->bind_param("sssssssssssss", $eduname, $edulocation, $edufield, $edusd, $edued, $exp, $companyname, $expsd, $exped, $skill, $skillrange, $project, $projectdesc);
    $query->execute();
    $query->close();
    header("Location:template.php");
}

$email = $_SESSION['email'];

$sql = mysqli_query($con, "SELECT u.* FROM users u INNER JOIN usertable ut ON u.email = ut.email  WHERE ut.email = '$email' ORDER BY id DESC LIMIT 1");

$row = $sql->fetch_assoc();

if (!empty($eduname)) {
    $eduname = json_decode($row["eduname"], true);
    $edulocation = json_decode($row["edulocation"], true);
    $edufield = json_decode($row["edufield"], true);
    $edusd = json_decode($row["edusd"], true);
    $edued = json_decode($row["edued"], true);
}

if (!empty($exp)) {
    $exp = json_decode($row["exp"], true);
    $companyname = json_decode($row["companyname"], true);
    $expsd = json_decode($row["expsd"], true);
    $exped = json_decode($row["exped"], true);
}

if (!empty($project)) {
    $project = json_decode($row["project"], true);
    $projectdesc = json_decode($row["projectdesc"], true);
}

if (!empty($skill)) {
    $skill = json_decode($row["skill"], true);
    $skillrangearray = json_decode($row["skillrange"], true);
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SmartFolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SmartFolio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color:#fafafa;">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>






    <form class="form-style-9" method="post" enctype="multipart/form-data" action="generateform.php" style=" width:90%;margin-left:5%; padding:20px; margin-right:5%; margin-top:0.5%;  ">
        <legend class="form-label card-title" style="text-align:center;font-size:30px;">
            Generate Portfolio
        </legend>
        <br>
        <br>



        <div id="personal" class=" row">
            <h2 class="form-label card-title" style="font-size: x-large;">Personal Details</h2>


            <div class="mb-3 col-md-6">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" value="<?php if (!empty($row['name'])) {
                                                            echo $row['name'];
                                                        } ?>"  class="form-control">
            </div>



            <div class="mb-3 col-md-6 ">
                <label for="exampleInputPassword1" class="form-label">Job Title</label>
                <input type="text" name="headline" value="<?php if (!empty($row['headline'])) {
                                                                echo $row['headline'];
                                                            } ?>"  class="form-control">
            </div>
            <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">E-mail Id</label>
                <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>"  class="form-control">
            </div>



            <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">Phone</label>
                <input type="number" name="phone" id="phone" value="<?php if (!empty($row['phone'])) {
                                                                        echo $row['phone'];
                                                                    } ?>"  class="form-control">

                <div id="phoneError" class="invalid-feedback">
                    Please enter a valid 10 digit phone number.
                </div>

                <script>
                    document.getElementById('phone').addEventListener('input', function(e) {
                        var x = e.target.value;
                        if (x.match(/^[0-9]{10}$/)) {
                            document.getElementById('phoneError').style.display = 'none';
                        } else {
                            document.getElementById('phoneError').style.display = 'block';
                        }
                    });
                </script>
            </div>

            <div class="col-md-12">
                <label for="exampleInputPassword1" class="form-label">Description </label>
                <textarea type="text" name="aboutdesc" value="<?php if (!empty($row['aboutdesc'])) {
                                                                    echo $row['aboutdesc'];
                                                                } ?>"  class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Address</label>
                <input type="text" name="address" value="<?php if (!empty($row['address'])) {
                                                                echo $row['address'];
                                                            } ?>" class="form-control">
            </div>

            <!-- <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">Upload Profile Image</label>
                <input type="file" name="image" required accept=".jpg,.png"  class="form-control">
            </div> -->


            <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">Upload Resume</label>
                <input type="file" name="resume" accept=".pdf" class="form-control">
            </div>
        </div>
        <br>
        <br>

        <div id="education" class="row">
            <h2 class="form-label card-title" style="font-size: x-large;">Education</h2>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">School/College Name</label>
                <input type="text" name="eduname[]" class="form-control field-style">
            </div>
            <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">Location</label>
                <input type="text" name="edulocation[]" class="form-control field-style">
            </div>
            <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">Field Of study</label>
                <input type="text" name="edufield[]" class="form-control field-style">
            </div>
            <div class="mb-3 col-md-3">
                <label for="exampleInputPassword1" class="form-label">Start Date</label>
                <input type="date" name="edusd[]" class="form-control field-style">
            </div>
            <div class="mb-3 col-md-3">
                <label for="exampleInputPassword1" class="form-label">End Date</label>
                <input type="date" name="edued[]" class="form-control field-style">
            </div>
        </div>
        <br>
        <input class="btn btn-dark" type="button" id="addedu" value="Add Education">

        <script>
            $(document).ready(function() {
                $("#addedu").click(function() {

                    $("#education").append('<div class="mb-6"></div> ');
                    $("#education").append('<label for="exampleInputPassword1" class="form-label">Add New Education</label> ');
                    $("#education").append('<div  class="row">');
                    $("#education").append('<div class="mb-3"></div> ');
                    $("#education").append('<label for="exampleInputPassword1" class="form-label ">School/College Name</label> <br> ');
                    $("#education").append('<input type="text" name="eduname[]" class="form-control field-style "> <br> ');
                    $("#education").append('<div class="mb-3 col-md-6"></div> ');
                    $("#education").append('<label for="exampleInputPassword1" class="form-label ">School/College Location</label> <br> ');
                    $("#education").append('<input type="text" name="edulocation[]" class="form-control field-style"> <br> ');
                    $("#education").append('<div class="mb-3 col-md-6"></div> ');
                    $("#education").append('<label for="exampleInputPassword1" class="form-label ">Field of Study</label> <br> ');
                    $("#education").append(' <input type="text" name="edufield[]" class="form-control field-style"> <br>');
                    $("#education").append('<div class="mb-3 col-md-3"></div> ');
                    $("#education").append('<label for="exampleInputPassword1" class="form-label">Start  Date</label> <br> ');
                    $("#education").append(' <input type="date" name="edusd[]" class="form-control field-style"> <br> ');
                    $("#education").append('<div class="mb-3 col-md-3"></div> ');
                    $("#education").append('<label for="exampleInputPassword1" class="form-label">End Date</label> ');
                    $("#education").append(' <input type="date" name="edued[]" class="form-control field-style">  ');
                    $("education").append("</div>");
                });
            });
        </script>
        <br>
        <br>
        <br>
        <br>
        <div id="experience" class="row">
            <h2 class="form-label card-title" style="font-size: x-large;">Experience</h2>
            <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">Position Title</label>
                <input type="text" name="exp[]" class="form-control field-style">
            </div>
            <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">Company Name</label>
                <input type="text" name="companyname[]" class="form-control field-style">
            </div>
            <div class="mb-3 col-md-3">
                <label for="exampleInputPassword1" class="form-label">Start Date</label>
                <input type="date" name="expsd[]" class="form-control field-style">
            </div>
            <div class="mb-3 col-md-3">
                <label for="exampleInputPassword1" class="form-label">End Date</label>
                <input type="date" name="exped[]" class="form-control field-style">
            </div>
        </div>
        <br>
        <input class="btn btn-dark" type="button" id="addexp" value="Add More Experience">
        <script>
            $(document).ready(function() {
                $("#addexp").click(function() {
                    $("#experience").append('<br><br><label for="exampleInputPassword1" class="form-label">Add New Experience</label> <br>');
                    $("#experience").append('<label for="exampleInputPassword1" class="form-label">Position Title</label> <br> ');
                    $("#experience").append('<input type="text" name="exp[]" class="form-control field-style"><br> ');
                    $("#experience").append('<label for="exampleInputPassword1" class="form-label">Company Name</label> <br> ');
                    $("#experience").append('<input type="text"  name="companyname[]" class="form-control field-style"> <br> ');
                    $("#experience").append('<label for="exampleInputPassword1" class="form-label">Start Date</label> <br> ');
                    $("#experience").append('<input type="date"  name="expsd[]" class="form-control field-style"> <br> ');
                    $("#experience").append('<label for="exampleInputPassword1" class="form-label">End Date</label> <br> ');
                    $("#experience").append('<input type="date"  name="exped[]" class="form-control field-style"> <br> ');
                });
            });
        </script>
        <br>
        <br>
        <br>
        <br>
        <div id="skill" class="row">
            <h2 class="form-label card-title" style="font-size: x-large;">Skills</h2>
            <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">Skill</label>
                <input type="text" name="skill[]"  class="form-control field-style">
            </div>

            <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">Skill Range</label>

                <input class="form-control" name="skillrange[]" type="range" value="1" min="1" max="100" oninput="this.nextElementSibling.value = this.value">
                <output>1</output>
                <br>
            </div>
            <!--
            <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">Skill Range</label>
                <input class="form-control" name="skillrange[]" type="range" min="1" max="5" oninput="this.nextElementSibling.value = this.value; updateStars(this.value);">
                <output id="ratingOutput">1</output>
                <br>
                <div id="stars" style="font-size:2rem;"></div>
            </div>

            <script>
                function updateStars(rating) {
                    document.getElementById("stars").innerHTML = '';
                    for (let i = 1; i <= 5; i++) {
                        if (i <= rating) {
                            document.getElementById("stars").innerHTML += '&#9733;';
                        } else {
                            document.getElementById("stars").innerHTML += '&#9734;';
                        }
                    }
                    document.getElementById("ratingOutput").innerHTML = rating;
                }
            </script>
            -->
        </div>
        <br>
        <input class="btn btn-dark" type="button" id="addskill" value="Add More Skills">
        <script>
            $(document).ready(function() {
                $("#addskill").click(function() {
                    $("#skill").append('<br><label for="exampleInputPassword1" class="form-label">Add New Skill</label> <br>');
                    $("#skill").append(' <label for="exampleInputPassword1" class="form-label">Skill</label>');
                    $("#skill").append('<input type="text" name="skill[]" class="form-control field-style"><br> ');
                    $("#skill").append(' <label for="exampleInputPassword1" class="form-label">Skill Range</label>');
                    $("#skill").append(' <input class="form-control" name="skillrange[]" type="range" value="1" min="1" max="100" oninput="this.nextElementSibling.value = this.value"> ');
                    $('#skill').append('<output>1</output><br><br>');
                });
            });
        </script>
        <br>
        <br>
        <br>
        <br>
        <div id="container" class="row">
            <h2 class="form-label card-title" style="font-size: x-large;">Projects</h2>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Project Name</label>
                <input type="text" name="project[]" class="form-control field-style">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Project Description</label>
                <textarea type="text" name="projectdesc[]" class="form-control field-style"></textarea>
            </div>
        </div>
        <br>
        <input class="btn btn-dark" type="button" id="addproject" value="Add More Projects">
        <script>
            $(document).ready(function() {
                $("#addproject").click(function() {
                    $("#container").append('<br><br><label for="exampleInputPassword1" class="form-label">Add New Project</label><br>  ');
                    $("#container").append(' <label for="exampleInputPassword1" class="form-label">Project Name</label>');
                    $("#container").append(' <input type="text" name="project[]" class="form-control field-style"><br>');
                    $("#container").append(' <label for="exampleInputPassword1" class="form-label">Project Description</label>');
                    $("#container").append(' <textarea type="text" name="projectdesc[]" class="form-control field-style"></textarea> <br>');
                });
            });
        </script>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <h2 class="form-label card-title" style="font-size: x-large;">Social Networks</h2>
            <span>All URL's Should start from <span class="text-bold">https://</span></span>
            <br>
            <br>
            <div class="mb-3">
                <label for="basic-url" class="form-label">Linked In</label>
                <div class="input-group">
                    <span class=" input-group-text" id="basic-addon3">https://</span>
                    <input type="text" class="form-control" name="linkedin" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                </div>
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label">Github</label>
                <div class="input-group">
                    <span class=" input-group-text" id="basic-addon3">https://</span>
                    <input type="url" class="form-control" name="github" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                </div>
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label">Instagram</label>
                <div class="input-group">
                    <span class=" input-group-text" id="basic-addon3">https://</span>
                    <input type="url" class="form-control" name="instagram" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                </div>
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label">Facebook</label>
                <div class="input-group">
                    <span class=" input-group-text" id="basic-addon3">https://</span>
                    <input type="url" class="form-control" name="facebook" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                </div>
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label">Personal Website</label>
                <div class="input-group">
                    <span class=" input-group-text" id="basic-addon3">https://</span>
                    <input type="url" class="form-control" name="website" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                </div>
            </div>
        </div>
        <br>
        <button type="submit" name="update" style="text-align:center; height: 40px;" class="btn btn-primary w-40">Generate Portfolio</button>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .form-label {
            font-size: 15px;
        }

        .row {
            border: 1px solid primary;

            padding: 10px;
            background-color: white;
        }
    </style>

</body>

</html>