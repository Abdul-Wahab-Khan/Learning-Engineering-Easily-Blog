@extends('layouts/app')


  <section id="hero" style='background-image: url("storage/mainImage/afiiOspXeso7JPjffyyo7FIRG48dwDfebQPdetAy.jpeg")' class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>LEE </h1>
      <h2>The web site for those who wants to <strong color="red">L</strong>earn <strong>E</strong>ngineering <strong>E</strong>asily</h2>
      @if(!Auth::user())
        <a href="/login" class="btn-get-started scrollto">Log In</a>
      @endif
    </div>
  </section><!-- End Hero -->

@section("content")

<main id="main">

  <section id="why-us" class="why-us">
    <div class="container">

        <div class="row">

          <!-- Blog Entries Column -->
          <div class="col-md-8">

            <h1 class="my-4">Engineering
              <small>Posts</small>
            </h1>

            @foreach ($posts as $post)
            <!-- Blog Post -->
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

          </div>

          <!-- Sidebar Widgets Column -->
          <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
              <h5 class="card-header">Search</h5>
              <div class="card-body">
                <form action="/searchPosts" method="POST">
                    @csrf
                    <div class="input-group">
                    <input type="text" class="form-control" name="searchText" placeholder="Search for...">
                    <span class="input-group-append">
                        <input type="submit" value="Search" class="btn btn-dark">
                    </span>
                    </div>
                </form>

              </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-4">
              <h5 class="card-header">Categories</h5>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                      @foreach($categories as $category)
                        <li>
                            <a href="/category/{{$category->id}}">{{$category->name}}</a>
                        </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <h3>Other Posts</h3>
            @foreach($other_posts as $post)
            <!-- Side Widget -->
            <div class="card my-4">
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

        </div>
        <!-- /.row -->

      </div>

  </section><!-- End Why Us Section -->

</main>

  <!-- Footer -->
