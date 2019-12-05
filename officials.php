<?php include ("enduser/navbar.php"); 
require_once('includes/conn.php');
    $res_n = mysqli_query($mysqli, "SELECT * FROM officials");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Officials</title>
  <link rel="stylesheet" type="text/css" href="enduser/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>
<body>
	<?php echo $header; ?>	
	<div class="container">
		<div>
		<br>
		<h2 class="text-center">
			You are on the Officials Page!
		</h2>
		<br>
		<br>
		</div>
		<div class="row clearfix officials">
		<?php while($row=mysqli_fetch_array($res_n)): ?>
			<div class="col-lg-6 col-md-12 col-sm-12 text-center">
				<img src="admin/assets/image/uploads/<?php echo $row['tmp'] ?>">
				<div class="row clearfix">
					<div class="col-sm-12">
						<h2><?php echo $row['position'] ?></h2>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-12">
						<p><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['lastname'] ?></p>
					</div>
				</div>
			</div>
		<?php endwhile; ?>	
		</div>
	</div>
	<style type="text/css">
.officials img {
  height: 50%!important;
  width: 50%!important;
}
</style>	

</body>
</html>