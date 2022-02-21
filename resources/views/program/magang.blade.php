@extends('layouts.main')

@section('content')
  <div class="p-3"></div>
  <h3>Magang</h3>
  <div class="row">

    @foreach ($data as $row)
      <div class="col-md-3">
        <div class="card mb-3 text-center">
          <div class="card-header">
            {{ $row['lokasi'].' - '.$row['category'] }}
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ $row['name'] }}</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-success">Selengkapnya</a>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
      </div>
    @endforeach
    
  </div>
@endsection