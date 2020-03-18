<div class="modal fade" id="delete-contact-modal-<?php echo $index ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $row_data['name']?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="h4-confirmation">Are you sure to delete this contact?</h5>
      </div>
      <div class="modal-footer">
        <form method="POST">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
          <button type="submit" name="delete-btn" value=<?php echo $row_data['id'] ?> class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>