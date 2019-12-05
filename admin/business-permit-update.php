<div class="modal fade" id="business-permitupdate<?php echo $row['business_permit_no']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Business Permit Update</h4></center>
                </div>
                <?php
                    $pro=mysqli_query($mysqli,"select * from business_permit where business_permit_no='".$row['business_permit_no']."'");
                    $prow=mysqli_fetch_array($pro);

                    $r_row=mysqli_query($mysqli, "select * from residents where id='".$row['resident_no']."'");
                    $r_row=mysqli_fetch_array($r_row);
                ?>
                <form method="post">
                <div class="modal-body">
	 
                    <input type="hidden" name="update_id" value="<?php echo $row['business_permit_no']; ?>">
                     <div class="row">
                    <div class="col-md-12">
                    <label>Business Name</label> 
                    <input name="business_name" type="text" class="form-control" value="<?php echo $prow['business_name'];?>" required>    
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                    <label>Location</label> 
                    <input name="location" type="text" class="form-control" value="<?php echo $prow['location'];?>" required>        
                    </div>    
                    </div>   
                 <div class="line">
                     <input type="submit" name="Update" id="action-update" class="btn btn-danger" value="Update" />
                 </div>
                    </div>
				</div>
               
				 </form>
            </div>
        </div>
    </div>
