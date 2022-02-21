@extends('layouts.main')

@section('content')
  <div class="p-3"></div>
  <h3>Detail News</h3>
  <div class="row">

    @foreach ($data as $row)
      <div class="col-md-12">
        <div class="card" style="width: 100%;">
          <img src="{{ $row['img'] }}" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">{{ $row['name'] }}</h5>
            <p class="card-text">{{ $row['detail'] }}</p>
            <a href="/news" class="btn btn-success">Kembali ke Products</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection