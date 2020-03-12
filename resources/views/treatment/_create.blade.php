<div class="card">
    <div class="card-header">
      <div class="d-flex align-items-center">
        <h5>Add New Treatment</h5>
      </div>
    </div>
    <div class="card-body">
      <form class="" action="{{ route('patients.treatment.store', $patient->id) }}" method="post">
        @csrf
        <div class="form-group">
          <textarea name="treatment" class="form-control {{ $errors->has('treatment') ? 'is-invalid' : ''}}" rows="8" placeholder="Prescription..."></textarea>

          @if ($errors->has('treatment'))
            <div class="invalid-feedback">
              <strong>{{ $errors->first('treatment') }}</strong>
            </div>
          @endif
        </div>
        <div class="row">
          <div class="form-group col-md-8">
            <input type="text" name="fees" placeholder="Fees" class="form-control  {{ $errors->has('fees') ? 'is-invalid' : ''}}">

            @if ($errors->has('fees'))
              <div class="invalid-feedback">
                <strong>{{ $errors->first('fees') }}</strong>
              </div>
            @endif
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-outline-primary">Save Treatment</button>
          </div>
        </div>
      </form>
    </div>
</div>
