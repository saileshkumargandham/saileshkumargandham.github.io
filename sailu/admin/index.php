<script>
function validateForm(){
	x = document.getElementById("email").value;
	y = document.getElementById("psw").value;
	
	if(x==""){
	document.getElementById("error_email").innerHTML = "! Enter your email";
	return false;
	}
	else
	{
		document.getElementById("error_email").innerHTML = "";
	}
	if(y==""){
	document.getElementById("error_psw").innerHTML = "! Enter your password";
	return false;
	}
	else
	{
		document.getElementById("error_psw").innerHTML = "";
	}
}
</script>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="login_page/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@media only screen and (min-width: 500px) {
#mobileshow  {
display: none !important;}
}
</style>
	


</head>
<body>
	<img class="wave" src="login_page/img/logo.jpg" width="52%">
	<div class="container">
		<div class="img">
			
		</div>
		<div class="login-content">
			<form method="POST" action="login.php" onsubmit="return validateForm()">
			
				<img id="mobileshow" src="login_page/img/logo.jpg">
				<h2 class="title">Admin Login</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>E-mail</h5>
           		   		<input class="input" id="email"  name="email" type="email" >
           		   </div>
           		</div>
				<!-- Error msg for email-->
				<p id="error_email" style="color:rgb(255, 0, 0);"></p>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input id="psw" name="psw" type="password" class="input">
            	   </div>
            	</div>
				<!--Error msg for password-->
				<p id="error_psw" style="color:rgb(255, 0, 0);"></p>
            	<a href="#">Forgot Password?</a>
				<input class="btn" type="submit" value="Login" >
            	
            </form>
        </div>
    </div>
    <script type="text/javascript" src="login_page/js/main.js"></script>
</body>
</html>
