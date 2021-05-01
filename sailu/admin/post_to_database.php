<?php
session_start();
if(isset($_SESSION['email']))
{
?>
<?php
include_once('connection.php');

if(isset($_POST['submit']))
{

  $latestnews=$_POST['latestnews'];
	$youtube_link=$_POST['youtube_link'];

	$image1 = time().'_'.$_FILES['images1']['name'];
	$image2 = time().'_'.$_FILES['images2']['name'];
	$image3 = time().'_'.$_FILES['images3']['name'];
	$image4 = time().'_'.$_FILES['images4']['name'];
	$image5 = time().'_'.$_FILES['images5']['name'];
	$image6 = time().'_'.$_FILES['images6']['name'];
	$image1_ext=explode('.',$_FILES['images1']['name']);
	$image2_ext=explode('.',$_FILES['images2']['name']);
	$image3_ext=explode('.',$_FILES['images3']['name']);
	$image4_ext=explode('.',$_FILES['images4']['name']);
	$image5_ext=explode('.',$_FILES['images5']['name']);
	$image6_ext=explode('.',$_FILES['images6']['name']);

	$old_image = mysqli_query($con,"select * from index_page where row_no='1' ");
	$row = $old_image->fetch_assoc();
	if($latestnews != '')
	{
		$update = mysqli_query($con,"update latestnews set latestnews='$latestnews' where id='1' ");
		if(!$update)
		{
			header('location:post_fail.php');
		}
	}
	if($youtube_link != '')
	{
		$update = mysqli_query($con,"update youtube_link set link='$youtube_link' where id='1' ");
		if(!$update)
		{
			header('location:post_fail.php');
		}
	}
	if(($image1 != time().'_')and($image1_ext[0]!=''))
	{
		$target= 'images/'.$image1;
		move_uploaded_file($_FILES['images1']['tmp_name'],$target);
		$path="images/".$row['post1'];
		unlink($path);
		$update = mysqli_query($con,"update index_page set post1='$image1' where row_no='1' ");
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
		$update = mysqli_query($con,"update index_page set post2='$image2' where row_no='1' ");
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
		$update = mysqli_query($con,"update index_page set post3='$image3' where row_no='1' ");
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
		$update = mysqli_query($con,"update index_page set post4='$image4' where row_no='1' ");
		if(!$update)
		{
			header('location:post_fail.php');
		}

	}
	if(($image5 != time().'_')and($image5_ext[0]!=''))
	{
		$target= 'images/'.$image5;
		move_uploaded_file($_FILES['images5']['tmp_name'],$target);
		$path="images/".$row['post5'];
		unlink($path);
		$update = mysqli_query($con,"update index_page set post5='$image5' where row_no='1' ");
		if(!$update)
		{
			header('location:post_fail.php');
		}

	}
	if(($image6 != time().'_')and($image6_ext[0]!=''))
	{
		$target= 'images/'.$image6;
		move_uploaded_file($_FILES['images6']['tmp_name'],$target);
		$path="images/".$row['post6'];
		unlink($path);
		$update = mysqli_query($con,"update index_page set post6='$image6' where row_no='1' ");
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
