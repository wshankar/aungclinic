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
                <div class="card-header">
                  <h3>{{ $patient->visits ." " .str_plural('visit', $patient->visits)}}</h3>
                </div>
                <div class="card-body">
                  @foreach ($patient->treatments as $visit)
                      <div class="media">
                        <div class="media-body">
                          <p>{{ $visit->treatment }}</p>
                          <div class="float-left">
                            <span class="text-muted">{{ $visit->fees }} Kyats</span>
                          </div>
                          <div class="float-right">
                            <span class="text-muted">Last Vitsit {{$visit->created_date}}</span>
                          </div>
                        </div>
                      </div>
                      <hr>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
