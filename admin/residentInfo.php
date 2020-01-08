<div class="modal fade" id="samstrover<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                <form >
                <div class="modal-body">
                    <div class="row">
                    <div class="col-md-6">
                    <label>Name</label> 
                    <input name="name" type="text" class="form-control" value="<?php echo $row['firstname'];?>" readonly>    
                    </div>
                    <div class="col-md-6">
                    <label>Surname</label> 
                    <input name="surname" type="text" class="form-control" value="<?php echo $row['lastname'];?>" readonly>        
                    </div>    
                    </div>
                     <div class="row">
                    <div class="col-md-6">
                    <label>Birth Date</label> 
                    <input name="email" type="text" class="form-control" value="<?php echo $row['birthdate'];?>" readonly>    
                    </div>
                    <div class="col-md-6">
                    <label>Address</label> 
                    <input name="address" type="text" class="form-control" value="<?php echo $row['address'];?>" readonly>        
                    </div>    
                    </div>   
                     <div class="row">
                   <div class="col-md-6">
                    <label>Gender</label> 
                    <input name="gender" type="text" class="form-control" value="<?php echo $row['sex'];?>" readonly>        
                    </div>
                    <div class="col-md-6">
                    <label>Joined Date</label> 
                    <input name="province" type="text" class="form-control" value="<?php echo $row['date_registered'];?>" readonly>    
                    </div>
                    </div> 
                 <div class="line"></div>
				</div>
               
				 </form>
            </div>
        </div>
    </div>
