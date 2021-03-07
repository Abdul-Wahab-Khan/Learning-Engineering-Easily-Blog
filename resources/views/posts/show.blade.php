@extends('layouts.app')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li>{{$post->title}}</li>

          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container" data-aos="fade-up" data-aos-delay="100">

            @if($post->hasThumbnail())
            <div class="owl-carousel portfolio-details-carousel">
                <img src="{{$post->thumbnail->getUrl()}}" class="img-fluid" alt="">
            </div>
            @endif

        </div>

        <div class="portfolio-description">
          <h2>{{$post->title}}</h2>
          <p>
            {!!$post->content!!}
          </p>
        </div>


        <div>
            <h3>Post information</h3>
            <ul style="list-style-type: none;">
              <li><strong>Category</strong>: {{$post->post_type}}</li>
              <li><strong>Post date</strong>: {{humanize_date($post->posted_at)}}</li>
              <li><h3><strong>Like Here</strong>:
                    <like
                      :likes-count="{{ $post->likes_count }}"
                      :liked="{{ json_encode($post->isLiked()) }}"
                      :item-id="{{ $post->id }}"
                      item-type="posts"
                      :logged-in="{{ json_encode(Auth::check()) }}"
                    />
                    </h3>
                </li>
            </ul>
          </div>


      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  @include ('comments/_list')
  <br />
  <hr />
  <h3>Other Posts</h3>
    <div class="row">
        @foreach($other_posts as $post)
        <!-- Side Widget -->
        <div class="card my-4 col-md-3 m-4">
            <h5 class="card-header">{{$post->title}}</h5>
            <div class="card-body">
            <a href="{{ route('posts.show', $post)}}" class="card-text">
                <img class="card-img" src="{{$post->thumbnail->getUrl()}}" alt="Post image">
                {{substr(strip_tags($post->content), 0, 100)}} ...
            </a>
            </div>
        </div>
        @endforeach
    </div>

@endsection
