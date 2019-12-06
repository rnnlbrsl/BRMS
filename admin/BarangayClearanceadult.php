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
</head>
<body>
   <div id="printablediv">
            <?php
              $firstname = $_POST['firstname'];
              $middlename = $_POST['middlename'];
              $lastname = $_POST['lastname'];
              $purpose = $_POST['purpose'];
              $ctc = $_POST['ctc'];
              $date_issued = $_POST['date_issued'];

            ?>
            <br>
            <br>
            <p id="lh" style="text-align: center;"> Republic of the Philippines </p>
            <p id="lh" style="text-align: center;"> Province of Pangasinan </p>
            <p id="lh" style="text-align: center;"> City Of Alaminos</p>
            <p id="lh" style="text-align: center;"> Barangay </p>
            <br>
            <br>
            <p id="lh" style="text-align: center;"> OFFICE OF THE PUNONG BARANGAY</p>
            <br>
            <br>
            <p id="lh" style="text-align: center; font-size: 22px;"> <B> Barangay Clearance</B> </p>
            <br>
            <p style="margin-left: 5em; color:#3399FF; "> <b>TO WHOM IT MAY CONCERN: </b></p>
         
            <br>
            <p id="lh" style="margin-left: 10em;"> THIS IS TO <span style=" color: #3399FF;"><b> CERTIFY </span></b> THAT according to the available records kept in </p>

            <p id="lh" style="margin-left: 5em;"> this office, <b><?php echo $firstname.' '.$middlename.' '.$lastname;?></b> of legal age. single/married, Filipino Citizen and a resident </p>
           
            <p id="lh" style="margin-left: 5em;"> of Barangay Bued, City of Alaminos, Pangasinan, whose Community Tax Certificate</p>
            <p id="lh" style="margin-left: 5em;"> Number appearing below has no criminal nor pending case in the Barangay.</p>

            <br>
            <p id="lh" style="margin-left: 10em;"> This is to <span style=" color: #3399FF;"> <b>CERTIFY FURTHER </b> </span> ,that the above-name individual is known to  </p>
            <p id="lh" style="margin-left: 5em;"> me as a person of good moral character, law-abiding citizen and loyal </p>
            <p id="lh" style="margin-left: 5em;"> of the Republic of the Philippines.</p>
            
            <p id="lh" style="margin-left: 10em;"> This <span style=" color: #3399FF;"> <b> BARANGAY CLEARANCE </b> </span> is issued upon his/her request for </p>
            <p id="lh" style="margin-left: 5em;"> <b><?php echo $purpose; ?></b> purposes and any legal matter it may serve.</p>
            
            <br>
            <br>
            <br>
            <br>
            <br>
            <p id="lh" style="margin-left: 28em;"> <b> ENRIQUE C. BIAZON,JR. <b> </p>
            <p id="lh" style="margin-left: 29em;"> <b> Punong Barangay <b></p>
            <br>
            <p id="lh" style="margin-left: 5em;"> ________________________</p>
            <p id="lh" style="margin-left: 7em;">  Applicant Signature</p>
             <p id="lh" style="margin-left: 5em; color:#3399FF; "> Note: Not valid without Barangay Seal</p>
            <p id="lh" style="margin-left: 28em;"> Paid Under </p>

             <p id="lh" style="margin-left: 5em;">  CTC No.  : <?php echo $ctc;?> <span style="margin-left: 
             11em;"></span>O.R. # : _______________</p>
             <p id="lh" style="margin-left: 5em;">  Issue on : <?php echo $date_issued;?>  <span style="margin-left: 
             7em;"></span>Clearance : _______________</p>
             <p id="lh" style="margin-left: 5em;">  Issue at : <?php echo $date_issued;?> <span style="margin-left: 
             7.5em;"></span>DST : _______________</p>
             <p id="lh" style="margin-left: 5em;"> <span style="margin-left: 2.5em;"></span style="margin-left: 
             7em;"> <span style="margin-left: 
             13.5em;"></span>Issued on : _______________</p>


          
            <br>

</body>
</html>