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
                      @include('patient._form', ['buttonText' => "Add New Patient"])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
