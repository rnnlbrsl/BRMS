<div class="modal fade" id="updatesamstrover<?php echo $row['official_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabelUpdate">Official Information</h4></center>
            </div>
            <div class="modal-body">
                <form action="all_officials.php" method="post" enctype="multipart/form-data">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="hidden" name="update-id" value="true">
                            <label>Official Id</label>
                            <input name="official_id" type="text" class="form-control" value="<?php echo $row['official_id'];?>"><br>
                            <label>Name</label>
                            <input name="firstname" type="text" class="form-control" value="<?php echo $row['firstname'];?>"><br>
                            <label>Surname</label> 
                            <input name="lastname" type="text" class="form-control" value="<?php echo $row['lastname'];?>"><br>
                            <label>Position</label> 
                            <input name="position" type="text" class="form-control" value="<?php echo $row['position'];?>">
                        </div>
                    </div>
                    <div class="line">
                        <input type="submit" name="Update" id="action-update" class="btn btn-danger" value="Update" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
