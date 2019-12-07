<?php 
    require_once('includes/session.php');
    require_once('includes/conn.php');
    if (isset($_SESSION["usertype"])) 
{
    if ($_SESSION["usertype"] != 1) {
        header("Location:../access-denied.php");
    }
}
    $page = 'add_event';
    $menu = 'add_event';
    $query=mysqli_query($mysqli,"select * from `announcement` where is_active=1");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BRMS | Events</title>
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
                            <ul class="nav navbar-nav navbar-right  samuel">
                                <li><a href="#"><?php require_once('includes/name.php');?></a></li>
                                <li ><a href="logout.php"><i class="fa fa-power-off"> Logout</i></a></li>
           
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="line"></div>
                    <h1>Announcements</h1>
                    <?php while($row=mysqli_fetch_array($query)): ?>
                        <div class="announcement<?php echo $row['announcement_no'] ?>">
                            <div class="title">
                                <h2><?php echo $row['title'] ?></h2>
                                <div class="pull-right">
                                    <ul class="header-dropdown m-r--5">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="javascript:void(0);" class="hide-post" id="<?php echo $row['announcement_no'] ?>">Hide</a></li>
                                                <li><a href="javascript:void(0);" class="delete-post" id="<?php echo $row['announcement_no'] ?>">Delete</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <blockquote>
                                <p><?php echo $row['details'] ?></p>
                                <footer>Posted on: <?php echo $row['date_posted'] ?></footer>
                            </blockquote>
                        </div>
                    <?php endwhile; ?>
                <div class="line"></div>
                <footer>
                    <p class="text-center">Barangay Records Management System &copy;<?php echo date(" Y ");?> | Ronnel Brosola
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
            $(document).ready(function () 
            {
                $('#sidebarCollapse').on('click', function () 
                {
                    $('#sidebar').toggleClass('active');
                });

                $('.hide-post').on('click', function ()
                {
                    var id = $(this).attr("id");
                    $(".announcement"+id).fadeOut("slow");

                    $.post("delete_announcement.php",
                    {
                        id: id,
                        action: 'hide'
                    },
                    function(data){
                    });
                });

                $('.delete-post').on('click', function ()
                {
                    var id = $(this).attr("id");
                    $(".announcement"+id).fadeOut("slow");

                    $.post("delete_announcement.php",
                    {
                        id: id,
                        action: 'delete'
                    },
                    function(data){
                    });
                });
            });
        </script>
    </body>
</html>