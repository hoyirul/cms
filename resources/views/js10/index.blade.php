@extends('layouts.app')

@section('content')
  <div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <a href="{{ route('cetak_pdf') }}" target="_blank" class="btn btn-success mb-3">Cetak PDF</a>

    <table class="table table-bordered">
      <tr>
        <th>Judul</th>
        <th>Konten</th>
        <th>Gambar</th>
      </tr>
      @foreach ($articles as $article)
      <tr>
        <td><a href="{{ route('articles.edit', ['article' => $article->id]) }}">{{ $article->title }}</a></td>
        <td>{{ $article->content }}</td>
        <td><img style="width: 20%" src="{{asset('storage/'.$article->featured_image)}}"></td>
      </tr>
      @endforeach
    </table>
  </div>
@endsection