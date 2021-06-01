@extends('layouts.app',['title' => 'New Post'])


@section('content')
<div class="container">
      <div class="row">
            <div class="col-md-6">
                  <!-- @include('alert') -->
                  <div class="card">
                        <div class="card-header">New Post</div>
                        <div class="card-body">
                              <form action="/posts/store" method="post">
                                    @csrf
                                    @include('post.partial.form',['submit' => 'Insert'])

                              </form>
                        </div>
                  </div>
            </div>
      </div>
</div>
@stop