<?php require_once('includes/session.php');
require_once('includes/conn.php');
if (isset($_SESSION["usertype"])) 
{
  if ($_SESSION["usertype"] != 1) 
  {
    header("Location:../access-denied.php");
  }
}
$page = 'blotter';
$menu = 'add_blotter';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BRMS | Add Blotter Record</title>
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
              <li ><a href="logout.php"><i class="fa fa-power-off"> Logout </i></a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="line"></div>
      <?php
      if(isset($mysqli,$_POST['submit']))
      {
        $name = mysqli_real_escape_string($mysqli,$_POST['fname']);
        $middlename = mysqli_real_escape_string($mysqli,$_POST['middlename']);
        $surname = mysqli_real_escape_string($mysqli,$_POST['surname']);
        $address = mysqli_real_escape_string($mysqli,$_POST['address']);
        $accused = mysqli_real_escape_string($mysqli,$_POST['accused']);
        $details = mysqli_real_escape_string($mysqli,$_POST['details']); 
        $bday = mysqli_real_escape_string($mysqli,$_POST['bday']); 
        $gender = mysqli_real_escape_string($mysqli,$_POST['gender']); 
        $created_at = date(" d M Y ");
        $year = date('Y', strtotime($created_at));
        $birth_year = date('Y', strtotime($bday));
        $age = $year - $birth_year;

        $sql_n = "SELECT * FROM residents WHERE lastname ='$surname' AND firstname ='$name' AND middlename='$middlename' AND birthdate='$bday' AND age='$age' AND sex='$gender'";

        $res_n = mysqli_query($mysqli, $sql_n);
        // $res = mysqli_free_result($res_n);
        // var_dump($res);exit();

        if(mysqli_num_rows($res_n) > 0)
        {
          $result = fetch_array($res_n);
          $resident_id = $result[‘id’];
        }
        else
        {
          $sql = "INSERT INTO residents(lastname,firstname,middlename,birthdate,age,address,sex,date_registered)VALUES('$surname','$name','$middlename','$bday','$age','$address','$gender','$created_at')";
          $results = mysqli_query($mysqli,$sql);
          $resident_id = mysqli_insert_id($mysqli);
        }
        
        $sql = "INSERT INTO blotter_record(resident_no,accused,blotter_details,blotter_date)VALUES('$resident_id','$accused','$details','$created_at')";
        

        $results = mysqli_query($mysqli,$sql);

        if($results==1)
          { ?>
            <div class="alert alert-success strover animated bounce" id="sams1">
              <a href="#" class="close" data-dismiss="alert">&times;</a>
              <strong> Successfully </strong><?php echo'added a blotter';?></div>
              <?php
            }
            else
              { ?>
                <div class="alert alert-danger samuel animated shake" id="sams1">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                  <strong> Danger! </strong><?php echo'OOPS something went wrong';?></div>
                  <?php    
                }      
              }
              ?>
              <div class="panel panel-default sammacmedia">
                <div class="panel-heading">BRMS | Add Blotter</div>
                <div class="panel-body">
                  <form method="post" action="add_blotter.php" enctype="multipart/form-data">
                    <div class="row form-group">
                      <div class="col-lg-12">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="fname" pattern="[A-Za-z]{3,}" required>
                      </div>  

                    </div>
                    <div class="row form-group">
                      <div class="col-lg-12">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" name="middlename" pattern="[A-Za-z]{3,}">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-lg-12">
                        <label>Surname</label>
                        <input type="text" class="form-control" name="surname" pattern="[A-Za-z]{3,}" required>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-lg-6">
                        <label>Blotter Date</label>
                        <input type="date" class="form-control" name="bday" required>
                      </div>  
                      <div class="col-lg-6">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                          <option>F</option>
                          <option>M</option>      
                        </select>
                      </div>  
                    </div>
                    <div class="row form-group">
                      <div class="col-lg-12">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address">
                      </div>  
                    </div>   
                    <div class="row form-group">
                      <div class="col-lg-12">
                        <label>Accused</label>
                        <input type="text" class="form-control" name="accused">
                      </div>  
                    </div>   
                    <div class="row form-group">
                      <div class="col-lg-12">
                        <label>Details</label><br>
                        <textarea style="width: 100%;" rows="6" name="details"></textarea>
                      </div>  
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <button type="submit" name="submit" class="btn btn-suc btn-block"><span class="fa fa-plus"></span> Proceed</button>  
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
          <script type="text/javascript">

            $(document).ready(function () {

              window.setTimeout(function() {
                $("#sams1").fadeTo(1000, 0).slideUp(1000, function(){
                  $(this).remove(); 
                });
              }, 5000);

            });
          </script>
          <style type="text/css">
            .panel {
              background-color: #ddd!important;
            }
          </style>
        </body>
        </html>
