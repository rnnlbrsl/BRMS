<div class="modal fade" id="business-permit<?php echo $row['business_permit_no']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Business Permit Information</h4></center>
                </div>
                <?php
                    $pro=mysqli_query($mysqli,"select * from business_permit where business_permit_no='".$row['business_permit_no']."'");
                    $prow=mysqli_fetch_array($pro);

                    $r_row=mysqli_query($mysqli, "select * from residents where id='".$row['resident_no']."'");
                    $r_row=mysqli_fetch_array($r_row);
                ?>
                <form method="post">
                <div class="modal-body">
	 
                    
                    <div class="row">
                    <div class="col-md-6">
                    <label>Business Permit Number</label> 
                    <input name="business_permit_no" type="text" class="form-control" value="<?php echo $prow['business_permit_no'];?>" readonly>    
                    </div>
                    <div class="col-md-6">
                    <label>Name</label> 
                    <input name="name" type="text" class="form-control" value="<?php echo $r_row['firstname'].' '.$r_row['lastname'];?>" readonly>        
                    </div>    
                    </div>
                     <div class="row">
                    <div class="col-md-6">
                    <label>Business Name</label> 
                    <input name="business_name" type="text" class="form-control" value="<?php echo $prow['business_name'];?>" readonly>    
                    </div>
                    <div class="col-md-6">
                    <label>Location</label> 
                    <input name="location" type="text" class="form-control" value="<?php echo $prow['location'];?>" readonly>        
                    </div>    
                    </div>   
                     <div class="row">
                   <div class="col-md-6">
                    <label>Date Issued</label> 
                    <input name="date_issued" type="text" class="form-control" value="<?php echo $prow['date_issued'];?>" readonly>        
                    </div>
                    </div> 
                 <div class="line"></div>
				</div>
               
				 </form>
            </div>
        </div>
    </div>
