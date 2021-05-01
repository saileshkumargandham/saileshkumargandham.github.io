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
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Adminstration </title>
        <link href="css/styles.css" rel="stylesheet" />
		<style>
		body{
			background:url('gallery/gif/giphy.gif') no-repeat;
			background-size:fit;
		}
		</style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body >
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="login.php" onsubmit="return validateForm()">
                                            <div class="form-group">
											<label class="small mb-1" for="inputEmailAddress">Email</label>
											<input class="form-control py-4" id="email"  name="email" type="email" placeholder="Enter email address" />
											</div>
											<!-- Error msg for email-->
											<p id="error_email" style="color:rgb(255, 0, 0);"></p>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>
											<input class="form-control py-4" id="psw" name="psw" type="password" placeholder="Enter password" />
											</div>
											<!--Error msg for password-->
											<p id="error_psw" style="color:rgb(255, 0, 0);"></p>
                                            
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
											
											<input class="btn btn-primary" type="submit" value="Login" ></div>
											
											
											
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
