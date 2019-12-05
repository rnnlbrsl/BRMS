<div class="modal fade" id="samstrover<?php echo $row['official_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Official Information</h4></center>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <p class="text-center">Official Id: <?php echo $row['official_id'];?></p>
                    <div class="col-md-8">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control" value="<?php echo $row['firstname'];?>" readonly><br>
                        <label>Surname</label> 
                        <input name="surname" type="text" class="form-control" value="<?php echo $row['lastname'];?>" readonly><br>
                        <label>Position</label> 
                        <input name="province" type="text" class="form-control" value="<?php echo $row['position'];?>" readonly>
                    </div>
                    <div class="col-md-4">
                        <a href="#"  class="img-thumbnail">
                           <?php require('officials_pic.php');?> 
                        </a>
                    </div>
                </div>
             <div class="line"></div>
			</div>
        </div>
    </div>
</div>
