<?php 
include("enduser/navbar.php"); 
require_once('includes/conn.php');
$query=mysqli_query($mysqli,"select * from `ordinances`"); 
$query = mysqli_fetch_all($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ordinances</title>
  <link rel="stylesheet" type="text/css" href="enduser/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>
<body>
	<?php echo $header; ?>
	<div class="container" style="background-color: #e9ecef;">

		<div class="jumbotron">
			<center><h1>Barangay Ordinances</h1></center> 
		</div>

		<?php foreach ($query as $key => $value): ?>
			<div class="panel panel-default" style="background-color: #fff;padding: 10px; margin-top: 10px;">
				<div class="panel-body">
					<h3><?php echo $value[2] ?></h3>
					<p><?php echo $value[3] ?></p>
					<small>Posted on: <?php echo $value[4] ?></small>
				</div>
			</div>
		<?php endforeach ?>

	</div>

</body>
</html>