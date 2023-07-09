<header>
  <nav class="navbar navbar-expand-lg home-nav fixed-top">
    <div class="container px-lg-3">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="../icons/sme-logo.svg" alt="" class="img-fluid"/>
      </a>
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

          @if(Route::is('tools'))
            <li class="nav-item">
              <a class="nav-link active" href="/tools">Tools</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="/tools">Tools</a>
            </li>
          @endif

          @if(Route::is('community'))
            <li class="nav-item">
              <a class="nav-link active" href="/community">Community</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="/community">Community</a>
            </li>
          @endif

          <li class="nav-item dropdan">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Partners</a>
            <ul class="dropdan-menu">
              <li>
                <a class="dropdan-item" href="/getFundedAfrica">Get Funded Africa</a>
              </li>
            </ul>
          </li>
          

        </ul>

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

<style>
.dropdan-menu {
  display: none;
  position: absolute;
  z-index: 1;
}

.dropdan:hover .dropdan-menu {
  display: block;
}
.dropdan-menu li {
  list-style: none;
  color: white;
  padding: 4px 8px;
  background-color: #3068a0;
  border-bottom: 2px solid #f3c358;
}

.dropdan-menu li a {
  text-decoration: none;
}

</style>

<script>
 document.addEventListener("click", function(event) {
  var dropdowns = document.getElementsByClassName("dropdan-menu");
  for (var i = 0; i < dropdowns.length; i++) {
    var dropdown = dropdowns[i];
    if (!dropdown.contains(event.target)) {
      dropdown.style.display = "none";
    }
  }
});

  </script>





