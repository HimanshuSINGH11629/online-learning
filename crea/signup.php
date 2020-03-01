<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
<?php
include_once'database.php';
if(isset($_POST['submit'])){
    $uname = $_POST['email'];
    $upassword = $_POST['password'];
    $sql = "INSERT INTO signup_table(email,password) VALUES('$uname','$upassword')";
    if(mysqli_query($conn,$sql)){
        header("Location:index.php");
    }
    else{
        echo "Error".$sql."".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
</body>
</html>
