@extends('layouts.basic')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>This is Home</h1>
        @foreach($posts as $post)
          <article>
          <h2>{{ $post->title }}</h2>
          <p>{{ $post->content }}</p>
          </article>
        @endforeach

    </div>
  </div>
@stop
