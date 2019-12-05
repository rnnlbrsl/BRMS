<div class="modal fade" id="blotter<?php echo $row['blotter_no']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Blotter Information</h4></center>
                </div>
             <?php
					$pro=mysqli_query($mysqli,"select * from blotter_record where blotter_no='".$row['blotter_no']."'");
					$prow=mysqli_fetch_array($pro);

                    $r_row=mysqli_query($mysqli, "select * from residents where id='".$row['resident_no']."'");
                    $r_row=mysqli_fetch_array($r_row);
				?>
                <form >
                <div class="modal-body">
	 
                    
                    <div class="row">
                    <div class="col-md-12">
                    <label>Resident Name</label> 
                    <input name="name" type="text" class="form-control" value="<?php echo $r_row['firstname'].' '.$r_row['lastname'];?>" readonly>    
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                    <label>Accused</label> 
                    <input name="surname" type="text" class="form-control" value="<?php echo $prow['accused'];?>" readonly>        
                    </div>    
                    </div>
                     <div class="row">
                    <div class="col-md-12">
                    <label>Details</label> 
                    <textarea disabled="" rows="6" style="width:100%; padding: 10px;"><?php echo $prow['blotter_details'];?></textarea>
                    </div>
                    <div class="col-md-6">
                    <label>Date Reported</label> 
                    <input name="phone" type="text" class="form-control" value="<?php echo $prow['blotter_date'];?>" readonly>        
                    </div>    
                    </div>   
                 <div class="line"></div>
				</div>
               
				 </form>
            </div>
        </div>
    </div>
