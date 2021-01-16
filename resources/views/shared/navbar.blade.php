 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        {{ link_to_route('home', config('app.name', 'Engineering'), [], ['class' => 'navbar-brand text-success']) }}

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        @admin
            <ul class="navbar-nav">
                <li class="nav-item">
                    {{ link_to_route('admin.dashboard', __('dashboard.dashboard'), [], ['class' => 'nav-link text-info']) }}
                </li>
            </ul>
        @endadmin
        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">{{ link_to_route('login', __('auth.login'), [], ['class' => 'nav-link text-danger']) }}</li>
                <li class="nav-item">{{ link_to_route('register', __('auth.register'), [], ['class' => 'nav-link text-danger']) }}</li>
            @else
                <li class="nav-item dropdown">
                    <a v-pre href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        {{ link_to_route('users.show', __('users.public_profile'), Auth::user(), ['class' => 'dropdown-item']) }}
                        {{ link_to_route('users.edit', __('users.settings'), [], ['class' => 'dropdown-item']) }}

                        <div class="dropdown-divider"></div>

                        <a href="{{ url('/logout') }}"
                            class="dropdown-item"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            @lang('auth.logout')
                        </a>

                        <form id="logout-form" class="d-none" action="{{ url('/logout') }}" method="POST">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>

