  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light">
              <a href="/" class="navbar-brand">
            <span>{{config('app.name', 'Engineering')}}</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
              @admin
                    <li class="active">
                        {{ link_to_route('admin.dashboard', __('dashboard.dashboard'), [], ['class' => 'nav-link text-info']) }}
                    </li>
                @endadmin
                @guest

                @else
                    <li class="drop-down"><a href="#">Options</a>
                    <ul>
                      <li><h5 class="text-center">{{ Auth::user()->name }}</h5></li>

                      <li>
                          {{ link_to_route('users.show', __('users.public_profile'), Auth::user(), ['class' => 'dropdown-item']) }}
                      </li>
                      <li>
                        {{ link_to_route('users.edit', __('users.settings'), [], ['class' => 'dropdown-item']) }}
                      </li>

                      <div class="dropdown-divider"></div>
                    </ul>
                  </li>
                @endguest

                <li class="drop-down"><a href="#">Categories</a>
                    <ul>
                        @foreach($categories as $category)
                            <li>
                                <a href="/category/{{$category->id}}" class="dropdown-item">{{$category->name}}</a>
                            </li>
                            <div class="dropdown-divider"></div>
                        @endforeach
                    </ul>
                  </li>

            <li><a href="/about">About</a></li>
            <li><a href="/services">Services</a></li>

            <li><a href="/contact">Contact</a></li>

            @if(Auth::user() == null)
                <li class="get-started"><a href="/login">Log In</a></li>
            @else
                <li class="get-started">
                    <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        @lang('auth.logout')
                    </a>

                    <form id="logout-form" class="d-none" action="{{ url('/logout') }}" method="POST">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endif
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->
