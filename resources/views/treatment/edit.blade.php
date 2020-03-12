@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h5>Edit Treatment</h5>
                    <div class="ml-auto">
                      <a href="{{ route('patients.show')}}" class="btn btn-outline-secondary">Back to Patient Details</a>
                    </div>
                  </div>
                </div>
                <div class="card">
                    <div class="card-header">
                      <div class="d-flex align-items-center">
                        <h5>Add New Treatment</h5>
                      </div>
                    </div>
                    <div class="card-body">
                      <form class="" action="{{ route('patients.treatment.update', [$patient->id, $visit-id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <textarea name="treatment" value="{{ old('treatment', $treatment->treatment)}}" class="form-control {{ $errors->has('treatment') ? 'is-invalid' : ''}}" rows="8" placeholder="Prescription..."></textarea>

                          @if ($errors->has('treatment'))
                            <div class="invalid-feedback">
                              <strong>{{ $errors->first('treatment') }}</strong>
                            </div>
                          @endif
                        </div>
                        <div class="row">
                          <div class="form-group col-md-8">
                            <input type="text" name="fees" value="{{ old('fees', $treatment->fees)}} placeholder="Fees" class="form-control  {{ $errors->has('fees') ? 'is-invalid' : ''}}">

                            @if ($errors->has('fees'))
                              <div class="invalid-feedback">
                                <strong>{{ $errors->first('fees') }}</strong>
                              </div>
                            @endif
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary">Update Treatment</button>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
