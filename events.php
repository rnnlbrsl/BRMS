<?php 
include("enduser/navbar.php"); 
?>

<!DOCTYPE html>
<?php 
    require_once('includes/conn.php');
	$query=mysqli_query($mysqli,"select * from `announcement` where is_active=1"); 
	$query = mysqli_fetch_all($query);
?>
<html>
<head>
	<title>Events</title>
  <link rel="stylesheet" type="text/css" href="enduser/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>
<body>
	<?php echo $header; ?>
	<div class="container" style="background-color: #e9ecef;">

		<div class="jumbotron">
			<h1>See the latest happenings</h1>
		</div>

		<?php foreach ($query as $key => $value): ?>
			<div class="panel panel-default" style="background-color: #fff;padding: 10px; margin-top: 10px;">
				<div class="panel-body">
					<h3><?php echo $value[2] ?></h3>
					<p><?php echo $value[3] ?></p>
					<small>Posted on: <?php echo $value[5] ?></small>
				</div>
			</div>
		<?php endforeach ?>

	</div>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>