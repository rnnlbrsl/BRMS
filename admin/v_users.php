<?php require_once('includes/session.php');
      require_once('includes/conn.php');
      if (!isset($_SESSION["usertype"])) 
{
    if ($_SESSION["usertype"] != 1) {
        header("Location:../access-denied.php");
    }
}
      $page = 'v_users';

if (isset($_POST['delete-id']))
{
    $id = $_POST['delete-id'];
    if ($stmt = $mysqli->prepare("DELETE FROM users WHERE id = ? LIMIT 1"))
    {
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
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

        <title>Bued Information System</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
         <link rel="stylesheet" href="vendor/datatables/datatables.min.css">
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
                            <ul class="nav navbar-nav navbar-right  makotasamuel">
                                <li><a href="#"><?php require_once('includes/name.php');?></a></li>
                                <li ><a href="logout.php"><i class="fa fa-power-off"> Logout</i></a></li>
           
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="line"></div>
                                           
		<div class="panel panel-default sammacmedia">
            <div class="panel-heading">All Users</div>
        <div class="panel-body">
                        <table class="table table-striped thead-dark table-bordered table-hover" id="myTable">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th> 
                    <th>Access Level</th>
                    <th>Action</th> 

                    
                    
                    </tr>
                </thead>
                    <?php
                                   $a=1;
                    $query=mysqli_query($mysqli,"select *from `users` ");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                          <tr>
                              <td><?php echo $a;?></td> 
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['surname'];?></td>
                            <td><?php echo $row['username'];?></td>  
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['phone'];?></td>
                            <td><?php echo $row['permission'];?></td>  
                            <td>
                  <a href="javascript::void();" id="<?php echo $row['id']; ?>" class="btn btn-danger delete"><span class="fa fa-times"></span> Remove</a>
                              </td>
                              <form id="delete-form<?php echo $row['id']; ?>" method="post">
                                  <input type="hidden" value="<?php echo $row['id']; ?>" name="delete-id">
                              </form>
                          </tr>
                          <?php
                       
                            $a++;
                      }
                      ?>
                      <?php if (isset($_SESSION['success'])): ?>
                      <div class="alert alert-success strover" id="sams1">
                          <a href="#" class="close" data-dismiss="alert">&times;</a>
                          <strong> Successfully! </strong><?php echo'Record Successfully deleted';?>
                      </div>
                      <?php endif ?>
                      <?php if (isset($_SESSION['update'])): ?>
                      <div class="alert alert-success strover" id="sams1">
                          <a href="#" class="close" data-dismiss="alert">&times;</a>
                          <strong> Successfully! </strong><?php echo'Record Successfully Updated';?>
                      </div>
                      <?php endif ?>
                      <?php if (isset($_SESSION['error'])): ?>
                      <div class="alert alert-danger samuel" id="sams1">
                          <a href="#" class="close" data-dismiss="alert">&times;</a>
                          <strong> Danger! </strong><?php echo'OOPS please try again something went wrong';?>
                      </div>
                      <?php endif ?>
                </table>
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





         <script src="assets/js/jquery-1.10.2.js"></script>
         <script src="assets/js/bootstrap.min.js"></script>
         <script src="vendor/datatables/datatables.min.js"></script>
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
         <script type="text/javascript">

        $(document).ready(function () {
 
            window.setTimeout(function() {
        $("#sams1").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
        });
            }, 5000);
 
        });

        $('.delete').click(function() {
            result = confirm('Are you sure you want to delete this item?');
            if (result) {
                id = $(this).attr('id');
                $('#delete-form'+id).submit();
            }
          });
    </script>
         <script type="text/javascript">
             
             $(document).ready( function () {
                 $('#myTable').DataTable();
             } );
         </script>
    </body>
</html>
