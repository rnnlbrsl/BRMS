<div class="modal fade" id="resolution<?php echo $row['resolution_no']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Resolution_ Information</h4></center>
                </div>
             <?php
					$pro=mysqli_query($mysqli,"select * from resolutions where resolution_no='".$row['resolution_no']."'");
					$prow=mysqli_fetch_array($pro);
				?>
                <form >
                <div class="modal-body">
	 
                    
                    <div class="row">
                    <div class="col-md-12">
                    <label>Official ID</label> 
                    <input name="name" type="text" class="form-control" value="<?php echo $prow['official_id'] ?>" readonly>    
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                    <label>Resolution Details</label> 
                    <textarea disabled="" rows="6" style="width:100%; padding: 10px;"><?php echo $prow['resolution_details'];?></textarea>        
                    </div>    
                    </div>
                     <div class="row">
                    <div class="col-md-12">
                    <label>Date Created</label> 
                    <input name="phone" type="text" class="form-control" value="<?php echo $prow['date_created'];?>" readonly>        
                    </div>    
                    </div>   
                 <div class="line"></div>
				</div>
               
				 </form>
            </div>
        </div>
    </div>
