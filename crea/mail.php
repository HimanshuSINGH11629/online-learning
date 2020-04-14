
<?php     
if(isset($_POST['submit'])){
    $email = $_POST['emailfrom'];
    $message = $_POST['text'];
    $to = "rangkyn@gmail.com";
    $from = "From: $to";
    mail($email,$message,$from);
    echo "Message send";
}
?>