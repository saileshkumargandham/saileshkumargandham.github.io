<?php
session_start();
if(isset($_SESSION['email']))
{
?>
<?php
include_once('connection.php');

if(isset($_POST['submit']))
{
	
	$image1 = time().'_'.$_FILES['images1']['name'];
	$post_name=$_POST['post_name'];
	if($image1 != time().'_')
	{
		$target= 'gallery_posts/'.$image1;
		move_uploaded_file($_FILES['images1']['tmp_name'],$target);
		$update = mysqli_query($con,"INSERT INTO `gallery` (`image_name`, `name`, `time`) VALUES ('$post_name', '$image1', current_timestamp());");
		if(!update)
		{
			header('location:post_fail.php');
		}
	}
	
	header('location:post_sucess.php');
}

?>
<?php
}
else
{
	header("location:index.php");
}
?>