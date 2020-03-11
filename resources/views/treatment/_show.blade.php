<div class="card">
    <div class="card-header">
      <div class="d-flex align-items-center">
        <h5>{{$patient->name}}</h5>
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
      <h4>{{ $patient->visits ." " .str_plural('Previous Record', $patient->visits)}}</h4>
    </div>
    <div class="card-body">
      @foreach ($visits as $visit)
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
