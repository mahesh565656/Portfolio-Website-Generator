<?php
include 'Security/connection.php';
$sql = mysqli_query($con, "SELECT * FROM users ORDER BY id DESC LIMIT 1");
$row = $sql->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <iframe width="100%" height="800px" src="<?php echo $row['resume']; ?>"></iframe>
</body>
</html>
