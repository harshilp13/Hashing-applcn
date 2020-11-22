<?php
session_start();

if(isset($_POST['verify'])){
	$pass = $_POST['pass'];
	//$mainpass = pbkdf2("Harshil");
	$mainpass = hash("sha256","Harshil");
	if(hash("sha256",$pass) ==$mainpass){
		$_SESSION['success'] = "correct Password";
		header( "Location: cloud.php" );

		
	}
	else{

	$_SESSION['faliure'] = "Incorrect Password";
	}
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form method="post" action="index.php" class="login100-form validate-form">
					<span class="login100-form-title">
						Cloud Storage
					</span>

					

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<?php
					// Starting session
					//session_start();
					 
					// Accessing session data
					if(isset($_SESSION["success"])){
						echo '<p> ' . $_SESSION["success"] . ' </p>';
						unset($_SESSION["success"]);
					}
					if(isset($_SESSION["faliure"])){
						echo '<p> ' . $_SESSION["faliure"] . ' </p>';
						unset($_SESSION["faliure"]);

					}

					?>

					
					<div class="container-login100-form-btn">
						<button type="submit" value="Register" name="verify" class="login100-form-btn">
							Login
						</button>
					</div>

					

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>