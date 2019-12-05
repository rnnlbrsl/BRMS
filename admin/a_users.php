<?php 
require_once('includes/session.php');
require_once('includes/conn.php');
if (!isset($_SESSION["usertype"])) 
{
    if ($_SESSION["usertype"] != 1) {
        header("Location:../access-denied.php");
    }
}
$page = 'a_users';

if (isset($_POST['submit'])) 
{
    $name = mysqli_real_escape_string($mysqli,$_POST['name']);
    $surname = mysqli_real_escape_string($mysqli,$_POST['surname']);
    $email = mysqli_real_escape_string($mysqli,$_POST['email']);
    $gender = mysqli_real_escape_string($mysqli,$_POST['gender']);
    $phone = mysqli_real_escape_string($mysqli,$_POST['phone']);
    $username = mysqli_real_escape_string($mysqli,$_POST['username']);
    $password = mysqli_real_escape_string($mysqli,$_POST['password']);
    $encpassword=md5($password);
    $datecreated = date(" d M Y "); 
    $permission = 1; 
    $usertype = mysqli_real_escape_string($mysqli,$_POST['usertype']);

    $sql = "INSERT INTO users (name, surname, email, username, password, joined, type, permission, gender, phone)
        VALUES('$name','$surname','$email','$username','$encpassword','$datecreated','$usertype','$permission','$gender','$phone')";
    $results = mysqli_query($mysqli,$sql);
    // var_dump($results);exit;
    if($results==1)
    {
        $_SESSION['success'] = true;
    }
    else
    {
        $_SESSION['error'] = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Bued Info. System | Add Users</title>

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
                  

        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success strover animated bounce" id="sams1">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong> Successfully! </strong><?php echo'Thank you for creating account';?>
            </div>
        <?php endif ?>
        <?php if (isset($_SESSION['error'])): ?>
            <div id="sams1" class="sufee-alert alert with-close alert-danger alert-dismissible">
                <span class="badge badge-pill badge-danger">Error</span>
                OOPS something went wrong
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif ?>
        <div class="panel panel-default sammacmedia">
            <div class="panel-heading">Bued Information System | Add Users</div>
            <div class="panel-body">
                <form method="post" action="a_users.php">
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" pattern="{1-9}" required>  
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <label>Surname</label>
                            <input type="text" class="form-control" name="surname" pattern="{1-9}" required>  
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>  
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Gender</label>
                            <select class="form-control" name="gender">
                            <option></option>
                            <option>F</option>
                            <option>M</option>      
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" required>  
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" pattern="[A-Za-z]{3,}" required>
                        </div>  
                        <div class="col-lg-3">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="col-lg-3">
                            <label>Usertype</label>
                            <input type="text" class="form-control" name="usertype" pattern="[A-Za-z]{3,}" required>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" name="submit" class="btn btn-suc btn-block"><span class="fa fa-plus"></span> Process</button>  
                        </div>
                        <div class="col-md-6">
                            <button type="reset" class="btn btn-dan btn-block"><span class="fa fa-times"></span> Cancel</button>  
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="line"></div>
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

<script type="text/javascript">
  $(document).ready(function () {
    $('#sidebarCollapse').on('click', function()
    {
      $('#sidebar').toggleClass('active');
    });
  });
  $('sams').on('click', function()
  {
    $('makota').addClass('animated tada');
  });
</script>
<script type="text/javascript">
  $(document).ready(function ()
  {
    window.setTimeout(function()
    {
      $("#sams1").fadeTo(1000, 0).slideUp(1000, function()
      {
        $(this).remove(); 
      });
    }, 5000);
  });
</script>
</body>
</html>