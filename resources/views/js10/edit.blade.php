@extends('layouts.app')
@section('content')
<div class="container">
  <form action="/articles/{{ $article->id }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="">Title</label>
      <input type="title" name="title" class="form-control" required value="{{ $article->title }}">
    </div>
    <div class="mb-3">
      <label for="">Content</label>
      <textarea name="content" class="form-control" required>{{ $article->content }}</textarea>
    </div>
    <div class="mb-3">
      <label for="">File</label>
      <input type="file" name="image" class="form-control" required value="{{ $article->featured_image }}">
      <img style="width: 10%" src="{{ asset('./storage/'. $article->featured_image) }}" alt="">
    </div>
    
    <div class="mb-3">
      <button type="submit" class="btn btn-primary float-end">Ubah Data</button>
    </div>
  </form>
</div>
@endsection