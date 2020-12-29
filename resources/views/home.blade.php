@extends('layouts/app')
@section('content')
<div class="card">
    <div class="card-title">Progress</div>
    <div class="card-body">
        <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
          </div>
          <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
          </div>

          <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
          </div>
          <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%</div>
          </div>

    </div>
</div>
@endsection