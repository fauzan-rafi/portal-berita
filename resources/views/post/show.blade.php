@extends('layouts.app')

@section('title',$post->title)

@section('content')
<div class="container">
      <h2>
            {{ $post->title  }}
      </h2>

      <p>
            {{ $post->body}}
      </p>

      <div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-link text-danger btn-sm p-0" data-toggle="modal" data-target="#exampleModal">
                  Destroy
            </button>

      </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah yakin ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <div class="modal-body">
                        <div class="mb-3">
                              <div>{{ $post->title }}</div>
                              <div class="text-secondary">
                                    <small>
                                          Published : {{ $post->created_at->format("d F, Y") }}
                                    </small>
                              </div>
                        </div>
                        <form action="/posts/{{ $post->slug }}/delete" method="post">
                              @csrf
                              @method('delete')
                              <div class="d-flex">
                                    <button class="btn btn-danger mr-2" type="submit"> Ya </button>
                                    <button type="button" class="btn btn-success " data-dismiss="modal">Tidak</button>

                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>

@endsection