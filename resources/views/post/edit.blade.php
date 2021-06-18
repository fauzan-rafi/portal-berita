@extends('layouts.app',['title' => 'Edit data'])


@section('content')
<div class="container">
      <div class="row">
            <div class="col-md-6">
                  <!-- @include('alert') -->
                  <div class="card">
                        <div class="card-header">Edit data {{ $post->title }} </div>
                        <div class="card-body">
                              <form action="/posts/{{ $post->slug }}/edit" method="post">
                                    @method('patch')
                                    @csrf
                                    @include('post.partial.form')
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</div>
@stop