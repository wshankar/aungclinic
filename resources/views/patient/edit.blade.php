@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h5>Edit Patient</h5>
                    <div class="ml-auto">
                      <a href="{{ route('patients.index')}}" class="btn btn-outline-secondary">Back to Patient List</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <form class="" action="{{ route('patients.update', $patient->id)}}" method="post">
                      {{ method_field('PUT') }}
                      @include('patient._form', ['buttonText' => "Update Patient Info"])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
