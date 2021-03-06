@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h5>Patient List</h5>
                    <div class="ml-auto">
                      <a href="{{ route('patients.create')}}" class="btn btn-outline-secondary">Add New Patient</a>
                    </div>
                  </div>

                </div>

                <div class="card-body">
                    @include('layouts._messages')
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
                        <!-- <div class="patination pagination-sm">
                          {{ $patients->links() }}
                        </div> -->

                        @foreach($patients as $patient)
                            <tr>
                              <td><a href="{{ $patient->user->url }}">{{ $patient->user->name }}</a> </td>
                              <td><a href="{{ $patient->url }}">{{ $patient->name }}</a></td>
                              <td>{{ $patient->age }}</td>
                              <td>{{ $patient->sex }}</td>
                              <td>{{ $patient->address }}</td>
                              <td><strong>{{ $patient->visits }}</strong> {{ str_plural('visit', $patient->visits)}}
                              @can('update', $patient)
                                <a href="{{ route('patients.edit', $patient->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                              @endcan
                              @can('delete', $patient)
                                <form class="form-delete" action="{{ route('patients.destroy', $patient->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are You Sure?')">Del</button>
                                </form>
                              @endcan
                               </td>
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
