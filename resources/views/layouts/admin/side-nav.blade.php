  <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="/admin/dashboard">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#zon" aria-expanded="false" aria-controls="zon">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Events</span>
            <i class="menu-arrow" style="margin-left: 9.3rem"></i>
          </a>
          <div class="collapse" id="zon">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{route('manage')}}">Manage</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('event')}}">Add</a></li>

              {{-- <li class="nav-item"> <a class="nav-link" href="{{route('manage')}}">Manage</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('event')}}">Add</a></li> --}}
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#mail" aria-expanded="false" aria-controls="mail">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Mail Management</span>
            <i class="menu-arrow" style="margin-left: 5rem"></i>
          </a>
          <div class="collapse" id="mail">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{route('manage-mail')}}">Manage</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('mail')}}">Add</a></li>

              {{-- <li class="nav-item"> <a class="nav-link" href="{{route('manage')}}">Manage</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('event')}}">Add</a></li> --}}
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#zo" aria-expanded="false" aria-controls="zo">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Industries</span>
            <i class="menu-arrow" style="margin-left: 8.2rem"></i>
          </a>
          <div class="collapse" id="zo">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{route('manage-industry')}}">Manage</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('industry')}}">Add</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#course" aria-expanded="false" aria-controls="course">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Course Management</span>
            <i class="menu-arrow" style="margin-left: 3.8rem"></i>
          </a>
          <div class="collapse" id="course">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="/admin/manage-course">Manage</a></li>
              <li class="nav-item"> <a class="nav-link" href="/admin/course">Add</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Course Ratings</span>
            <i class="menu-arrow" style="margin-left: 5.9rem"></i>
          </a>
          <div class="collapse" id="tables">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">View Ratings</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Category Management</span>
            <i class="menu-arrow ml-5" style="margin-right: 20rem"></i>
          </a>
          <div class="collapse" id="icons">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">community</span>
            <i class="menu-arrow" style="margin-left: 7.6rem"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Competition</span>
            <i class="menu-arrow" style="margin-left: 7.2rem "></i>
          </a>
          <div class="collapse" id="error">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#err" aria-expanded="false" aria-controls="err">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Account Verification</span>
            <i class="menu-arrow" style="margin-left: 4.2rem "></i>
          </a>
          <div class="collapse" id="err">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">User Management</span>
            <i class="menu-arrow" style="margin-left: 4.7rem "></i>
          </a>
          <div class="collapse" id="user">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#clinic" aria-expanded="false" aria-controls="clinic">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Clinic Management</span>
            <i class="menu-arrow" style="margin-left: 4.4rem "></i>
          </a>
          <div class="collapse" id="clinic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#zone" aria-expanded="false" aria-controls="zone">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Opportunity Zone</span>
            <i class="menu-arrow" style="margin-left: 5.1rem"></i>
          </a>
          <div class="collapse" id="zone">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#zone1" aria-expanded="false" aria-controls="zone1">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Page Management</span>
            <i class="menu-arrow" style="margin-left: 4.4rem"></i>
          </a>
          <div class="collapse" id="zone1">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#zone2" aria-expanded="false" aria-controls="zone2">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Article Management</span>
            <i class="menu-arrow" style="margin-left: 4.1rem"></i>
          </a>
          <div class="collapse" id="zone2">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#zone3" aria-expanded="false" aria-controls="zone3">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Manage Business</span>
            <i class="menu-arrow" style="margin-left: 4.9rem"></i>
          </a>
          <div class="collapse" id="zone3">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#zone4" aria-expanded="false" aria-controls="zone4">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">License Management</span>
            <i class="menu-arrow" style="margin-left: 3.5rem"></i>
          </a>
          <div class="collapse" id="zone4">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#zone5" aria-expanded="false" aria-controls="zone5">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Album Management</span>
            <i class="menu-arrow" style="margin-left: 4rem"></i>
          </a>
          <div class="collapse" id="zone5">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#zone6" aria-expanded="false" aria-controls="zone6">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Social Listening</span>
            <i class="menu-arrow" style="margin-left: 5.7rem"></i>
          </a>
          <div class="collapse" id="zone6">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
    <style>
      .left{
        margin-left: 15rem
      }
    </style>