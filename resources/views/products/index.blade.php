@extends('layouts.main')

@section('content')
  <div class="p-3"></div>
  <h3>Products</h3>
  <div class="row">

    @foreach ($data as $row)
      <div class="col-md-3">
        <div class="card" style="width: 100%;">
          <img style="height: 150px" src="{{ $row['img'] }}" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">{{ $row['name'] }}</h5>
            <p class="card-text">{{ substr($row['detail'], 0, 100) }}</p>
            <a href="/products/detail/{{ $row['name'] }}" class="btn btn-success">Detail Products</a>
          </div>
        </div>
      </div>
    @endforeach
    
  </div>
@endsection