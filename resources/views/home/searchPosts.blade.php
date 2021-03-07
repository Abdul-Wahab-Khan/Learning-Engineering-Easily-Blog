@extends('layouts.app')

@section('content')

<section id="why-us" class="why-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
                @if(count($posts) != 0)
                    @foreach ($posts as $post)
                      <div class="card mb-4">
                        <img class="card-img-top" src="{{$post->thumbnail->getUrl()}}" alt="Post image">
                        <div class="card-body">
                          <h2 class="card-title">{{$post->title}}</h2>
                          <p class="card-text">{{substr(strip_tags($post->content), 0, 100)}} ...</p>
                          <a href="{{ route('posts.show', $post)}}" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                          {{$post->posted_at->diffForHumans()}}
                        </div>
                      </div>
                    @endforeach
                @else
                    <div class="alert alert-danger">
                        No posts found
                    </div>
                @endif
            </div><!-- End .content-->
          </div>
        </div>
        <br>
        <div class="pagination">{{$posts->links()}}</div>
      </div>
    </section>

@endsection
