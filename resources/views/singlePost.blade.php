@extends('layouts.basic')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <article class="">
        <h1>{{ $post->title }}</h1>
        <p> {{ $post->content }} </p>
      </article>
    </div>
  </div>
@stop
