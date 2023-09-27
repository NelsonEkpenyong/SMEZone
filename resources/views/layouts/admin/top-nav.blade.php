<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="#"><img src="{{asset('img/smelogo.png')}}" class="mr-2" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="#"><img src="{{asset('img/smelogo.png')}}" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="profileDropdownToggle">
          <img src="https://asset.brandfetch.io/idPXJmyni4/idYP3xad9_.png?updated=1667560957752" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdownToggle">
          <a class="dropdown-item" href="#">
            <i class="ti-settings text-primary"></i>
            Settings
          </a>
          <a class="dropdown-item" href="/admin/logout">
            <i class="ti-power-off text-primary"></i> 
            Logout          
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>

<!-- No need for the second logout form, you can remove it -->

<script>
  // JavaScript to toggle the dropdown menu
  $(document).ready(function () {
    $("#profileDropdownToggle").click(function () {
      $(".navbar-dropdown").toggleClass("show");
    });

    // Close the dropdown when clicking outside of it
    $(document).on("click", function (event) {
      if (!$(event.target).closest(".navbar-dropdown").length && !$(event.target).closest("#profileDropdownToggle").length) {
        $(".navbar-dropdown").removeClass("show");
      }
    });
  });
</script>
