@extends('layouts.app')
@section('content')
<div class="container">
  <form action="/articles" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="">Title</label>
      <input type="title" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="">Content</label>
      <textarea name="content" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
      <label for="">File</label>
      <input type="file" name="image" class="form-control" required>
    </div>
    
    <div class="mb-3">
      <button type="submit" class="btn btn-primary float-left">simpan</button>
    </div>
  </form>
</div>
@endsection