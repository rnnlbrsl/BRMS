<div class="modal fade" id="blotterupdate<?php echo $row['blotter_no']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Blotter Update</h4></center>
                </div>
             <?php
					$pro=mysqli_query($mysqli,"select * from blotter_record where blotter_no='".$row['blotter_no']."'");
					$prow=mysqli_fetch_array($pro);
				?>
                <form method="post">
                <div class="modal-body">
	 
                    <input type="hidden" name="update_id" value="<?php echo $row['blotter_no']; ?>">
                    <div class="row">
                    <div class="col-md-12">
                    <label>Accused</label> 
                    <input name="accused" type="text" class="form-control" value="<?php echo $prow['accused'];?>" required>        
                    </div>    
                    </div>
                     <div class="row">
                    <div class="col-md-12">
                    <label>Blotter Details</label> 
                    <textarea name="blotter_details" required="" rows="6" style="width:100%; padding: 10px;"><?php echo $prow['blotter_details'];?></textarea>
                    </div>
                    </div>   
                 <div class="line">
                     <input type="submit" name="Update" id="action-update" class="btn btn-danger" value="Update" />
                 </div>
				</div>
               
				 </form>
            </div>
        </div>
    </div>
