<?php
try
{
if(isset( $_POST['id2'])){
$id2 = $_POST['id2'];}

include_once('connection.php');
$result = mysqli_query($con,"delete from contact_us where id='$id2'");
header("Location:usermails.php");
}
catch(Exception $e)
{
    header("Location:dashboard.php");
}
?>