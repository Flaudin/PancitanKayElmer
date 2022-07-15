
<!--Modal Product-->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-gray-900" id="exampleModalLabel">Add new Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="insert.php">
                    <h6 class="text-gray-800"> Upload Product Image.</h6>
                    <input type="file" class="mb-2" id="image" name="image" required>
                    <img src="" alt="Product">
                    <h6 class="text-gray-800"> Product Name</h6>
                    <input type="text" placeholder="Title" class="mb-2" id="prodid" name="proname" required>
                    <h6 class="text-gray-800"> Details</h6>
                    <input type="text" placeholder="Details" class="mb-2" id="details" name="details" required>
                    <h6 class="text-gray-800"> Price</h6>
                    <input type="number" placeholder="0.00" id="price" name="price" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="validate()" id="submit" value="Submit" name="Submit">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
