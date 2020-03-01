<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login    </title>
</head>
<body>
<?php
$cser=mysqli_connect("localhost","root","","signup");
if(isset($_POST['loginsubmit'])){
    $uname = $_POST['loginmail'];
    $upassword = $_POST['loginpassword'];
    $res = mysqli_query($cser,"select* from signup_table where email='$uname'and password='$upassword'");
    $result=mysqli_fetch_array($res);
if($result)
{
	header("Location:main.html");
	
}
else
{
	header("Location:index.php");
}
}
?>  
</body>
</html>