<?php 
//require_once('includes/db.php');
require_once('includes/conn.php');
// var_dump(md5('ramos'));exit();

	if(isset($mysqli,$_POST['submit']))
	{
		$username = mysqli_real_escape_string($mysqli,$_POST['username']);
		$password = mysqli_real_escape_string($mysqli,$_POST['password']);
		$password=md5($password);
		$query1=mysqli_query($mysqli,"SELECT * FROM users");
		if ($query1) 
		{
			while($row=mysqli_fetch_array($query1))
			{
				$db_username=$row["username"];
				$db_password=$row["password"];
				$db_type=$row["permission"];

				if($username==$db_username && $password==$db_password)
				{
					session_start();
					$_SESSION["username"]=$db_username;
					$_SESSION["usertype"]=$db_type;
					$_SESSION["name"]=$row["name"];
					$_SESSION["surname"]=$row["surname"];

					if($_SESSION["usertype"]==1)
					{
						$_SESSION["permission"]=1;
						header("Location:admin/dashboard.php");
					}
					else
					{
						echo "<script>alert('Username and Password did not match.');</script>";
					}
				}
			}
		}
		else
		{
			echo "<script>alert('Username and Password did not match.');</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bued Information System | LOGIN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<div class="container-login100">
	<div class="row">
		<div class="col-lg-6">
			
		</div>
		<div class="col-lg-6" style="background-image: url('enduser/img/1.png');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
				<form class="login100-form validate-form" method="post" action="login.php">
					<span class="login100-form-title p-b-37">Bued Information System Login</span>
					<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username ">
						<input class="input100" type="text" name="username" placeholder="username " required="">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
						<input class="input100" type="password" name="password" placeholder="password" required="">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">Sign In</button>
					</div>
				</form>			
			</div>
		</div>
	</div>
</div>
<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
</body>
</html>