<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "signup";
$conn = mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
    die('Could not Connect My Sql:'.mysql_error());
}
else{
    print('connection sucess');
}
?> 
</body>
</html>
