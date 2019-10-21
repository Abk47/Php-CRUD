<div class="modal" id="upload-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Upload</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>


            <div class="modal-body">
                <form class="form-group" method="POST" action="upload.php" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="b_file">File</label>
                        <input type="file" class="form-control-file" name="b_file" id="b_file" placeholder="Upload a file" aria-describedby="fileHelpId">
                        <small id="fileHelpId" class="form-text text-muted">Uplaod a book</small>
                    </div>

                    <button class="btn btn-primary" type="submit">Upload</button>
                </form>
            </div>

        </div>
    </div>
</div>