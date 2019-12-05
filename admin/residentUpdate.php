<div class="modal fade" id="updatesamstrover<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Resident Information</h4></center>
                </div>
				<div class="row">
                     <p class="text-center">Resident Id: <?php echo $row['id'];?></p>
                    <div class="col-md-4">
                    </div>
                    <!-- <div class="col-md-4 text-center">
                        <a href="#"  class="img-thumbnail">
                           <?php //require('propic.php');?> 
                        </a>
                        </div> -->
                     <div class="col-md-4"></div>
                </div>
                <form method="post">
                <div class="modal-body">
	 
                    <input type="hidden" value="<?php echo $row['id'];?>" name="update_id">
                    <div class="row">
                        <div class="col-md-12">
                            <label>First Name</label> 
                            <input name="firstname" type="text" class="form-control" value="<?php echo $row['firstname'];?>">  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Middle Name</label> 
                            <input name="middlename" type="text" class="form-control" value="<?php echo $row['middlename'];?>">
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Last Name</label> 
                            <input name="lastname" type="text" class="form-control" value="<?php echo $row['lastname'];?>">
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Birth Date</label> 
                            <input name="bdate" type="date" class="form-control" value="<?php echo $row['birthdate'];?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Address</label> 
                            <input name="address" type="text" class="form-control" value="<?php echo $row['address'];?>">
                        </div>    
                    </div>   
                    <div class="row">
                        <div class="col-md-12">
                            <label>Gender</label> 
                            <input name="gender" type="text" class="form-control" value="<?php echo $row['sex'];?>">
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
