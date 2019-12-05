<?php 
include("enduser/navbar.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mangrove</title>
  <link rel="stylesheet" type="text/css" href="enduser/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <!-- light gallery js -->
  <link href="admin/assets/lightgallery/css/lightgallery.css" rel="stylesheet">
  <!-- //light gallery js -->
</head>
<body>
	<?php echo $header; ?>
	<div class="container">
		<div>
		<h2>
			You are on the Mangrove Page!
		</h2>
		<div class="demo-gallery">
	        <ul id="lightgallery" class="list-unstyled row">
	            <?php 
	                $pics = scandir('admin/assets/image/gallery');
	                unset($pics[0]);
	                unset($pics[1]);
	            ?>
	            <?php if ($pics): ?>
	            <?php foreach ($pics as $key => $value): ?>
	                    <li class="col-xs-6 col-sm-4 col-md-3 item" data-wow-delay=".5s"" data-responsive="admin/assets/image/gallery/<?= $value ?>" data-src="admin/assets/image/gallery/<?= $value ?>" data-sub-html="<h4></h4><p></p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
	                        <a href="">
	                            <img class="img-responsive" src="admin/assets/image/gallery/<?= $value ?>" alt="<?= $value ?>">
	                        </a>
	                    </li>
	            <?php endforeach; ?>
	            <?php endif ?>
	        </ul>
	    </div>
		</div>
	</div>
	<!-- for light gallery working -->
<!-- <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script> -->
<script src="admin/assets/lightgallery/js/lightgallery.js"></script>
<script src="admin/assets/lightgallery/js/lg-pager.js"></script>
<script src="admin/assets/lightgallery/js/lg-autoplay.js"></script>
<script src="admin/assets/lightgallery/js/lg-fullscreen.js"></script>
<script src="admin/assets/lightgallery/js/lg-zoom.js"></script>
<script src="admin/assets/lightgallery/js/lg-hash.js"></script>
<script src="admin/assets/lightgallery/js/lg-share.js"></script>
<script>
    lightGallery(document.getElementById('lightgallery'));
</script>
<!-- //for light gallery working -->
<style type="text/css">
.item img {
  height: 181px!important;
  width: 100%!important;
  padding: 1px;
}
.item {
  padding: 1px;
}
</style>
</body>
</html>