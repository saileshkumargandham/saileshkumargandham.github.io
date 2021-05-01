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
	$image2 = time().'_'.$_FILES['images2']['name'];
	$image3 = time().'_'.$_FILES['images3']['name'];
	$image4 = time().'_'.$_FILES['images4']['name'];
	$image1_ext=explode('.',$_FILES['images1']['name']);
	$image2_ext=explode('.',$_FILES['images2']['name']);
	$image3_ext=explode('.',$_FILES['images3']['name']);
	$image4_ext=explode('.',$_FILES['images4']['name']);

	$old_image = mysqli_query($con,"select * from home_posts where row_no='1' ");
	$row = $old_image->fetch_assoc();
	
	if(($image1 != time().'_')and($image1_ext[0]!=''))
	{
		$target= 'images/'.$image1;
		move_uploaded_file($_FILES['images1']['tmp_name'],$target);
		$path="images/".$row['post1'];
		unlink($path);
		$update = mysqli_query($con,"update home_posts set post1='$image1' where row_no=1 ");
		if(!$update)
		{
			header('location:post_fail.php');
		}
	}
	if(($image2 != time().'_')and($image2_ext[0]!=''))
	{
		$target= 'images/'.$image2;
		move_uploaded_file($_FILES['images2']['tmp_name'],$target);
		$path="images/".$row['post2'];
		unlink($path);
		$update = mysqli_query($con,"update home_posts set post2='$image2' where row_no=1 ");
		if(!$update)
		{
			header('location:post_fail.php');
		}

	}
	if(($image3 != time().'_')and($image3_ext[0]!=''))
	{
		$target= 'images/'.$image3;
		move_uploaded_file($_FILES['images3']['tmp_name'],$target);
		$path="images/".$row['post3'];
		unlink($path);
		$update = mysqli_query($con,"update home_posts set post3='$image3' where row_no=1 ");
		if(!$update)
		{
			header('location:post_fail.php');
		}

	}
	if(($image4 != time().'_')and($image4_ext[0]!=''))
	{
		$target= 'images/'.$image4;
		move_uploaded_file($_FILES['images4']['tmp_name'],$target);
		$path="images/".$row['post4'];
		unlink($path);
		$update = mysqli_query($con,"update home_posts set post4='$image4' where row_no=1 ");
		if(!$update)
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
