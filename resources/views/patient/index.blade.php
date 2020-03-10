@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Patient List</div>

                <div class="card-body">
                    <table class="table table-hover table-bordered">
                      <thead class="thead-dark">
                        <tr>
                          <th>Doctor</th>
                          <th>Name</th>
                          <th>Age</th>
                          <th>Gender</th>
                          <th>Address</th>
                          <th>Visits</th>
                        </tr>
                      </thead>
                      <tbody>
                        <div class="patination pagination-sm">
                          {{ $patients->links() }}
                        </div>

                        @foreach($patients as $patient)

                            <div class="d-flex flex-column counters">
                              <div class="visit">

                              </div>
                            </div>
                            <tr>
                              <td><a href="{{ $patient->user->url }}">{{ $patient->user->name }}</a> </td>
                              <td><a href="{{ $patient->url }}">{{ $patient->name }}</a></td>
                              <td>{{ $patient->age }}</td>
                              <td>{{ $patient->sex }}</td>
                              <td>{{ $patient->address }}</td>
                              <td><strong>{{ $patient->visits }}</strong> {{ str_plural('visit', $patient->visits)}}</td>
                            </tr>
                        @endforeach

                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
