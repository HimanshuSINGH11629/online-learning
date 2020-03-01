<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
</head>
<body>
    <?php
    $connec = mysqli_connect("localhost","root","","signup");
    $jav = 'java';
    if(isset($_POST['submit'])){
        $search = $_POST['searchcourse'];
        $res= mysqli_query($connec,"select* from course where courseName = '$search'");
        $result = mysqli_fetch_array($res);
        if($result['courseName'] == 'java'){
            header("Location:course/java.html");
        }
        else{
           header("Location:fallback/cnotavai.html");
        }
    }
?>
</body>
</html>