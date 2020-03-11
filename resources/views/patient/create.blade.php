@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h5>Add New Patient</h5>
                    <div class="ml-auto">
                      <a href="{{ route('patients.index')}}" class="btn btn-outline-secondary">Back to Patient List</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <form class="" action="{{ route('patients.store')}}" method="post">
                       @csrf
                      <div class="row">
                          <div class="form-group col-md-4">
                            <input type="text" name="name" id="patient-name" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" placeholder="Name">

                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                  <strong>{{ $errors->first('name') }}</strong>
                                </div>
                            @endif
                          </div>
                          <div class="form-group col-md-2">
                            <input type="text" name="age" id="patient-age" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" placeholder="Age">

                            @if ($errors->has('age'))
                                <div class="invalid-feedback">
                                  <strong>{{ $errors->first('age') }}</strong>
                                </div>
                            @endif
                          </div>
                          <div class="form-group col-md-2">
                            <input type="text" name="sex" id="patient-sex" class="form-control {{ $errors->has('sex') ? 'is-invalid' : ''}}" placeholder="Gender">

                            @if ($errors->has('sex'))
                                <div class="invalid-feedback">
                                  <strong>{{ $errors->first('sex') }}</strong>
                                </div>
                            @endif
                          </div>
                          <div class="form-group col-md-4">
                            <input type="text" name="address" id="patient-address" class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}" placeholder="Address">

                            @if ($errors->has('address'))
                                <div class="invalid-feedback">
                                  <strong>{{ $errors->first('address') }}</strong>
                                </div>
                            @endif
                          </div>
                          <div class="form-group col-md-4">
                            <button type="submit" class="btn btn-outline-primary btn-lg">Add Patient</button>
                          </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
