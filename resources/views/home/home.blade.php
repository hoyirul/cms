@extends('layouts.main')

@section('content')
  <div class="p-3"></div>
  <div class="jumbotron">
    <h1 class="display-4">Halo, Selamat Datang di LOOKIT!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
  </div>
  
  <div class="p-3"></div>
  <div class="row">

    <div class="col-md-3">
      <div class="card">
        <h5 class="card-header">Featured</h5>
        <div class="card-body">
          <h5 class="card-title">Products</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <h5 class="card-header">Featured</h5>
        <div class="card-body">
          <h5 class="card-title">News</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <h5 class="card-header">Featured</h5>
        <div class="card-body">
          <h5 class="card-title">Program</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <h5 class="card-header">Featured</h5>
        <div class="card-body">
          <h5 class="card-title">About</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-success">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
@endsection