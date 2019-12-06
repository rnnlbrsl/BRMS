<?php require_once('includes/session.php');
      require_once('includes/conn.php');
      if (!isset($_SESSION["usertype"])) 
{
    if ($_SESSION["usertype"] != 1) {
        header("Location:../access-denied.php");
    }
}
      $page = 'residents';
      $menu = 'add_residents';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BRMS | Add Resident</title>
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
                            <ul class="nav navbar-nav navbar-right  makotasamuel">
                                <li><a href="#"><?php require_once('includes/name.php');?></a></li>
                                <li ><a href="logout.php"><i class="fa fa-power-off"> Logout</i></a></li>
           
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="line"></div>
                <?php
                if(isset($mysqli,$_POST['submit'])){
                $name = mysqli_real_escape_string($mysqli,$_POST['firstname']);
                $middlename = mysqli_real_escape_string($mysqli,$_POST['middlename']);
                $surname = mysqli_real_escape_string($mysqli,$_POST['lastname']);
                $bdate = mysqli_real_escape_string($mysqli,$_POST['bdate']);
                $address = mysqli_real_escape_string($mysqli,$_POST['address']);
                $year = date('Y', time());
                $birth_year = date('Y', strtotime($bdate));
                $age = $year - $birth_year;
                $gender = mysqli_real_escape_string($mysqli,$_POST['gender']);     
                $joined = date(" d M Y ");
                $tmp = rand(1,9999);
                // $file = $_FILES['file'];
                // $fileName =$file['name'];
                // $fileTmpName = $file['tmp_name'];
                // $fileSize = $file['size'];
                // $fileError = $file['error'];
                // $fileType = $file['type'];
                // $fileExt = explode('.', $fileName);
                // $fileActualExt = strtolower(end($fileExt));
                // $allowed = array('jpg','jpeg','png');

                $sql = "INSERT INTO residents(lastname,firstname,middlename,birthdate,age,address,sex,date_registered)VALUES('$surname','$name','$middlename','$bdate','$age','$address','$gender','$joined')";
                $results = mysqli_query($mysqli,$sql);
                // if(in_array($fileActualExt, $allowed)){
                // if($fileError === 0){
                // if($fileSize < 1000000){
                // $fileNameNew = "user".$tmp.".".$fileActualExt;
                // $fileDestination ='assets/image/uploads/'.$fileNameNew;
                // move_uploaded_file($fileTmpName, $fileDestination);
                // $sqli = "INSERT INTO picture(name,tmp)VALUES('$fileNameNew','$tmp')";
                // mysqli_query($mysqli,$sqli);
                //header('Location:acc.php');
                    // }
                    //     }
                    //         }
                        
                        
                        if($results==1){
                              ?>
                        <div class="alert alert-success strover animated bounce" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfully! </strong><?php echo'Thank you for adding new resident';?></div>
                        <?php

                          }else{
                                ?>
                        <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Danger! </strong><?php echo'OOPS something went wrong';?></div>
            
                        <?php    
                          }      
                 }
                ?>
		<div class="panel panel-default sammacmedia">
            <div class="panel-heading">BRMS | Add Resident</div>
        <div class="panel-body">
            <form method="post" action="add_resident.php" enctype="multipart/form-data">
        <div class="row form-group">
          <div class="col-lg-4">
            <label>Last Name</label>
              <input type="text" class="form-control" name="lastname" pattern="[A-Za-z ]{3,}" required>
            </div>  
             <div class="col-lg-4">
            <label>First Name</label>
              <input type="text" class="form-control" name="firstname" pattern="[A-Za-z ]{3,}" required>
            </div>
            <div class="col-lg-4">
            <label>Middle Name</label>
              <input type="text" class="form-control" name="middlename" pattern="[A-Za-z ]{3,}" required>
            </div>  
        </div>
            <div class="row form-group">
         
             <div class="col-lg-12">
            <label>Address</label>
              <input type="text" class="form-control" name="address" pattern="{0-9}" placeholder="House No., Street, City, Country" required>
            </div>
        </div>   
         <div class="row form-group">
           <div class="col-lg-6">
            <label>Birthdate</label>
              <input type="date" class="form-control" name="bdate">
            </div>  
          <!-- <div class="col-lg-6">
            <label>Picture</label>
             <input type="file" class="form-control" name="file" required>
            </div>  --> 
             <div class="col-lg-6">
            <label>Sex</label>
             <select class="form-control" name="gender">
              <option>F</option>
              <option>M</option>      
              </select>
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
            Barangay Records Management System &copy;<?php echo date(" Y ");?> Ronnel Brosola  
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
    </body>
</html>
