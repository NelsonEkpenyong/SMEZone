<header>
  <nav class="navbar navbar-expand-lg home-nav fixed-top">
    <div class="container px-lg-3">
      <a class="navbar-brand" href="{{ url('/') }}"
        ><img src="../icons/sme-logo.svg" alt="" class="img-fluid"
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="bi bi-list"></i>
      </button>
      <div class="collapse navbar-collapse ms-lg-5 ps-lg-5" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-lg-center">
          @if(Route::is('/'))
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
          @endif

          @if(Route::is('courses'))
            <li class="nav-item">
              <a class="nav-link active" href="/courses">Courses</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="/courses">Courses</a>
            </li>
          @endif

          @if(Route::is('events'))
            <li class="nav-item">
              <a class="nav-link active" href="/events">Events</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="/events">Events</a>
            </li>
          @endif

          <li class="nav-item">
            <a class="nav-link" href="/tools.html">Tools</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/community.html">Community</a>
          </li>
        </ul>

        {{-- <form class="d-flex flex-lg-row flex-column gap-3">
          <div class="dropdown">

            @if(Auth::check() == 1 && Auth::user())
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> {{Auth::user()->first_name}} </a>
            @else
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Guest</a>
            @endif

            <ul class="dropdown-menu">
              @if(Auth::check() == 1 && Auth::user())
                <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a> </li>
                <li> <a class="dropdown-item" href="{{ route('login') }}">My Profile</a> </li>

                <form id="logout-form" action="/logout" method="POST" class="d-none">@csrf</form>
              @else
                <li> <a class="dropdown-item" href="{{ route('login') }}">Login</a> </li>
              @endif
            </ul>
          </div>
          <a href="{{ route('register') }}" style="margin-left: 15px">
            <button class="btn" type="button">Sign up</button>
          </a>
        </form> --}}

        <ul class="navbar-nav ms-auto">
          <!-- Authentication Links -->
          @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif
        
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>
        
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
        
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </ul>

      </div>
    </div>
  </nav>
</header>

<div style="padding-top: 60px"></div>





