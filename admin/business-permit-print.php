<!DOCTYPE html>
<html>
<head>
	<title></title>
      <style type="text/css">
            #lh{
                  line-height: 2px;
            }
            *{
                  font-family: calibri;
            }
      </style>
      <script type="text/javascript">
      	function printfunction()
      	{
      		window.print();
      	}
      </script>
</head>
<body onload="printfunction()">
   <div id="printablediv">
            <?php
              $last_count = $_POST['clearance_no'];
              $data_issued = $_POST['date_issued'];
              $firstname = $_POST['firstname'];
              $middlename = $_POST['middlename'];
              $lastname = $_POST['lastname'];
              $zone = $_POST['zone'];
              $ctc = $_POST['ctc'];
              $receipt = $_POST['receipt'];
              $business_name = $_POST['business-name'];
              $location = $_POST['location'];
              $business_zone = $_POST['business-zone'];
            ?>
            <br>
            <br>
            <p id="lh" style="text-align: center;"> Republic of the Philippines </p>
            <p id="lh" style="text-align: center;"> Province of Pangasinan </p>
            <p id="lh" style="text-align: center;"> City Of Alaminos</p>
            <p id="lh" style="text-align: center;"> Barangay BUED</p>
            <br>
            <br>
            <p id="lh" style="text-align: center;"> OFFICE OF THE PUNONG BARANGAY</p>
            <br>
            <br>
            <p id="lh" style="text-align: center; font-size: 18px;"> <B> Barangay Business Clearance </B> </p>
            <p style="float: right; margin-right: 6em;">No. <?php echo $last_count; ?></p>
            <br>
            <p style="margin-left: 5em;"> TO WHOM IT MAY CONCERN: </p>
        	<br>
            <p id="lh" style="margin-left: 10em;"><b> Business Clearance</b> is hereby granted to <b><?php echo $firstname.' '.$middlename.' '.$lastname;?></b>,
            <p id="lh" style="margin-left: 6em;"> of zone <?php echo $zone;?>, Barangay of Bued, Alaminos City, Pangasinan, to operate </p>
            <p id="lh" style="margin-left: 6em;"> a <?php echo $business_name;?> located at <?php echo $location;?>, (Zone <?php echo $zone;?>) , Barangay Bued, Alaminos City,  </p>
            <p id="lh" style="margin-left: 5em;"> Pangasinan for <b> Calendar Year 2018 </b>.</p>
            <br>
            <p id="lh" style="margin-left: 10em;"> This <b> BUSINESS CLEARANCE </b> is, however, subject to the provision of existing</p>
            <p id="lh" style="margin-left: 5em;"> laws, ordinances, rules and regulations partinent to the same and maybe revoked at
            <p id="lh" style="margin-left: 5em;">  any time during the Calendar Year stated. </p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p id="lh" style="margin-left: 28em;">  ENRIQUE C. BIAZON,JR. </p>
            <p id="lh" style="margin-left: 29em;">  Punong Barangay </p>
            <br>
             <p id="lh" style="margin-left: 5em; color:#3399FF; "> Note: This Business Clearance is valid only if Baranagay Taxes and other fees are paid.</p>
             <br>

             <br>
             <p id="lh" style="margin-left: 5em;">  CTC No.  : <?php echo $ctc;?></p>
             <p id="lh" style="margin-left: 5em;">  Issue at : <?php echo $data_issued;?></p>
             <p id="lh" style="margin-left: 5em;">  Issue on : <?php echo $data_issued;?></p>
            <br>

</body>
</html>