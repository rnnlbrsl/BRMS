<!DOCTYPE html>
<html>
<head>
	<title></title>
      <style type="text/css">
            @page 
            {
                  size:  auto;   /* auto is the initial value */
                  margin: 0mm;  /* this affects the margin in the printer settings */
            }
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
            $firstname = $_POST['firstname'];
            $middlename = $_POST['middlename'];
            $lastname = $_POST['lastname'];
            $bdate = $_POST['bdate'];
            $zone = $_POST['zone'];
            $civil_status = $_POST['civilstatus'];
            $purpose = $_POST['purpose'];
            $datetime = $_POST['date_issued'];
            $age = (date('Y') - date('Y',strtotime($bdate)));
            $month = date('F', strtotime($datetime));
            $date = date('jS', strtotime($datetime));
            $year = date('Y', strtotime($datetime));
            $bdate = date('M. j, Y', strtotime($_POST['bdate']));

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
            <p id="lh" style="text-align: center; font-size: 22px;"> <B> Barangay Clearance</B> </p>
            <br>
            <p style="margin-left: 5em; "> <b>TO WHOM IT MAY CONCERN: </b></p>
         
            <br>
            <p id="lh" style="margin-left: 10em;"> THIS IS TO <b> CERTIFY THAT </b> according to the available records kept in </p>

            <p id="lh" style="margin-left: 5em;"> this office, <b><?php echo $firstname.' '.$middlename.' '.$lastname;?></b>, <b><?php echo $age;?></b> years old (born<?php echo ' '.$bdate;?>), <?php echo $civil_status ?>, Filipino citizen  </p>
           
            <p id="lh" style="margin-left: 5em;"> and a resident of Barangay Bued<?php if($zone){ echo ", (Zone '.$zone.')"; }?>, City of Alaminos, Pangasinan, has no </p>
            <p id="lh" style="margin-left: 5em;">  criminal nor pending case in the Barangay.</p>
             

            <br>
            <p id="lh" style="margin-left: 10em;"> This is to <b>CERTIFY FURTHER </b> </span> ,that the above-name individual is known to  </p>
            <p id="lh" style="margin-left: 5em;"> me as a person of good moral character, law-abiding citizen and loyal  of the</p>
            <p id="lh" style="margin-left: 5em;"> Republic of the Philippines.</p>
            <br>
            <p id="lh" style="margin-left: 10em;"> This <b> CLEARANCE </b> is issued upon his/her request of <?php echo $purpose;?> </p>
            
            
             <p id="lh" style="margin-left: 5em;">  purposes. Issue this <b><?php echo $date;?></b> day of <b><?php echo $month;?></b>, <b><?php echo $year;?></b> at Barangay Bued, 
             <p id="lh" style="margin-left: 5em;"> Alaminos City, Pangasinan. </p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p id="lh" style="margin-left: 28em;"> <b> ENRIQUE C. BIAZON,JR. <b> </p>
            <p id="lh" style="margin-left: 29em;"> <b> Punong Barangay <b></p>
            <br>
            <br>
            <p id="lh" style="margin-left: 5em;"> ________________________</p>
            <p id="lh" style="margin-left: 7em;">  Applicant's Signature</p>
          
</body>
</html>