<?php

session_start();
if(isset($_POST['verify'])){
	$pass = $_POST['pass'];
	//$mainpass = pbkdf2("Harshil123");
	$mainpass = hash("sha256","Harshil123");

	if(hash("sha256",$pass) ==$mainpass){
		$_SESSION['success1'] = "correct Password";
		header( "Location: images.html" );
	}
	else{

	$_SESSION['faliure1'] = "Incorrect Password";
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title >could storage</title>
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
</head>
<body>
	<h1 align="center" class="mt-4">Cloud Storage</h1>
<?php
					// Starting session
					//session_start();
					 
					// Accessing session data
					if(isset($_SESSION["success1"])){
						echo '<p> ' . $_SESSION["success1"] . ' </p>';
						unset($_SESSION["success1"]);
					}
					if(isset($_SESSION["faliure1"])){
						echo '<p> ' . $_SESSION["faliure1"] . ' </p>';
						unset($_SESSION["faliure1"]);

					}

					?>
	<button class="btn btn-link" type="button"  data-target="#exampleModal" data-toggle="modal"><p class="mt-2 ml-5" style="font-size: 30px;"><i class="fa fa-folder"></i> File</p></button>
	<p class="mt-2 ml-5" style="font-size: 30px;"><i class="fa fa-folder"></i> File1</p>
	<p class="mt-2 ml-5" style="font-size: 30px;"><i class="fa fa-folder"></i> File2</p>
	<p class="mt-2 ml-5" style="font-size: 30px;"><i class="fa fa-folder"></i> File3</p>
	<p class="mt-2 ml-5" style="font-size: 30px;"><i class="fa fa-folder"></i> File4</p>


	<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">This File is Password Protected</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
              <form method="post" action="cloud.php">

      <div class="modal-body">
        	<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>


					
				
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="verify" class="btn btn-primary">Verify</button>
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