

<?php require_once('includes/session.php');
    require_once('includes/conn.php');
    if (isset($_SESSION["usertype"])) 
{
    if ($_SESSION["usertype"] != 1) {
        header("Location:../access-denied.php");
    }
}
    $page = 'business-menu';
    $menu = 'add_bp';
    $sql_n = "SELECT count(business_permit_no) as count FROM business_permit";
    $res_n = mysqli_query($mysqli, $sql_n);
    $res_n = mysqli_fetch_assoc($res_n);

   if ($res_n['count'] >= 1) {
        $last_count = $res_n['count']+1;
    } else {
        $last_count = 1;
    }

    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Writer\Ods;
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BRMS | Issue Business Permit</title>
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
                        <div class="navbar-header" id="sams">
                            <button type="button" id="sidebarCollapse" id="makota" class="btn btn-sam animated tada navbar-btn">
                            <i class="glyphicon glyphicon-align-left"></i>
                            <span>Menu</span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right  samuel">
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
                        $last_count = mysqli_real_escape_string($mysqli,$_POST['clearance_number']);
                        $firstname = mysqli_real_escape_string($mysqli,$_POST['firstname']);
                        $middlename = mysqli_real_escape_string($mysqli,$_POST['middlename']);
                        $lastname = mysqli_real_escape_string($mysqli,$_POST['lastname']);
                        $sex = mysqli_real_escape_string($mysqli,$_POST['sex']);
                        $zone = mysqli_real_escape_string($mysqli,$_POST['zone']);
                        $business_zone = mysqli_real_escape_string($mysqli,$_POST['business-zone']);
                        $ctc = mysqli_real_escape_string($mysqli,$_POST['ctc']);
                        $receipt = mysqli_real_escape_string($mysqli,$_POST['receipt']);
                        $business = mysqli_real_escape_string($mysqli,$_POST['business-name']);
                        $location = mysqli_real_escape_string($mysqli,$_POST['location']);
                        $date_issued = mysqli_real_escape_string($mysqli,$_POST['date_issued']);
                        $created_at = date("d M Y");
                        $today = date("d_M_Y");
                    
                        $age = (date('Y') - date('Y',strtotime($bdate)));
                    
                        $sql_n = "SELECT * FROM residents WHERE lastname ='$lastname' AND firstname ='$firstname' AND middlename='$middlename' AND birthdate='$bdate' AND age='$age' AND sex='$sex'";
                        $res_n = mysqli_query($mysqli, $sql_n); 

                        if(mysqli_num_rows($res_n) > 0){
                            $resident_id = mysqli_fetch_row($res_n);
                            $resident_id = $resident_id[0];
                        }else
                        {
                            $sql = "INSERT INTO residents(lastname,firstname,middlename,birthdate,age,sex,date_registered)VALUES('$lastname','$firstname','$middlename','$age','$sex','$created_at')";
                            $results = mysqli_query($mysqli,$sql);
                            $resident_id = mysqli_insert_id($mysqli);
                        }
                        $sql = "INSERT INTO business_permit (resident_no, business_name, location, date_issued)
                            VALUES('$resident_id','$business','$location','$date_issued')";
                        $results = mysqli_query($mysqli,$sql);

                        if($results==1)
                        { 
                            $permit_number = mysqli_insert_id($mysqli);

                            if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                                //load spreadsheet
                                $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("businessclearance.xlsx");

                                //change it
                                $sheet = $spreadsheet->getActiveSheet();
                                $sheet->setCellValue('H17', $firstname.' '.$middlename.' '.$lastname)->getStyle('B18')->getFont()->setBold(true);
                                $sheet->setCellValue('L13', $permit_number);
                                // $sheet->setCellValue('L18', date('M d Y', strtotime($bdate)));
                                $sheet->setCellValue('E18', $zone);
                                $sheet->setCellValue('D19', $business);
                                $sheet->setCellValue('H19', $location);
                                $sheet->setCellValue('C20', $business_zone);
                                $sheet->setCellValue('J20', date('Y', strtotime($date_issued)));
                                $sheet->setCellValue('D37', $ctc);
                                $sheet->setCellValue('I37', $receipt);
                                // $sheet->setCellValue('D38', $date_issued);
                                $sheet->setCellValue('D39', $date_issued);

                                if (!file_exists('business-permit/'.$resident_id.'_permit')) {
                                    mkdir('business-permit/'.$resident_id.'_permit');
                                }

                                $random = mt_rand();
                                //write it again to Filesystem with the same name (=replace)
                                $file = './business-permit/'.$resident_id.'_permit/'.$resident_id.'_'.$today.'_'.$random.'.xlsx';
                                $writer = new Xlsx($spreadsheet);
                                $writer->save($file);

                                $file_path = 'business-permit/'.$resident_id.'_permit/'.$resident_id.'_'.$today.'_'.$random.'.xlsx';
                            }
                        ?>
                <div class="alert alert-success animated bounce" id="sams1">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong> Successfully! </strong><?php echo'issued clearance';?>
                </div>
                <div class="alert alert-success animated bounce">
                    <p style="color:#fff!important;">Click <a href="<?php echo $file_path ?>"><u>here</u></a> to download the generated file</p>
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
                <div class="panel panel-default sammacmedia">
                    <div class="panel-heading">BRMS | Issue Business Permit</div>
                    <div class="panel-body">
                        <form method="post" action="business-permit-print.php">
                            <div class="row form-group">
                                <div class="col-lg-3">
                                    <label>No.:</label>
                                    <input type="text" class="form-control" name="clearance_number" disabled="" value="<?php echo $last_count; ?>">  
                                    <input type="hidden" name="clearance_no" value="<?php echo $last_count; ?>">
                                </div>
                                <div class="pull-right col-lg-3">
                                    <label>Date Requested</label>
                                    <input type="date" class="form-control" name="date_issued" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-12">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname" required>  
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-12">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control" name="middlename" id="middlename" required>  
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-12">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname" required>  
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-2">
                                    <label>Sex</label>
                                    <select class="form-control" name="sex">
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <label>Zone</label>
                                    <input type="text" class="form-control" name="zone" required>
                                </div>
                                <div class="col-lg-2">
                                    <label>Receipt No.</label>
                                    <input type="text" class="form-control" name="receipt" required>
                                </div>
                                <div class="col-lg-2">
                                    <label>CTC No.</label>
                                    <input type="text" class="form-control" name="ctc" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-12">
                                    <label>Business Name</label>
                                    <input type="text" class="form-control" name="business-name" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-9">
                                    <label>Location</label>
                                    <input type="text" name="location" class="form-control" required>
                                </div>
                                <div class="col-lg-3">
                                    <label>Zone</label>
                                    <input type="text" class="form-control" name="business-zone" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" id="submit-form" name="submit" class="btn btn-suc btn-block"><span class="fa fa-plus"></span> Issue</button>  
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
                        BRMS &copy;<?php echo date("Y ");?> | Ronnel Brosola    
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

            $('sams').on('click', function () {
                $('makota').addClass('animated tada');
            });

            window.setTimeout(function () {
                $("#sams1").fadeTo(1000, 0).slideUp(1000, function () {
                    $(this).remove();
                });
            }, 5000);

            $('.submit-form').on('click', function ()
            {
                console.log($("form").serialize());
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
        });
        </script>
    </body>
</html>

