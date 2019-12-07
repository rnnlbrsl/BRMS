<?php require_once('includes/session.php');
      require_once('includes/conn.php');
      if (!isset($_SESSION["usertype"])) 
{
    if ($_SESSION["usertype"] != 1) {
        header("Location:../access-denied.php");
    }
}
      $page = 'business-menu';
      $menu = 'view_bp';

      if (isset($_POST['delete-id']))
      {
          $id = $_POST['delete-id'];
          if ($stmt = $mysqli->prepare("DELETE FROM business_permit WHERE business_permit_no = ? LIMIT 1"))
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
      elseif(isset($_POST['Update']))
      {
          $id = $_POST['update_id'];
          $business_name = $_POST['business_name'];
          $location = $_POST['location'];

          $stmt = $mysqli->prepare("UPDATE business_permit SET business_name='$business_name', location='$location' WHERE business_permit_no = ? LIMIT 1");
          $stmt->bind_param("i",$id);
          $stmt->execute();
          $stmt->close();

          $_SESSION['update'] = true;
      }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>BRMS | Business Permits</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
         <link rel="stylesheet" href="vendors/datatables/datatables.min.css">
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
                                <li ><a href="logout.php"><i class="fa fa-power-off"> Logout </i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="line"></div>
		<div class="panel panel-default sammacmedia">
            <div class="panel-heading">BRMS | All Business Permits</div>
        <div class="panel-body">
                        <table class="table table-striped thead-dark table-bordered table-hover" id="myTable">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Owner</th>
                    <th>Business Title</th>
                    <th>Location</th>
                    <th>Date Issued</th>
                    <th>Action</th>
                    </tr>
                </thead>
                    <?php
                    
                    $a=1;
                    $query=mysqli_query($mysqli,"select * from `business_permit` ");
                     while($row=mysqli_fetch_array($query))
                        {
                          $res_id = $row['resident_no'];
                          $resident ="select * from `residents` where id=$res_id";
                          $query1=mysqli_query($mysqli,$resident);
                          $row1=mysqli_fetch_array($query1);
                          ?>
                          <tr>
                            <td><?php echo $a;?></td> 
                            <td><?php echo $row1['firstname'].' '.$row1['lastname'];?></td>
                            <td><?php echo $row['business_name'];?></td>
                            <td><?php echo $row['location'];?></td>  
                            <td><?php echo $row['date_issued'];?></td>  
                            <td>
                              <a href="#business-permit<?php echo $row['business_permit_no']; ?>" data-toggle="modal">
                                <span class="fa fa-search-plus"></span></a>
                              <a href="#business-permitupdate<?php echo $row['business_permit_no']; ?>" data-toggle="modal">
                                <span class="fa fa-pencil"></span></a>
                              <a href="javascript::void();" id="<?php echo $row['business_permit_no']; ?>" class="delete"><span class="fa fa-trash-o"></span></a>
                              </td>
                              <form id="delete-form<?php echo $row['business_permit_no']; ?>" method="post">
                                  <input type="hidden" value="<?php echo $row['business_permit_no']; ?>" name="delete-id">
                              </form>
                          </tr>
                          <?php
                         require('business-permit-info.php');
                         require('business-permit-update.php');
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
              Barangay Records Management System &copy;<?php echo date(" Y ");?> | Ronnel Brosola
            </p>
            </footer>
            </div>
        </div>
         <script src="assets/js/jquery-1.10.2.js"></script>
         <script src="assets/js/bootstrap.min.js"></script>
         <script src="vendors/datatables/datatables.min.js"></script>
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

            $('.delete').click(function() {
            result = confirm('Deleting means revoking permit. Are you sure you want to revoke this permit?');
            if (result) {
                id = $(this).attr('id');
                $('#delete-form'+id).submit();
            }
          });
        });
    </script>
         <script type="text/javascript">
             
             $(document).ready( function () {
                 $('#myTable').DataTable();
             } );
         </script>
    </body>
</html>
