<?php require_once('includes/session.php');
require_once('includes/conn.php');
if (!isset($_SESSION["usertype"])) 
{
    if ($_SESSION["usertype"] != 1) {
        header("Location:../access-denied.php");
    }
}
$page = 'gallery';
if (isset($_POST['upload'])) 
{
    // File upload configuration
    $targetDir = "assets/image/gallery/";
    $allowTypes = array('jpg','png','jpeg','gif');
    $statusMsg = $errorUpload = $errorUploadType = '';

    if(!empty(array_filter($_FILES['files']['name'])))
    {
        foreach($_FILES['files']['name'] as $key=>$val)
        {
            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes))
            {
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath))
                { 
                    $success_upload = true;
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].', ';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].', ';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Bued Info. System | Add Resolution</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/awesome/font-awesome.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- light gallery js -->
  <link href="assets/lightgallery/css/lightgallery.css" rel="stylesheet">
  <!-- //light gallery js -->
</head>
<body>
  <div class="wrapper">
    <!-- Sidebar Holder -->
    <?php include 'includes/navbar.php'; ?>
    <!-- Page Content Holder -->
    <div id="content">
        <div clas="col-md-12 sammacmedia">
            <img src="../enduser/img/1.png" class="img-thumbnail">
        </div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right  makotasamuel">
                        <li><a href="#"><?php require_once('includes/name.php');?></a></li>
                        <li ><a href="logout.php"><i class="fa fa-power-off"> Logout</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="line"></div>
        <?php
        if(isset($mysqli,$_POST['submit']))
        {
            $official_id = mysqli_real_escape_string($mysqli,$_POST['official-id']);
            $details = mysqli_real_escape_string($mysqli,$_POST['details']);
            $datecreated = date(" d M Y "); 

            $sql = "INSERT INTO resolutions (official_id, resolution_details, date_created)
                VALUES('$official_id','$details','$datecreated')";
            $results = mysqli_query($mysqli,$sql);
            if($results==1)
            { ?>
                <div class="alert alert-success strover animated bounce" id="sams1">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong> Successfully! </strong><?php echo'added a resolution';?>
                </div>
            <?php } else { ?>
                <div id="sams1" class="sufee-alert alert with-close alert-danger alert-dismissible fade show col-lg-12">
                    <span class="badge badge-pill badge-danger">Error</span>
                    OOPS something went wrong
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php    
            }      
        }
        ?>
        <?php if (isset($success_upload)): ?>
            <?php
                if ($success_upload)
                    $success_upload = false; 
            ?>
            <div class="alert alert-success strover animated bounce" id="sams1">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong> Successfully! </strong><?php echo' upload photos/s';?>
            </div>
        <?php endif ?>
        <div class="panel panel-default sammacmedia">
            <div class="panel-heading">Bued Information System | Gallery</div>
            <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data">
                    Select Image Files to Upload:
                    <div class="row clearfix">
                        <div class="col-lg-6">
                            <input class="btn btn-primary form-control" type="file" name="files[]" multiple >
                        </div>
                        <div class="col-lg-6 pull-right">
                            <input class="btn btn-primary" type="submit" name="upload" value="UPLOAD">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="panel panel-default sammacmedia">
            <div class="demo-gallery">
                <ul id="lightgallery" class="list-unstyled row">
                    <?php 
                        $pics = scandir('assets/image/gallery');
                        unset($pics[0]);
                        unset($pics[1]);
                    ?>
                    <?php if ($pics): ?>
                    <?php foreach ($pics as $key => $value): ?>
                            <li class="col-xs-6 col-sm-4 col-md-3 item" data-wow-delay=".5s"" data-responsive="assets/image/gallery/<?= $value ?>" data-src="assets/image/gallery/<?= $value ?>" data-sub-html="<h4></h4><p></p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive" src="assets/image/gallery/<?= $value ?>" alt="<?= $value ?>">
                                </a>
                                <ul class="delete-ul">
                                    <li>
                                        <p><a href="javascript::void();" id="<?= $value ?>" class="fa fa-trash-o delete-btn"> Delete</a></p>
                                    </li>
                                </ul>
                            </li>
                    <?php endforeach; ?>
                    <?php endif ?>
                </ul>
            </div>
        </div>
        <footer>
            <p class="text-center">
            Bued Information System &copy;<?php echo date("Y ");?> All Rights Reserved Shekinah and Company    
            </p>
        </footer>
    </div>
</div>
<!-- jQuery CDN -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js CDN -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom Js -->
<script src="assets/js/admin-custom.js"></script>
<!-- for light gallery working -->
<!-- <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script> -->
<script src="assets/lightgallery/js/lightgallery.js"></script>
<script src="assets/lightgallery/js/lg-pager.js"></script>
<script src="assets/lightgallery/js/lg-autoplay.js"></script>
<script src="assets/lightgallery/js/lg-fullscreen.js"></script>
<script src="assets/lightgallery/js/lg-zoom.js"></script>
<script src="assets/lightgallery/js/lg-hash.js"></script>
<script src="assets/lightgallery/js/lg-share.js"></script>
<script>
    lightGallery(document.getElementById('lightgallery'));
</script>
<!-- //for light gallery working -->
<style type="text/css">
.item img {
  height: 181px!important;
  width: 100%!important;
}
.delete-ul {
    padding-left: 0px;
    list-style: none;
    background: unset;
}
.delete-ul a {
    background: unset;
    padding-left: 0px!important;
}
</style>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
        
        $('sams').on('click', function() {
            $('makota').addClass('animated tada');
        });
        
        window.setTimeout(function() {
            $("#sams1").fadeTo(1000, 0).slideUp(1000, function() {
                $(this).remove(); 
            });
        }, 5000);

        $(".delete-btn").click(function(){
            result = confirm('Are you sure you want to delete this item?');
            if (result) 
            {
                id = $(this).attr('id');
                $.ajax({url: "unlink.php", type:"POST", data:{id:id},success: function(result){
                    window.location.assign("gallery.php");
                }});
            }
        });
    });
</script>
</body>
</html>