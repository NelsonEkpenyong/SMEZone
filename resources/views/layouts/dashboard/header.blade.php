<header class="dashboard">
 <nav class="navbar navbar-expand-lg home-nav fixed-top">
   <div class="container px-lg-3 justify-content-between">
     <a class="navbar-brand col-auto" href="/"><img src="{{asset('icons/sme-logo.svg')}}" alt="" class="img-fluid"/>
     </a>

     <button
       class="navbar-toggler position-absolute"
       type="button"
       data-bs-toggle="offcanvas"
       data-bs-target="#offcanvasWithBothOptions"
       aria-controls="offcanvasWithBothOptions">
       <img src="{{asset('icons/mobile-toggler.svg')}}" alt="" />
     </button>

     <div class="d-lg-flex d-none flex-row gap-lg-4 g-3 align-items-center col-auto d-none">
       <form class="d-lg-flex d-none position-relative" role="search">
         <input class="form-control me-2" placeholder="Search for anything..." aria-label="Search"/>
         <button class="">
           <img src="{{asset('icons/search-button.svg')}}" alt="" />
         </button>
       </form>
       <div class="me-3 me-lg-0">
         <img src="{{asset('icons/message.svg')}}" alt="message" />
       </div>
       <div>
         <img src="{{asset('icons/alarm.svg')}}" alt="alarm" />
       </div>
     </div>
     <ul class="navbar-nav ms-auto">
      
      <li class="nav-item dropdown">
        {{-- <img src="{{asset('img/member1.png')}}" alt="dp" width="30" height="30" class="mr-4"/> --}}
        <p class="mt-1"> {{Auth::user()->first_name . " " . Auth::user()->last_name}}</p>
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
     </ul>

     {{-- <div class="col-auto dp-wrapper d-flex align-items-center d-none d-md-flex">
       <img src="{{asset('img/member1.png')}}" alt="dp" class="dp" />
       <p>
        {{Auth::user()->first_name . " " . Auth::user()->last_name}}
         <img src="{{asset('icons/dropdown.svg')}}" alt="dropdown" type="button"/>
       </p>
     </div> --}}
   </div>

   <div class="offcanvas offcanvas-start d-block d-md-none" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
     <div class="offcanvas-header">
       <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
         <img src="{{asset('icons/canvas-close.svg')}}" alt="" />
       </button>
     </div>
     <div class="offcanvas-body">
       <ul class="d-flex flex-column align-items-center mb-4">
         <li>
           <a href="/"><img src="{{asset('icons/home.svg')}}" alt="" /> Home</a>
         </li>
         <li>
           <a href="/financial-management.html"><img src="{{asset('icons/Aside-courses.svg')}}" alt=""/>Courses</a>
         </li>
         <li>
           <a href="/event.html"><img src="{{asset('icons/event.svg')}}" alt="" /> Events</a>
         </li>
         <li>
           <a href="/tools.html"><img src="{{asset('icons/tool.svg')}}" alt="" /> Tools</a>
         </li>
         <li>
           <a href="/community.html"><img src="{{asset('icons/Aside-community.svg')}}" alt="" />Community</a>
         </li>
       </ul>

       <div class="links">
         <div class="dropdown">
           <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Guest
           </a>
           <ul class="dropdown-menu">
             <li>
               <a class="dropdown-item" href="/signin.html">Login</a>
             </li>
           </ul>
         </div>
       </div>
       <div class="links">
         <a href="/signup.html" class="signup">
           <button class="btn" type="button">Sign up</button>
         </a>
       </div>
     </div>
   </div>
 </nav>
</header>
