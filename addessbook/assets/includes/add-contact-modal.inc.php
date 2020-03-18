<div class="modal fade" id="add-contact-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Contact?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-sm-12 col-md-12 col-lg-12">
              <label for="contact-name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" name="contact-name" id="contact-name" placeholder="John Doe" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-sm-12 col-md-12 col-lg-12">
              <label for="contact-number" class="col-form-label">Phone Number:</label>
              <input type="number" min="0" class="form-control" name="contact-number" id="contact-number" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-sm-12 col-md-12 col-lg-12">
              <label for="contact-email" class="col-form-label">Email:</label>
              <input type="email" name="contact-email" class="form-control" id="contact-email" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="add-btn" class="btn btn-success">Save changes</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>