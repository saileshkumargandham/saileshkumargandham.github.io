<?php
session_start();
$email=$_POST['email'];
$psw=$_POST['psw'];

include_once('connection.php');

	if(empty($email) || empty($psw))
	{
		header("location:index.php");
	}
	else
	{
		$result = mysqli_query($con,"select * from login where userid='$email' and password='$psw'")
	or die("Failed to query database ".mysqli_error());


  
if(mysqli_fetch_assoc($result))
{
	$_SESSION['email']=$email;
	header("location:dashboard.php");
}
else 
{
	header("location:invalidpsw.html");
}
	}


?>