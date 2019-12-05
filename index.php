<?php 
include("enduser/navbar.php");
require_once('includes/conn.php');
    $res_n = mysqli_query($mysqli, "SELECT * FROM officials");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bued Info System</title>
  <link rel="stylesheet" type="text/css" href="enduser/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
  <style type="text/css">
    .officials img {
  height: 50%!important;
  width: 50%!important;
}
  </style>
</head>

<body>
  <?php echo $header;  ?>
  <div class="container-fluid">
    <br>
    <div class="row">
      <div class="col-lg-3 col-sm-12">
        <div>
          <img src="enduser/img/wew.png" alt="Digong" class="img-thumbnail">
          <div>
            <h3 class="text-center">Enrique C. Biazon Jr.</h3>
            <h4 class="text-center">Barangay Captain</h4>
          </div>
          <div class="text-justify">Welcome!
          It has always been my desire to share with my kabarangays  the programs and activities we have been implementing o inspire you to do more for others in the spirt of public service.
          With the help of modern technology we have today, we thought of putting and try to have a site that can help us and you can be easily informed of what our barangay BUED has done its constituents , whether you are here in BUED, Alaminos City or anywhere in the Philippines.
          We proudly showcase to you our achievements,accomplishments and also Mangrove National Park that we have in our barangay. We salute not only the barangay officials, employees but also all the resident inside and outside of the barangay who heartdly given us a chance and support to make this all happened.
          <br>
          Thankyou and Mabuhay!!
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-sm-12">
        <!-- Content -->
        <div class=""></div>
        <h2>Brief Overview</h2>
        <h6 class="text-justify">
          Once upon a time there were two children digging holes in the ground looking for a spring. Digging deeper, they found different kinds of soil. One of the children shouted, “buer, buer” which means “sand.” A man passed by and uttered the same words but failed to pronounce the letter “r” well. The man said “bued, bued” instead.
        </h6>
        <br>
        <br>
        <h2 class="text-center"> Barangay Officials </h2>
        <br>
            <div class="row clearfix officials">
    <?php while($row=mysqli_fetch_array($res_n)): ?>
      <div class="col-lg-6 col-md-12 col-sm-12 text-center">
        <img src="admin/assets/image/uploads/<?php echo $row['tmp'] ?>">
        <div class="row clearfix">
          <div class="col-sm-12">
            <h2><?php echo $row['position'] ?></h2>
          </div>
        </div>
        <div class="row clearfix">
          <div class="col-sm-12">
            <p><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['lastname'] ?></p>
          </div>
        </div>
      </div>
    <?php endwhile; ?>  
    </div>
      </div>

    </div>
  </div>
  <script type="text/javascript" src="enduser/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>