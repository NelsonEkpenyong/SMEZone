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
      <a class="nav-link" data-toggle="collapse" href="#landing" aria-expanded="false" aria-controls="landing">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Landing</span>
        <i class="menu-arrow" style="margin-left: 9rem"></i>
      </a>
      <div class="collapse" id="landing">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/admin/sliders">Sliders</a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/create-video-slider">Add course video slider</a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/featuredImage">Featured Image</a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/create-featured-image">Create featured image single</a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/featured-courses">Featured Courses</a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/featured-course-images">Featured course images</a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/upcoming-event-image">Upcoming event Image</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">User Management</span>
        <i class="menu-arrow" style="margin-left: 4.8rem"></i>
      </a>
      <div class="collapse" id="users">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/admin/users">Users</a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/add-users">Add Users</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#posts" aria-expanded="false" aria-controls="zon">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Posts</span>
        <i class="menu-arrow" style="margin-left: 9.8rem"></i>
      </a>
      <div class="collapse" id="posts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/admin/posts">Post</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#event" aria-expanded="false" aria-controls="zon">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Events</span>
        <i class="menu-arrow" style="margin-left: 9.3rem"></i>
      </a>
      <div class="collapse" id="event">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/admin/manage">Events</a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/event">Add event</a></li>
        </ul>
      </div>
    </li>
    {{-- Webinar recordings --}}
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#wedRec" aria-expanded="false" aria-controls="wedRec">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Webinar Recordings</span>
        <i class="menu-arrow" style="margin-left: 4rem"></i>
      </a>
      <div class="collapse" id="wedRec">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/admin/manage-webinar">Manage</a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/add-webinar">Add</a></li>
        </ul>
      </div>
    </li>
     {{-- sme Digests --}}
     <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#digests" aria-expanded="false" aria-controls="digests">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">SME Radio Digests</span>
        <i class="menu-arrow" style="margin-left: 4.3rem"></i>
      </a>
      <div class="collapse" id="digests">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/admin/manage-digest">Manage</a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/add-digest">Add</a></li>
        </ul>
      </div>
    </li>

    {{-- License Management --}}
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#licenses" aria-expanded="false" aria-controls="licenses">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">License Management</span>
        <i class="menu-arrow" style="margin-left: 3.5rem"></i>
      </a>
      <div class="collapse" id="licenses">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/admin/licenses">Licenses</a></li>
        </ul>
      </div>
    </li>

    {{-- News Management --}}
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#news" aria-expanded="false" aria-controls="news">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">News Management</span>
        <i class="menu-arrow" style="margin-left: 4.5rem"></i>
      </a>
      <div class="collapse" id="news">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/admin/manage-news">Manage</a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/to-add-news">Add</a></li>
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
          <li class="nav-item"> <a class="nav-link" href="/admin/manage-mail">Manage</a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/mail">Add</a></li>
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
          <li class="nav-item"> <a class="nav-link" href="/admin/manage-industry">Manage</a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/industry">Add</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#cat" aria-expanded="false" aria-controls="cat">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Category Management</span>
        <i class="menu-arrow ml-5" style="margin-right: 20rem"></i>
      </a>
      <div class="collapse" id="cat">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'course-categories' ? 'active' : '' }}" href="/admin/course-categories">Course Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'add-category' ? 'active' : '' }}" href="/admin/add-category">Add Category</a>
          </li>
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
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'manage-course' ? 'active' : '' }}" href="/admin/manage-course">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'course' ? 'active' : ''}}" href="/admin/course">Add Course</a>
          </li>
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
          <li class="nav-item"> <a class="nav-link" href="#">View Ratings</a></li>
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
          <li class="nav-item"> <a class="nav-link" href="#"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> Register </a></li>
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
          <li class="nav-item"> <a class="nav-link" href="#"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> 500 </a></li>
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
          <li class="nav-item"> <a class="nav-link" href="#"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> 500 </a></li>
        </ul>
      </div>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">User Management</span>
        <i class="menu-arrow" style="margin-left: 4.7rem "></i>
      </a>
      <div class="collapse" id="user">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> 500 </a></li>
        </ul>
      </div>
    </li> --}}
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#clinic" aria-expanded="false" aria-controls="clinic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Clinic Management</span>
        <i class="menu-arrow" style="margin-left: 4.4rem "></i>
      </a>
      <div class="collapse" id="clinic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="#"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> 500 </a></li>
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
          <li class="nav-item"> <a class="nav-link" href="/admin/opportunities">Opportunities </a></li>
          <li class="nav-item"> <a class="nav-link" href="/admin/add-opportunity">Add Opportunity</a></li>
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
          <li class="nav-item"> <a class="nav-link" href="#"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> 500 </a></li>
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
          <li class="nav-item"> <a class="nav-link" href="#"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> 500 </a></li>
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
          <li class="nav-item"> <a class="nav-link" href="#"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> 500 </a></li>
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
          <li class="nav-item"> <a class="nav-link" href="#"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> 500 </a></li>
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
          <li class="nav-item"> <a class="nav-link" href="#"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> 500 </a></li>
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
          <li class="nav-item"> <a class="nav-link" href="#"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> 500 </a></li>
        </ul>
      </div>
    </li>




    
  </ul>
</nav>

<!-- Add CSS to hide sub-menus by default and style the dropdown arrows -->
<style>
  .nav .collapse {
    display: none;
  }
  .nav .nav-link.active i.menu-arrow {
    transform: rotate(90deg);
  }
</style>

<!-- Add JavaScript or jQuery to handle the click event for toggling sub-menus -->
<script>
  $(document).ready(function() {
    $('.nav-link[data-toggle="collapse"]').on('click', function(e) {
      e.preventDefault();
      var target = $($(this).attr('href'));
      target.slideToggle();
      $(this).find('i.menu-arrow').toggleClass('active');
    });
  });
</script>
