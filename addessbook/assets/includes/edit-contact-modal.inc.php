<div class="modal fade" id="edit-contact-modal-<?php echo $index?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Data of <?php echo $row_data['name']?>?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-sm-12 col-md-12 col-lg-12">
              <label for="contact-name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" name="contact-name" id="contact-name" placeholder="John Doe" value="<?php echo $row_data['name']?>" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-sm-12 col-md-12 col-lg-12">
              <label for="contact-number" class="col-form-label">Phone Number:</label>
              <input type="tel" pattern="[0-9\-]+" class="form-control" name="contact-number" id="contact-number" value="<?php echo $row_data['phone']?>" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-sm-12 col-md-12 col-lg-12">
              <label for="contact-email" class="col-form-label">Email:</label>
              <input type="email" name="contact-email" class="form-control" id="contact-email" value="<?php echo $row_data['email']?>" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" name="update-btn" value="<?php echo $row_data['id']?>"" class="btn btn-success">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>