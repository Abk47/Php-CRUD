<button class="btn btn-sm btn-success" type="submit" data-toggle="modal" data-target="#add-new">CREATE NEW</button>

<!-- The Add New Bookshop Modal -->
<div class="modal" id="add-new">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add New Record</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form class="form-group" method="POST" action="insert.php">
                    <label>Book Title</label>
                    <input type="text" name="btitle" class="form-control" autocomplete="off" required="required">

                    <label>Book Price</label>
                    <input type="text" name="bprice" class="form-control" autocomplete="off" required="required">
                    <br>

                    <button class="btn btn-primary" type="submit">ADD BOOK</button>
                </form>
            </div>

        </div>
    </div>
</div>