<?php
require_once('includes/session.php');
require_once('includes/conn.php');
require_once('check.php');    
if (isset($_SESSION["usertype"])) 
{
    if ($_SESSION["usertype"] != 1) 
    {
        header("Location:../access-denied.php");
    }
}
$page = 'dashboard';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard | Ronnel Brosola</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <?php include 'includes/navbar.php'; ?>
            <!-- Page Content Holder -->
            <div id="content">
                <div clas="col-md-12">
                    <img src="../enduser/img/1.png" class="img-thumbnail">
                    </div>
                <nav class="navbar navbar-default sammacmedia">
                    <div class="container-fluid">

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right samuel">
                                <li><a href="#"><?php require_once('includes/name.php');?></a></li>
                                <li><a href="logout.php"><span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <hr>
                <div class="row">
                <div class="col-lg-6 col-md-6 ">
                    <div class="panel panel sammac sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $residents;?></div>
                                    <div>Total Number Of Residents</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel sammac sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-link fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $cases;?></div>
                                    <div>Total Number Of Blotter Records</div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>

                    
                    
            </div>
                <div class="line"><hr></div>
                <footer>
            <p class="text-center">
            Barangay Records Management System &copy;<?php echo date(" Y ");?> | Ronnel Brosola    
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

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
             $('sams').on('click', function(){
                 $('makota').addClass('animated tada');
             });
         </script>
    </body>
</html>
