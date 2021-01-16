@extends('layouts/app')

<header class="masthead" style="background-image: url('{{asset("img/about-bg.jpg")}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>LEE</h1>
            <span class="subheading">Learn Engineering Easily</span>
          </div>
        </div>
      </div>
    </div>
  </header>

@section("content")


  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        @foreach ($posts as $post)
            <div class="post-preview row">
                <div class="col-md-2">
                    @if ($post->hasThumbnail())
                        <a href="{{ route('posts.show', $post)}}">
                        {{ Html::image($post->thumbnail->getUrl('thumb'), $post->thumbnail->name, ['class' => 'card-img-top']) }}
                        </a>
                    @endif
                </div>
                <div class="col-md-*">
                    <a href="{{ route('posts.show', $post)}}" style="text-decoration: none">
                        <h2 class="post-title">
                            {{$post->title}}
                        </h2>
                        <h5 class="post-subtitle">
                           {!! substr($post->content, 0, 100) !!} ...
                        </h5>
                        </a>
                        <p class="post-meta">Posted by
                        <a href="#">{{$post->author->name}}</a>
                        on {{$post->posted_at}}</p>
                </div>
            </div>
            <hr>
        @endforeach

        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>
  @endsection
  <!-- Footer -->


  {{-- <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
