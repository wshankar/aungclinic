<div class="card">
    <div class="card-header">
      <div class="d-flex align-items-center">
        <h5>Add New Treatment</h5>
      </div>
      <form class="" action="" method="post">
        @csrf
        <div class="form-group">
          <textarea name="treatment" class="form-control" rows="8" placeholder="Prescription..."></textarea>
        </div>
        <div class="row">
          <div class="form-group col-md-8">
            <input type="text" name="fees" placeholder="Fees">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-outline-primary">Save Treatment</button>
          </div>
        </div>
      </form>
    </div>
</div>
