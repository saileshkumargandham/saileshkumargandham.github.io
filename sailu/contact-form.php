<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php
function  success(){
    echo '<script type="text/javascript"> ';
    echo '  if (confirm("We have received your message")) {';
    echo '    window.location.replace("index.php");';
    echo '  }';
    echo '</script>';
}
    function  failure(){
        echo '<script type="text/javascript"> ';
        echo '  if (confirm("There has been some error while sending your message.PLEASE TRY AGAIN!!")) {';
        echo '    window.location.replace("contact.php");';
        echo '  }';
        echo '</script>';
}
?>

<?php
if(isset( $_POST['name'])){
$name = $_POST['name'];}
if(isset( $_POST['email'])){
$email = $_POST['email'];}
if(isset( $_POST['message'])){
$message = $_POST['message'];}
if(isset( $_POST['subject'])){
$subject = $_POST['subject'];}

include_once('connection.php');
$result = mysqli_query($con,"INSERT INTO contact_us (names, emails, subjects, messages) VALUES ('$name', '$email','$subject','$message')");
if($result==1)
{
    success();
}
else{
    failure();
}
?>
</head>
</html>