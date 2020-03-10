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
                          <th>Name</th>
                          <th>Age</th>
                          <th>Gender</th>
                          <th>Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        <div class="patination pagination-sm">
                          {{ $patients->links() }}
                        </div>

                        @foreach($patients as $patient)

                            <tr>
                              <td>{{ $patient->name }}</td>
                              <td>{{ $patient->age }}</td>
                              <td>{{ $patient->sex }}</td>
                              <td>{{ $patient->address }}</td>
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
