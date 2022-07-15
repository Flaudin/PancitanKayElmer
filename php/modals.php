<!-- Modal Product Update -->
<div class="modal fade" id="edit<?php echo $row['ID']; ?>" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header bg-success">
        <h5 class="modal-title text-white" id="exampleModalLabel1">Edit Product</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <?php
        $edit=mysqli_query($conn,"SELECT * FROM tblmenu WHERE ID='".$row['ID']."'");
        $erow=mysqli_fetch_array($edit);
        ?>
        <form method="POST" action="update.php?id=<?php echo $erow['ID'];?>">
        <input type="text" name="id" id="ID" value="<?php echo $erow['ID'] ?>">
        <h6 class="text-gray-800 mt-2"> Upload Product Image.</h6>
        <input type="file" class="mb-2" id="file" name="upimage" value="" required>
        <img src="" alt="Product">
        <h6 class="text-gray-800"> Product Name</h6>
        <input type="text" placeholder="Title" class="mb-2" id="upprodname" name="upprodname" value="" required>
        <h6 class="text-gray-800"> Details</h6>
        <input type="text" placeholder="Details" class="mb-2" id="updetails" name="updetails" value="" required>
        <h6 class="text-gray-800"> Price</h6>
        <input type="number" placeholder="0.00" id="price" name="upprice" value="" required>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" onclick="validate()" id="EDIT" value="EDIT" name="EDIT">Save changes</button>
            </div>
        </div>
    </div>
</div>  
</form>


<!--Modal Delete Product-->
<div class="modal fade" id="del<?php echo $row['ID']?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="exampleModalLabel2">Edit Product</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                $del = mysqli_query($conn,"DELETE FROM tblmenu WHERE ID='".$row['ID']."'");
                $drow = mysqli_fetch_array($del);
                ?>
                <h6 class="text-gray-800"> Are you sure you want to delete?<?php echo ucwords($drow['Product_name'].' '.$row['images']);?></h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                <a href="delete.php?id=<?php echo $row['ID']; ?>" class="btn btn-primary deletebtn" id="submit" value="Delete" name="buttondel">Yes</a>
            </div>
        </div>
    </div>
</div>